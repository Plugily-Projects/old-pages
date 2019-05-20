<?php
include_once("inc/json_localization.php");
include_once("inc/tracking.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Plajer's Lair Beta Program</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.9/css/mdb.min.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="inc/css/bootstrap-4.1.3.min.css">

    <link rel="icon" sizes="192x192" href="https://plajer.xyz/images/favicon.php?type=favicon-mobile">
    <link rel="shortcut icon" type="image/x-icon" href="https://plajer.xyz/images/favicon.php?type=favicon">

    <style>
        body {
            background: url("https://i.imgur.com/kOzGO9k.png");
            font-family: 'Roboto', sans-serif !important;
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

        .corner-ribbon {
            width: 230px;
            background: #2f2f2f;
            color: #fff;
            position: fixed;
            text-align: center;
            bottom: 45px;
            line-height: 40px;
            z-index: 100;
        }

        .corner-ribbon.right {
            right: -50px;
            left: auto;
            -ms-transform: rotate(-45deg);
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
        }
    </style>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-nav-index">
    <a class="navbar-brand text-truncate" href="#">
        <img src="https://plajer.xyz/images/favicon.php?type=navbar" width="30" height="30" class="d-inline-block align-top" alt="">
        <span class="d-none d-sm-inline-block">Plajer's Lair Beta Program</span>
        <span class="d-sm-none">Beta Program</span>
    </a>
    <button class="navbar-toggler px-1" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="<?php echo getLocaleFlag(); ?>"> <?php echo localize("Wiki.Global.Language-Name"); ?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" onclick="setLocale('en-GB')"><img src="https://plajer.xyz/shared/flags/gb.png"> English</a>
                    <a class="dropdown-item" onclick="setLocale('cs-CZ')"><img src="https://plajer.xyz/shared/flags/cs.png"> Čeština</a>
                    <a class="dropdown-item" onclick="setLocale('de-DE')"><img src="https://plajer.xyz/shared/flags/de.png"> Deutsch</a>
                    <a class="dropdown-item" onclick="setLocale('es-ES')"><img src="https://plajer.xyz/shared/flags/es.png"> Español</a>
                    <a class="dropdown-item" onclick="setLocale('fr-FR')"><img src="https://plajer.xyz/shared/flags/fr.png"> Français</a>
                    <a class="dropdown-item" onclick="setLocale('hu-HU')"><img src="https://plajer.xyz/shared/flags/hu.png"> Magyar</a>
                    <a class="dropdown-item" onclick="setLocale('nl-NL')"><img src="https://plajer.xyz/shared/flags/nl.png"> Nederlands</a>
                    <a class="dropdown-item" onclick="setLocale('pl-PL')"><img src="https://plajer.xyz/shared/flags/pl.png"> Polski</a>
                    <a class="dropdown-item" onclick="setLocale('ro-RO')"><img src="https://plajer.xyz/shared/flags/ro.png"> Română</a>
                    <a class="dropdown-item" onclick="setLocale('ru-RU')"><img src="https://plajer.xyz/shared/flags/ru.png"> Pусский</a>
                    <a class="dropdown-item" onclick="setLocale('th-TH')"><img src="https://plajer.xyz/shared/flags/th.png"> ภาษาไทย</a>
                    <a class="dropdown-item" onclick="setLocale('zh-CN')"><img src="https://plajer.xyz/shared/flags/cn.png"> 简体中文</a>
                    <a class="dropdown-item" onclick="setLocale('zh-TW')"><img src="https://plajer.xyz/shared/flags/tw.png"> 繁體中文</a>
                </div>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="https://plajer.xyz"><i class="fa fa-home mr-1"></i> Command Center</a>
            </li>
        </ul>
    </div>
</nav>
<div class="container-fluid vertically-center">
    <a target="_blank" href="https://translate.plajer.xyz" class="corner-ribbon right d-none d-sm-block" style="text-decoration: none; color:white">Translate our projects</a>
    <div class="row justify-content-center">
        <div class="col-xl-8 col-lg-9 col-md-10 col-12">
            <div class="jumbotron text-center mb-3 py-5">
                <h1><?php echo localize("Beta.Join-Beta-Now"); ?></h1>
                <h4 class="text-muted"><?php echo localize("Beta.Join-Beta-Now.Benefits"); ?></h4>
            </div>
            <div class="card-deck justify-content-center align-items-center">
                <div class="card fixed-card">
                    <a target="_blank" href="https://discord.gg/zJpyV9U" class="card-body">
                        <img src="https://i.imgur.com/Nwbb1Fc.png" width="90" height="90" class="d-inline-block align-top" alt="">
                    </a>
                    <div class="card-footer px-1">
                        <h5 class="card-title"><?php echo localize("Beta.Benefit.Squash-Em");?></h5>
                        <?php echo localize("Beta.Benefit.Squash-Em.Description");?>
                    </div>
                </div>

                <div class="card fixed-card">
                    <a target="_blank" href="https://discord.gg/zJpyV9U" class="card-body">
                        <img src="https://i.imgur.com/24uXcOO.png" width="90" height="90" class="d-inline-block align-top" alt="">
                    </a>
                    <div class="card-footer">
                        <h5 class="card-title"><?php echo localize("Beta.Benefit.Join-Insiders");?></h5>
                        <?php echo localize("Beta.Benefit.Join-Insiders.Description");?>
                    </div>
                </div>

                <div class="card fixed-card">
                    <a target="_blank" href="https://discord.gg/zJpyV9U" class="card-body">
                        <img src="https://i.imgur.com/ui5pPuc.png" width="90" height="90" class="d-inline-block align-top" alt="">
                    </a>
                    <div class="card-footer">
                        <h5 class="card-title"><?php echo localize("Beta.Benefit.Be-Heard");?></h5>
                        <?php echo localize("Beta.Benefit.Be-Heard.Description");?>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-6 col-12">
            <a target="_blank" href="https://discord.gg/zJpyV9U" style="text-decoration: none !important; color: black !important;">
                <h2 class="jumbotron jumbotron-fluid text-center mt-2"><?php echo localize("Beta.Join-Now"); ?></h2>
            </a>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
    function setLocale(locale) {
        let date = new Date();
        date.setTime(date.getTime() + 30 * 6 * 24 * 60 * 60 * 1000 /* 6 months */);
        document.cookie = "preferred_locale=" + locale + "; expires=" + date.toUTCString() + ";path=/;domain=.plajer.xyz";
        window.location.reload(false);
    }
</script>
</body>
</html>