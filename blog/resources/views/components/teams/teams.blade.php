@extends('layouts.webtemplate')

@section('css')
<link rel="stylesheet" href="{{ asset('css/teamsstyle.css') }}">
@endsection

@section('js')
<script type="text/javascript" src="{{ asset('js/teamsscript.js') }}"></script>
@endsection

@section('html')
<div class="teams">
    <?php

foreach ($teams as $row) {

    $logo = 'logo';
    $team_name = 'team_name';
    echo '<div class="logo"><a href="{{route("team")}}"><img width="100px" height="100px" src="/laravel-esport/blog/public/img/teams/' . $row->$logo . '"><p>';
    echo $row->$team_name . '</p></a></div>';
}

?>
</div>
@endsection