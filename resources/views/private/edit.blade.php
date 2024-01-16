<x-app-layout>
    @include('layouts.navigation', ['pageName' => "edit"])
    <h1 class="Edit--title">{{ __('Edit the website') }}</h1>
    
    <p class="Edit--description">
        {{ __('Welcome to the edit page. In this page, you can edit part of the website!') }}
    </p>

    <!-- Lien pour créér une planette -->
    <a href="{{ route('planets.create') }}" class="Edit--link">
        {{ __('Create a planet') }}
    </a>

</x-app-layout>