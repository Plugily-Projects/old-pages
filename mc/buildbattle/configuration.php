<?php
include_once('../../inc/json_localization.php');
include_once("../../inc/tracking.php");
include_once("../../inc/poeditor_reader.php");
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
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.9/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
          crossorigin="anonymous">

    <link rel="icon" sizes="192x192" href="../../inc/img/faviconmobile.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../inc/img/favicon.ico">
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
            <h1 id="plugin-files-explained-a-k-a-plugin-configuration-section-">Plugin files - explained (a.k.a Plugin configuration section)</h1>
            <h2 id="table-of-contents"><?php echo localize("Table-Of-Contents"); ?></h2>
            <p><strong>Basic files</strong></p>
            <ul>
                <li><a href="https://github.com/Plajer-Lair/BuildBattle/wiki/Plugin-files-explained#arenasyml">arenas.yml</a></li>
                <li><a href="https://github.com/Plajer-Lair/BuildBattle/wiki/Plugin-files-explained#bungeeyml">bungee.yml</a></li>
                <li><a href="https://github.com/Plajer-Lair/BuildBattle/wiki/Plugin-files-explained#configyml">config.yml</a></li>
                <li><a href="https://github.com/Plajer-Lair/BuildBattle/wiki/Plugin-files-explained#mysqlyml">mysql.yml</a></li>
            </ul>
            <p><strong>Additional content</strong></p>
            <ul>
                <li><a href="https://github.com/Plajer-Lair/BuildBattle/wiki/Plugin-files-explained#language-and-locales">Language and l10n (locale)</a></li>
                <li><a href="https://github.com/Plajer-Lair/BuildBattle/wiki/Plugin-files-explained#stats-storage-types">Stats storage types</a></li>
            </ul>
            <hr>
            <h2 id="basic-files">Basic files</h2>
            <h3 id="arenas-yml">arenas.yml</h3>
            <p>This file is only for in-game usage. It&#39;s not recommended to edit it while the server is on!
                The file contains all information about created arenas.</p>
            <hr>
            <h3 id="bungee-yml">bungee.yml</h3>
            <p>BungeeCord configuration is there. You must enable bungee support first in <strong>config.yml</strong>. Set <strong>BungeeActivated</strong> to <strong>true</strong> to enable it.</p>
            <h3 id="-what-is-motd-manager-">💡 What is MOTD Manager?</h3>
            <p>MOTD Manager modifies server&#39;s MOTD to make it readable by Server Bungeecord systems like <a
                        href="https://www.spigotmc.org/resources/timocloud-the-most-efficient-cloud-system.53757/">Timo Cloud</a> and <a href="https://www.spigotmc.org/resources/bungeesigns.6563/">Bungee
                    Signs</a>. MOTD is based on game state if that option is enabled.</p>
            <hr>
            <h3 id="config-yml">config.yml</h3>
            <p>config.yml is very well commented. No need to explain more any part of it.</p>
            <p><strong>Part of config.yml</strong></p>
            <p><img src="https://i.imgur.com/EqhcIrk.png" alt=""></p>
            <hr>
            <h3 id="mysql-yml">mysql.yml</h3>
            <p>Here you can set up MySQL plugin configuration.
                You need to enable MySQL first in <strong>config.yml</strong>. Set <strong>DatabaseActivated</strong> option to <strong>true</strong>.</p>
            <p><strong>This is mysql.yml file with explanations of individual options.</strong>
                <img src="https://i.imgur.com/m31nvuz.png" alt=""></p>
            <h2 id="additional-content">Additional content</h2>
            <h3 id="language-and-locales">Language and locales</h3>
            <p>Plugin is 95% translatable via <strong>language.yml</strong> file.</p>
            <p><img src="https://i.imgur.com/svoppHN.png" alt=""></p>
            <p>However, you can use localization support which was implemented in BB 3.</p>
            <p>To change locale of plugin go to <strong>config.yml</strong> and modify <strong>locale</strong> value.</p>
            <p><img src="https://i.imgur.com/avlfYLU.png" alt=""></p>
            <p><strong>Valid localizations (gathered via POEditor API):</strong></p>
            <ul>
                <li><img src="https://www.plajer.xyz/shared/flags/gb.png" alt=""> English (primary)</li>
                <?php
                $json = readLanguages(196919);
                foreach ($json->result->languages as $value) {
                    if ($value->name == "English" || $value->percentage < 80.0) {
                        continue;
                    }
                    $flag = $value->code;

                    //Flag fixer
                    switch ($value->name) {
                        case "Vietnamese":
                            $flag = "vn";
                            break;
                        case "Chinese (simplified)":
                            $flag = "cn";
                            break;
                        case "Chinese (traditional)":
                            $flag = "hk";
                            break;
                        case "Korean":
                            $flag = "kr";
                            break;
                    }
                    echo "<li><img src='https://www.plajer.xyz/shared/flags/$flag.png' alt=''> $value->code - $value->name ($value->percentage% translated)</li>";
                }
                ?>
            </ul>
            <div class="alert alert-success alert-white rounded">
                <div class="icon">
                    <i class="fa fa-check"></i>
                </div>
                <div style="margin-left: 45px;"><strong><?php echo localize("Alert-Tip"); ?></strong>
                    You can always translate our plugin for free <a href="https://poeditor.com/join/project/wEpcZ7Htnn" target="_blank">joining here (click)</a>
                </div>
            </div>
            <hr>
            <h3 id="stats-storage-types">Stats storage types</h3>
            <p><strong>Current stats storage types for player statistics:</strong></p>
            <ul>
                <li>Flat file (.yml) - enabled by default</li>
                <li>MySQL (database) - can be enabled in config.yml (see <a href="https://github.com/Plajer-Lair/BuildBattle/wiki/Plugin-files-explained#mysqlyml">mysql.yml</a>)</li>
            </ul>
        </div>

        <div class="col-lg-auto col-md-4 col-sm-6 col-xs-12 mb-3">
            <div id="side-menu">
                <div class="menu-content px-3 py-2">
                    <img src="https://i.imgur.com/OGAv7qB.png" class="img-fluid mx-auto d-block" alt="logo" width="200">
                    <h3 id="-general-"><strong><?php echo localize("Sidebar-Category-General"); ?></strong></h3>
                    <ul style="list-style-type: disc;">
                        <li>
                            <a href="https://plajer.xyz/wiki/mc/buildbattle/index.php"><?php echo localize("Sidebar-Home"); ?></a>
                        </li>
                        <li>
                            <a href="https://plajer.xyz/wiki/mc/buildbattle/cmds_and_perms.php"><?php echo localize("Sidebar-Cmds-And-Perms"); ?></a>
                        </li>
                        <li>
                            <a href="https://plajer.xyz/wiki/mc/buildbattle/free_maps.php"><?php echo localize("Sidebar-Free-Maps"); ?></a>
                        </li>
                        <li>
                            <a href="https://plajer.xyz/wiki/mc/buildbattle/addons.php"><?php echo localize("Sidebar-Plugin-Addons"); ?></a>
                        </li>
                        <li>
                            <a href="https://plajer.xyz/wiki/mc/buildbattle/papi_placeholders.php"><?php echo localize("Sidebar-PAPI-Placeholders"); ?></a>
                        </li>
                    </ul>
                    <h3 id="-support-"><strong><?php echo localize("Sidebar-Category-Support"); ?></strong></h3>
                    <ul style="list-style-type: disc;">
                        <li>
                            <a href="https://www.youtube.com/watch?v=UOfrzj0WdzM"><?php echo localize("Sidebar-Setup-Tutorial"); ?></a>
                        </li>
                        <li>
                            <a href="https://plajer.xyz/wiki/mc/buildbattle/faq.php"><?php echo localize("Sidebar-FAQ"); ?></a> - <?php echo localize("Sidebar-FAQ-Problems-And-Tips"); ?>
                        </li>
                        <li style="list-style-image: url('../../inc/img/you-are-here.png');">
                            <a href="https://plajer.xyz/wiki/mc/buildbattle/configuration.php"><?php echo localize("Sidebar-Files-Explained"); ?></a>
                        </li>
                    </ul>
                    <h3 id="-developement-space-"><strong><?php echo localize("Sidebar-Category-Development-Space"); ?></strong>
                    </h3>
                    <ul style="list-style-type: disc;">
                        <li>
                            <a href="https://plajer.xyz/wiki/mc/buildbattle/api.php"><?php echo localize("Sidebar-Developer-API"); ?></a>
                        </li>
                        <li>
                            <a href="https://plajer-lair.github.io/BuildBattle/"><?php echo localize("Sidebar-Java-Docs"); ?></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <footer class="col-12 page-footer font-small elegant-color-dark p-0">
            <div class="footer-copyright text-center py-3">© 2018 <a target="_blank" href="https://www.spigotmc.org/resources/buildbattle-1-9-1-13-1.44703/">Build Battle 3</a> |
                Created by <a target="_blank" href="https://github.com/Plajer-Lair">Plajer's Lair</a> and maintained by <a target="_blank"
                                                                                                                           href="https://www.spigotmc.org/members/plajer.423193/">Plajer</a>
            </div>
        </footer>
    </div>
</div>
</body>
</html>