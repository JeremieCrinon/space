<x-app-layout>
    @include('layouts.navigation', ['pageName' => "profile"])

    <h1 class="Dashboard--title">{{ __('Edit your profile') }}</h1>

    <p class="Dashboard--description">
        {{ __('Here, you can edit your profile information and change your password.') }}
    </p>

    <form method="POST" action="{{ route('logout') }}" class="Edit_profile--logout">
        @csrf
        <button type="submit" class="Edit_profile--logout--button" >{{ __('Logout') }}</button>
    </form>

    <div class="Edit_profile--container">
        @include('profile.partials.update-profile-information-form')          
        @include('profile.partials.update-password-form')
    </div>

    

            <!-- <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div> -->
        </div>
    </div>
</x-app-layout>
