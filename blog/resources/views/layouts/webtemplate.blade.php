<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ESTournament</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/stylesheettemplate.css') }}">
    @yield('css')
    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC" rel="stylesheet">
    <script src="main.js"></script>
</head>

<body>

    <div class="header">
        <div class="brand"><img class="brandlogo" src="{{ asset('img/ESTlogo.png') }}"><a class="brandname"
                href='{{ route("accueil")}}'>BlueWolf Arena</a></div>
        <div class="sponsordiv">
            <p>SPONSORED BY</p>
            <img class="sponsorlogo" style='margin-top:7px;' width='60px' height='20px'
                src="{{ asset('img/benqlogo.png') }}">
            <img class="sponsorlogo" width='30px' height='30px' src="{{ asset('img/logitechlogo.png') }}">
            <img class="sponsorlogo" style="margin-top:-5px;" width='40px' height='50px'
                src="{{ asset('img/monsterlogo.png') }}">
            <img class="sponsorlogo" style="margin-bottom:20px;" width='35px' height='35px'
                src="{{ asset('img/omenlogo.png') }}">
            <img class="sponsorlogo" style="margin-bottom:20px;" width='35px' height='35px'
                src="{{ asset('img/razerlogo.png') }}">
            <img class="sponsorlogo" style="margin-bottom:20px;" width='50px' height='35px'
                src="{{ asset('img/steellogo.png') }}">
        </div>
    </div>

    <div class="menu">
        <div class="menulist">
            <a class="a2" href='{{ route("accueil")}}'>Accueil</a>
            <a class="a2" href='{{ route("schedule")}}'>Résultats semaine</a>
            <a class="a2">Classement</a>
            <a class="a2" href='{{ route("teams")}}'>Teams</a>
            <a class="a2">Fanstore</a>
            <a class="a2 alast">Médias</a>
        </div>
    </div>
    <div class="main">
        @yield('html')
    </div>

    <div class="footer">
        <div class="footer1">
            <h2>Liens utiles</h2>
            <a href="#">Leaguepedia</a>
            <a href="#">Wiki du jeu</a>
            <a href="#">Boutique partenaire</a>
            <a href="#">Support</a>
        </div>
        <div class="footer2">
            <p><b>146 Boulevard Saint-Germain<br>
                    75000 Paris, France</b></p>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d656.3169006345515!2d2.3365574292331375!3d48.85310729870544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e671d917d89fe1%3A0xbecfe77e0bfa83c0!2s146+Boulevard+Saint-Germain%2C+75006+Paris!5e0!3m2!1sfr!2sfr!4v1554450337942!5m2!1sfr!2sfr"
                width="250" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="footer3">
            <h2>Réseau sociaux</h2>
            <img src="{{ asset('img/facebook.png') }}">
            <img src="{{ asset('img/instagram.png') }}">
            <img src="{{ asset('img/youtube.png') }}">
            <img src="{{ asset('img/twitter.png') }}">
            <h2>Contactez-nous</h2>
            <p>contactus@bluewolf.info</p>
            <p>+33 77 48 86 01</p>
        </div>
    </div>
    @yield('js')
</body>

</html>