<x-app-layout>
    @include('layouts.navigation', ['pageName' => "edit"])

    <main class="Private--main">
        <h1 class="Edit--title">{{ __('Edit the website') }}</h1>

        <p class="Edit--description">
            {{ __('Welcome to the edit page. In this page, you can edit part of the website!') }}
        </p>

        <form action="{{ route('crews.update', $crew->id) }}" method="POST" class="Edit--planet--form" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- On affiche l'image actuelle -->
            <img src="{{ asset('storage/' . $crew->image) }}" alt="{{ __('Image of the crew') }}" class="Edit--planet--form--image">

            <!-- Formulaire -->

            <!-- Role en français -->
            <label class="Edit--planet--form--label" for="fr_name">{{ __('Role in french')  }}</label>
            <input type="text" name="fr_role" id="fr_name" class="Edit--planet--form--input Edit--planet--form--input--fr_name" value="{{ $crew->fr_role }}">

            <!-- Role en anglais -->
            <label class="Edit--planet--form--label" for="en_name">{{ __('Role in english')  }}</label>
            <input type="text" name="en_role" id="en_name" class="Edit--planet--form--input Edit--planet--form--input--en_name" value="{{ $crew->en_role }}">

            <!-- Nom -->
            <label class="Edit--planet--form--label" for="name">{{ __('Name')  }}</label>
            <input type="text" name="name" id="name" class="Edit--planet--form--input Edit--planet--form--input--en_name" value="{{ $crew->name }}">

            <!-- Description en français -->
            <label class="Edit--planet--form--label" for="en_name">{{ __('Description in french')  }}</label>
            <input type="text" name="fr_description" id="fr_description" class="Edit--planet--form--input Edit--planet--form--input--fr_description" value="{{ $crew->fr_description }}">

            <!-- Description en anglais -->
            <label class="Edit--planet--form--label" for="en_name">{{ __('Description in english')  }}</label>
            <input type="text" name="en_description" id="en_description" class="Edit--planet--form--input Edit--planet--form--input--en_description" value="{{ $crew->en_description }}">

            <!-- Image -->
            <label class="Edit--planet--form--label" for="image">{{ __('Change the image')  }}</label>
            <input type="file" name="image" id="image" class="Edit--planet--form--input Edit--planet--form--input--image">

            <!-- Bouton de validation -->
            <button type="submit" class="Edit--planet--form--button">{{ __('Edit the crew') }}</button>
        </form>
    </main>

</x-app-layout>