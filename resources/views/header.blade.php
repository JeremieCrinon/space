<header class="Website--header">

    <div class="Website--header--logo" role="banner">
        <svg width="48px" height="48px" viewBox="0 0 48 48" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
            <path d="M24 0C10.7452 0 0 10.7452 0 24C0 37.2548 10.7452 48 24 48C37.2548 48 48 37.2548 48 24C48 10.7452 37.2548 0 24 0ZM24 0C24 0 22.9412 10.9412 16.9412 16.9412C10.9412 22.9412 0 24 0 24C0 24 10.9412 25.0588 16.9412 31.0588C22.9412 37.0588 24 48 24 48C24 48 25.0588 37.0588 31.0588 31.0588C37.0588 25.0588 48 24 48 24C48 24 37.0588 22.9412 31.0588 16.9412C25.0588 10.9412 24 0 24 0Z" id="Ellipse-Difference" fill="#FFFFFF" fill-rule="evenodd" stroke="none" />
        </svg>
    </div>

    <div class="Website--header--bar"></div>

    <div class="Website--header--menu--hamburger" aria-expanded="false">
            <div class="Website--header--menu--hamburger--line"></div>
            <div class="Website--header--menu--hamburger--line"></div>
            <div class="Website--header--menu--hamburger--line"></div>
        </div>

    <nav class="Website--header--menu" role="navigation">
        <ul>
            <li @if(isset($pageName) && $pageName == "home")class="Website--header--li--current"@endif><a href="{{ url('/') }}"><span>00</span> {{ __('HOME') }}</a></li>
            <li @if(isset($pageName) && $pageName == "destination")class="Website--header--li--current"@endif><a href="{{ url('/destination/moon') }}"><span>01</span> DESTINATION</a></li>
            <li @if(isset($pageName) && $pageName == "crew")class="Website--header--li--current"@endif><a href="{{ url('/crew/commander') }}"><span>02</span> {{ __('CREW') }}</a></li>
            <li @if(isset($pageName) && $pageName == "tech")class="Website--header--li--current"@endif><a href="{{ url('/tech/Launcher') }}"><span>03</span> {{ __('TECHNOLOGY') }}</a></li>
            <a class="Website--header--language" href="{{ route('language.switch', 'en') }}">English</a>
            <a class="Website--header--language" href="{{ route('language.switch', 'fr') }}">Français</a>

        </ul>
    </nav>    

    <!-- Script js pour le header -->
    <script src="{{ asset('js/header.js') }}"></script>
</header>