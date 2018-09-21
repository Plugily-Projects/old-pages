<?php
/*
Plajer's Lair wikis for providing information about projects.
Copyright (C) 2018 Plajer

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/
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
            <h1 id="build-battle-custom-maps">Build Battle custom maps</h1>
            <p>In this section, you can download some additional maps for your server.</p>
            <h2 id="table-of-contents">Table of contents</h2>
            <ul>
                <li><a href="https://github.com/Plajer-Lair/BuildBattle/wiki/BuildBattle-maps#abstract">Abstract</a></li>
                <li><a href="https://github.com/Plajer-Lair/BuildBattle/wiki/BuildBattle-maps#candyland">Candyland</a></li>
            </ul>
            <h2 id="abstract">Abstract</h2>
            <p><strong>Abstract map from original Build Battle map pack</strong></p>
            <p><strong>Download link:</strong> <a href="http://www.mediafire.com/file/566p5uv6xv6831p/Abstract_-_configs_and_map.zip/file">http://www.mediafire.com/file/566p5uv6xv6831p/Abstract_-_configs_and_map.zip/file</a>
            </p>
            <p><strong>Coordinates:</strong> 0, 100, 0</p>
            <p><strong>Screenshots:</strong></p>
            <p><img src="https://i.imgur.com/Ok742W4.jpg" alt=""></p>
            <h2 id="candyland">Candyland</h2>
            <p><strong>Candyland map from original Build Battle map pack</strong></p>
            <p><strong>Download link:</strong> <a href="http://www.mediafire.com/file/xdil72mwi9k29ih/Candyland_-_config_and_map.zip/file">http://www.mediafire.com/file/xdil72mwi9k29ih/Candyland_-_config_and_map.zip/file</a>
            </p>
            <p><strong>Coordinates:</strong> 0, 100, 0</p>
            <p><strong>Screenshots:</strong></p>
            <p><img src="https://i.imgur.com/vfWs9j4.jpg" alt=""></p>

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
                        <li style="list-style-image: url('../../img/you-are-here.png');">
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

