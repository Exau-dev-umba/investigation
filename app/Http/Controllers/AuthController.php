<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Http;
use App\Models\User;
use PhpParser\Node\Stmt\TryCatch;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function loginLdap(Request $request)
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
            $full_name = $ldapResponse['full_name'];
            $about = $ldapResponse['about'];
            $date = $ldapResponse['date'];


            // Créer ou mettre à jour l'utilisateur dans la base de données
            $user = User::updateOrCreate(
                ['username' => $username],
                ['email' => $email,
                'phone_number' => $phoneNumber,
                'full_name' => $full_name,
                ]
            );

            // Définir le contact préféré
            $preferredContact = $phoneNumber ?? $email;

            if (!$preferredContact) {
                return redirect()->back()->withErrors(['error' => 'Aucune adresse email ou numéro de téléphone n\'est disponible pour cet utilisateur.']);
            }

            // Envoyer l'OTP
            $otpResponse = $this->sendOtp($preferredContact);

            if ($otpResponse['code'] == 200) {
                // Stocker l'OTP et les informations utilisateur dans la session
                session([
                    'reference' => $preferredContact,
                    'username' => $username,
                ]);

                return redirect()->route('otp.verify')->with('message', 'Un code OTP a été envoyé à votre ' . ($phoneNumber ? 'numéro de téléphone' : 'email') . '. Veuillez le saisir pour continuer.');
            } else {
                return redirect()->back()->withErrors(['error' => $otpResponse['message']]);
            }
        } else {
            return redirect()->back()->withErrors(['error' => 'Authentification échouée, vous n\'êtes pas autorisé à ce service']);
        }
    }

    public function showOtpForm()
    {
        return view('auth.otp_verify');
    }

    public function check_otp_via_api($reference, $input_otp)
    {
        //dd($reference, $input_otp);

        $url = 'http://10.25.3.81:5002/api/check';

        $payload = [
            "reference"=> $reference,
            "origin"=> "investigation",
            "receivedOtp"=> $input_otp,
            "ignoreOrangeNumbers"=> false

        ];
        //dd($payload);

        try {
            $response = Http::post($url, $payload);
            //dd($response->json());
            return $response->json();
        } catch (\Throwable $th) {
            print $th->getMessage();
        }

    }

    public function verifyOtp(Request $request)
    {
        //dd($request);
        if ($request->isMethod('post')) {
            $request->validate([
                'otp' => 'required',
            ]);

            $inputOtp = $request->input('otp');
            //$sessionOtp = session('otp');
            $sessionReference = session('reference');
            $username = session('username');
            //dd($inputOtp, $sessionReference);
            //$response = $this->check_otp_via_api($sessionReference, $inputOtp);
            //dd($response);

            try {
                $response = $this->check_otp_via_api($sessionReference, $inputOtp);
                //dd($response);

                if ($response['code'] == 200 && $response['diagnosticResult']) {
                    $user = User::where('username', $username)->first();
                    if ($user) {
                        Auth::login($user);
                        session()->forget(['otp', 'reference', 'username']);
                        return redirect()->route('dashboard')->with('success','Vous êtes connecté.');;
                    } else {
                        return redirect()->back()->withErrors(['error' => 'Utilisateur non trouvé.']);
                    }
                } else {
                    return redirect()->back()->withErrors(['error' => 'Code OTP incorrect.']);
                }
            } catch (\Throwable $th) {
                print $th->getMessage();
            }


        }

        return view('auth.otp_verify');
    }


    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    private function authenticateViaLdap($username, $password)
    {
        $url = 'http://10.25.2.25:8080/ldap/';
        $payload = "
        <COMMANDE>
            <TYPE>AUTH_SVC</TYPE>
            <APPLINAME>Test</APPLINAME>
            <CUID>{$username}</CUID>
            <PASSWORD>{$password}</PASSWORD>
            <DATE>" . now()->format('Y-m-d H:i:s') . "</DATE>
        </COMMANDE>";

        $response = Http::withHeaders([
            'Content-Type' => 'application/xml'
        ])->send('POST', $url, [
            'body' => $payload
        ]);

        if ($response->successful()) {
            $responseArray = simplexml_load_string($response->body(), "SimpleXMLElement", LIBXML_NOCDATA);
            $json = json_encode($responseArray);
            $array = json_decode($json, true);

            if ($array['REQSTATUS'] === 'SUCCESS') {

                return [
                    'status' => 'SUCCESS',
                    'phone_number' => $array['PHONENUMBER'],
                    'email' => $array['EMAIL'],
                    'full_name' => $array['FULLNAME'],
                    'about' => $array['DESCRIPTION'],
                    'date' => $array['DATE'],
                ];
            }
        }

        return ['status' => 'FAIL'];
    }

    private function sendOtp($destination)
    {
        $url = 'http://10.25.3.81:5002/api/generate';
        $headers = [
            'accept'=> 'application/json',
            'content-type'=> 'application/json',
        ];

        $payload = [
            'reference' => $destination,
            'origin' => 'investigation',
            'otpOveroutTime' => 300000,
            'customMessage' => 'Dear customer, {{ otpCode }} is your OTP code. Go back to our platform and enter it to log in.',
            'senderName' => 'Orange Investigation',
            'ignoreOrangeNumbers' => false,
        ];

        try {
            $response = Http::post($url, $payload);
            $response_status = $response->status();
            //dd($response->json());
            return $response->json();
        } catch (\Throwable $th) {
            print $th->getMessage();
        }




        /*if ($response->successful()) {
            $responseArray = $response->json();
            dd($responseArray);
            //\Log::info('Response from OTP API:', $responseArray);
            //\Log::info('Response from OTP API:', $responseArray);


            if (isset($responseArray['otp'])) {
                return [
                    'status' => 'SUCCESS',
                    'otp' => $responseArray['otp'],
                ];
            } else {
                return [
                    'status' => 'FAIL',
                    'message' => 'OTP not found in response'
                ];
            }
        } else {
            return [
                'status' => 'FAIL',
                'message' => 'Failed to send OTP'
            ];
        }*/
    }


}
