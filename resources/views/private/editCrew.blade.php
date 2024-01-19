<x-app-layout>
    @include('layouts.navigation', ['pageName' => "edit"])

    <main class="Private--main">

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
    </main>
</x-app-layout>