<x-app-layout>
    @include('layouts.navigation', ['pageName' => "edit"])

    <main class="Private--main">
        <h1 class="Edit--title">{{ __('Edit the website') }}</h1>
        
        <p class="Edit--description">
            {{ __('Welcome to the edit page. In this page, you can edit part of the website!') }}
        </p>

        <!-- Affichage des planettes -->
        <h2 class="Edit--planets--title">{{ __('Planets') }}</h2>
        <ul class="Edit--planets--container">
            <li class="Edit--planets--container--element">
                <p class="Edit--planets--container--element--element Edit--planets--container--element--id">id</p>
                <p class="Edit--planets--container--element--element Edit--planets--container--element--fr_name">fr_name</p>
                <p class="Edit--planets--container--element--element Edit--planets--container--element--en_name">en_name</p>
                <p class="Edit--planets--container--element--element Edit--planets--container--element--fr_description">fr_description</p>
                <p class="Edit--planets--container--element--element Edit--planets--container--element--en_description">en_description</p>
                <p class="Edit--planets--container--element--element Edit--planets--container--element--distance">distance</p>
                <p class="Edit--planets--container--element--element Edit--planets--container--element--time">time</p>
                <a href="#" class="Edit--planets--container--element--element Edit--planets--container--element--show">{{ __('Show') }}</a>
                <a href="#" class="Edit--planets--container--element--element Edit--planets--container--element--edit">{{ __('Edit') }}</a>
                <form action="#" method="POST" onsubmit="return false;" class="Edit--planets--container--element--element Edit--planets--container--element--delete">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="Edit--planets--container--element--element Edit--planets--container--element--delete--button">{{ __('Del.') }}</button>
                </form>
            </li>
            @foreach($planets as $planet)
                <li class="Edit--planets--container--element">
                    <p class="Edit--planets--container--element--element Edit--planets--container--element--id">{{ $planet['id'] }}</p>
                    <p class="Edit--planets--container--element--element Edit--planets--container--element--fr_name">{{ $planet['fr_name'] }}</p>
                    <p class="Edit--planets--container--element--element Edit--planets--container--element--en_name">{{ $planet['en_name'] }}</p>
                    <p class="Edit--planets--container--element--element Edit--planets--container--element--fr_description">{{ $planet['fr_description'] }}</p>
                    <p class="Edit--planets--container--element--element Edit--planets--container--element--en_description">{{ $planet['en_description'] }}</p>
                    <p class="Edit--planets--container--element--element Edit--planets--container--element--distance">{{ $planet['distance'] }}</p>
                    <p class="Edit--planets--container--element--element Edit--planets--container--element--time">{{ $planet['time'] }}</p>
                    <a href="{{ url('/destination/' . $planet->en_name . '/' . $planet->id) }}" class="Edit--planets--container--element--element Edit--planets--container--element--show">{{ __('Show') }}</a>
                    <a href="{{ route('planets.edit', $planet->id) }}" class="Edit--planets--container--element--element Edit--planets--container--element--edit">{{ __('Edit') }}</a>
                    <form action="{{ route('planets.destroy', $planet->id) }}" method="POST" class="Edit--planets--container--element--element Edit--planets--container--element--delete">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="Edit--planets--container--element--element Edit--planets--container--element--delete--button">{{ __('Del.') }}</button>
                    </form>
                </li>
            @endforeach
        </ul>

        <!-- Lien pour créér une planette -->
        <a href="{{ route('planets.create') }}" class="Edit--planets--link">
            {{ __('Create a planet') }}
        </a>

        @if (session()->has('success'))
            <div class="Create--message">
                {{ session('success') }}
            </div>
        @endif
    

    <!-- Affichage du crew -->
    <h2 class="Edit--planets--title">{{ __('Crew') }}</h2>
        <ul class="Edit--planets--container">
            <li class="Edit--planets--container--element">
                <p class="Edit--planets--container--element--element Edit--planets--container--element--id">id</p>
                <p class="Edit--planets--container--element--element Edit--planets--container--element--fr_role">fr_role</p>
                <p class="Edit--planets--container--element--element Edit--planets--container--element--en_role">en_role</p>
                <p class="Edit--planets--container--element--element Edit--planets--container--element--name">name</p>
                <p class="Edit--planets--container--element--element Edit--planets--container--element--fr_crew_description">fr_description</p>
                <p class="Edit--planets--container--element--element Edit--planets--container--element--en_crew_description">en_description</p>
                <a href="#" class="Edit--planets--container--element--element Edit--planets--container--element--show">{{ __('Show') }}</a>
                <a href="#" class="Edit--planets--container--element--element Edit--planets--container--element--edit">{{ __('Edit') }}</a>
                <form action="#" method="POST" onsubmit="return false;" class="Edit--planets--container--element--element Edit--planets--container--element--delete">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="Edit--planets--container--element--element Edit--planets--container--element--delete--button">{{ __('Del.') }}</button>
                </form>
            </li>
            @foreach($crews as $crew)
                <li class="Edit--planets--container--element">
                    <p class="Edit--planets--container--element--element Edit--planets--container--element--id">{{ $crew['id'] }}</p>
                    <p class="Edit--planets--container--element--element Edit--planets--container--element--fr_role">{{ $crew['fr_role'] }}</p>
                    <p class="Edit--planets--container--element--element Edit--planets--container--element--en_role">{{ $crew['en_role'] }}</p>
                    <p class="Edit--planets--container--element--element Edit--planets--container--element--name">{{ $crew['name'] }}</p>
                    <p class="Edit--planets--container--element--element Edit--planets--container--element--fr_description">{{ $crew['fr_description'] }}</p>
                    <p class="Edit--planets--container--element--element Edit--planets--container--element--en_description">{{ $crew['en_description'] }}</p>
                    <a href="{{ url('/crew/' . $crew->en_role . '/' . $crew->id) }}" class="Edit--planets--container--element--element Edit--planets--container--element--show">{{ __('Show') }}</a>
                    <a href="{{ route('crews.edit', $crew->id) }}" class="Edit--planets--container--element--element Edit--planets--container--element--edit">{{ __('Edit') }}</a>
                    <form action="{{ route('crews.destroy', $crew->id) }}" method="POST" class="Edit--planets--container--element--element Edit--planets--container--element--delete">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="Edit--planets--container--element--element Edit--planets--container--element--delete--button">{{ __('Del.') }}</button>
                    </form>
                </li>
            @endforeach
        </ul>

        <!-- Lien pour créér une planette -->
        <a href="{{ route('crews.create') }}" class="Edit--planets--link">
            {{ __('Create a crew') }}
        </a>

        @if (session()->has('success'))
            <div class="Create--message">
                {{ session('success') }}
            </div>
        @endif
    

    <!-- Affichage des planettes -->
    <h2 class="Edit--planets--title">{{ __('Tech') }}</h2>
        <ul class="Edit--planets--container">
            <li class="Edit--planets--container--element">
                <p class="Edit--planets--container--element--element Edit--planets--container--element--id">id</p>
                <p class="Edit--planets--container--element--element Edit--planets--container--element--fr_name">fr_name</p>
                <p class="Edit--planets--container--element--element Edit--planets--container--element--en_name">en_name</p>
                <p class="Edit--planets--container--element--element Edit--planets--container--element--fr_description">fr_description</p>
                <p class="Edit--planets--container--element--element Edit--planets--container--element--en_description">en_description</p>
                <a href="#" class="Edit--planets--container--element--element Edit--planets--container--element--show">{{ __('Show') }}</a>
                <a href="#" class="Edit--planets--container--element--element Edit--planets--container--element--edit">{{ __('Edit') }}</a>
                <form action="#" method="POST" onsubmit="return false;" class="Edit--planets--container--element--element Edit--planets--container--element--delete">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="Edit--planets--container--element--element Edit--planets--container--element--delete--button">{{ __('Del.') }}</button>
                </form>
            </li>
            @foreach($teches as $tech)
                <li class="Edit--planets--container--element">
                    <p class="Edit--planets--container--element--element Edit--planets--container--element--id">{{ $tech['id'] }}</p>
                    <p class="Edit--planets--container--element--element Edit--planets--container--element--fr_name">{{ $tech['fr_name'] }}</p>
                    <p class="Edit--planets--container--element--element Edit--planets--container--element--en_name">{{ $tech['en_name'] }}</p>
                    <p class="Edit--planets--container--element--element Edit--planets--container--element--fr_description">{{ $tech['fr_description'] }}</p>
                    <p class="Edit--planets--container--element--element Edit--planets--container--element--en_description">{{ $tech['en_description'] }}</p>
                    <a href="{{ url('/tech/' . $tech->en_name . '/' . $tech->id) }}" class="Edit--planets--container--element--element Edit--planets--container--element--show">{{ __('Show') }}</a>
                    <a href="{{ route('teches.edit', $tech->id) }}" class="Edit--planets--container--element--element Edit--planets--container--element--edit">{{ __('Edit') }}</a>
                    <form action="{{ route('teches.destroy', $tech->id) }}" method="POST" class="Edit--planets--container--element--element Edit--planets--container--element--delete">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="Edit--planets--container--element--element Edit--planets--container--element--delete--button">{{ __('Del.') }}</button>
                    </form>
                </li>
            @endforeach
        </ul>

        <!-- Lien pour créér une planette -->
        <a href="{{ route('teches.create') }}" class="Edit--planets--link">
            {{ __('Create a tech') }}
        </a>

        @if (session()->has('success'))
            <div class="Create--message">
                {{ session('success') }}
            </div>
        @endif

    </main>
    

</x-app-layout>