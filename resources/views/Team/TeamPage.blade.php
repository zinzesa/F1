@extends('layouts.main')

@section('content')
<main>
    @include('Team.Components.TeamPresentation',compact("team"))
    @include('Team.Components.TeamDrivers',compact("team"))
</main>
<style>
    .team__presentation__container{
        width: 100%;
        height: 100vh;
        display: grid;
        place-items: center;
        position: relative;
        overflow: hidden;
    }

</style>

@endsection
