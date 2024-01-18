<x-app-layout>
    @include('layouts.navigation', ['pageName' => "edit"])

    <main class="Private--main">
        <h1 class="Edit--title">{{ __('Edit the website') }}</h1>

        <p class="Edit--description">
            {{ __('Welcome to the edit page. In this page, you can edit part of the website!') }}
        </p>

        <form action="{{ route('planets.update', $planet->id) }}" method="POST" class="Edit--planet--form" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- On affiche l'image actuelle -->
            <img src="{{ asset('storage/' . $planet->image) }}" alt="{{ __('Image of the planet') }}" class="Edit--planet--form--image">

            <!-- Formulaire -->

            <!-- Nom en français -->
            <label class="Edit--planet--form--label" for="fr_name">{{ __('Name in french')  }}</label>
            <input type="text" name="fr_name" id="fr_name" class="Edit--planet--form--input Edit--planet--form--input--fr_name" value="{{ $planet->fr_name }}">

            <!-- Nom en anglais -->
            <label class="Edit--planet--form--label" for="en_name">{{ __('Name in english')  }}</label>
            <input type="text" name="en_name" id="en_name" class="Edit--planet--form--input Edit--planet--form--input--en_name" value="{{ $planet->en_name }}">

            <!-- Description en français -->
            <label class="Edit--planet--form--label" for="en_name">{{ __('Description in french')  }}</label>
            <input type="text" name="fr_description" id="fr_description" class="Edit--planet--form--input Edit--planet--form--input--fr_description" value="{{ $planet->fr_description }}">

            <!-- Description en anglais -->
            <label class="Edit--planet--form--label" for="en_name">{{ __('Description in english')  }}</label>
            <input type="text" name="en_description" id="en_description" class="Edit--planet--form--input Edit--planet--form--input--en_description" value="{{ $planet->en_description }}">

            <!-- Distance -->
            <label class="Edit--planet--form--label" for="distance">{{ __('Distance')  }}</label>
            <input type="text" name="distance" id="distance" class="Edit--planet--form--input Edit--planet--form--input--distance" value="{{ $planet->distance }}">

            <!-- Temps -->
            <label class="Edit--planet--form--label" for="time">{{ __('Time')  }}</label>
            <input type="text" name="time" id="time" class="Edit--planet--form--input Edit--planet--form--input--time" value="{{ $planet->time }}">

            <!-- Image -->
            <label class="Edit--planet--form--label" for="image">{{ __('Change the image')  }}</label>
            <input type="file" name="image" id="image" class="Edit--planet--form--input Edit--planet--form--input--image">

            <!-- Bouton de validation -->
            <button type="submit" class="Edit--planet--form--button">{{ __('Edit the planet') }}</button>
        </form>
    </main>

</x-app-layout>