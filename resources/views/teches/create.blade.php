<x-app-layout>
    @include('layouts.navigation', ['pageName' => "edit"])
    <main class="Private--main">
        <h1 class="Edit--title">{{ __('Create a tech') }}</h1>
        
        <p class="Edit--description">
            {{ __('Welcome to the create tech page. In this page, you can create a tech that will be displayed in the website!') }}
        </p>

        <!-- Message de réussite -->
        @if (session()->has('message'))
            <div class="Create--message">
                {{ session('message') }}
            </div>
        @endif

        <form action="{{ route('teches.store') }}" method="post" class="Create--form" enctype="multipart/form-data">
            @csrf
            <!-- Nom -->
            <input class="Create--form--input" type="text" name="fr_name" :value="old('fr_name')" placeholder="{{ __('Name in french') }}" required autofocus />
            <input class="Create--form--input" type="text" name="en_name" :value="old('en_name')" placeholder="{{ __('Name in english') }}" required autofocus />
            <!-- Descrition -->
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