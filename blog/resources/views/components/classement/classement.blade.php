@extends('layouts.webtemplate')

@section('css')
<link rel="stylesheet" href="{{ asset('css/classementstyle.css') }}">
@endsection

@section('js')
<script type="text/javascript" src="{{ asset('js/classementscript.js') }}"></script>
@endsection

@section('html')
<div class="classement">

@foreach($classement as $row)

<div class="team">
<img width="100px" height="100px" src="{{ 'img/teams/'.$row->logo }}"> <p class="teamName">{{ $row->team_name}}</p><p class="teamScore"> ({{ $row->total_score}} points) </p>
</div>

@endforeach
</div>
@endsection