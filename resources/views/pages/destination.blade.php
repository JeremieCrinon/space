@include('doctype')
    <body class="Destination--body">
        @include('header', ['pageName' => "destination"])
        
        <h1 class="Destination--title"><span>01</span>{{ __('CHOOSE YOUR DESTINATION') }}</h1>

        @if(isset($subpage) && $subpage == "moon")

            <img src="{{ asset('img/moon.png') }}" alt="Moon" class="Destination--img">

        @elseif(isset($subpage) && $subpage == "mars")
        

            <img src="{{ asset('img/mars.png') }}" alt="Mars" class="Destination--img">

        @elseif(isset($subpage) && $subpage == "europe")

            <img src="{{ asset('img/europe.png') }}" alt="Europe" class="Destination--img">

        @elseif(isset($subpage) && $subpage == "titan")

            <img src="{{ asset('img/titan.png') }}" alt="Titan" class="Destination--img">

        @else
            
            <img src="{{ asset('img/moon.png') }}" alt="Moon" class="Destination--img">

        @endif

        <section class="Destination--text">
            @if(isset($subpage) && $subpage == "moon")
                <nav class="Destination--nav">
                    <a href="{{ url('/destination/moon') }}" class="Destination--nav__link Destination--nav__link__current">{{ __('Moon') }}</a>
                    <a href="{{ url('/destination/mars') }}" class="Destination--nav__link">{{ __('Mars') }}</a>
                    <a href="{{ url('/destination/europe') }}" class="Destination--nav__link">{{ __('Europe') }}</a>
                    <a href="{{ url('/destination/titan') }}" class="Destination--nav__link">{{ __('Titan') }}</a>
                </nav>

                <h2 class="Destination--text__title">{{ __('MOON') }}</h2>
                <p class="Destination--text__p">{{ __('Watch our planet like you\'ve never seen it before! A perfect place to travel, and relax, and to come back refreshed. While there, you could also visit the historics landing sites of Luna 2 and Apollo 11.') }}</p>
                <div class="Destination--text--bar"></div>
                <div class="Destination--text--infos">
                    <div class="Destination--text--distance Destination--text--infos--container">
                        <p class="Destination--text--distance__title Destination--text--infos--title">{{ __('DISTANCE') }}</p>
                        <p class="Destination--text--distance__p Destination--text--infos--p">{{ __('384 000 KM') }}</p>
                    </div>
                    <div class="Destination--text--time Destination--text--infos--container">
                        <p class="Destination--text--time__title Destination--text--infos--title">{{ __('DURATION') }}</p>
                        <p class="Destination--text--time__p Destination--text--infos--p">3 {{ __('DAYS') }}</p>
                    </div>
                </div>

            @elseif(isset($subpage) && $subpage == "mars")
                <nav class="Destination--nav">
                    <a href="{{ url('/destination/moon') }}" class="Destination--nav__link">{{ __('Moon') }}</a>
                    <a href="{{ url('/destination/mars') }}" class="Destination--nav__link Destination--nav__link__current">{{ __('Mars') }}</a>
                    <a href="{{ url('/destination/europe') }}" class="Destination--nav__link">{{ __('Europe') }}</a>
                    <a href="{{ url('/destination/titan') }}" class="Destination--nav__link">{{ __('Titan') }}</a>
                </nav>
            

                <h2 class="Destination--text__title">{{ __('MARS') }}</h2>
                <p class="Destination--text__p">{{ __('Don\'t forget your hiking boots. You\'ll need \'em to mount on top of the Olympus mount, the solar system\'s highest mountain. It\'s twice and a half the mount Everest\'s height!') }}</p>
                <div class="Destination--text--bar"></div>
                <div class="Destination--text--infos">
                    <div class="Destination--text--distance Destination--text--infos--container">
                        <p class="Destination--text--distance__title Destination--text--infos--title">{{ __('DISTANCE') }}</p>
                        <p class="Destination--text--distance__p Destination--text--infos--p">{{ __('225 GM') }}</p>
                    </div>
                    <div class="Destination--text--time Destination--text--infos--container">
                        <p class="Destination--text--time__title Destination--text--infos--title">{{ __('DURATION') }}</p>
                        <p class="Destination--text--time__p Destination--text--infos--p">9 {{ __('MONTHS') }}</p>
                    </div>
                </div>

            @elseif(isset($subpage) && $subpage == "europe")
                <nav class="Destination--nav">
                    <a href="{{ url('/destination/moon') }}" class="Destination--nav__link">{{ __('Moon') }}</a>
                    <a href="{{ url('/destination/mars') }}" class="Destination--nav__link">{{ __('Mars') }}</a>
                    <a href="{{ url('/destination/europe') }}" class="Destination--nav__link Destination--nav__link__current">{{ __('Europe') }}</a>
                    <a href="{{ url('/destination/titan') }}" class="Destination--nav__link">{{ __('Titan') }}</a>
                </nav>

                <h2 class="Destination--text__title">{{ __('EUROPE') }}</h2>
                <p class="Destination--text__p">{{ __('The smallest of the four Galilean moons in orbit of Jupiter, Europe is the dream of those who loves winter. It\'s icy surface is perfect for ice skating, curling, hockey, or just relax in your comfortable winter chalet.') }}</p>
                <div class="Destination--text--bar"></div>
                <div class="Destination--text--infos">
                    <div class="Destination--text--distance Destination--text--infos--container">
                        <p class="Destination--text--distance__title Destination--text--infos--title">{{ __('DISTANCE') }}</p>
                        <p class="Destination--text--distance__p Destination--text--infos--p">{{ __('628GM') }}</p>
                    </div>
                    <div class="Destination--text--time Destination--text--infos--container">
                        <p class="Destination--text--time__title Destination--text--infos--title">{{ __('DURATION') }}</p>
                        <p class="Destination--text--time__p Destination--text--infos--p">3 {{ __('YEARS') }}</p>
                    </div>
                </div>

            @elseif(isset($subpage) && $subpage == "titan")
                <nav class="Destination--nav">
                    <a href="{{ url('/destination/moon') }}" class="Destination--nav__link">{{ __('Moon') }}</a>
                    <a href="{{ url('/destination/mars') }}" class="Destination--nav__link">{{ __('Mars') }}</a>
                    <a href="{{ url('/destination/europe') }}" class="Destination--nav__link">{{ __('Europe') }}</a>
                    <a href="{{ url('/destination/titan') }}" class="Destination--nav__link Destination--nav__link__current">{{ __('Titan') }}</a>
                </nav>

                <h2 class="Destination--text__title">{{ __('TITAN') }}</h2>
                <p class="Destination--text__p">{{ __('The only known moon to have a dense atmosphere appart from earth, Titan is like home far from home(and juste a couple hundreds degres colder!). In bonus, you can admire a crasy beautiful view of the rings of Saturn!') }}</p>
                <div class="Destination--text--bar"></div>
                <div class="Destination--text--infos">
                    <div class="Destination--text--distance Destination--text--infos--container">
                        <p class="Destination--text--distance__title Destination--text--infos--title">{{ __('DISTANCE') }}</p>
                        <p class="Destination--text--distance__p Destination--text--infos--p">{{ __('1,6 TM') }}</p>
                    </div>
                    <div class="Destination--text--time Destination--text--infos--container">
                        <p class="Destination--text--time__title Destination--text--infos--title">{{ __('DURATION') }}</p>
                        <p class="Destination--text--time__p Destination--text--infos--p">7 {{ __('YEARS') }}</p>
                    </div>
                </div>

            @else
                <nav class="Destination--nav">
                    <a href="{{ url('/destination/moon') }}" class="Destination--nav__link Destination--nav__link__current">{{ __('Moon') }}</a>
                    <a href="{{ url('/destination/mars') }}" class="Destination--nav__link">{{ __('Mars') }}</a>
                    <a href="{{ url('/destination/europe') }}" class="Destination--nav__link">{{ __('Europe') }}</a>
                    <a href="{{ url('/destination/titan') }}" class="Destination--nav__link">{{ __('Titan') }}</a>
                </nav>
                
                <h2 class="Destination--text__title">{{ __('MOON') }}</h2>
                <p class="Destination--text__p">{{ __('Watch our planet like you\'ve never seen it before! A perfect place to travel, and relax, and to come back refreshed. While there, you could also visit the historics landing sites of Luna 2 and Apollo 11.') }}</p>
                <div class="Destination--text--bar"></div>
                <div class="Destination--text--infos">
                    <div class="Destination--text--distance Destination--text--infos--container">
                        <p class="Destination--text--distance__title Destination--text--infos--title">{{ __('DISTANCE') }}</p>
                        <p class="Destination--text--distance__p Destination--text--infos--p">{{ __('384 000 KM') }}</p>
                    </div>
                    <div class="Destination--text--time Destination--text--infos--container">
                        <p class="Destination--text--time__title Destination--text--infos--title">{{ __('DURATION') }}</p>
                        <p class="Destination--text--time__p Destination--text--infos--p">3 {{ __('DAYS') }}</p>
                    </div>
                </div>

            @endif
        </section>
    </body>