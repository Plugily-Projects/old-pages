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
</head>
<body>
<nav class="navbar navbar-expand navbar-dark bg-dark fixed-nav-index">
    <a class="navbar-brand" href="#">
        <img src="https://plajer.xyz/images/favicon.php?type=navbar" width="30" height="30" class="d-inline-block align-top" alt="">
        Plajer's Lair wiki
    </a>
</nav>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-xl-5 col-lg-6 col-md-7 col-sm-11 col-xs-12 px-sm-0 px-2">
            <h1>Commands and Permissions</h1>
            <h2><?php echo localize("Wiki.Global.Table-Of-Contents"); ?></h2>
            <ul>
                <li>
                    <a href="#commands-and-permissions">Commands
                        &amp; Permissions</a></li>
                <li><a href="#basic-permissions">Basic
                        permissions</a></li>
            </ul>
            <h2 id="commands-and-permissions">Commands and permissions</h2>
            <p><code><?php echo localize("Wiki.Global.Command-Aliases-Explained"); ?></code></p>
            <h3 id="-player-commands">🔵 <?php echo localize("Wiki.Global.Player-Commands") ?></h3>
            <table>
                <thead>
                <tr>
                    <th><?php echo localize("Wiki.Global.Command"); ?></th>
                    <th><?php echo localize("Wiki.Global.Permission"); ?></th>
                    <th><?php echo localize("Wiki.Global.Description"); ?></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>/mm join [arena]</td>
                    <td>murdermystery.join.%arena% murdermystery.join.* (all arenas)</td>
                    <td>Joins specified arena</td>
                </tr>
                <tr>
                    <td>/mm randomjoin</td>
                    <td><strong>Requires permission <code>murdermystery.join.*</code> to access all arenas</strong></td>
                    <td>Joins random arena of specified game mode</td>
                </tr>
                <tr>
                    <td>/mm stats (online player)</td>
                    <td><?php echo localize("Wiki.Global.None"); ?></td>
                    <td>Shows your stats</td>
                </tr>
                <tr>
                    <td>/mm leave</td>
                    <td><?php echo localize("Wiki.Global.None"); ?></td>
                    <td>Quits current game. You can disable game quit in config.yml</td>
                </tr>
                <tr>
                    <td>/mm top [statistic]</td>
                    <td><?php echo localize("Wiki.Global.None"); ?></td>
                    <td>Shows TOP 10 players of specified statistic</td>
                </tr>
                </tbody>
            </table>
            <h3 id="-admin-commands">🔴 <?php echo localize("Wiki.Global.Admin-Commands") ?></h3>
            <div class="alert alert-success alert-white rounded">
                <div class="icon">
                    <i class="fa fa-check"></i>
                </div>
                <div style="margin-left: 45px;"><strong><?php echo localize("Wiki.Alerts.Tip"); ?></strong>
                    <?php echo str_replace("%permission%", "murdermystery.admin.*", localize("Wiki.Global.You-Can-Use-Star-For-All-Admin-Permissions")); ?>
                </div>
            </div>
            <table>
                <thead>
                <tr>
                    <th><?php echo localize("Wiki.Global.Command"); ?></th>
                    <th><?php echo localize("Wiki.Global.Permission"); ?></th>
                    <th><?php echo localize("Wiki.Global.Description"); ?></th>
                    <th><?php echo localize("Wiki.Global.Valid-Executors"); ?></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td></td>
                    <td>murdermystery.updatenotify</td>
                    <!-- todo globalize -->
                    <td><?php echo localize("Wiki.Battle.Commands-And-Permissions.Notify-Description"); ?></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>murdermystery.command.override</td>
                    <td>Allows to use every command while being in-game</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>murdermystery.admin.sign.create (creating signs by hand) murdermystery.admin.sign.break (destroying signs)</td>
                    <td>You can create or break signs with those permissions</td>
                    <td></td>
                </tr>
                <tr>
                    <td>/mm create [arena]</td>
                    <td>murdermystery.admin.create</td>
                    <!-- todo globalize -->
                    <td><?php echo localize("Wiki.Battle.Commands-And-Permissions.Create-Command-Description"); ?></td>
                    <td><?php echo localize("Wiki.Global.Player") ?></td>
                </tr>
                <tr>
                    <td>/mm [arena] edit</td>
                    <td>murdermystery.admin.create</td>
                    <!-- todo globalize -->
                    <td><?php echo localize("Wiki.Battle.Commands-And-Permissions.Edit-Command-Description"); ?></td>
                    <td><?php echo localize("Wiki.Global.Player") ?></td>
                </tr>
                <tr>
                    <td>/mma list</td>
                    <td>murdermystery.admin.list</td>
                    <td>Prints list of available arenas</td>
                    <td><?php echo localize("Wiki.Global.Player") ?>/<?php echo localize("Wiki.Global.Console") ?></td>
                </tr>
                <tr>
                    <td>/mma stop</td>
                    <td>murdermystery.admin.stopgame</td>
                    <td>Stops game you&#39;re playing</td>
                    <td><?php echo localize("Wiki.Global.Player") ?></td>
                </tr>
                <tr>
                    <td>/mma forcestart</td>
                    <td>murdermystery.admin.forcestart</td>
                    <td>Force starts game</td>
                    <td><?php echo localize("Wiki.Global.Player") ?></td>
                </tr>
                <tr class="text-danger">
                    <td>/mma reload</td>
                    <td>murdermystery.admin.reload</td>
                    <td>Reloads all game instances <strong>they will be stopped. <i class="fa fa-warning"></i> Usage highly discouraged!</strong></td>
                    <td><?php echo localize("Wiki.Global.Player") ?>/<?php echo localize("Wiki.Global.Console") ?></td>
                </tr>
                <tr>
                    <td>/mma delete [arena]</td>
                    <td>murdermystery.admin.delete</td>
                    <td>Deletes specified arena</td>
                    <td><?php echo localize("Wiki.Global.Player") ?></td>
                </tr>
                </tbody>
            </table>

            <h2 id="basic-permissions">Basic permissions</h2>
            <p>Basic premissions are default permissions for games. Default permissions can be found in <strong>config.yml</strong></p>
            <pre><code class="lang-yaml">Basic-<span class="hljs-string">Permissions:</span>
  Arena-Edit-<span class="hljs-string">Permission:</span> <span class="hljs-string">"murdermystery.edit"</span>
  Join-<span class="hljs-string">Permission:</span> <span class="hljs-string">"murdermystery.join.&lt;arena&gt;"</span>
</code></pre>
        </div>

        <div class="col-auto mb-3">
            <div id="side-menu">
                <div class="menu-content px-3 py-2">
                    <img src="../../inc/img/sidebar-murder-temp.png" class="img-fluid mx-auto d-block" alt="logo" width="200">
                    <h3 id="-general-"><strong><?php echo localize("Wiki.Sidebar.General"); ?></strong></h3>
                    <ul style="list-style-type: disc;">
                        <li>
                            <a href="https://wiki.plajer.xyz/minecraft/murdermystery/index.php"><?php echo localize("Wiki.Sidebar.General.Home"); ?></a>
                        </li>
                        <li style="list-style-image: url('../../inc/img/you-are-here.png');">
                            <a href="https://wiki.plajer.xyz/minecraft/murdermystery/cmds_and_perms.php"><?php echo localize("Wiki.Sidebar.General.Commands-And-Permissions"); ?></a>
                        </li>
                        <li>
                            <a href="https://wiki.plajer.xyz/minecraft/murdermystery/addons.php"><?php echo localize("Wiki.Sidebar.General.Plugin-Addons"); ?></a>
                        </li>
                        <li>
                            <a href="https://wiki.plajer.xyz/minecraft/murdermystery/papi_placeholders.php"><?php echo localize("Wiki.Sidebar.General.PAPI-Placeholders"); ?></a>
                        </li>
                        <li>
                            <a href="https://wiki.plajer.xyz/minecraft/murdermystery/leaderheads_names.php">Leaderheads Statistics</a>
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

        <footer class="col-12 page-footer font-small elegant-color-dark p-0">
            <div class="footer-copyright text-center py-3">© 2019 <a target="_blank" href="https://github.com/Plajer-Lair/MurderMystery">Murder Mystery</a> |
                Created by <a target="_blank" href="https://github.com/Plajer-Lair">Plajer's Lair</a> and maintained by <a target="_blank" href="https://www.spigotmc.org/members/plajer.423193/">Plajer</a>
            </div>
        </footer>
    </div>
</div>
</body>
</html>