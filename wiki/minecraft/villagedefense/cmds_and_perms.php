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
                <li><a href="#custom-permissions">Custom
                    permissions</a></li>
                <li><a href="#kits-permissions">Kits
                    permissions</a></li>
            </ul>
            <h2 id="commands-and-permissions">Commands and permissions</h2>
            <p><code><?php echo localize("Wiki.Global.Command-Aliases-Explained"); ?></code></p>
            <h3 id="-player-commands">🔵 <?php echo localize("Wiki.Global.Player-Commands"); ?></h3>
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
                    <td>/vd join [arena]</td>
                    <td>villagedefense.join.%arena% villagedefense.join.* (all arenas)</td>
                    <td>Joins specified arena</td>
                </tr>
                <tr>
                    <td>/vd randomjoin</td>
                    <td><strong>Requires permission <code>villagedefense.join.*</code> to access all arenas</strong>
                    </td>
                    <td>Joins random <strong>not started</strong> arena</td>
                </tr>
                <tr>
                    <td>/vd stats (online player)</td>
                    <td><?php echo localize("Wiki.Global.None"); ?></td>
                    <td>Shows your stats</td>
                </tr>
                <tr>
                    <td>/vd leave</td>
                    <td><?php echo localize("Wiki.Global.None"); ?></td>
                    <td>Quits current game. You can disable game quit in config.yml</td>
                </tr>
                <tr>
                    <td>/vd top [statistic]</td>
                    <td><?php echo localize("Wiki.Global.None"); ?></td>
                    <td>Shows top 10 users from requested statistic</td>
                </tr>
                <tr>
                    <td>/vd selectkit</td>
                    <td>villagedefense.command.selectkit</td>
                    <td>Change kit while being in game</td>
                </tr>
                </tbody>
            </table>
            <h3 id="-admin-commands">🔴 <?php echo localize("Wiki.Global.Admin-Commands"); ?></h3>
            <div class="alert alert-success alert-white rounded">
                <div class="icon">
                    <i class="fa fa-check"></i>
                </div>
                <div style="margin-left: 45px;"><strong><?php echo localize("Wiki.Alerts.Tip"); ?></strong>
                    <?php echo str_replace("%permission%", "villagedefense.admin.*", localize("Wiki.Global.You-Can-Use-Star-For-All-Admin-Permissions")); ?>
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
                    <td>villagedefense.updatenotify</td>
                    <td>Notifies about plugin update on join</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>villagedefense.command.override</td>
                    <td>Allows to use every command while being in-game</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>villagedefense.admin.sign.create (creating signs by hand) villagedefense.admin.sign.break (destroying signs)</td>
                    <td>You can create or break signs with those permissions</td>
                    <td></td>
                </tr>
                <tr>
                    <td>/vd create [arena]</td>
                    <td>villagedefense.admin.create</td>
                    <td>Creates new arena with specified name</td>
                    <td><?php echo localize("Wiki.Global.Player"); ?></td>
                </tr>
                <tr>
                    <td>/vd [arena] edit</td>
                    <td>villagedefense.admin.create</td>
                    <td>Edits existing arena</td>
                    <td><?php echo localize("Wiki.Global.Player"); ?></td>
                </tr>
                <tr>
                    <td>/vda list</td>
                    <td>villagedefense.admin.list</td>
                    <td>Prints list of available arenas</td>
                    <td><?php echo localize("Wiki.Global.Player"); ?>/<?php echo localize("Wiki.Global.Console"); ?></td>
                </tr>
                <tr>
                    <td>/vda stop</td>
                    <td>villagedefense.admin.stopgame</td>
                    <td>Stops game you&#39;re playing</td>
                    <td><?php echo localize("Wiki.Global.Player"); ?></td>
                </tr>
                <tr>
                    <td>/vda forcestart</td>
                    <td>villagedefense.admin.forcestart</td>
                    <td>Force starts game you&#39;re in</td>
                    <td><?php echo localize("Wiki.Global.Player"); ?></td>
                </tr>
                <tr>
                    <td>/vda respawn (player)</td>
                    <td>villagedefense.admin.respawn villagedefense.admin.respawn.others</td>
                    <td>Respawn you/specified player in your arena</td>
                    <td><?php echo localize("Wiki.Global.Player"); ?></td>
                </tr>
                <tr>
                    <td>/vda spychat</td>
                    <td>villagedefense.admin.spychat</td>
                    <td>Toggles all arenas chat visibility (multi-arena feature only)</td>
                    <td><?php echo localize("Wiki.Global.Player"); ?></td>
                </tr>
                <tr class="text-danger">
                    <td>/vda reload</td>
                    <td>villagedefense.admin.reload</td>
                    <td>Reloads all game instances <strong>they will be stopped. <i class="fa fa-warning"></i> Usage highly discouraged!</strong></td>
                    <td><?php echo localize("Wiki.Global.Player"); ?>/<?php echo localize("Wiki.Global.Console"); ?></td>
                </tr>
                <tr>
                    <td>/vda delete [arena]</td>
                    <td>villagedefense.admin.delete</td>
                    <td>Deletes specified arena</td>
                    <td><?php echo localize("Wiki.Global.Player"); ?></td>
                </tr>
                <tr>
                    <td>/vda tp [arena] [location type]</td>
                    <td>villagedefense.admin.teleport</td>
                    <td>Teleports to specified arena location <strong>Location types:</strong> START, END, LOBBY</td>
                    <td><?php echo localize("Wiki.Global.Player"); ?></td>
                </tr>
                <tr>
                    <td>/vda clear [zombie/villager/golem]</td>
                    <td>villagedefense.admin.clear</td>
                    <td>Clears specified mobs in your game</td>
                    <td><?php echo localize("Wiki.Global.Player"); ?></td>
                </tr>
                <tr>
                    <td>/vda addorbs [amount] (player)</td>
                    <td>villagedefense.admin.addorbs villagedefense.admin.addorbs.others</td>
                    <td>Adds orbs (game currency) to you/specified player</td>
                    <td><?php echo localize("Wiki.Global.Player"); ?>/Console when player argument is specified</td>
                </tr>
                <tr>
                    <td>/vda setwave [number]</td>
                    <td>villagedefense.admin.setwave</td>
                    <td>Sets wave of game</td>
                    <td><?php echo localize("Wiki.Global.Player"); ?></td>
                </tr>
                <tr>
                    <td>/vda setprice [amount]</td>
                    <td>villagedefense.admin.setprice</td>
                    <td>Sets price of holding item (use this for shop otherwise item won&#39;t work)</td>
                    <td><?php echo localize("Wiki.Global.Player"); ?></td>
                </tr>
                </tbody>
            </table>
            <h2 id="basic-permissions">Basic permissions</h2>
            <p>Basic premissions are default permissions for games. Default permissions can be found in
                <strong>config.yml</strong>
            </p>
            <pre><code class="lang-yaml">Basic-<span class="hljs-string">Permissions:</span>
  Full-Games-<span class="hljs-string">Permission:</span> <span class="hljs-string">"villagedefense.fullgames"</span>
  Vip-<span class="hljs-string">Permission:</span> <span class="hljs-string">"villagedefense.vip"</span>
  Mvp-<span class="hljs-string">Permission:</span> <span class="hljs-string">"villagedefense.mvp"</span>
  Elite-<span class="hljs-string">Permission:</span> <span class="hljs-string">"villagedefense.elite"</span>
  Arena-Edit-<span class="hljs-string">Permission:</span> <span class="hljs-string">"villagedefense.edit"</span>
  Join-<span class="hljs-string">Permission:</span> <span class="hljs-string">"villagedefense.join.&lt;arena&gt;"</span>
</code></pre>
            <p><strong>Full-Games-Permission</strong> - Permission to join full arenas</p>
            <p><strong>Vip-Permission</strong> - Gives permission to <strong>donator kits</strong>, joining <strong>full
                games</strong> and getting <strong>50% more orbs</strong></p>
            <p><strong>Mvp-Permission</strong> - Same as <code>Vip-Permission</code> but gives <strong>100% more
                orbs</strong>
            </p>
            <p><strong>Elite-Permission</strong> - Same as <code>Vip-Permission</code> but gives <strong>150% more
                orbs</strong>
            </p>
            <p><strong>Arena-Edit-Permission</strong> - Permission for creating arenas, overrides disabled commands
                option via
                config.yml</p>
            <h2 id="custom-permissions">Custom permissions</h2>
            <p>Custom permissions are used for giving your players more orbs in game.
                Nothing more, nothing less.</p>
            <div class="alert alert-warning alert-white rounded">
                <div class="icon">
                    <i class="fa fa-warning"></i>
                </div>
                <div style="margin-left: 45px;"><strong><?php echo localize("Wiki.Alerts.Warn"); ?></strong>
                    Using dots <code>.</code> in custom permissions will not work and will break permission, don't use
                    them!
                </div>
            </div>
            <p>Custom permissions can be set up in <strong>config.yml</strong>:</p>
            <pre><code class="lang-yaml"><span class="hljs-string">CustomPermissions:</span>
  player-<span class="hljs-string">booster:</span> <span class="hljs-number">10</span>
  vip-<span class="hljs-string">booster:</span> <span class="hljs-number">100</span>
  staff-<span class="hljs-string">booster:</span> <span class="hljs-number">1000</span>
</code></pre>
            <p><strong>player-booster</strong> - Gives player with this permission 10% more orbs on pickup</p>
            <p><strong>vip-booster</strong> - Gives player 100% more orbs</p>
            <p><strong>staff-booster</strong> - 1000% more orbs</p>
            <div class="alert alert-warning alert-white rounded">
                <div class="icon">
                    <i class="fa fa-warning"></i>
                </div>
                <div style="margin-left: 45px;"><strong>Avoid low percent values!</strong>
                    Remember that 10% more orbs are actually nothing because it&#39;s 5~8 orbs + <strong>only 10% of
                        this value
                        more</strong> so you won&#39;t see any significant increase, use higher values too see the
                    difference
                </div>
            </div>
            <div class="alert alert-info alert-white rounded">
                <div class="icon">
                    <i class="fa fa-info-circle"></i>
                </div>
                <div style="margin-left: 45px;"><strong>Permissions can be combined!</strong>
                    Giving player permission <strong>player.booster</strong> and <strong>vip.booster</strong> will
                    receive 110% more
                    orbs
                    on the pickup!
                </div>
            </div>
            <h2 id="kits-permissions">Kits permissions</h2>
            <p>Every kit has its own permission node to access it. Even if it&#39;s level kit, you can still unlock it
                getting
                its
                permission.</p>
            <p><strong><?php echo localize("Wiki.Global.Example"); ?>:</strong></p>
            <ul>
                <li>Archer kit permission - <strong>villagedefense.kit.archer</strong></li>
                <li>Tornado kit permission - <strong>villagedefense.kit.tornado</strong></li>
                <li>Heavy Tank kit permission - <strong>villagedefense.kit.heavytank</strong></li>
            </ul>
            <div class="alert alert-info alert-white rounded">
                <div class="icon">
                    <i class="fa fa-info-circle"></i>
                </div>
                <div style="margin-left: 45px;"><strong><?php echo localize("Wiki.Alerts.Info"); ?></strong>
                    <strong>Premium kits</strong> also unlocks with Vip/Mvp or Elite permissions and <strong>leveled
                        kits</strong>
                    are
                    unlocked too when certain level is reached.
                </div>
            </div>
        </div>

        <div class="col-auto mb-3">
            <div id="side-menu">
                <div class="menu-content px-3 py-2">
                    <img src="../../inc/img/sidebar-village.png" class="img-fluid mx-auto d-block" alt="logo" width="200">
                    <h3 id="-general-"><strong><?php echo localize("Wiki.Sidebar.General"); ?></strong></h3>
                    <ul style="list-style-type: disc;">
                        <li>
                            <a href="https://wiki.plajer.xyz/minecraft/villagedefense/index.php"><?php echo localize("Wiki.Sidebar.General.Home"); ?></a>
                        </li>
                        <li style="list-style-image: url('../../inc/img/you-are-here.png');">
                            <a href="https://wiki.plajer.xyz/minecraft/villagedefense/cmds_and_perms.php"><?php echo localize("Wiki.Sidebar.General.Commands-And-Permissions"); ?></a>
                        </li>
                        <li>
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
                            <a href="https://youtu.be/16GS6zAte5I"><?php echo localize("Wiki.Sidebar.Support.Setup-Tutorial"); ?></a>
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
                    <h3 id="enhancements-addon"><?php echo localize("Wiki.Sidebar.Enhancements.Name"); ?></h3>
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

        <footer class="col-12 page-footer font-small elegant-color-dark p-0">
            <div class="footer-copyright text-center py-3">© 2019 <a target="_blank" href="https://www.spigotmc.org/resources/41869/">Village Defense</a> |
                Created by <a target="_blank" href="https://github.com/Plajer-Lair">Plajer's Lair</a> and maintained by <a target="_blank" href="https://www.spigotmc.org/members/plajer.423193/">Plajer</a>
                and <a target="_blank" href="https://www.spigotmc.org/members/tigerkatze.414545/">Tigerpanzer</a>
            </div>
        </footer>
    </div>
</div>
</body>
</html>