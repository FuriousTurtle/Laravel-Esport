@extends('layouts.webtemplate')

@section('css')
<link rel="stylesheet" href="{{ asset('css/teamstyle.css') }}">
@endsection

@section('js')
<script type="text/javascript" src="{{ asset('js/teamscript.js"}}></script>
@endsection

@section('html')
<?php

print_r($team);

?>
@endsection