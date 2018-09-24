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
        <div class="col-xl-5 col-lg-6 col-md-6 col-sm-10 col-xs-12">
            <?php
            if (localize("Global-Language-Name") != "English") {
                echo "<div class='alert alert-warning' role='alert'>" . localize("Global-Language-Name") . " is not your language?
                <a href='https://plajer.xyz/wiki/reset.php?redirect=https://plajer.xyz/wiki/mc/villagedefense/index.php'>Click here to use English one!</a></div>";
            }
            ?>
            <p><img src="https://i.imgur.com/zWY2BN7.png" alt=""></p>
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
                    <td><img src="https://i.imgur.com/cBRPKFZ.png" alt=""></td>
                    <td><img src="https://i.imgur.com/jWpKUlC.png" alt=""></td>
                    <td><img src="https://i.imgur.com/a1mWdrs.png" alt=""></td>
                    <td><img src="https://i.imgur.com/bNiewrg.png" alt=""></td>
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
                <?php echo localize("VD-Index-Enhancements-Content"); ?></h3>
            <ul>
                <li><a href="https://plajer.xyz/wiki/mc/villagedefense/enhancements/cmds_and_perms.html"><?php echo localize("VD-Sidebar-Cmds-And-Perms"); ?></a></li>
                <li><a href="https://plajer.xyz/wiki/mc/villagedefense/enhancements/faq.html"><?php echo localize("VD-Sidebar-Enhancements-FAQ"); ?></a>
                </li>
            </ul>
        </div>

        <div class="col-lg-auto col-md-4 col-sm-6 col-xs-12 mb-3">
            <div id="side-menu">
                <div class="menu-content px-3 py-2">
                    <img src="https://i.imgur.com/vilATio.png" class="img-fluid mx-auto d-block" alt="logo" width="200">
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
                </div>
            </div>
        </div>

        <footer class="col-12 page-footer font-small elegant-color-dark p-0">
            <div class="footer-copyright text-center py-3">© 2018 <a target="_blank" href="https://www.spigotmc.org/resources/41869/">Village Defense 3</a> |
                Created by <a target="_blank" href="https://github.com/Plajer-Lair">Plajer's Lair</a> and maintained by <a target="_blank"
                                                                                                                           href="https://www.spigotmc.org/members/plajer.423193/">Plajer</a>
            </div>
        </footer>
    </div>
</div>
</body>
</html>
