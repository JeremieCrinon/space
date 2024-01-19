<header class="Private--header">

    <nav class="Private--header--nav">
        <ul>
            <li><a href="{{ url('/') }}">{{ __('PUBLIC PART') }}</a></li>
            <li @if(isset($pageName) && $pageName == "home")class="Private--header--li--current"@endif><a href="{{ url('/dashboard') }}">{{ __('HOME') }}</a></li>
            <li id="Private--header--li--edit" @if(isset($pageName) && $pageName == "edit")class="Private--header--li--current"@endif><a href="#">{{ __('EDIT CONTENT') }}</a></li>
            <li class="d-none Private--header--edit--under"><a href="{{ url('/editPlanets') }}">{{ __('EDIT PLANETS') }}</a></li>
            <li class="d-none Private--header--edit--under"><a href="{{ url('/editCrews') }}">{{ __('EDIT CREWS') }}</a></li>
            <li class="d-none Private--header--edit--under"><a href="{{ url('/editTeches') }}">{{ __('EDIT TECHES') }}</a></li>
            <li @if(isset($pageName) && $pageName == "profile")class="Private--header--li--current"@endif><a href="{{ url('/profile') }}">{{ __('PROFILE') }}</a></li>
            <li><a class="Private--header--language" href="{{ route('language.switch', 'en') }}">English</a></li>
            <li><a class="Private--header--language" href="{{ route('language.switch', 'fr') }}">Français</a></li>
        </ul>
    </nav>

    <script>
        const editParrent = document.querySelector("#Private--header--li--edit");
        const edit = document.querySelector("#Private--header--li--edit a");
        const editUnder = document.querySelectorAll(".Private--header--edit--under");

        edit.addEventListener("click", function() {
            editParrent.classList.toggle("Private--header--li--active");
            editUnder.forEach(function(element) {
                element.classList.toggle("d-none");
            });
        });
    </script>

</header>