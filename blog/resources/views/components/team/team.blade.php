@extends('layouts.webtemplate')
<?php
$composant = 'team';
$dir = '../resources/views/components/' . $composant . '/';

?>

@section('css')
<link rel="stylesheet" href="<?=$dir . $composant?>style.css">
@endsection

@section('js')
<script type="text/javascript" src="<?=$dir . $composant?>script.js"></script>
@endsection

@section('html')
@endsection