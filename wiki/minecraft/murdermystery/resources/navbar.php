<nav class="navbar navbar-expand navbar-dark bg-dark fixed-nav-index">
  <a class="navbar-brand text-truncate" href="index.php">
    <img src="https://plajer.xyz/images/favicon.php?type=navbar" width="30" height="30" class="d-inline-block align-top" alt="">
    <span class="d-none d-sm-inline-block">Plajer's Lair Wiki</span>
    <span class="d-sm-none">Wiki</span>
  </a>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img src="<?php echo getLocaleFlag(); ?>"> <?php echo localize("Wiki.Global.Language-Name"); ?>
        </a>
        <div class="dropdown-menu dropdown-menu-right p-1" style="min-width: 7.5rem" aria-labelledby="navbarDropdown">
            <a class="dropdown-item p-1" onclick="setLocale('en-GB')"><img class="flag-gb" src="https://static.plajer.xyz/img/flag_placeholder_invisible.png"> English</a>
            <a class="dropdown-item p-1" onclick="setLocale('cs-CZ')"><img class="flag-cs" src="https://static.plajer.xyz/img/flag_placeholder_invisible.png"> Čeština</a>
            <a class="dropdown-item p-1" onclick="setLocale('de-DE')"><img class="flag-de" src="https://static.plajer.xyz/img/flag_placeholder_invisible.png"> Deutsch</a>
            <a class="dropdown-item p-1" onclick="setLocale('es-ES')"><img class="flag-es" src="https://static.plajer.xyz/img/flag_placeholder_invisible.png"> Español</a>
            <a class="dropdown-item p-1" onclick="setLocale('fr-FR')"><img class="flag-fr" src="https://static.plajer.xyz/img/flag_placeholder_invisible.png"> Français</a>
            <a class="dropdown-item p-1" onclick="setLocale('hu-HU')"><img class="flag-hu" src="https://static.plajer.xyz/img/flag_placeholder_invisible.png"> Magyar</a>
            <a class="dropdown-item p-1" onclick="setLocale('nl-NL')"><img class="flag-nl" src="https://static.plajer.xyz/img/flag_placeholder_invisible.png"> Nederlands</a>
            <a class="dropdown-item p-1" onclick="setLocale('pl-PL')"><img class="flag-pl" src="https://static.plajer.xyz/img/flag_placeholder_invisible.png"> Polski</a>
            <a class="dropdown-item p-1" onclick="setLocale('ro-RO')"><img class="flag-ro" src="https://static.plajer.xyz/img/flag_placeholder_invisible.png"> Română</a>
            <a class="dropdown-item p-1" onclick="setLocale('ru-RU')"><img class="flag-ru" src="https://static.plajer.xyz/img/flag_placeholder_invisible.png"> Pусский</a>
            <a class="dropdown-item p-1" onclick="setLocale('th-TH')"><img class="flag-th" src="https://static.plajer.xyz/img/flag_placeholder_invisible.png"> ภาษาไทย</a>
            <a class="dropdown-item p-1" onclick="setLocale('zh-CN')"><img class="flag-cn" src="https://static.plajer.xyz/img/flag_placeholder_invisible.png"> 简体中文</a>
            <a class="dropdown-item p-1" onclick="setLocale('zh-TW')"><img class="flag-tw" src="https://static.plajer.xyz/img/flag_placeholder_invisible.png"> 繁體中文</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
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