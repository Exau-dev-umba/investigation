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


                <!-- Section pour les messages de succès ou d'erreur -->
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
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

                <form action="{{ route('login') }}" method="POST"><!--route('login.ldap')-->
                    @csrf
                    <div class="input-group mb-3">
                        <!-- in dev ordc email=username -->
                        <input id="email" class="form-control" placeholder="Votre CUID" type="email"
                            name="email" :value="old('email')" required autofocus autocomplete="email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
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
                            <button type="submit" class="btn bg-orange  "><span
                                    class="text-white">Connexion</span></button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</x-guest-layout>
