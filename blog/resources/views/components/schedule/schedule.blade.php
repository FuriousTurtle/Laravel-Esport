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
        echo '<div class="teamline""><div class="team">' . $row->equip_name . '</div><div class="score">' . $row->$scoreteam;
    } else if ($i == 1) {
        $i = 0;
        echo '</div><div class="team">' . $row->equip_name . '</div></div>';
    }
    ;
}
?>
</div>

@endsection