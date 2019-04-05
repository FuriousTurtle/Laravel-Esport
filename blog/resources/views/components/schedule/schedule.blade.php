@extends('layouts.webtemplate')

@section('css')
<link rel="stylesheet" href="{{ asset('css/schedulestyle.css') }}">
@endsection

@section('js')
<script type="text/javascript" src="{{ asset('js/schedulescript.js') }}"></script>
@endsection

@section('html')
<br><br>
<?php
$i = 0;
foreach ($result as $row) {
    if ($i == 0) {
        $i++;
        $scoreteam = 'score_team' . $i;
        echo '<p style="display:inline;">' . $row->equip_name . ' - ' . $row->$scoreteam;
    } else if ($i == 1) {
        $i++;
        echo ' - ' . $row->equip_name . '</p>';
    }
    if ($i == 2) {
        echo '<br><br>';
        $i = 0;
    }
    ;
}
?>

@endsection