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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
          crossorigin="anonymous">

    <link rel="icon" sizes="192x192" href="../../img/faviconmobile.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../img/favicon.ico">
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
            <h1 id="frequently-asked-questions">Frequently Asked Questions</h1>
            <h2 id="table-of-contents">Table of contents</h2>
            <ul>
                <li><a href="https://github.com/Plajer-Lair/BuildBattle/wiki/Frequently-Asked-Questions#supported-versions-of-village-defense-3">What versions do support Build Battle 3?</a></li>
                <li><a href="https://github.com/Plajer-Lair/BuildBattle/wiki/Frequently-Asked-Questions#players-cant-join-through-signs">Players can&#39;t join through signs</a></li>
                <li><a href="https://github.com/Plajer-Lair/BuildBattle/wiki/Frequently-Asked-Questions#scoreboard-variables">What are scoreboard variables?</a></li>
            </ul>
            <hr>
            <h3 id="supported-versions-of-build-battle-3">Supported versions of Build Battle 3</h3>
            <p>Supported versions are currently 1.9.x, 1.10.x, 1.11.x and 1.12.x.
                If your plugin doesn&#39;t startup and you don&#39;t have this version you&#39;re receiving this message:</p>
            <pre><code>  _   _           _                                                    _                _
 |<span class="hljs-string"> \ </span>|<span class="hljs-string"> </span>|<span class="hljs-string">   ___   </span>|<span class="hljs-string"> </span>|<span class="hljs-string">_     ___   _   _   _ __    _ __     ___    _ __  </span>|<span
                            class="hljs-string"> </span>|<span class="hljs-string">_    ___    __</span>|<span class="hljs-string"> </span>|
 |<span class="hljs-string">  \</span>|<span class="hljs-string"> </span>|<span class="hljs-string">  / _ \  </span>|<span class="hljs-string"> __</span>|<span class="hljs-string">   / __</span>|<span
                            class="hljs-string"> </span>|<span class="hljs-string"> </span>|<span class="hljs-string"> </span>|<span class="hljs-string"> </span>|<span
                            class="hljs-string"> </span>|<span class="hljs-string"> '_ \  </span>|<span class="hljs-string"> '_ \   / _ \  </span>|<span class="hljs-string"> '__</span>|<span
                            class="hljs-string"> </span>|<span class="hljs-string"> __</span>|<span class="hljs-string">  / _ \  / _` </span>|
 |<span class="hljs-string"> </span>|<span class="hljs-string">\  </span>|<span class="hljs-string"> </span>|<span class="hljs-string"> (_) </span>|<span class="hljs-string"> </span>|<span
                            class="hljs-string"> </span>|<span class="hljs-string">_    \__ \ </span>|<span class="hljs-string"> </span>|<span class="hljs-string">_</span>|<span
                            class="hljs-string"> </span>|<span class="hljs-string"> </span>|<span class="hljs-string"> </span>|<span class="hljs-string">_) </span>|<span
                            class="hljs-string"> </span>|<span class="hljs-string"> </span>|<span class="hljs-string">_) </span>|<span class="hljs-string"> </span>|<span
                            class="hljs-string"> (_) </span>|<span class="hljs-string"> </span>|<span class="hljs-string"> </span>|<span class="hljs-string">    </span>|<span
                            class="hljs-string"> </span>|<span class="hljs-string">_  </span>|<span class="hljs-string">  __/ </span>|<span class="hljs-string"> (_</span>|<span
                            class="hljs-string"> </span>|
 |<span class="hljs-string">_</span>|<span class="hljs-string"> \_</span>|<span class="hljs-string">  \___/   \__</span>|<span class="hljs-string">   </span>|<span
                            class="hljs-string">___/  \__,_</span>|<span class="hljs-string"> </span>|<span class="hljs-string"> .__/  </span>|<span class="hljs-string"> .__/   \___/  </span>|<span
                            class="hljs-string">_</span>|<span class="hljs-string">     \__</span>|<span class="hljs-string">  \___</span>|<span class="hljs-string">  \__,_</span>|
                                       |<span class="hljs-string">_</span>|<span class="hljs-string">     </span>|<span class="hljs-string">_</span>|<span class="hljs-string">
Your server version is not supported by Village Defense!
Sadly, we must shut off. Maybe you consider changing your server version?</span>
</code></pre>
            <hr>
            <h3 id="players-can-t-join-through-signs">Players can&#39;t join through signs</h3>
            <p>This is a very common problem in every minigame plugin.</p>
            <p>It&#39;s <strong>caused by spawn protection</strong> feature in vanilla Minecraft.</p>
            <p>To disable this go to <strong>server.properties</strong> and change <strong>spawn-protection</strong> value <strong>to 0</strong>.</p>
            <hr>
            <h3 id="scoreboard-variables">Scoreboard variables</h3>
            <table>
                <thead>
                <tr>
                    <th>Variable</th>
                    <th>Description</th>
                    <th>Requirements</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>%MIN_PLAYERS%</td>
                    <td>Minimum players size</td>
                    <td>none</td>
                </tr>
                <tr>
                    <td>%MAX_PLAYERS%</td>
                    <td>Maximum players size</td>
                    <td>none</td>
                </tr>
                <tr>
                    <td>%PLAYERS%</td>
                    <td>Size of players in arena</td>
                    <td>none</td>
                </tr>
                <tr>
                    <td>%PLAYER%</td>
                    <td>Name of player</td>
                    <td>none</td>
                </tr>
                <tr>
                    <td>%THEME%</td>
                    <td>Current theme string</td>
                    <td>none</td>
                </tr>
                <tr>
                    <td>%TIMER%</td>
                    <td>Current arena timer (ex. 10 seconds before start)</td>
                    <td>none</td>
                </tr>
                <tr>
                    <td>%TIME_LEFT%</td>
                    <td>Build time left, voting time left</td>
                    <td>none</td>
                </tr>
                <tr>
                    <td>%FORMATTED_TIME_LEFT%</td>
                    <td>Formatted above-mentioned placeholder (ex. 0m10s)</td>
                    <td>none</td>
                </tr>
                <tr>
                    <td>%ARENA_ID%</td>
                    <td>Arena ID string</td>
                    <td>none</td>
                </tr>
                <tr>
                    <td>%TEAMMATE%</td>
                    <td>In-game teammate nick</td>
                    <td>Teams game type</td>
                </tr>
                <tr>
                    <td>%MONEY%</td>
                    <td>Current balance of player</td>
                    <td><a href="https://dev.bukkit.org/projects/vault">Vault</a></td>
                </tr>
                </tbody>
            </table>
        </div>

        <div class="col-lg-auto col-md-4 col-sm-6 col-xs-12 mb-3">
            <div id="side-menu">
                <div class="menu-content px-3 py-2">
                    <img src="https://i.imgur.com/OGAv7qB.png" class="img-fluid mx-auto d-block" alt="logo" width="200">
                    <h3 id="-general-"><strong><?php echo localize("VD-Sidebar-General"); ?></strong></h3>
                    <ul style="list-style-type: disc;">
                        <li>
                            <a href="https://plajer.xyz/wiki/mc/buildbattle/index.php"><?php echo localize("VD-Sidebar-Home"); ?></a>
                        </li>
                        <li>
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
                        <li style="list-style-image: url('../../img/you-are-here.png');">
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