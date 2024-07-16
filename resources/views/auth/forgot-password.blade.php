<x-guest-layout>
    @section('title')
        {{ 'Recover your password' }}
    @endsection
    <div class="login-box">
        <div class="card card-outline card-orange">
            <div class="card-header text-center">
                <a href="/" class="h1"><b>{{ config('app.name') }}</a>
            </div>
            <div class="card-body">
                <x-auth-session-status class="mb-4" :status="session('status')" />
                <p class="login-box-msg">Mot de passe oublié ? Pas de problème. Mettez votre email, nous vous enverons un
                    lient pour
                    pour reinitialiser le mot de passe.</p>
                <form action="{{ route('password.email') }}" method="POST">
                    @csrf
                    <div class="input-group mb-3">
                        <input id="email" class="form-control" type="email" name="email" :value="old('email')"
                            required autofocus placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                        <x-input-error :messages="$errors->get('email')" class="text-danger" />
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn bg-orange btn-block">Email Réinitialiser mon mot de
                                passe</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <p class="mt-3 mb-1">
                    <a class=" text-black-50" href="{{ route('login') }}">Connexion</a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
</x-guest-layout>
