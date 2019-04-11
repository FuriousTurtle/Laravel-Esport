@extends('layouts.webtemplate')

@section('css')
<link rel="stylesheet" href="{{ asset('css/teamsstyle.css') }}">
@endsection

@section('js')
<script type="text/javascript" src="{{ asset('js/teamsscript.js') }}"></script>
@endsection

@section('html')
<div class="teams">

    @foreach ($teams as $row)


    <div class="logo"><a href="{{ route('team',['id'=>$row->id]) }}"><img width="100px" height="100px"
                src="{{ 'img/teams/'.$row->logo }}">
            <p>{{ $row->team_name }}</p>
        </a>

    </div>

    @endforeach
</div>
@endsection