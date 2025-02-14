@php
    $drivers = $team->drivers;
    $teampoints = 0;
    foreach ($drivers as $driver) {
        $teampoints += $driver->points;
    }
@endphp


<a href="{{ route('team', ['id' => $team->id]) }}#presentation" class="team_container team_{{$team->id}}--border">
    <div class="team_infos">
        <div class="team_infos_name">
            <img src="{{asset('Images/Teams/'.$team->Name.' black.png')}}" alt="">
            <h3>{{ $team->Name }}</h3>
        </div>
        <div class="team_info_points team_{{$team->id}}--background">
            <h3>Pts :{{ $teampoints }}</h3>
        </div>
    </div>
    <div class="team_animation">
        <div class="team_car">
            <img src="{{ asset('Images/Car/'.$team->Name.'.avif') }}" alt="">
            <div class="team_lines">
                <div class="team_line team_{{$team->id}}--background"></div>
                <div class="team_line team_{{$team->id}}--background"></div>
                <div class="team_line team_{{$team->id}}--background"></div>
            </div>
        </div>
    </div>

</a>
