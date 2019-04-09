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

foreach($teams as $row){

$logo = 'logo';
$team_name = 'team_name';
echo '<ul><li class="logo"><img width="50px" height="50px" src="/laravel-esport/blog/public/img/teams/'.$row->$logo.'"><li>';
echo $row->$team_name.'</ul>';
}

?>
</div>
@endsection