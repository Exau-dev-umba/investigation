<x-guest-layout>
    @section('title')
        {{ 'Register' }}
    @endsection
    <div class="register-box">
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
                <p class="login-box-msg">Créer un compte</p>

                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="input-group mb-3">
                        <input id="name" class="form-control" type="text" name="name" :value="old('name')"
                            required autofocus autocomplete="name" placeholder="Nom">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                        <x-input-error :messages="$errors->get('name')" class="text-danger" />
                    </div>
                    <div class="input-group mb-3">
                        <input id="email" class="form-control" type="email" name="email" :value="old('email')"
                            required autocomplete="username" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                        <x-input-error :messages="$errors->get('email')" class="text-danger" />
                    </div>
                    <div class="input-group mb-3">
                        <input id="password" class="form-control" type="password" name="password" required
                            autocomplete="new-password" placeholder="Mot de passe">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        <x-input-error :messages="$errors->get('password')" class="text-danger" />
                    </div>
                    <div class="input-group mb-3">
                        <input id="password_confirmation" class="form-control" type="password"
                            name="password_confirmation" required autocomplete="new-password"
                            placeholder="Confirmer le mot de passe">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        <x-input-error :messages="$errors->get('password_confirmation')" class="text-danger" />
                    </div>
                    <div class="row">
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn bg-orange text-white btn-block">Register</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
</x-guest-layout>
