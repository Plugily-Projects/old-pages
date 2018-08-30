<?php
include '../../json_localization.php';
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

    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#9e9e9e">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#9e9e9e">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#9e9e9e">

    <link rel="icon" sizes="192x192" href="../../img/faviconmobile.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../img/favicon.ico">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12">
            <?php
            if(localize("Global-Language-Name") != "English"){
                echo "<div class='alert alert-warning' role='alert'>" . localize("Global-Language-Name") . " is not your language?
                <a href='https://plajer.xyz/wiki/reset.php?redirect=https://plajer.xyz/wiki/mc/villagedefense/index.php'>Click here to use English one!</a></div>";
            }
            ?>
            <p><img src="https://i.imgur.com/BGzirpT.png" alt=""></p>
            <h2><?php echo localize("VD-Index-Wiki-Hello"); ?></h2>
            <table>
                <thead>
                <tr>
                    <th><?php echo localize("VD-Sidebar-FAQ"); ?> - <?php echo localize("VD-Sidebar-FAQ-Problems-And-Tips"); ?></th>
                    <th><?php echo localize("VD-Index-Simple-Arena-Setup"); ?></th>
                    <th><?php echo localize("VD-Index-Maps"); ?></th>
                    <th><?php echo localize("VD-Index-Dev-API"); ?></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><img src="https://i.imgur.com/qzmGYY3.png" alt=""></td>
                    <td><img src="https://i.imgur.com/ekmDyHw.png" alt=""></td>
                    <td><img src="https://i.imgur.com/4SndPkW.png" alt=""></td>
                    <td><img src="https://i.imgur.com/RDZGbgs.png" alt=""></td>
                </tr>
                <tr>
                    <td>
                        <a href="https://plajer.xyz/wiki/mc/villagedefense/faq.php"><?php echo localize("VD-Index-FAQ-Desc"); ?></a></td>
                    <td><a href="https://youtu.be/16GS6zAte5I"><?php echo localize("VD-Index-Simple-Arena-Setup-Desc"); ?></a></td>
                    <td><a href="https://plajer.xyz/wiki/mc/villagedefense/free_maps.php"><?php echo localize("VD-Index-Maps-Desc"); ?></a>
                    </td>
                    <td><a href="https://plajer.xyz/wiki/mc/villagedefense/api.php"><?php echo localize("VD-Index-Dev-API-Desc"); ?></a>
                    </td>
                </tr>
                <tr>
                    <td><?php echo localize("VD-Index-FAQ-Desc2"); ?></td>
                    <td><?php echo localize("VD-Index-Simple-Arena-Setup-Desc2"); ?></td>
                    <td><?php echo localize("VD-Index-Maps-Desc2"); ?></td>
                    <td><?php echo localize("VD-Index-Dev-API-Desc2"); ?></td>
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
            <h3>
                <?php echo localize("VD-Index-Enhancements-Content"); ?>
                <a href="https://github.com/Plajer-Lair/Village_Defense-Enhancements/"><img src="https://img.shields.io/badge/more-info-blue.svg" alt=""></a>
                <a href="https://www.spigotmc.org/resources/55010/"><img src="https://img.shields.io/badge/buy%20it-here-yellow.svg" alt=""></a></h3>
            <ul>
                <li><a href="https://plajer.xyz/wiki/mc/villagedefense/enhancements/cmds_and_perms.html"><?php echo localize("VD-Sidebar-Cmds-And-Perms"); ?></a></li>
                <li><a href="https://plajer.xyz/wiki/mc/villagedefense/enhancements/faq.html"><?php echo localize("VD-Sidebar-Enhancements-FAQ"); ?></a>
                </li>
            </ul>
        </div>

        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12">
            <div id="side-menu">
                <img src="https://i.imgur.com/ZMPQeCz.png" class="img-fluid mx-auto d-block" alt="logo" width="200">
                <div class="menu-content">
                    <h3 id="-general-"><strong><?php echo localize("VD-Sidebar-General"); ?></strong></h3>
                    <ul style="list-style-type: disc;">
                        <li style="list-style-image: url('../../img/you-are-here.png');">
                            <a href="https://plajer.xyz/wiki/mc/villagedefense/index.php"><?php echo localize("VD-Sidebar-Home"); ?></a>
                        </li>
                        <li>
                            <a href="https://plajer.xyz/wiki/mc/villagedefense/cmds_and_perms.php"><?php echo localize("VD-Sidebar-Cmds-And-Perms"); ?></a>
                        </li>
                        <li>
                            <a href="https://plajer.xyz/wiki/mc/villagedefense/free_maps.php"><?php echo localize("VD-Sidebar-Free-Maps"); ?></a>
                        </li>
                        <li>
                            <a href="https://plajer.xyz/wiki/mc/villagedefense/addons.php"><?php echo localize("VD-Sidebar-Plugin-Addons"); ?></a>
                        </li>
                        <li>
                            <a href="https://plajer.xyz/wiki/mc/villagedefense/tips.php"><?php echo localize("VD-Sidebar-Server-Tips"); ?></a>
                        </li>
                        <li>
                            <a href="https://plajer.xyz/wiki/mc/villagedefense/papi_placeholders.php"><?php echo localize("VD-Sidebar-PAPI-Placeholders"); ?></a>
                        </li>
                    </ul>
                    <h3 id="-support-"><strong><?php echo localize("VD-Sidebar-Support"); ?></strong></h3>
                    <ul style="list-style-type: disc;">
                        <li>
                            <a href="https://youtu.be/16GS6zAte5I"><?php echo localize("VD-Sidebar-Setup-Tutorial"); ?></a>
                        </li>
                        <li>
                            <a href="https://plajer.xyz/wiki/mc/villagedefense/faq.php"><?php echo localize("VD-Sidebar-FAQ"); ?></a> - <?php echo localize("VD-Sidebar-FAQ-Problems-And-Tips"); ?>
                        </li>
                        <li>
                            <a href="https://plajer.xyz/wiki/mc/villagedefense/configuration.php"><?php echo localize("VD-Sidebar-Files-Explained"); ?></a>
                        </li>
                    </ul>
                    <h3 id="-developement-space-"><strong><?php echo localize("VD-Sidebar-Development-Space"); ?></strong>
                    </h3>
                    <ul style="list-style-type: disc;">
                        <li>
                            <a href="https://plajer.xyz/wiki/mc/villagedefense/api.php"><?php echo localize("VD-Sidebar-Developer-API"); ?></a>
                        </li>
                        <li>
                            <a href="https://plajer-lair.github.io/Village_Defense/"><?php echo localize("VD-Sidebar-Java-Docs"); ?></a>
                        </li>
                    </ul>
                    <h3 id="enhancements-addon"><?php echo localize("VD-Sidebar-Enhancements-Addon"); ?></h3>
                    <ul style="list-style-type: disc;">
                        <li>
                            <a href="https://plajer.xyz/wiki/mc/villagedefense/enhancements/cmds_and_perms.php"><?php echo localize("VD-Sidebar-Cmds-And-Perms"); ?></a>
                        </li>
                        <li>
                            <a href="https://plajer.xyz/wiki/mc/villagedefense/enhancements/faq.php"><?php echo localize("VD-Sidebar-Enhancements-FAQ"); ?></a>
                        </li>
                    </ul>
                    <br/>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="page-footer font-small grey">

    <div class="footer-copyright text-center py-3">© 2018 <a target="_blank" href="https://www.spigotmc.org/resources/village-defence-1-8-8-and-1-12-only.41869/">Village Defense 3</a> |
        Created by <a target="_blank" href="https://github.com/Plajer-Lair">Plajer's Lair</a> and maintained by <a target="_blank" href="https://www.spigotmc.org/members/plajer.423193/">Plajer</a>
    </div>

</footer>
</body>
</html>
