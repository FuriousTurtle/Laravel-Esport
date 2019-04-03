<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ESTournament</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="./../resources/sass/stylesheettemplate.css">
    @yield('css')
    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC" rel="stylesheet">
    <script src="main.js"></script>
</head>

<body>

    <div class="header">
        <div class="brand"><img class="brandlogo" src="./../resources/img/ESTlogo.png"><a class="brandname"
                href="#">Electronic Sports
                Tournament</a></div>
        <div class="sponsordiv">
            <img class="sponsorlogo" style='margin-top:27px;' width='60px' height='20px'
                src="./../resources/img/benqlogo.png">
            <img class="sponsorlogo" width='30px' height='30px' src="./../resources/img/logitechlogo.png">
            <img class="sponsorlogo" style='margin-top:15px;' width='40px' height='50px'
                src="./../resources/img/monsterlogo.png">
            <img class="sponsorlogo" width='35px' height='35px' src="./../resources/img/omenlogo.png">
            <img class="sponsorlogo" width='35px' height='35px' src="./../resources/img/razerlogo.png">
            <img class="sponsorlogo" width='50px' height='35px' src="./../resources/img/steellogo.png">
        </div>
    </div>

    <div class="menu">
        <div class="menulist">
            <a href=''>ABCDE</a>
            <a href='{{ route("schedule")}}'>ABCDE</a>
            <a>ABCDE</a>
        </div>
    </div>
    <div class="main">
        @yield('html')
    </div>

    <div class="footer">
    </div>
    @yield('js')
</body>

</html>