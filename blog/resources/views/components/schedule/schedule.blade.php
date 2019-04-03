@extends('layouts.webtemplate')
<?php
$composant = 'schedule';
$dir = '../resources/views/components/' . $composant . '/';
?>

@section('css')
<link rel="stylesheet" href="<?=$dir . $composant?>style.css">
@endsection

@section('js')
<script type="text/javascript" src="<?=$dir . $composant?>script.js"></script>
@endsection

@section('html')
<p>MARTIN</p>
<p>KHAM</p>
<p>ISSOU</p>
<p>MOULE</p>
<p>FRITES</p>
<p>ABEILLE</p>
<p>MOUFLE</p>
@endsection