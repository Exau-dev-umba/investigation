<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Http;
use App\Models\User;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $username = $request->input('username');
        $password = $request->input('password');

        // Authentification via LDAP
        $ldapResponse = $this->authenticateViaLdap($username, $password);

        if ($ldapResponse['status'] == 'SUCCESS') {
            $phoneNumber = $ldapResponse['phone_number'];
            $email = $ldapResponse['email'];

            // Envoyer l'OTP
            $otpResponse = $this->sendOtp($phoneNumber);

            if ($otpResponse['status'] == 'SUCCESS') {
                Session::put('otp', $otpResponse['otp']);
                Session::put('reference', $phoneNumber);
                Session::put('username', $username);

                return redirect()->route('otp.verify');
            } else {
                return redirect()->back()->withErrors(['error' => 'Erreur lors de l\'envoi de l\'OTP.']);
            }
        } else {
            return redirect()->back()->withErrors(['error' => 'Authentification échouée.']);
        }
    }

    public function showOtpForm()
    {
        return view('auth.otp_verify');
    }

    public function verifyOtp(Request $request)
    {
        $request->validate([
            'otp' => 'required',
        ]);

        $inputOtp = $request->input('otp');
        $sessionOtp = Session::get('otp');
        $username = Session::get('username');

        if ($inputOtp === $sessionOtp) {
            // Vérification de l'utilisateur et connexion
            $user = User::where('username', $username)->first();
            if ($user) {
                Auth::login($user);
                Session::forget(['otp', 'reference', 'username']);
                return redirect()->route('home');
            } else {
                return redirect()->back()->withErrors(['error' => 'Utilisateur non trouvé.']);
            }
        } else {
            return redirect()->back()->withErrors(['error' => 'Code OTP incorrect.']);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    private function authenticateViaLdap($username, $password)
    {
        $url = 'http://10.25.2.25:8080/ldap/';
        $payload = [
            'TYPE' => 'AUTH_SVC',
            'APPLINAME' => 'Test',
            'CUID' => $username,
            'PASSWORD' => $password,
            'DATE' => now()->format('Y-m-d H:i:s'),
        ];

        $response = Http::asXml()->post($url, $payload);
        $responseArray = simplexml_load_string($response->body(), "SimpleXMLElement", LIBXML_NOCDATA);
        $json = json_encode($responseArray);
        $array = json_decode($json,TRUE);

        if ($array['REQSTATUS'] === 'SUCCESS') {
            return [
                'status' => 'SUCCESS',
                'phone_number' => $array['PHONENUMBER'],
                'email' => $array['EMAIL'],
            ];
        } else {
            return ['status' => 'FAIL'];
        }
    }

    private function sendOtp($destination)
    {
        $url = 'http://10.25.3.81:5002/api/generate';
        $payload = [
            'reference' => $destination,
            'origin' => 'compliance',
            'otpOveroutTime' => 300000,
            'customMessage' => 'Dear customer, {{ otpCode }} is your OTP code. Go back to our platform and enter it to log in.',
            'senderName' => 'Orange Investigaion',
            'ignoreOrangeNumbers' => false,
        ];

        $response = Http::post($url, $payload);
        $responseArray = $response->json();

        if ($response->successful()) {
            return [
                'status' => 'SUCCESS',
                'otp' => $responseArray['otp'],
            ];
        } else {
            return ['status' => 'FAIL'];
        }
    }
}