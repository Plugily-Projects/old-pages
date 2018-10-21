<?php
include_once("inc/tracking.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Plajer's Lair translation project</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.9/css/mdb.min.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="inc/css/bootstrap-4.1.3.min.css">

    <link rel="icon" sizes="192x192" href="inc/img/favicon/favicon-mobile.png">
    <link rel="shortcut icon" type="image/x-icon" href="inc/img/favicon/favicon.ico">

    <style>
        body {
            background: url("https://i.imgur.com/kOzGO9k.png");
        }

        .vertically-center {
            position: relative;
            width: 100%;
            top: 60px;
        }

        .card-deck a {
            text-decoration: none;
            color: black;
        }

        .jumbotron {
            background-image: url("https://i.imgur.com/pfDZBp5.png"), url("https://i.imgur.com/pfDZBp5.png"), url("https://i.imgur.com/pfDZBp5.png");
            background-repeat: no-repeat, repeat, no-repeat;
            background-position: center bottom, center top, right top;
        }

        .fixed-card {
            min-width: 200px !important;
            max-width: 250px !important;
            border-radius: 0;
            margin-bottom: .5rem !important;
            margin-right: .5rem !important;
            margin-left: .5rem !important;
            box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .075) !important;
            text-align: center !important;
        }

        .corner-ribbon{
            width: 230px;
            background: #2f2f2f;
            color: #fff;
            position: fixed;
            text-align: center;
            bottom: 45px;
            line-height: 40px;
            z-index: 100;
        }

        .corner-ribbon.right{
            right: -50px;
            left: auto;
            -ms-transform: rotate(-45deg);
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
        }
    </style>

</head>
<body>
<nav class="navbar navbar-expand navbar-dark bg-dark fixed-nav-index">
    <a class="navbar-brand text-truncate" href="#">
        <img src="https://i.imgur.com/gDyj2on.png" width="30" height="30" class="d-inline-block align-top" alt="">
        Plajer's Lair beta tests program
    </a>
</nav>
<div class="container-fluid vertically-center">
    <a target="_blank" href="https://translate.plajer.xyz" class="corner-ribbon right" style="text-decoration: none; color:white">Translate our projects</a>
    <div class="row justify-content-center">
        <div class="col-xl-8 col-lg-9 col-md-10 col-12">
            <div class="jumbotron text-center mb-3 py-5">
                <h1>Join beta program now!</h1>
                <h4 class="text-muted">Check out all the benefits</h4>
            </div>
            <div class="card-deck justify-content-center align-items-center">
                <div class="card fixed-card">
                    <a target="_blank" href="https://discord.gg/zJpyV9U" class="card-body">
                        <img src="https://i.imgur.com/Nwbb1Fc.png" width="90" height="90" class="d-inline-block align-top" alt="">
                    </a>
                    <div class="card-footer px-1">
                        <h5 class="card-title">Squash bugs before official release!</h5>
                        <div class="px-2">Participate in <strong>beta program</strong> and help us squashing bugs and other problems before final release!</div>
                    </div>
                </div>

                <div class="card fixed-card">
                    <a target="_blank" href="https://discord.gg/zJpyV9U" class="card-body">
                        <img src="https://i.imgur.com/24uXcOO.png" width="90" height="90" class="d-inline-block align-top" alt="">
                    </a>
                    <div class="card-footer">
                        <h5 class="card-title">Join the group of super insiders!</h5>
                        Unlock access to cool betas and pre release versions of our software while being in <strong>beta program</strong>!
                    </div>
                </div>

                <div class="card fixed-card">
                    <a target="_blank" href="https://discord.gg/zJpyV9U" class="card-body">
                        <img src="https://i.imgur.com/ui5pPuc.png" width="90" height="90" class="d-inline-block align-top" alt="">
                    </a>
                    <div class="card-footer">
                        <h5 class="card-title">Be heard - your ideas matters!</h5>
                        Participating in <strong>beta program</strong> allows you to impact on the development of our projects!
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-6 col-12">
            <a target="_blank" href="https://discord.gg/zJpyV9U" style="text-decoration: none !important; color: black !important;">
                <h2 class="jumbotron jumbotron-fluid text-center mt-2">Join now!</h2>
            </a>
        </div>
    </div>
</div>
</body>
</html>