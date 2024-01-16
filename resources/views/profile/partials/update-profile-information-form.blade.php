<form class="d-none" method="post" action="{{ route('verification.send') }}">
        @csrf
</form>

<form method="post" action="{{ route('profile.update') }}" class="Profile--profile_update">
    @csrf
    @method('patch')

    
    <x-text-input class="Profile--profile_update--input" name="name" type="text" :value="old('name', $user->name)" required autofocus autocomplete="name" />
       
    <x-text-input class="Profile--profile_update--input" name="email" type="email" :value="old('email', $user->email)" required autocomplete="username" />
        

    @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())       
        <p class="Profile--profile_update--p">
            {{ __('Your email address is unverified.') }}

            <button form="send-verification" class="Profile--profile_update--p--button">
                {{ __('Click here to re-send the verification email.') }}
            </button>
        </p>

        @if (session('status') === 'verification-link-sent')
            <p class="Profile--profile_update--p">
                {{ __('A new verification link has been sent to your email address.') }}
            </p>
        @endif
    @endif
    

    <x-primary-button class="Profile--profile_update--confirm">{{ __('Save') }}</x-primary-button>

    @if (session('status') === 'profile-updated')
        <p
            x-data="{ show: true }"
            x-show="show"
            x-transition
            x-init="setTimeout(() => show = false, 2000)"
            class="text-sm text-gray-600"
        >{{ __('Saved.') }}</p>
    @endif

</form>

