@extends('layouts.webtemplate')

@section('css')
<link rel="stylesheet" href="{{ asset('css/teamsstyle.css') }}">
@endsection

@section('js')
<script type="text/javascript" src="{{ asset('js/teamsscript.js') }}></script>
@endsection

@section('html')
<?php
print_r($teams);
?>
@endsection