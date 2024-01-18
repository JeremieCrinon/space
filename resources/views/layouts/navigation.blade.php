<header class="Private--header">

    <nav class="Private--header--nav">
        <ul>
            <li><a href="{{ url('/') }}">{{ __('PUBLIC PART') }}</a></li>
            <li @if(isset($pageName) && $pageName == "home")class="Private--header--li--current"@endif><a href="{{ url('/dashboard') }}">{{ __('HOME') }}</a></li>
            <li @if(isset($pageName) && $pageName == "edit")class="Private--header--li--current"@endif><a href="{{ url('/edit') }}">{{ __('EDIT CONTENT') }}</a></li>
            <li @if(isset($pageName) && $pageName == "profile")class="Private--header--li--current"@endif><a href="{{ url('/profile') }}">{{ __('PROFILE') }}</a></li>
            <li><a class="Private--header--language" href="{{ route('language.switch', 'en') }}">English</a></li>
            <li><a class="Private--header--language" href="{{ route('language.switch', 'fr') }}">Français</a></li>
        </ul>
    </nav>

</header>