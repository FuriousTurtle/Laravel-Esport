@extends('layouts.webtemplate')

@section('css')
<link rel="stylesheet" href="{{ asset('css/playerstyle.css') }}">
@endsection

@section('js')
<script type="text/javascript" src="{{ asset('js/playerscript.js')}}"></script>
@endsection

@section('html')

<div class="player1">
       <div class="logoname">
              <img class="logo" width="75px" height="75px" src="{{ '../img/teams/'.$player[0]->logo }}">
              <h1>{{$player[0]->pseudo_player}}</h1>
       </div>
       <div class="content">
       <div class="descriptif">
              <p><span class="bold">Nom</span> : {{$player[0]->name_player}}</p>
              <p><span class="bold">Date de naissance</span> : {{$player[0]->birth_player}}</p>
              <p><span class="bold">Pays</span> : {{$player[0]->country_player}}</p>
              <p><span class="bold">Team</span> : {{$player[0]->team_name}}</p>
              <p><span class="bold">Rôles</span> : {{$player[0]->roles_player}}</p>
       </div>
              <div class="image">
              <img class="picture" width="250px" height="250px" src="{{ '../img/teams/'.$player[0]->img_player }}">
       </div>
       </div>

    </div>


</div>

@endsection