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
            <h1>Commands and Permissions</h1>
            <h2>Table of contents</h2>
            <ul>
                <li>
                    <a href="#commands-and-permissions">Commands
                        &amp; Permissions</a></li>
                <li><a href="#basic-permissions">Basic
                        permissions</a></li>
            </ul>
            <h2 id="commands-and-permissions">Commands and permissions</h2>
            <p><code>[required argument] (optional argument)</code></p>
            <h3 id="-player-commands">🔵 Player commands</h3>
            <table>
                <thead>
                <tr>
                    <th><?php echo localize("Global-Command"); ?></th>
                    <th><?php echo localize("Global-Permission"); ?></th>
                    <th><?php echo localize("Global-Description"); ?></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>/bb join [arena]</td>
                    <td>buildbattle.join.%arena% buildbattle.join.* (all arenas)</td>
                    <td>Joins specified arena</td>
                </tr>
                <tr>
                    <td>/bb randomjoin [solo/team]</td>
                    <td><strong>Requires permission <code>buildbattle.join.*</code> to access all arenas</strong></td>
                    <td>Joins random arena of specified game mode</td>
                </tr>
                <tr>
                    <td>/bb stats (online player)</td>
                    <td>none</td>
                    <td>Shows your stats</td>
                </tr>
                <tr>
                    <td>/bb leave</td>
                    <td>none</td>
                    <td>Quits current game. You can disable game quit in config.yml</td>
                </tr>
                <tr>
                    <td>/bb top [statistic]</td>
                    <td>none</td>
                    <td>Shows TOP 10 players of specified statistic</td>
                </tr>
                </tbody>
            </table>
            <h3 id="-admin-commands">🔴 Admin commands</h3>
            <div class="alert alert-success alert-white rounded">
                <div class="icon">
                    <i class="fa fa-check"></i>
                </div>
                <div style="margin-left: 45px;"><strong><?php echo localize("VD-Alert-Tip"); ?></strong>
                    You can use <code>buildbattle.admin.*</code> permission to give all admin commands
                    permission
                </div>
            </div>
            <table>
                <thead>
                <tr>
                    <th><?php echo localize("Global-Command"); ?></th>
                    <th><?php echo localize("Global-Permission"); ?></th>
                    <th><?php echo localize("Global-Description"); ?></th>
                    <th>Valid executors</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td></td>
                    <td>buildbattle.updatenotify</td>
                    <td>Notifies about plugin update on join</td>
                    <td></td>
                </tr>
                <tr>
                    <td>/bb create [arena]</td>
                    <td>buildbattle.admin.create</td>
                    <td>Creates new arena with specified name</td>
                    <td>Player</td>
                </tr>
                <tr>
                    <td>/bb [arena] edit</td>
                    <td>buildbattle.admin.create</td>
                    <td>Edits existing arena</td>
                    <td>Player</td>
                </tr>
                <tr>
                    <td>/bba list</td>
                    <td>buildbattle.admin.list</td>
                    <td>Prints list of available arenas</td>
                    <td>Player/Console</td>
                </tr>
                <tr>
                    <td>/bba stop</td>
                    <td>buildbattle.admin.stopgame</td>
                    <td>Stops game you&#39;re playing</td>
                    <td>Player</td>
                </tr>
                <tr>
                    <td>/bba forcestart (theme)</td>
                    <td>buildbattle.admin.forcestart</td>
                    <td>Force starts game you&#39;re in When <code>theme</code> argument is typed arena starts with predefined theme without Voting phase</td>
                    <td>Player</td>
                </tr>
                <tr>
                    <td>/bba reload</td>
                    <td>buildbattle.admin.reload</td>
                    <td>Reloads all game instances <strong>they will be stopped</strong></td>
                    <td>Player/Console</td>
                </tr>
                <tr>
                    <td><del>/bba addsign [arena]</del> <strong>Deprecated</strong></td>
                    <td><strong>Command itself is deprecated and was removed</strong>  buildbattle.admin.sign.create (creating signs by hand) buildbattle.admin.sign.break (destroying signs)</td>
                    <td>Adds new sign for specified arena</td>
                    <td>Player</td>
                </tr>
                <tr>
                    <td>/bba delete [arena]</td>
                    <td>buildbattle.admin.delete</td>
                    <td>Deletes specified arena</td>
                    <td>Player</td>
                </tr>
                <tr>
                    <td>/bba addplot [arena]</td>
                    <td>buildbattle.admin.addplot</td>
                    <td>Adds new plot to the arena</td>
                    <td>Player</td>
                </tr>
                <tr>
                    <td>/bba removeplot [arena] [plot ID]</td>
                    <td>buildbattle.admin.removeplot</td>
                    <td>Remove target plot from the arena</td>
                    <td>Player</td>
                </tr>
                <tr>
                    <td>/bba addnpc</td>
                    <td>buildbattle.admin.addnpc</td>
                    <td>Spawn floor changer NPC at your location <br/><strong>Requires Citizens</strong></td>
                    <td>Player</td>
                </tr>
                <tr>
                    <td>/bba settheme [theme]</td>
                    <td>buildbattle.admin.settheme</td>
                    <td>Set new theme of arena <br/><strong>Works only when game started, and for 20 seconds after start</strong></td>
                    <td>Player</td>
                </tr>
                <tr>
                    <td>/bba addvotes [player] [amount]</td>
                    <td>buildbattle.admin.supervotes.add</td>
                    <td>Add super votes to target player <br/>Use <code>- (minus)</code> to remove votes</td>
                    <td>Player/Console</td>
                </tr>
                <tr>
                    <td>/bba setvotes [player] [amount]</td>
                    <td>buildbattle.admin.supervotes.set</td>
                    <td>Set super votes of target player</td>
                    <td>Player/Console</td>
                </tr>
                <tr>
                    <td>/bba plotwand</td>
                    <td>buildbattle.admin.plotwand</td>
                    <td>Get plot wand for setupping arenas</td>
                    <td>Player</td>
                </tr>
                </tbody>
            </table>

            <h2 id="basic-permissions">Basic permissions</h2>
            <p>Basic premissions are default permissions for games. Default permissions can be found in <strong>config.yml</strong></p>
            <pre><code class="lang-yaml">Basic-<span class="hljs-string">Permissions:</span>
  Arena-Edit-<span class="hljs-string">Permission:</span> <span class="hljs-string">"buildbattle.edit"</span>
  Join-<span class="hljs-string">Permission:</span> <span class="hljs-string">"buildbattle.join.&lt;arena&gt;"</span>
</code></pre>
        </div>

        <div class="col-lg-auto col-md-4 col-sm-6 col-xs-12 mb-3">
            <div id="side-menu">
                <div class="menu-content px-3 py-2">
                    <img src="https://i.imgur.com/AqiABjQ.png" class="img-fluid mx-auto d-block" alt="logo" width="200">
                    <h3 id="-general-"><strong><?php echo localize("VD-Sidebar-General"); ?></strong></h3>
                    <ul style="list-style-type: disc;">
                        <li>
                            <a href="https://plajer.xyz/wiki/mc/buildbattle/index.php"><?php echo localize("VD-Sidebar-Home"); ?></a>
                        </li>
                        <li style="list-style-image: url('../../img/you-are-here.png');">
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