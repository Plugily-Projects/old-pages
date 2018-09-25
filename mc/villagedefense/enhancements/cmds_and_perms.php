<?php
include_once('../../../inc/json_localization.php');
include_once("../../../inc/tracking.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Plajer's Lair Wiki</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
    <link rel="stylesheet" href="../../../inc/css/markdown.css">
    <link rel="stylesheet" href="../../../inc/css/alerts.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.9/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
          crossorigin="anonymous">

    <link rel="icon" sizes="192x192" href="../../../inc/img/faviconmobile.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../inc/img/favicon.ico">
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
            <h1 id="enhancements-commands-and-permissions">Enhancements Commands and Permissions</h1>
            <h2 id="table-of-contents">Table of contents</h2>
            <ul>
                <li>
                    <a href="#commands-and-permissions-custom-kits-module">Commands
                        and Permissions - Custom kits</a></li>
                <li>
                    <a href="#commands-and-permissions-achievements-module">Commands
                        and Permissions - Achievements</a></li>
            </ul>
            <h2 id="commands-and-permissions-custom-kits-module">Commands and Permissions - custom kits module</h2>
            <p><code>[required argument] (optional argument)</code></p>
            <div class="alert alert-success alert-white rounded">
                <div class="icon">
                    <i class="fa fa-check"></i>
                </div>
                <div style="margin-left: 45px;"><strong><?php echo localize("VD-Alert-Tip"); ?></strong>
                    You can use <code>villagedefense.customkits.*</code> permission to give all commands permission
                </div>
            </div>
            <table>
                <thead>
                <tr>
                    <th>Command</th>
                    <th>Permission</th>
                    <th>Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>/vdck create [kit]</td>
                    <td>villagedefense.customkits.command.create</td>
                    <td>Create new custom kit</td>
                </tr>
                <tr>
                    <td>/vdck edit [kit]</td>
                    <td>villagedefense.customkits.command.edit</td>
                    <td>Edit already existing custom kit</td>
                </tr>
                <tr>
                    <td>/vdck delete [kit]</td>
                    <td>villagedefense.customkits.command.delete</td>
                    <td>Delete existing custom kit</td>
                </tr>
                <tr>
                    <td>/vdck list</td>
                    <td>villagedefense.customkits.command.list</td>
                    <td>Open inventory will all loaded custom kits</td>
                </tr>
                <tr>
                    <td>/vdck reload</td>
                    <td>villagedefense.customkits.command.reload</td>
                    <td>Reload configuration and re-register custom kits to update them</td>
                </tr>
                <tr>
                    <td>/vdck potiongen [potion type] [duration] [amplifier]</td>
                    <td>villagedefense.customkts.command.potiongen</td>
                    <td>Create custom potion effect for kits <strong>(effects will be applied to player not given into
                            his
                            inventory)</strong></td>
                </tr>
                <tr>
                    <td>/vdck mobgen [iron_golem/wolf] [amount of mobs]</td>
                    <td>villagedefense.customkits.command.mobgen</td>
                    <td>Create custom mobs for kits <strong>(they will be spawned at the start/per wave)</strong></td>
                </tr>
                <tr>
                    <td>/vdck commandgen [player/console] [command]</td>
                    <td>villagedefense.customkits.command.commandgen</td>
                    <td>Create command for kits <strong>(%player% placeholder supported)</strong></td>
                </tr>
                </tbody>
            </table>
            <h2 id="commands-and-permissions-achievements-module">Commands and Permissions - achievements module</h2>
            <table>
                <thead>
                <tr>
                    <th>Command</th>
                    <th>Permission</th>
                    <th>Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>/vdach list</td>
                    <td>none</td>
                    <td>Shows list of unlocked achievements</td>
                </tr>
                <tr>
                    <td>/vdach reload</td>
                    <td>villagedefense.achievements.command.reload</td>
                    <td>Reloads achievements configuration</td>
                </tr>
                </tbody>
            </table>
        </div>

        <div class="col-lg-auto col-md-4 col-sm-6 col-xs-12 mb-3">
            <div id="side-menu">
                <div class="menu-content px-3 py-2">
                    <img src="https://i.imgur.com/vilATio.png" class="img-fluid mx-auto d-block" alt="logo" width="200">
                    <h3 id="-general-"><strong><?php echo localize("VD-Sidebar-General"); ?></strong></h3>
                    <ul style="list-style-type: disc;">
                        <li>
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
                        <li style="list-style-image: url('../../../inc/img/you-are-here.png');">
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