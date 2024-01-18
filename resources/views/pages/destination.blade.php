@include('doctype')
    <body class="Destination--body">
        @include('header', ['pageName' => "destination"])
        
        <h1 class="Destination--title"><span>01</span>{{ __('CHOOSE YOUR DESTINATION') }}</h1>

        <img aria-hidden="true" src="{{ asset('storage/' . $planet['image']) }}" alt="Moon" class="Destination--img">
        

        <section class="Destination--text" role="main">
            <nav class="Destination--nav" role="navigation">
                @foreach($planets as $current_planet)
                    <a href="{{ url('/destination/' . (App::getLocale() == 'fr' ? $current_planet['fr_name'] : $current_planet['en_name']) . '/' . $current_planet->id) }}" class="Destination--nav__link @if($current_planet->id == $planet->id) Destination--nav__link__current @endif">@if(App::getLocale() == 'fr')
                    {{ $current_planet['fr_name'] }}
                @else
                    {{ $current_planet['en_name'] }}
                @endif  </a>
                @endforeach
            </nav>

            <h2 class="Destination--text__title">@if(App::getLocale() == 'fr')
                {{ $planet['fr_name'] }}
            @else
                {{ $planet['en_name'] }}
            @endif  
            </h2>
            <p class="Destination--text__p">@if(App::getLocale() == 'fr')
                {{ $planet['fr_description'] }}
            @else
                {{ $planet['en_description'] }}
            @endif </p>
            <div class="Destination--text--bar"></div>
            <div class="Destination--text--infos">
                <div class="Destination--text--distance Destination--text--infos--container">
                    <p class="Destination--text--distance__title Destination--text--infos--title">{{ __('DISTANCE') }}</p>
                    <p class="Destination--text--distance__p Destination--text--infos--p">{{ $planet['distance'] }}</p>
                </div>
                <div class="Destination--text--time Destination--text--infos--container">
                    <p class="Destination--text--time__title Destination--text--infos--title">{{ __('DURATION') }}</p>
                    <p class="Destination--text--time__p Destination--text--infos--p">{{ $planet['time'] }}</p>
                </div>
            </div>
        </section>
    </body>
</html>