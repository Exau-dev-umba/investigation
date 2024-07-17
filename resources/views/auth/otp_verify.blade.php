<x-guest-layout>
    @section('title')
        {{ 'Verification OTP' }}
    @endsection
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-orange">
            <!--div class="card-title text-center">
                <div class="p-1">
                    <img src="{{ asset('images/LOGO_ORANGE.png') }}" width="100" height="100" alt="logo branding"
                        srcset="">
                </div>
            </div-->
            <div class="card-header text-center">
                <a href="/" class="h1"><b>{{ config('app.name') }}</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Saisissez le code qui vous a été envoyé sur votre numéro</p>

                <!-- Section pour les messages de succès ou d'erreur -->
                @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('otp.verify') }}" method="POST">
                    @csrf
                    <div class="input-group mb-3">
                        <input id="otp" class="form-control" placeholder="Saisissez le code" type="otp"
                            name="otp" :value="old('otp')" required autofocus autocomplete="otp">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                        <x-input-error :messages="$errors->get('username')" class="mt-2" />
                    </div>
                    <div class="input-group mb-3">
                        <button type="submit" class="btn bg-orange btn-block "><span class="text-white">Vérifier mon
                                compte</span></button>
                    </div>
                </form>
                <p class="mb-1">
                    <a class="text-orange" href="">Renvoyez le code</a>
                </p>
                <p class="mb-1">
                    <a class="text-orange" href="{{ route('login') }}">Connexion</a>
                </p>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</x-guest-layout>
