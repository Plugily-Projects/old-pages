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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
          crossorigin="anonymous">

    <link rel="icon" sizes="192x192" href="../../img/faviconmobile.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../img/favicon.ico">
</head>
<body>
<nav class="navbar navbar-expand navbar-dark bg-dark fixed-nav-index">
    <a class="navbar-brand" href="#">
        <img src="https://i.imgur.com/HuLGRxV.png" width="30" height="30" class="d-inline-block align-top" alt="">
        Plajer's Lair wiki
    </a>
</nav>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-xl-5 col-lg-6 col-md-6 col-sm-10 col-xs-12">
            <p><img src="https://i.imgur.com/dplq0h0.png" alt=""></p>
            <h2 id="build-battle-3-official-wiki-">Build Battle 3 official wiki!</h2>
            <table>
                <thead>
                <tr>
                    <th>Commands and Permissions</th>
                    <th>Simple arena setup</th>
                    <th>Maps</th>
                    <th>Developers API</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><img src="https://i.imgur.com/8FJE8tg.png" alt=""></td>
                    <td><img src="https://i.imgur.com/ekmDyHw.png" alt=""></td>
                    <td><img src="https://i.imgur.com/4SndPkW.png" alt=""></td>
                    <td><img src="https://i.imgur.com/RDZGbgs.png" alt=""></td>
                </tr>
                <tr>
                    <td><a href="https://github.com/Plajer-Lair/BuildBattle/wiki/Commands-and-Permissions">Commands and Permissions</a></td>
                    <td><a href="https://www.youtube.com/watch?v=UOfrzj0WdzM">Simple arena setup</a></td>
                    <td><a href="https://github.com/Plajer-Lair/BuildBattle/wiki/BuildBattle-maps">Free maps</a></td>
                    <td><a href="https://github.com/Plajer-Lair/BuildBattle/wiki/API">Developers API</a></td>
                </tr>
                <tr>
                    <td>BB 3 commands and permissions</td>
                    <td>How to create arena tutorial</td>
                    <td>Download free game maps</td>
                    <td>Some stuff for developers</td>
                </tr>
                </tbody>
            </table>
            <h3 id="basic-icons-you-need-to-know-"><?php echo localize("VD-Index-Basic-Alerts-Info"); ?></h3>
            <ul>
                <div class="alert alert-success alert-white rounded">
                    <div class="icon">
                        <i class="fa fa-check"></i>
                    </div>
                    <div style="margin-left: 45px;"><strong><?php echo localize("VD-Alert-Tip"); ?></strong>
                        <?php echo localize("VD-Alert-Tip-Desc"); ?>
                    </div>
                </div>
                <div class="alert alert-info alert-white rounded">
                    <div class="icon">
                        <i class="fa fa-info-circle"></i>
                    </div>
                    <div style="margin-left: 45px;"><strong><?php echo localize("VD-Alert-Info"); ?></strong>
                        <?php echo localize("VD-Alert-Info-Desc"); ?>
                    </div>
                </div>
                <div class="alert alert-warning alert-white rounded">
                    <div class="icon">
                        <i class="fa fa-warning"></i>
                    </div>
                    <div style="margin-left: 45px;"><strong><?php echo localize("VD-Alert-Warn"); ?></strong>
                        <?php echo localize("VD-Alert-Warn-Desc"); ?>
                    </div>
                </div>
                <div class="alert alert-danger alert-white rounded">
                    <div class="icon">
                        <i class="fa fa-times-circle"></i>
                    </div>
                    <div style="margin-left: 45px;"><strong><?php echo localize("VD-Alert-Danger"); ?></strong>
                        <?php echo localize("VD-Alert-Danger-Desc"); ?>
                    </div>
                </div>
            </ul>
        </div>

        <div class="col-lg-auto col-md-4 col-sm-6 col-xs-12 mb-3">
            <div id="side-menu">
                <div class="menu-content px-3 py-2">
                    <img src="https://i.imgur.com/5svtmLD.png" class="img-fluid mx-auto d-block" alt="logo" width="200">
                    <h3 id="-general-"><strong><?php echo localize("VD-Sidebar-General"); ?></strong></h3>
                    <ul style="list-style-type: disc;">
                        <li style="list-style-image: url('../../img/you-are-here.png');">
                            <a href="https://plajer.xyz/wiki/mc/buildbattle/index.php"><?php echo localize("VD-Sidebar-Home"); ?></a>
                        </li>
                        <li>
                            <a href="https://plajer.xyz/wiki/mc/buildbattle/cmds_and_perms.php"><?php echo localize("VD-Sidebar-Cmds-And-Perms"); ?></a>
                        </li>
                        <li>
                            <a href="https://plajer.xyz/wiki/mc/buildbattle/free_maps.php"><?php echo localize("VD-Sidebar-Free-Maps"); ?></a>
                        </li>
                        <li>
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
                </div>
            </div>
        </div>

        <footer class="col-12 page-footer font-small elegant-color-dark p-0">
            <div class="footer-copyright text-center py-3">© 2018 <a target="_blank" href="https://www.spigotmc.org/resources/buildbattle-1-9-1-13-1.44703/">Build Battle 3</a> |
                Created by <a target="_blank" href="https://github.com/Plajer-Lair">Plajer's Lair</a> and maintained by <a target="_blank" href="https://www.spigotmc.org/members/plajer.423193/">Plajer</a>
            </div>
        </footer>
    </div>
</div>
</body>
</html>