<x-guest-layout>
    <h1 class="Verify_email--title">{{ __('Verify email') }}</h1>

    <p class="Verify_email--text">{{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}</p>
        

    @if (session('status') == 'verification-link-sent')
        <p class="Verify_email--new_link">{{ __('A new verification link has been sent to the email address you provided during registration.') }}</p>
    @endif

    <div class="Verify_email--form_container">
        <form method="POST" action="{{ route('verification.send') }}" class="Verify_email--form">
            @csrf

            <button class="Verify_email--button">
                {{ __('Resend Verification Email') }}
            </button>

        </form>

        <form method="POST" action="{{ route('logout') }}" class="Verify_email--form">
            @csrf

            <button class="Verify_email--button">
                {{ __('Log Out') }}
            </button>
        </form>

        <button id="open--destroy--profile" class="Verify_email--button_destroy_profile Verify_email--button">
            {{ __('Delete Account') }}
        </button>


        <form method="post" action="{{ route('profile.destroy') }}" id="destroy--profile" class="hidden Verify_email--form Verify_email--form--confirm_delete">
            @csrf
            @method('delete')

            <h2 class="Verify_email--form--confirm_delete--title">
                {{ __('Are you sure you want to delete your account?') }}
            </h2>

            <p class="Verify_email--form--confirm_delete--subtitle">
                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
            </p>

            <div class="Verify_email--form--confirm_delete--password">
                
                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-3/4"
                    placeholder="{{ __('Password') }}"
                    class="Verify_email--form--confirm_delete--password--input"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <x-danger-button class="Verify_email--form--confirm_delete--confirm_button Verify_email--button">
                {{ __('Delete Account') }}
            </x-danger-button>
        </form>
    </div>
    <!-- Scrips JS -->
    <script src="js/verify-email.js"></script>
</x-guest-layout>
