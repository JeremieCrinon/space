<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="" :status="session('status')" />

    <!-- On affiche les potentiells messages -->
    @if(session('error_message'))
    <div class="error_message">
        {{ session('error_message') }}
    </div>
    @endif

    <form class="Login--form" method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <x-input-label class="Login--form--label" for="email" :value="__('Email')" />
        <x-text-input id="email" class="Login--form--input" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />

        <!-- Password -->
        <x-input-label class="Login--form--label" for="password" :value="__('Password')" />
        <x-text-input id="password" class="Login--form--input" type="password" name="password" required autocomplete="current-password" />
        <x-input-error :messages="$errors->get('password')" class="" />

        <!-- Remember Me -->
        <label for="remember_me" class="Login--form--label">{{ __('Remember me') }}</label>
        <input id="remember_me" type="checkbox" class="Login--form--remember_me" name="remember">

        <div class="Login--form--buttons">
            @if (Route::has('password.request'))
                <a class="Login--form--buttons--link" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="Login--form--buttons--confirm">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
