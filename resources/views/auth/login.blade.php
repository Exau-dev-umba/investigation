<x-guest-layout>
    @section('title')
        {{ 'Connexion' }}
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
                <p class="login-box-msg">Connectez-vous</p>

                <form action="{{ route('login.ldap') }}" method="POST">
                    @csrf
                    <div class="input-group mb-3">
                        <input id="username" class="form-control" placeholder="Votre CUID" type="username"
                            name="username" :value="old('username')" required autofocus autocomplete="username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                        <x-input-error :messages="$errors->get('username')" class="mt-2" />
                    </div>
                    <div class="input-group mb-3">
                        <input id="password" class="form-control" placeholder="Mot de passe" type="password"
                            name="password" required autocomplete="current-password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-orange">
                                <input type="checkbox" name="remember" id="remember">
                                <label for="remember">
                                    Se rappeler de moi
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn bg-orange  "><span class="text-white">Connexion</span></button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <p class="mb-1">
                    <a class="text-dark" href="{{ route('password.request') }}">Mot de passe oublié ?</a>
                </p>
                <p class="mb-0">
                    <a class="text-dark" href="{{ route('otp.verify') }}" class="text-center">Créer un nouveau compte</a>
                </p>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</x-guest-layout>
