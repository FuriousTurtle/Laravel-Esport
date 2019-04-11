@extends('layouts.webtemplate')

@section('css')
<link rel="stylesheet" href="{{ asset('css/accueilstyle.css') }}">
@endsection

@section('js')
<script type="text/javascript" src="{{ asset('js/accueilscript.js') }}"></script>
@endsection

@section('html')
<div class="news">
    <h1>Nous entamons les quarts de finale.</h1>
    <img width="100%" style="margin-top:5px;" src="{{ asset('img/bannernews.jpg') }}">
    <p>Avec l'étonnante performance de NiP et FaZe lors des hutièmes, les quarts s'annoncent très intéressants ! <br>
        Fnatic,
        actuellement en position dominante, devra se montrer très solides face à ces adversaires qui basent leurs jeu
        sur
        l'aggro de site et les retakes agressives en CPL. <br>
        Espéront que la formation suédoise ne se fasse pas stomper sur un
        manque de préparation !</p>
</div>
<div class="news">
    <h1>Les stands de goodies ouverts !</h1>
    <img width="100%" style="margin-top:5px;" src="{{ asset('img/bannernews2.jpg') }}">
    <p>Nous venons d'officiellement ouvrir tout les stands de goodies de team dans l'enceinte de l'arena !<br>Vous êtes
        tous invités à venir profiter des pauses entre chaque match pour vous procurer les meilleurs produits à
        l'effigie de votre team préférée !</p>
</div>
<div class="news">
    <h1>La nourriture est accessible.</h1>
    <img width="100%" style="margin-top:5px;" src="{{ asset('img/bannernews3.jpg') }}">
    <p>Votre stand préféré, le stand de nourriture (entendez bien "saucisse avec de la moutarde sur une tranche de
        pain")
        est désormais ouvert sans interruption jusqu'à la fin de la journée.</p>
</div>
@endsection