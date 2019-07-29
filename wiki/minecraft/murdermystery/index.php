<?php
include_once('../../inc/tracking.php');
include_once("../../inc/json_localization.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Plajer's Lair Wiki</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
    <link rel="stylesheet" href="../../inc/css/markdown.css">
    <link rel="stylesheet" href="../../inc/css/alerts.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.9/css/mdb.min.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="../../inc/css/bootstrap-4.1.3.min.css" rel="stylesheet">

    <link rel="icon" sizes="192x192" href="https://plajer.xyz/images/favicon.php?type=favicon-mobile">
    <link rel="shortcut icon" type="image/x-icon" href="https://plajer.xyz/images/favicon.php?type=favicon">

    <style>
        .fixed-nav-index {z-index: 9;}

        .corner-ribbon {
            width: 260px;
            background: #2f2f2f !important;
            color: #fff;
            position: fixed;
            text-align: center;
            bottom: 50px;
            line-height: 40px;
            z-index: 100;
        }

        .corner-ribbon.right {
            right: -55px;
            left: auto;
            -ms-transform: rotate(-45deg);
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
        }
    </style>
</head>
<body>
<?php include('resources/navbar.php'); ?>
<div class="container-fluid">
    <a target="_blank" href="https://github.com/Plajer-Lair/pages" class="corner-ribbon right d-none d-sm-block" style="text-decoration: none; color:white">We're Open Source too!</a>

    <div class="row justify-content-center">
        <div class="col-xl-5 col-lg-6 col-md-7 col-sm-11 col-xs-12 px-sm-0 px-2">
            <br/>
           <img src="https://plajer.xyz/images/banner_display.php?id=MurderMystery&cut=true" alt="">
            <h2 id="murder-official-wiki-"><?php echo str_replace("%name%", "Murder Mystery", localize("Wiki.Global.Welcome")); ?></h2>
            <table>
                <thead>
                <tr>
                    <th><a href="https://wiki.plajer.xyz/minecraft/murdermystery/cmds_and_perms.php">Commands and Permissions</a></th>
                    <th><a href="https://tutorial.plajer.xyz">Simple arena setup</a></th>
                    <th><a href="https://wiki.plajer.xyz/minecraft/murdermystery/faq.php">FAQ</a></th>
                    <th><a href="https://wiki.plajer.xyz/minecraft/murdermystery/api.php">Developers API</a></th>
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
                    <td>MM commands and permissions</td>
                    <td>How to create arena tutorial</td>
                    <td>Frequently asked questions</td>
                    <td>Some stuff for developers</td>
                </tr>
                </tbody>
            </table>
            <h3 id="basic-icons-you-need-to-know-"><?php echo localize("Wiki.Alerts.Basic-Info"); ?></h3>
            <ul>
                <div class="alert alert-success alert-white rounded">
                    <div class="icon">
                        <i class="fa fa-check"></i>
                    </div>
                    <div style="margin-left: 45px;"><strong><?php echo localize("Wiki.Alerts.Tip"); ?></strong>
                      <?php echo localize("Wiki.Alerts.Tip.Description"); ?>
                    </div>
                </div>
                <div class="alert alert-info alert-white rounded">
                    <div class="icon">
                        <i class="fa fa-info-circle"></i>
                    </div>
                    <div style="margin-left: 45px;"><strong><?php echo localize("Wiki.Alerts.Info"); ?></strong>
                      <?php echo localize("Wiki.Alerts.Info.Description"); ?>
                    </div>
                </div>
                <div class="alert alert-warning alert-white rounded">
                    <div class="icon">
                        <i class="fa fa-warning"></i>
                    </div>
                    <div style="margin-left: 45px;"><strong><?php echo localize("Wiki.Alerts.Warn"); ?></strong>
                      <?php echo localize("Wiki.Alerts.Warn.Description"); ?>
                    </div>
                </div>
                <div class="alert alert-danger alert-white rounded">
                    <div class="icon">
                        <i class="fa fa-times-circle"></i>
                    </div>
                    <div style="margin-left: 45px;"><strong><?php echo localize("Wiki.Alerts.Danger"); ?></strong>
                      <?php echo localize("Wiki.Alerts.Danger.Description"); ?>
                    </div>
                </div>
            </ul>
        </div>

        <div class="col-auto mb-3">
            <div id="side-menu">
                <div class="menu-content px-3 py-2">
                    <img src="../../inc/img/sidebar-murder-temp.png" class="img-fluid mx-auto d-block" alt="logo" width="200">
                    <h3 id="-general-"><strong><?php echo localize("Wiki.Sidebar.General"); ?></strong></h3>
                    <ul style="list-style-type: disc;">
                        <li style="list-style-image: url('../../inc/img/you-are-here.png');">
                            <a href="https://wiki.plajer.xyz/minecraft/murdermystery/index.php"><?php echo localize("Wiki.Sidebar.General.Home"); ?></a>
                        </li>
                        <li>
                            <a href="https://wiki.plajer.xyz/minecraft/murdermystery/cmds_and_perms.php"><?php echo localize("Wiki.Sidebar.General.Commands-And-Permissions"); ?></a>
                        </li>
                        <li>
                            <a href="https://wiki.plajer.xyz/minecraft/murdermystery/addons.php"><?php echo localize("Wiki.Sidebar.General.Plugin-Addons"); ?></a>
                        </li>
                        <li>
                            <a href="https://wiki.plajer.xyz/minecraft/murdermystery/papi_placeholders.php"><?php echo localize("Wiki.Sidebar.General.PAPI-Placeholders"); ?></a>
                        </li>
                        <li>
                            <a href="https://wiki.plajer.xyz/minecraft/murdermystery/leaderheads_names.php"><s>Leaderheads Statistics</s> <strong>deprecated</strong></a>
                        </li>
                    </ul>
                    <h3 id="-support-"><strong><?php echo localize("Wiki.Sidebar.Support"); ?></strong></h3>
                    <ul style="list-style-type: disc;">
                        <li>
                            <a href="https://tutorial.plajer.xyz"><?php echo localize("Wiki.Sidebar.Support.Setup-Tutorial"); ?></a>
                        </li>
                        <li>
                            <a href="https://wiki.plajer.xyz/minecraft/murdermystery/faq.php"><?php echo localize("Wiki.Sidebar.Support.FAQ"); ?></a> - <?php echo localize("Wiki.Sidebar.Support.FAQ.Problems-And-Tips"); ?>
                        </li>
                        <li>
                            <a href="https://wiki.plajer.xyz/minecraft/murdermystery/configuration.php"><?php echo localize("Wiki.Sidebar.Support.Files-Explained"); ?></a>
                        </li>
                    </ul>
                    <h3 id="-developement-space-"><strong><?php echo localize("Wiki.Sidebar.Development-Space"); ?></strong>
                    </h3>
                    <ul style="list-style-type: disc;">
                        <li>
                            <a href="https://wiki.plajer.xyz/minecraft/murdermystery/api.php"><?php echo localize("Wiki.Sidebar.Development-Space.Developer-API"); ?></a>
                        </li>
                        <li>
                            <a href="https://jd.plajer.xyz/minecraft/murdermystery"><?php echo localize("Wiki.Sidebar.Development-Space.Java-Docs"); ?></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

      <?php include('resources/footer.php'); ?>
    </div>
</div>
</body>
</html>