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

<br><br>
<?php
$i=0;
foreach($result as $row){
    if($i == 0){
        $i++;
        $scoreteam = 'score_team'.$i;
        echo'<p style="display:inline;">'.$row->equip_name.' - '.$row->$scoreteam;
    }
    else if($i == 1){
        $i++;
        echo ' - '.$row->equip_name.'</p>';
    }
if($i == 2){
    echo'<br><br>';
    $i=0;
};
}
?>

@endsection