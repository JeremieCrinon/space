<x-app-layout>
    @include('layouts.navigation', ['pageName' => "edit"])

    <main class="Private--main">

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