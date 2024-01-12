<x-guest-layout>

    <h1 class="Register--title">{{ __('REGISTER') }}</h1>
    <p class="Register--subtitle">{{ __('Please create an account for the admin. Only one account can be created. Do not make the website public before having created an account.') }}</p>

    <form class="Register--form" method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <x-input-label for="name" class="Register--form--label">{{ __('Name') }}</x-input-label>
        <x-text-input id="name" class="Register--form--input" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />

        <!-- Email Address --> 
        <x-input-label for="email" class="Register--form--label">{{ __('Email') }}</x-input-label>
        <x-text-input id="email"  class="Register--form--input" type="email" name="email" :value="old('email')" required autocomplete="username" />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />


        <!-- Password -->
        <x-input-label for="password" class="Register--form--label">{{ __('Password') }}</x-input-label>
        <x-text-input id="password" class="Register--form--input" type="password" name="password" required autocomplete="new-password" />
        <x-input-error :messages="$errors->get('password')" class="mt-2" />

        <!-- Confirm Password -->
        <x-input-label for="password_confirmation" class="Register--form--label">{{ __('Confirm Password') }}</x-input-label>
        <x-text-input id="password_confirmation" class="Register--form--input" type="password" name="password_confirmation" required autocomplete="new-password" />
        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

        <div class="Register--form--buttons">
            <a class="Register--form--buttons--link" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="Register--form--buttons--confirm">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
