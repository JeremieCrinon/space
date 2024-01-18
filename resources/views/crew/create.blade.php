<x-app-layout>
    @include('layouts.navigation', ['pageName' => "edit"])
    <main class="Private--main">
        <h1 class="Edit--title">{{ __('Create a crew member') }}</h1>
        
        <p class="Edit--description">
            {{ __('Welcome to the create crew member page. In this page, you can create a new crew member that will be displayed in the website!') }}
        </p>

        <!-- Message de réussite -->
        @if (session()->has('message'))
            <div class="Create--message">
                {{ session('message') }}
            </div>
        @endif

        <form action="{{ route('crews.store') }}" method="post" class="Create--form" enctype="multipart/form-data">
            @csrf
            <!-- Role -->
            <input class="Create--form--input" type="text" name="fr_role" :value="old('fr_role')" placeholder="{{ __('Role in french') }}" required autofocus />
            <input class="Create--form--input" type="text" name="en_role" :value="old('en_role')" placeholder="{{ __('Role in english') }}" required autofocus />
            <!-- Nom -->
            <input class="Create--form--input" type="text" name="name" :value="old('name')" placeholder="{{ __('Name') }}" required autofocus />
            <!-- Description -->
            <input class="Create--form--input" type="text" name="fr_description" :value="old('fr_description')" placeholder="{{ __('Description in french') }}" required autofocus />
            <input class="Create--form--input" type="text" name="en_description" :value="old('en_description')" placeholder="{{ __('Description in english') }}" required autofocus />
            <!-- Image -->
            <input class="Create--form--input" type="file" name="image" :value="old('image')" placeholder="{{ __('Image') }}" required autofocus />

            <x-primary-button class="Create--form--validate">
                {{ __('Send') }}
            </x-primary-button>

        </form>

    </main>

</x-app-layout>