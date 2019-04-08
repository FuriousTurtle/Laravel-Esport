@extends('layouts.webtemplate')

@section('css')
<link rel="stylesheet" href="{{ asset('css/schedulestyle.css') }}">
@endsection

@section('js')
<script type="text/javascript" src="{{ asset('js/schedulescript.js') }}"></script>
@endsection

@section('html')
<div class="schediv">
    <?php
$i = 0;
foreach ($result as $row) {
    if ($i == 0) {
        $i++;
        $scoreteam = 'score_team' . $i;
        $imglink1 = public_path().'/img/teams/'.$row->equip_name.'/'.$row->logo;
        $imglink2 = public_path().'/img/button1.jpg';
        echo($imglink2);
        echo '<div class="teamline""><div class="team team1"><img src="'.$imglink2.'">' . $row->equip_name . '</div><div class="score">' . $row->$scoreteam;
    } else if ($i == 1) {
        $i = 0;
        echo '</div><div class="team team2">' . $row->equip_name . '</div>';
        echo'<div class="date">'. $row->date.'</div></div>';
    };
}
?>
</div>

@endsection