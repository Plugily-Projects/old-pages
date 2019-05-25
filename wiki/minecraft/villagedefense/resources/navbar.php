<nav class="navbar navbar-expand navbar-dark bg-dark fixed-nav-index">
    <a class="navbar-brand text-truncate" href="#">
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