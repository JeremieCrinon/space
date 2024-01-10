@include('doctype')
    <body class="Crew--body">
        @include('header', ['pageName' => "crew"])

        <h1 class="Destination--title"><span>02</span>{{ __('MEET THE CREW') }}</h1><!-- Je remets la même class que pour destination, car le titre est le même -->
        <section class="Crew--image__mobile Crew--image" aria-hidden="true">
            @if(isset($subpage) && $subpage == "mission_specialist")
                <img src="{{ asset('img/mission_specialist.png') }}" alt="Mark Shuttleworth">
            @elseif(isset($subpage) && $subpage == "pilot")
                <img src="{{ asset('img/pilot.png') }}" alt="Victor Glover">
            @elseif(isset($subpage) && $subpage == "engineer")
                <img src="{{ asset('img/engineer.png') }}" alt="Anousheh Ansari">
            @else
                <img src="{{ asset('img/commander.png') }}" alt="Douglas Hurley">
            @endif
        </section>
        <div class="Crew--bar__mobile"></div>
        <nav class="Crew--text--nav__mobile Crew--text--nav" role="navigation">
            <ul>
                <li><a class="Crew--text--nav--link__mobile Crew--text--nav--link" href="{{ url('/crew/commander') }}" role="button"></a></li>
                <li><a class="Crew--text--nav--link__mobile Crew--text--nav--link--current__mobile Crew--text--nav--link Crew--text--nav--link--current" href="{{ url('/crew/mission_specialist') }}" role="button"></a></li>
                <li><a class="Crew--text--nav--link__mobile Crew--text--nav--link" href="{{ url('/crew/pilot') }}" role="button"></a></li>
                <li><a class="Crew--text--nav--link__mobile Crew--text--nav--link" href="{{ url('/crew/engineer') }}" role="button"></a></li>
            </ul>
        </nav>


        <div class="Crew--container">
            <section class="Crew--text" role="main">
                @if(isset($subpage) && $subpage == "mission_specialist")
                    <p class="Crew--text--role">{{ __('MISSION SPECIALIST') }}</p>
                    <p class="Crew--text--name">MARK SHUTTLEWORTH</p>
                    <p class="Crew--text--description">{{ __('Mark Righard Shuttleworth is the fonder and CEO of Canonical, the company behind the operating system based on Linux Ubuntu. Shuttleworth became the first south affrican to travel to space as a space tourist.') }}</p>
                    <nav class="Crew--text--nav" role="navigation">
                        <ul>
                            <li><a class="Crew--text--nav--link" href="{{ url('/crew/commander') }}" role="button"></a></li>
                            <li><a class="Crew--text--nav--link Crew--text--nav--link--current" href="{{ url('/crew/mission_specialist') }}" role="button"></a></li>
                            <li><a class="Crew--text--nav--link" href="{{ url('/crew/pilot') }}" role="button"></a></li>
                            <li><a class="Crew--text--nav--link" href="{{ url('/crew/engineer') }}" role="button"></a></li>
                        </ul>
                    </nav>
                @elseif(isset($subpage) && $subpage == "pilot")
                    <p class="Crew--text--role">{{ __('PILOT') }}</p>
                    <p class="Crew--text--name">VICTOR GLOVER</p>
                    <p class="Crew--text--description">{{ __('Pilot of the first operational flight of the SpaceX\'s Crew Dragon with the internationnal space station as a destination. Glover is commander in the american\'s navy, where he pilots an F/A-18. He was member of the Expedition 64\'s crew as a flight engineer for the station\'s systems.') }}</p>
                    <nav class="Crew--text--nav" role="navigation">
                        <ul>
                            <li><a class="Crew--text--nav--link" href="{{ url('/crew/commander') }}" role="button"></a></li>
                            <li><a class="Crew--text--nav--link" href="{{ url('/crew/mission_specialist') }}" role="button"></a></li>
                            <li><a class="Crew--text--nav--link  Crew--text--nav--link--current" href="{{ url('/crew/pilot') }}" role="button"></a></li>
                            <li><a class="Crew--text--nav--link" href="{{ url('/crew/engineer') }}" role="button"></a></li>
                        </ul>
                    </nav>
                @elseif(isset($subpage) && $subpage == "engineer")
                    <p class="Crew--text--role">{{ __('FLIGHT ENGINEER') }}</p>
                    <p class="Crew--text--name">ANOUSHEH ANSARI</p>
                    <p class="Crew--text--description">{{ __('Anousheh Ansari is an Irano-american engineer and co-fondater of Prodea Systems. Ansari was the fourth auto-financed space tourist, and the first autofinanced woman to go to the ISS, and the first Iranian to go to space. ') }}</p>
                    <nav class="Crew--text--nav" role="navigation">
                        <ul>
                            <li><a class="Crew--text--nav--link" href="{{ url('/crew/commander') }}" role="button"></a></li>
                            <li><a class="Crew--text--nav--link" href="{{ url('/crew/mission_specialist') }}" role="button"></a></li>
                            <li><a class="Crew--text--nav--link" href="{{ url('/crew/pilot') }}" role="button"></a></li>
                            <li><a class="Crew--text--nav--link Crew--text--nav--link--current" href="{{ url('/crew/engineer') }}" role="button"></a></li>
                        </ul>
                    </nav>
                @else
                    <p class="Crew--text--role">{{ __('COMMANDER') }}</p>
                    <p class="Crew--text--name">DOUGLAS HURLEY</p>
                    <p class="Crew--text--description">{{ __('Douglas Gerald Hurley is an american engineer, he\'s an ancient astraunot from NASA. He went in space for the third time as the commander of the Crew Dragon Demon-2 ship.') }}</p>
                    <nav class="Crew--text--nav" role="navigation">
                        <ul>
                            <li><a class="Crew--text--nav--link Crew--text--nav--link--current" href="{{ url('/crew/commander') }}" role="button"></a></li>
                            <li><a class="Crew--text--nav--link" href="{{ url('/crew/mission_specialist') }}" role="button"></a></li>
                            <li><a class="Crew--text--nav--link" href="{{ url('/crew/pilot') }}" role="button"></a></li>
                            <li><a class="Crew--text--nav--link" href="{{ url('/crew/engineer') }}" role="button"></a></li>
                        </ul>
                    </nav>
                @endif
            </section>

            <section class="Crew--image" aria-hidden="true">
                @if(isset($subpage) && $subpage == "mission_specialist")
                    <img src="{{ asset('img/mission_specialist.png') }}" alt="Mark Shuttleworth">
                @elseif(isset($subpage) && $subpage == "pilot")
                    <img src="{{ asset('img/pilot.png') }}" alt="Victor Glover">
                @elseif(isset($subpage) && $subpage == "engineer")
                    <img src="{{ asset('img/engineer.png') }}" alt="Anousheh Ansari">
                @else
                    <img src="{{ asset('img/commander.png') }}" alt="Douglas Hurley">
                @endif
            </section>
        </div>
    
    </body>
</html>