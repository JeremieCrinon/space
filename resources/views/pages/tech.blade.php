@include('doctype')
    <body class="Tech--body">
        @include('header', ['pageName' => "tech"])

        <h1 class="Destination--title"><span>03</span>{{ __('SPACE LAUNCHER 101') }}</h1><!-- Je remets la même class que pour destination, car le titre est le même -->
        <section class="Tech--text">
            @if(isset($subpage) && $subpage == "spaceport")
                <nav class="Tech--text--nav">
                    <ul>
                        <li><a class="Tech--text--nav--link" href="{{ url('/tech/launcher') }}">1</a></li>
                        <li><a class="Tech--text--nav--link Tech--text--nav--link--current" href="{{ url('/tech/spaceport') }}">2</a></li>
                        <li><a class="Tech--text--nav--link" href="{{ url('/tech/space_capsule') }}">3</a></li>
                    </ul>
                </nav>
                <div class="Tech--text--infos">
                    <h2 class="Tech--text--title">{{ __('THE TERMINOLOGY...') }}</h2>
                    <h3 class="Tech--text--subtitle">{{ __('THE SPACEPORT') }}</h3>
                    <p class="Tech--text--description">{{ __('A spaceport is a launching (or landing) site of space machines, by analogy to seaports for boats or airport for aircrafts. Based at the famous Cap Canaveral, our space port is idealy placed to benefit from the earth\s rotation for the launching.') }}</p>
                </div>
                
            @elseif(isset($subpage) && $subpage == "space_capsule")
                <nav class="Tech--text--nav">
                    <ul>
                        <li><a class="Tech--text--nav--link" href="{{ url('/tech/launcher') }}">1</a></li>
                        <li><a class="Tech--text--nav--link" href="{{ url('/tech/spaceport') }}">2</a></li>
                        <li><a class="Tech--text--nav--link Tech--text--nav--link--current" href="{{ url('/tech/space_capsule') }}">3</a></li>
                    </ul>
                </nav>
                <div class="Tech--text--infos">
                    <h2 class="Tech--text--title">{{ __('THE TERMINOLOGY...') }}</h2>
                    <h3 class="Tech--text--subtitle">{{ __('THE SPACE CAPSULE') }}</h3>
                    <p class="Tech--text--description">{{ __('A space capsule is a habitable space contraption that uses a capsule with a blunt body to enter the earth\'s athmosphere without wings. Our capsule is the place where you will all your time during the flight. It contains a gym, a cinema, et many other activities to entertain yourself.') }}</p>
                </div>
                
            @else
                <nav class="Tech--text--nav">
                    <ul>
                        <li><a class="Tech--text--nav--link Tech--text--nav--link--current" href="{{ url('/tech/launcher') }}">1</a></li>
                        <li><a class="Tech--text--nav--link" href="{{ url('/tech/spaceport') }}">2</a></li>
                        <li><a class="Tech--text--nav--link" href="{{ url('/tech/space_capsule') }}">3</a></li>
                    </ul>
                </nav>
                <div class="Tech--text--infos">
                    <h2 class="Tech--text--title">{{ __('THE TERMINOLOGY...') }}</h2>
                    <h3 class="Tech--text--subtitle">{{ __('THE LAUNCHER') }}</h3>
                    <p class="Tech--text--description">{{ __('A launcher or carrying rocket is a vehicle powered by rockets used to carry payload from Earth surface to space, often to an Earth orbite or further. Ours rocket WEB-X is the most powerfull in service. Standit at a whoping 150 meters high, it give an impressive spectacle on the launching site.') }}</p>
                </div>
            @endif
            
        </section>
        <section class="Tech--img">
            @if(isset($subpage) && $subpage == "spaceport")
                <img class="Tech--img--image" src="{{ asset('img/spaceport.png') }}" alt="Spaceport">
            @elseif(isset($subpage) && $subpage == "space_capsule")
                <img class="Tech--img--image" src="{{ asset('img/space_capsule.png') }}" alt="Space Capsule">
            @else
                <img class="Tech--img--image" src="{{ asset('img/launcher.png') }}" alt="Launcher">
            @endif
        </section>
    </body>
</html>