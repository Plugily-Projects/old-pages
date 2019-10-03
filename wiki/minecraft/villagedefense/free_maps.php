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
    <link rel="stylesheet" href="https://static.plajer.xyz/css/flags_min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.9/css/mdb.min.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="../../inc/css/bootstrap-4.1.3.min.css" rel="stylesheet">

    <link rel="icon" sizes="192x192" href="https://plajer.xyz/images/favicon.php?type=favicon-mobile">
    <link rel="shortcut icon" type="image/x-icon" href="https://plajer.xyz/images/favicon.php?type=favicon">
</head>
<body>
<?php include('resources/navbar.php'); ?>
<div class="container-fluid pb-5">
    <div class="row justify-content-center pb-5">
        <div class="col-xl-5 col-lg-6 col-md-7 col-sm-11 col-xs-12 px-sm-0 px-2">
            <h1 id="village-defense-custom-maps">Village Defense custom maps</h1>
            <p>In this section, you can download some additional maps for your server.</p>
            <p>Every map contains Secret well, simple shop, lobby room and configured arena.</p>
            <p>Link to all maps of our minigames <a href="https://drive.google.com/open?id=1Be3maNAEa4W37PZaDmvpNepOv1kGLAnb" target="_blank">at GDrive</a></p>
            <h2 id="table-of-contents"><?php echo localize("Wiki.Global.Table-Of-Contents"); ?></h2>
            <ul>
                <li><a href="#quarry">Quarry</a></li>
                <li><a href="#hollow">Hollow</a></li>
            </ul>
            <h2 id="quarry">Quarry</h2>
            <p><strong>Quarry map from original Village Defense map pack</strong></p>
            <p><strong>Download link:</strong> <a target="_blank" href="https://drive.google.com/open?id=1oACneo7Y1eoAWYnlqPoAiJzi7q0c704f">GDrive</a>
            </p>
            <p><strong>Coordinates:</strong> 0, 80, 0</p>
            <p><strong>Screenshots:</strong></p>
            <p><img src="https://i.imgur.com/N8EHEZP.jpg" alt=""></p>
            <h2 id="hollow">Hollow</h2>
            <p><strong>Hollow map from original Village Defense map pack</strong></p>
            <p><strong>Download link:</strong> <a target="_blank" href="https://drive.google.com/open?id=1MinAzjmcd7EaD75aESAU8-oz7-wjRQhL">GDrive</a>
            </p>
            <p><strong>Coordinates:</strong> -50, 72, 50</p>
            <p><strong>Screenshots:</strong></p>
            <p><img src="https://i.imgur.com/GMmTz1b.jpg" alt=""></p>

        </div>

        <div class="col-auto mb-3">
            <div id="side-menu">
                <div class="menu-content px-3 py-2">
                    <img src="https://i.imgur.com/vilATio.png" class="img-fluid mx-auto d-block" alt="logo" width="200">
                    <h3 id="-general-"><strong><?php echo localize("Wiki.Sidebar.General"); ?></strong></h3>
                    <ul style="list-style-type: disc;">
                        <li>
                            <a href="https://wiki.plajer.xyz/minecraft/villagedefense/index.php"><?php echo localize("Wiki.Sidebar.General.Home"); ?></a>
                        </li>
                        <li>
                            <a href="https://wiki.plajer.xyz/minecraft/villagedefense/cmds_and_perms.php"><?php echo localize("Wiki.Sidebar.General.Commands-And-Permissions"); ?></a>
                        </li>
                        <li style="list-style-image: url('../../inc/img/you-are-here.png');">
                            <a href="https://wiki.plajer.xyz/minecraft/villagedefense/free_maps.php"><?php echo localize("Wiki.Sidebar.General.Free-Maps"); ?></a>
                        </li>
                        <li>
                            <a href="https://wiki.plajer.xyz/minecraft/villagedefense/addons.php"><?php echo localize("Wiki.Sidebar.General.Plugin-Addons"); ?></a>
                        </li>
                        <li>
                            <a href="https://wiki.plajer.xyz/minecraft/villagedefense/tips.php"><?php echo localize("Wiki.Sidebar.General.Server-Tips"); ?></a>
                        </li>
                        <li>
                            <a href="https://wiki.plajer.xyz/minecraft/villagedefense/papi_placeholders.php"><?php echo localize("Wiki.Sidebar.General.PAPI-Placeholders"); ?></a>
                        </li>
                    </ul>
                    <h3 id="-support-"><strong><?php echo localize("Wiki.Sidebar.Support"); ?></strong></h3>
                    <ul style="list-style-type: disc;">
                        <li>
                            <a href="https://tutorial.plajer.xyz"><?php echo localize("Wiki.Sidebar.Support.Setup-Tutorial"); ?></a>
                        </li>
                        <li>
                            <a href="https://wiki.plajer.xyz/minecraft/villagedefense/faq.php"><?php echo localize("Wiki.Sidebar.Support.FAQ"); ?></a> - <?php echo localize("Wiki.Sidebar.Support.FAQ.Problems-And-Tips"); ?>
                        </li>
                        <li>
                            <a href="https://wiki.plajer.xyz/minecraft/villagedefense/configuration.php"><?php echo localize("Wiki.Sidebar.Support.Files-Explained"); ?></a>
                        </li>
                    </ul>
                    <h3 id="-developement-space-"><strong><?php echo localize("Wiki.Sidebar.Development-Space"); ?></strong>
                    </h3>
                    <ul style="list-style-type: disc;">
                        <li>
                            <a href="https://wiki.plajer.xyz/minecraft/villagedefense/api.php"><?php echo localize("Wiki.Sidebar.Development-Space.Developer-API"); ?></a>
                        </li>
                        <li>
                            <a href="https://jd.plajer.xyz/minecraft/villagedefense/"><?php echo localize("Wiki.Sidebar.Development-Space.Java-Docs"); ?></a>
                        </li>
                    </ul>
                    <h3 id="enhancements-addon" style="margin-bottom: 5px"><?php echo localize("Wiki.Sidebar.Enhancements.Name"); ?></h3>
                    <a href="https://download.plajer.xyz/preview/minecraft.php" target="_blank"><div class="badge badge-warning mb-2">Free for Patrons - Become Patron</div></a>
                    <ul style="list-style-type: disc;">
                        <li>
                            <a href="https://wiki.plajer.xyz/minecraft/villagedefense/enhancements/cmds_and_perms.php"><?php echo localize("Wiki.Sidebar.General.Commands-And-Permissions"); ?></a>
                        </li>
                        <li>
                            <a href="https://wiki.plajer.xyz/minecraft/villagedefense/enhancements/faq.php"><?php echo localize("Wiki.Sidebar.Enhancements.FAQ"); ?></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('resources/footer.php'); ?>
</body>
</html>