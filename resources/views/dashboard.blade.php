<x-app-layout>
    @include('layouts.navigation', ['pageName' => "home"])
    <main class="Private--main">
        <h1 class="Dashboard--title">{{ __('Hi, administrator!') }}</h1>
        
        <p class="Dashboard--description">
            {{ __('Welcome to your dashboard! Here, you can edit part of the content of the website! Hope you\'ll find everything you want easily. Good day, administrator!') }}
        </p>
    </main>

</x-app-layout>
