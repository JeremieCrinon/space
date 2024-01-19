@include('doctype')
    <body class="Tech--body">
        @include('header', ['pageName' => "tech"])

        <h1 class="Destination--title"><span>03</span>{{ __('SPACE LAUNCHER 101') }}</h1><!-- Je remets la même class que pour destination, car le titre est le même -->
        <section class="Tech--text" role="main">
            <nav class="Tech--text--nav" role="navigation">
                <ul>
                    <?php $count = 0; ?>
                    @foreach($teches as $current_tech)
                        <?php $count++; ?>
                        <li><a class="Tech--text--nav--link @if($current_tech->id == $tech->id) Tech--text--nav--link--current @endif" href="{{ url('/tech/' . (App::getLocale() == 'fr' ? $current_tech['fr_name'] : $current_tech['en_name']) . '/' . $current_tech->id) }}" role="button">{{ $count }}</a></li>
                    @endforeach
                    <!-- <li><a class="Tech--text--nav--link" href="{{ url('/tech/launcher') }}" role="button">1</a></li>
                    <li><a class="Tech--text--nav--link Tech--text--nav--link--current" href="{{ url('/tech/spaceport') }}" role="button">2</a></li>
                    <li><a class="Tech--text--nav--link" href="{{ url('/tech/space_capsule') }}" role="button">3</a></li> -->
                </ul>
            </nav>
            <div class="Tech--text--infos">
                <h2 class="Tech--text--title">{{ __('THE TERMINOLOGY...') }}</h2>
                <h3 class="Tech--text--subtitle">@if(App::getLocale() == 'fr')
                    {{ $tech['fr_name'] }}
                @else
                    {{ $tech['en_name'] }}
                @endif</h3>
                <p class="Tech--text--description">@if(App::getLocale() == 'fr')
                    {{ $tech['fr_description'] }}
                @else
                    {{ $tech['en_description'] }}
                @endif</p>
            </div>
            <!-- @if(isset($subpage) && $subpage == "spaceport")
                <nav class="Tech--text--nav" role="navigation">
                    <ul>
                        <li><a class="Tech--text--nav--link" href="{{ url('/tech/launcher') }}" role="button">1</a></li>
                        <li><a class="Tech--text--nav--link Tech--text--nav--link--current" href="{{ url('/tech/spaceport') }}" role="button">2</a></li>
                        <li><a class="Tech--text--nav--link" href="{{ url('/tech/space_capsule') }}" role="button">3</a></li>
                    </ul>
                </nav>
                <div class="Tech--text--infos">
                    <h2 class="Tech--text--title">{{ __('THE TERMINOLOGY...') }}</h2>
                    <h3 class="Tech--text--subtitle">{{ __('THE SPACEPORT') }}</h3>
                    <p class="Tech--text--description">{{ __('A spaceport is a launching (or landing) site of space machines, by analogy to seaports for boats or airport for aircrafts. Based at the famous Cap Canaveral, our space port is idealy placed to benefit from the earth\s rotation for the launching.') }}</p>
                </div>
                
            @elseif(isset($subpage) && $subpage == "space_capsule")
                <nav class="Tech--text--nav" role="navigation">
                    <ul>
                        <li><a class="Tech--text--nav--link" href="{{ url('/tech/launcher') }}" role="button">1</a></li>
                        <li><a class="Tech--text--nav--link" href="{{ url('/tech/spaceport') }}" role="button">2</a></li>
                        <li><a class="Tech--text--nav--link Tech--text--nav--link--current" href="{{ url('/tech/space_capsule') }}" role="button">3</a></li>
                    </ul>
                </nav>
                <div class="Tech--text--infos">
                    <h2 class="Tech--text--title">{{ __('THE TERMINOLOGY...') }}</h2>
                    <h3 class="Tech--text--subtitle">{{ __('THE SPACE CAPSULE') }}</h3>
                    <p class="Tech--text--description">{{ __('A space capsule is a habitable space contraption that uses a capsule with a blunt body to enter the earth\'s athmosphere without wings. Our capsule is the place where you will all your time during the flight. It contains a gym, a cinema, et many other activities to entertain yourself.') }}</p>
                </div>
                
            @else
                <nav class="Tech--text--nav" role="navigation">
                    <ul>
                        <li><a class="Tech--text--nav--link Tech--text--nav--link--current" href="{{ url('/tech/launcher') }}" role="button">1</a></li>
                        <li><a class="Tech--text--nav--link" href="{{ url('/tech/spaceport') }}" role="button">2</a></li>
                        <li><a class="Tech--text--nav--link" href="{{ url('/tech/space_capsule') }}" role="button">3</a></li>
                    </ul>
                </nav>
                <div class="Tech--text--infos">
                    <h2 class="Tech--text--title">{{ __('THE TERMINOLOGY...') }}</h2>
                    <h3 class="Tech--text--subtitle">{{ __('THE LAUNCHER') }}</h3>
                    <p class="Tech--text--description">{{ __('A launcher or carrying rocket is a vehicle powered by rockets used to carry payload from Earth surface to space, often to an Earth orbite or further. Ours rocket WEB-X is the most powerfull in service. Standit at a whoping 150 meters high, it give an impressive spectacle on the launching site.') }}</p>
                </div>
            @endif -->
            
        </section>
        <section class="Tech--img">
            <img aria-hidden="true" class="Tech--img--image" src="{{ asset('storage/' . $tech['image']) }}" alt="@if(App::getLocale() == 'fr')
                    {{ $tech['fr_name'] }}
                @else
                    {{ $tech['en_name'] }}
                @endif">
            <!-- @if(isset($subpage) && $subpage == "spaceport")
                <img aria-hidden="true" class="Tech--img--image" src="{{ asset('img/spaceport.png') }}" alt="Spaceport">
            @elseif(isset($subpage) && $subpage == "space_capsule")
                <img aria-hidden="true" class="Tech--img--image" src="{{ asset('img/space_capsule.png') }}" alt="Space Capsule">
            @else
                <img aria-hidden="true" class="Tech--img--image" src="{{ asset('img/launcher.png') }}" alt="Launcher">
            @endif -->
        </section>
    </body>
</html>