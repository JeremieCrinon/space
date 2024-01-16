<form method="post" action="{{ route('password.update') }}" class="Profile--password_update">
    @csrf
    @method('put')
    <input class="Profile--password_update--current_password Profile--password_update--input" name="current_password" type="password" autocomplete="current-password" placeholder="{{ __('Current password') }}" />

    <input class="Profile--password_update--new_password Profile--password_update--input" name="password" type="password" autocomplete="new-password" placeholder="{{ __('New password') }}" />
        
    <input class="Profile--password_update--confirm_password Profile--password_update--input" name="password_confirmation" type="password" autocomplete="new-password" placeholder="{{ __('Confirm password') }}" />
        
    <x-primary-button class="Profile--password_update--confirm">{{ __('Save') }}</x-primary-button>

        @if (session('status') === 'password-updated')
            <p
                x-data="{ show: true }"
                x-show="show"
                x-transition
                x-init="setTimeout(() => show = false, 2000)"
                class="text-sm text-gray-600"
            >{{ __('Saved.') }}</p>
        @endif
    </div>
</form>
