<?php
include_once('../../json_localization.php');
include_once("../../tracking.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Plajer's Lair Wiki</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
    <link rel="stylesheet" href="../../markdown.css">
    <link rel="stylesheet" href="../../alerts.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.9/css/mdb.min.css" rel="stylesheet">

    <link rel="icon" sizes="192x192" href="../../img/faviconmobile.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../img/favicon.ico">
</head>
<body>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-xl-2 col-lg-1 col-0"></div>
        <div class="col-xl-7 col-lg-6 col-md-8 col-12">
            <h1 id="build-battle-3-addons">Build Battle 3 Addons</h1>
            <h2 id="table-of-contents">Table of contents</h2>
            <ul>
                <li><a href="https://github.com/Plajer-Lair/BuildBattle/wiki/Addons#bungee-signs-not-official">Bungee signs addon</a></li>
            </ul>
            <h2 id="bungee-signs-not-official-">Bungee Signs (not official)</h2>
            <p>To provide game signs support like this example:</p>
            <p><img src="https://i.imgur.com/4pOEcZH.png" alt=""></p>
            <p>You need to use an external plugin. Bungee Signs offer this support.
                Just put it on lobby server and configure it!</p>
            <p><strong>Download:</strong> <a href="https://www.spigotmc.org/resources/bungeesigns.6563/">https://www.spigotmc.org/resources/bungeesigns.6563/</a></p>

            <div class="alert alert-danger alert-white rounded">
                <div class="icon">
                    <i class="fa fa-times-circle"></i>
                </div>
                <div style="margin-left: 45px;"><strong><?php echo localize("VD-Alert-Danger"); ?></strong>
                    Addon is not made by BuildBattle staff and bugs/features should be reported to plugin's author!
                </div>
            </div>
        </div>
        <div class="col-xl col-lg-3 col-md-4 col-sm-7 col-12 pl-lg-0 pl-md-1">
            <div id="side-menu">
                <img src="https://i.imgur.com/vilATio.png" class="img-fluid mx-auto d-block" alt="logo" width="200">
                <div class="menu-content">
                    <h3 id="-general-"><strong><?php echo localize("VD-Sidebar-General"); ?></strong></h3>
                    <ul style="list-style-type: disc;">
                        <li>
                            <a href="https://plajer.xyz/wiki/mc/buildbattle/index.php"><?php echo localize("VD-Sidebar-Home"); ?></a>
                        </li>
                        <li>
                            <a href="https://plajer.xyz/wiki/mc/buildbattle/cmds_and_perms.php"><?php echo localize("VD-Sidebar-Cmds-And-Perms"); ?></a>
                        </li>
                        <li>
                            <a href="https://plajer.xyz/wiki/mc/buildbattle/free_maps.php"><?php echo localize("VD-Sidebar-Free-Maps"); ?></a>
                        </li>
                        <li style="list-style-image: url('../../img/you-are-here.png');">
                            <a href="https://plajer.xyz/wiki/mc/buildbattle/addons.php"><?php echo localize("VD-Sidebar-Plugin-Addons"); ?></a>
                        </li>
                        <li>
                            <a href="https://plajer.xyz/wiki/mc/buildbattle/papi_placeholders.php"><?php echo localize("VD-Sidebar-PAPI-Placeholders"); ?></a>
                        </li>
                    </ul>
                    <h3 id="-support-"><strong><?php echo localize("VD-Sidebar-Support"); ?></strong></h3>
                    <ul style="list-style-type: disc;">
                        <li>
                            <a href="https://www.youtube.com/watch?v=UOfrzj0WdzM"><?php echo localize("VD-Sidebar-Setup-Tutorial"); ?></a>
                        </li>
                        <li>
                            <a href="https://plajer.xyz/wiki/mc/buildbattle/faq.php"><?php echo localize("VD-Sidebar-FAQ"); ?></a> - <?php echo localize("VD-Sidebar-FAQ-Problems-And-Tips"); ?>
                        </li>
                        <li>
                            <a href="https://plajer.xyz/wiki/mc/buildbattle/configuration.php"><?php echo localize("VD-Sidebar-Files-Explained"); ?></a>
                        </li>
                    </ul>
                    <h3 id="-developement-space-"><strong><?php echo localize("VD-Sidebar-Development-Space"); ?></strong>
                    </h3>
                    <ul style="list-style-type: disc;">
                        <li>
                            <a href="https://plajer.xyz/wiki/mc/buildbattle/api.php"><?php echo localize("VD-Sidebar-Developer-API"); ?></a>
                        </li>
                        <li>
                            <a href="https://plajer-lair.github.io/BuildBattle/"><?php echo localize("VD-Sidebar-Java-Docs"); ?></a>
                        </li>
                    </ul>
                    <br/>
                </div>
            </div>
        </div>

        <div class="col-lg-1 col-0"></div>
        <footer class="page-footer font-small elegant-color-dark flex-fill">

            <div class="footer-copyright text-center py-3">© 2018 <a target="_blank" href="https://www.spigotmc.org/resources/buildbattle-1-9-1-13-1.44703/">Build Battle 3</a> |
                Created by <a target="_blank" href="https://github.com/Plajer-Lair">Plajer's Lair</a> and maintained by <a target="_blank" href="https://www.spigotmc.org/members/plajer.423193/">Plajer</a>
            </div>

        </footer>
    </div>
</div>
</body>
</html>