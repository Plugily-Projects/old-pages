<?php
include_once("inc/json_localization.php");
?>

<!DOCTYPE html>
<html>
<head>
  <title>Plajer's Lair</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
  <meta name="keywords" content="minecraft plugins, minecraft, village defense, build battle, murder mystery, plugin spigot">
  <meta name="author" content="Plajer">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
  <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.9/css/mdb.min.css" rel="stylesheet">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link href="inc/css/timeline.min.css" rel="stylesheet" type="text/css" media="all"/>
  <link href="inc/css/social_buttons.min.css" rel="stylesheet" type="text/css" media="all"/>


  <link rel="icon" sizes="192x192" href="inc/img/favicon/favicon-mobile.png">
  <link rel="shortcut icon" type="image/x-icon" href="inc/img/favicon/favicon.ico">
  <link rel="apple-touch-icon" href="inc/img/favicon/favicon-mobile.png">
  <meta name="theme-color" content="#343a40">
  <meta name="msapplication-TileColor" content="#343a40">

  <style>
    .fixed-nav-index {
      z-index: 999;
    }

    .card-deck a {
      text-decoration: none;
      color: black;
    }

    .modal a {
      text-decoration: none;
      color: black;
    }

    body {
      font-family: 'Roboto', sans-serif !important;
    }

    @font-face {
      font-family: 'poetsen_oneregular';
      src: url('inc/css/poetsenone-regular-webfont.woff') format('woff');
      font-weight: normal;
      font-style: normal;

    }

    .caption {
      position: absolute;
      margin: 0;
      top: 45%;
      left: 50%;
      margin-right: -50%;
      transform: translate(-50%, -50%);
    }

    .font {
      font-family: poetsen_oneregular, arial, sans-serif;
      font-size: 4.5rem;
      color: white;
    }

    .subfont {
      font-size: 2.5rem;
    }

    body {
      font-weight: 300 !important;
    }

    .card-footer {
      border-top: none !important;
    }

    @media only screen and (max-width: 600px) {
      .font {
        font-size: 3rem;
      }

      .subfont {
        font-size: 1.5rem;
      }
    }

    .slant {
      transform: skewY(-3deg);
    }

    .slant-rev {
      transform: skewY(3deg);
    }

    .navbar-no-shadow {
      box-shadow: none;
    }

    .bg-dark {
      -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12) !important;
      box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12) !important;
    }

    .scroll-navbar {
      -webkit-transition: background 0.5s ease-in-out, padding 0.5s ease-in-out;
      -o-transition: background 0.5s ease-in-out, padding 0.5s ease-in-out;
      transition: background 0.5s ease-in-out, padding 0.5s ease-in-out;
      padding-top: 12px !important;
      padding-bottom: 12px !important;
    }

    .card {
      max-width: 270px;
      min-width: 215px;
    }

    .parallax-background {
      background-image: url('./inc/img/index/background_bck.png');
      height: 32rem;
      transform-origin: 0;
      width: 100%;
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }
  </style>
</head>
<body data-spy="scroll" data-target=".navbar" class="bg-light">
<nav class="navbar navbar-expand-lg navbar-dark navbar-no-shadow fixed-nav-index fixed-top scroll-navbar">
  <div class="navbar-brand"><img src="https://plajer.xyz/images/favicon.php?type=navbar" width="30" height="30" class="d-inline-block align-top mr-1" alt=""> Plajer's Lair</div>
  <button class="navbar-toggler" type="button" data-toggle="modal" data-target="#myModal" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item mx-2">
        <a class="nav-link" target="_blank" href="https://beta.plajer.xyz"><i class="fas fa-flask mr-1"></i> <?php echo localize("Command-Center.Buttons.Beta-Program");?></a>
      </li>
      <li class="nav-item mx-2">
        <a class="nav-link" target="_blank" href="https://translate.plajer.xyz"><i class="fas fa-language mr-1"></i> <?php echo localize("Command-Center.Buttons.Translate-Us");?></a>
      </li>
      <li class="nav-item mx-2">
        <a class="nav-link" target="_blank" href="https://discordapp.com/invite/UXzUdTP"><i class="fab fa-discord mr-1"></i> <?php echo localize("Command-Center.Buttons.Discord-Server");?></a>
      </li>
      <li class="nav-item active mx-2">
        <a class="nav-link" target="_blank" href="https://github.com/Plajer"><i class="fab fa-github mr-1"></i> <?php echo localize("Command-Center.Buttons.Github-Profile");?></a>
      </li>
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
    </ul>
  </div>
</nav>
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header mx-3">
        <div class="navbar-brand"><img src="https://plajer.xyz/images/favicon.php?type=navbar" width="30" height="30" class="d-inline-block align-top mr-1" alt=""> Plajer's Lair</div>
        <button type="button" class="close" data-dismiss="modal"><i class="fas fa-times"></i></button>
      </div>
      <div class="modal-body mx-0 px-0" style="font-weight: 300">
        <a class="nav-link" target="_blank" href="https://beta.plajer.xyz"><i class="fas fa-flask mr-1"></i> <?php echo localize("Command-Center.Buttons.Beta-Program");?></a>
        <a class="nav-link" target="_blank" href="https://translate.plajer.xyz"><i class="fas fa-language mr-1"></i> <?php echo localize("Command-Center.Buttons.Translate-Us");?></a>
        <a class="nav-link" target="_blank" href="https://discordapp.com/invite/UXzUdTP"><i class="fab fa-discord mr-1"></i> <?php echo localize("Command-Center.Buttons.Discord-Server");?></a>
        <a class="nav-link" target="_blank" href="https://github.com/Plajer"><i class="fab fa-github mr-1"></i><?php echo localize("Command-Center.Buttons.Github-Profile");?></a>
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
      </div>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-12 p-0 mb-3 text-center">
      <div class="parallax-background"></div>
      <div class='bg-light slant-rev' style='height: 100%; width: 100%; position: absolute'></div>
      <div class='bg-light slant' style='height: 100%; width: 100%; position: absolute'></div>
      <div class="caption font">
        Plajer's Lair
        <br/>
        <div class="subfont"><?php echo localize("Command-Center.Motto.Creating-Better-Future");?></div>
      </div>
    </div>
    <div class="col-12 align-items-center justify-content-center text-center mb-4">
      <div class="display-md-3 display-4"><i class="fas fa-book"></i> <?php echo localize("Command-Center.Projects");?></div>
    </div>
    <div class="col-md-9 col-11 mb-3" id="projects">
      <div class="card-deck row p-0 m-0 justify-content-center align-content-center">
        <a target="_blank" href="https://www.spigotmc.org/resources/41869/">
          <div class="card mx-2 mb-3" style="min-width: 200px">
            <img class="card-img-top" src="inc/img/projects/village_defense.jpg" alt="Village Defense image">
            <div class="card-body text-center">
              <h4 class="card-title"><a href="https://www.spigotmc.org/resources/41869/" target="_blank">Village
                  Defense</a></h4>
              <p class="card-text">Protect defenseless villagers from hordes of overpowered and undead
                zombies!</p>
            </div>
            <p class="card-footer text-muted my-0" id="downloads-41869">0 downloads<br class="mb-2"/>Cooperation minigame</p>
          </div>
        </a>

        <a target="_blank" href="https://www.spigotmc.org/resources/44703/">
          <div class="card mx-2 mb-3">
            <img class="card-img-top" src="inc/img/projects/build_battle.jpg" alt="Build Battle image">
            <div class="card-body text-center">
              <h4 class="card-title"><a href="https://www.spigotmc.org/resources/44703/" target="_blank">Build
                  Battle</a></h4>
              <p class="card-text">Compete against other players in a build battle minigame. Build the
                best you can to win!</p>
            </div>
            <p class="card-footer text-muted my-0" id="downloads-44703">0 downloads<br class="mb-2"/>Building minigame</p>
          </div>
        </a>

        <a target="_blank" href="https://www.spigotmc.org/resources/66614/">
          <div class="card mx-2 mb-3">
            <img class="card-img-top" src="inc/img/projects/murder_mystery.jpg" alt="Murder Mystery image">
            <div class="card-body text-center">
              <h4 class="card-title"><a href="https://beta.plajer.xyz" target="_blank">Murder Mystery</a>
              </h4>
              <p class="card-text">Be the detective and kill the murderer! Survive as innocent till the
                end.</p>
            </div>
            <p class="card-footer text-muted my-0" id="downloads-66614">0 downloads<br class="mb-2"/>Cooperation minigame</p>
          </div>
        </a>

        <a target="_blank" href="https://www.spigotmc.org/resources/pi%C3%B1ata-1-8-1-12.46655/">
          <div class="card mx-2 mb-3">
            <img class="card-img-top" src="inc/img/projects/pinata.png" alt="Piñata image">
            <div class="card-body text-center">
              <h4 class="card-title"><a href="https://www.spigotmc.org/resources/46655/" target="_blank">Piñata</a>
              </h4>
              <p class="card-text">Buy pinata, break it and get configured drops - pretty simple. Variety
                of options to configure for your needs.</p>
            </div>
            <p class="card-footer text-muted my-0" id="downloads-46655">0 downloads<br class="mb-2"/>Crate like plugin</p>
          </div>
        </a>

        <a target="_blank" href="https://github.com/Plajer-Lair/Game_Bot">
          <div class="card mx-2 mb-3">
            <img class="card-img-top" src="inc/img/projects/game_bot.jpg" alt="GameBot image">
            <div class="card-body text-center">
              <h4 class="card-title"><a href="https://github.com/Plajer-Lair/Game_Bot" target="_blank">Game Bot</a></h4>
              <p class="card-text">Inspired by Shadow Fight mobile game discord bot. Duels, raids, weapons
                and
                much more!</p>
            </div>
            <p class="card-footer text-muted my-0">Still in progress<br class="mb-2"/>Discord PvP bot</p>
          </div>
        </a>

        <a target="_blank" href="https://uservoice.plajer.xyz/">
          <div class="card mx-2 mb-3">
            <img class="card-img-top" src="inc/img/projects/user_voice.png" alt="UserVoice image">
            <div class="card-body text-center">
              <h4 class="card-title"><a href="https://uservoice.plajer.xyz/" target="_blank">User Voice</a></h4>
              <p class="card-text">Login via Discord and create ideas for various projects or vote for current ideas.
                Rich management options!
            </div>
            <p class="card-footer text-muted my-0" id="uservoice-stats">0 users, 0 ideas<br class="mb-2"/>Project ideas website
          </div>
        </a>

      </div>
    </div>
    <div class="col-12 align-items-center justify-content-center text-center mb-4">
      <div class="display-md-3 display-4"><i class="fas fa-user-circle"></i> <?php echo localize("Command-Center.About-Me");?></div>
    </div>
    <div class="col-xl-8 col-lg-9 col-md-10 col-11 my-3" id="about">

      <p class="text-center px-5">Hi I am Plajer, I am 17 year old guy from Poland. I'm <strong>open source and
          localization lover</strong>. My goal is to create open source and unique projects and
        my motto is "Providing unique content". I started programming in Java about one year ago. I created some
        cool Minecraft plugins which can be downloaded <a href="https://www.spigotmc.org/resources/authors/plajer.423193/" target="_blank">here</a>.</p>
    </div>

    <div class="col-12 align-items-center justify-content-center text-center mb-4">
      <div class="display-md-3 display-4"><i class="fas fa-code"></i> <?php echo localize("Command-Center.Workflow");?></div>
    </div>
    <div class="col-xl-8 col-lg-9 col-md-10 col-11 my-3" id="work">

      <ul class="timeline">
        <li>
          <div class="timeline-badge"><i class="fas fa-code"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">Prepare the code</h4>
            </div>
            <div class="timeline-body">
              <p>We're preparing an idea how the code structure should look and starting to code it.</p>
            </div>
          </div>
        </li>
        <li class="timeline-inverted">
          <div class="timeline-badge warning"><i class="fas fa-terminal"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">Test and catch bugs</h4>
            </div>
            <div class="timeline-body">
              <p>After we code the basics we test everything at localhost, hunt for bugs and other
                problems.</p>
              <p>At this stage we're preparing and fixing the code till it's ready.</p>
            </div>
          </div>
        </li>
        <li>
          <div class="timeline-badge danger"><i class="fas fa-vial"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">Deliver the beta</h4>
            </div>
            <div class="timeline-body">
              <p>After tests project is pushed to the beta program, you can test new
                features and look for possible bugs at this stage.</p>
              <p>Want to test our beta projects? Join beta program <strong>for free</strong>, just open
                this page <a href="https://beta.plajer.xyz/"
                             target="_blank">https://beta.plajer.xyz/</a></p>
            </div>
          </div>
        </li>
        <li class="timeline-inverted">
          <div class="timeline-badge info"><i class="fas fa-language"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">Engage translators</h4>
            </div>
            <div class="timeline-body">
              <p>Once beta versions were tested we're posting all project messages to
                POEditor translation group. Contributors all over the world translate the project into
                languages which you can use!</p>
              <p>You can always join and help translating our projects <strong>for free</strong>, just
                open this page <a href="https://translate.plajer.xyz/" target="_blank">https://translate.plajer.xyz/</a>
              </p>
            </div>
          </div>
        </li>
        <li>
          <div class="timeline-badge success"><i class="fas fa-upload"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">Release finished product</h4>
            </div>
            <div class="timeline-body">
              <p>Full project is released to the public once pre releases are tested and translations are
                ready. At this stage you receive nice software from us :)</p>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>
<footer class="page-footer font-small bg-dark">
  <div class="container">
    <div class="row">
      <div class="col-md-12 py-4">
        <div class="mb-5 flex-center">
          <a href="https://discordapp.com/invite/UXzUdTP"
             class="btn-social btn-discord fab fa-discord fa-lg white-text mr-md-4 mr-2 fa-x" style="text-decoration: none"> </a>
          <a href="https://www.youtube.com/channel/UCVZt8ClHI1YE3KK-iRf2W7A"
             class="btn-social btn-youtube fab fa-youtube fa-lg white-text mr-md-4 mr-2 fa-x" style="text-decoration: none"> </a>
          <a href="https://github.com/Plajer" class="btn-social btn-github fab fa-github fa-lg white-text mr-md-4 mr-2 fa-x"
             style="text-decoration: none"> </a>
          <a href="https://beta.plajer.xyz"
             class="btn-social btn-beta mr-md-4 mr-2 fas fa-vial fa-lg white-text fa-x" style="text-decoration: none"> </a>
          <a href="https://steamcommunity.com/id/Plajere/"
             class="btn-social btn-steam fab fa-steam-square fa-lg white-text fa-x"
             style="text-decoration: none"> </a>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-copyright text-center py-3">© 2019 Plajer's Lair</div>
</footer>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $('body').scrollspy({target: ".navbar"})
    $(function () {
        $(document).scroll(function () {
            var $nav = $(".navbar");
            $nav.toggleClass('bg-dark', $(this).scrollTop() >= $("#projects").position().top - 300);
        });
    });
    $(function () {
        var SCROLLING_NAVBAR_OFFSET_TOP = 300;
        $(window).on('scroll', function () {
            var $navbar = $('.navbar');

            if ($navbar.length) {
                if ($navbar.offset().top > SCROLLING_NAVBAR_OFFSET_TOP) {
                    $('.scroll-navbar').addClass('top-nav-collapse');
                } else {
                    $('.scroll-navbar').removeClass('top-nav-collapse');
                }
            }
        });
    });
    getDownloads(41869);
    getDownloads(44703);
    getDownloads(46655);
    getDownloads(66614);
    getUserVoiceStats();

    function getDownloads(id) {
        $.ajax({
            url: "https://api.spiget.org/v2/resources/" + id,
            async: true,
            dataType: 'json',
            cache: true,
            success: function (data) {
                let str = document.getElementById('downloads-' + id).innerHTML;
                document.getElementById('downloads-' + id).innerHTML = str.replace("0", data.downloads);
            }
        });
    }


    function getUserVoiceStats() {
        $.ajax({
            url: "https://uservoice.plajer.xyz/service/stats.php",
            async: false,
            dataType: 'json',
            cache: true,
            success: function (data) {
                let str = document.getElementById('uservoice-stats').innerHTML;
                str = str.replace("0 users", data.users + " users");
                str = str.replace("0 ideas", data.ideas + " ideas");
                document.getElementById('uservoice-stats').innerHTML = str;
            }
        });
    }

    function setLocale(locale) {
        let date = new Date();
        date.setTime(date.getTime() + 30 * 6 * 24 * 60 * 60 * 1000 /* 6 months */);
        document.cookie = "preferred_locale=" + locale + "; expires=" + date.toUTCString() + ";path=/;domain=.plajer.xyz";
        window.location.reload(false);
    }
</script>
</body>

</html>