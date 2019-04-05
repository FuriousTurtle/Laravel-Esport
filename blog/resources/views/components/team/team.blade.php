@extends('layouts.webtemplate')
<?php
$composant = 'team';
$dir = '../resources/views/components/' . $composant . '/';

?>

@section('css')
<link rel="stylesheet" href="{{ asset('css/teamstyle.css') }}">
@endsection

@section('js')
<script type="text/javascript" src="<?=$dir . $composant?>script.js"></script>
@endsection

@section('html')
<?php
print_r($team);
?>
@endsection