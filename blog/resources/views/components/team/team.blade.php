@extends('layouts.webtemplate')

@section('css')
<link rel="stylesheet" href="{{ asset('css/teamstyle.css') }}">
@endsection

@section('js')
<script type="text/javascript" src="{{ asset('js/teamscript.js')}}"></script>
@endsection

@section('html')
<div class="team">
    <img class="logo" src="{{ '../img/teams/'.$team[0]->logo }}">
    <div class="logonameoutter">
        <div class="logoname"><img class="flag" src="{{ '../img/teams/'.$team[0]->flag }}">
            <h1>{{$team[0]->team_name}}</h1>
        </div>
        <p class="coach">Coach : {{$team[0]->coach}}</p>
    </div>
    <p class="teamtext">{{$team[0]->description}}</p>
    <div class="playerdiv">
        @foreach($team as $player)
        <div class="players">
            <img class="player" src="{{ '../img/teams/'.$player->img_player }}">
            <p class="playername">{{$player->pseudo_player}}</p>
        </div>
        @endforeach
    </div>
</div>
@endsection