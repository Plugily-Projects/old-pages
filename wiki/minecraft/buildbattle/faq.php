<?php
include_once('../../inc/tracking.php');
include_once("../../inc/tracking.php");
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

    <link rel="icon" sizes="192x192" href="../../inc/img/favicon/favicon-mobile.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../inc/img/favicon/favicon.ico">
</head>
<body>
<nav class="navbar navbar-expand navbar-dark bg-dark fixed-nav-index">
    <a class="navbar-brand" href="#">
        <img src="https://i.imgur.com/gDyj2on.png" width="30" height="30" class="d-inline-block align-top" alt="">
        Plajer's Lair wiki
    </a>
</nav>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-xl-5 col-lg-6 col-md-6 col-sm-10 col-xs-12">
            <h1 id="frequently-asked-questions">Frequently Asked Questions</h1>
            <h2 id="table-of-contents"><?php echo localize("Table-Of-Contents"); ?></h2>
            <ul>
                <li><a href="#supported-versions-of-build-battle-3">What versions do support Build Battle 3?</a></li>
                <li><a href="#players-can-t-join-through-signs">Players can&#39;t join through signs</a></li>
                <li><a href="#scoreboard-variables">What are scoreboard variables?</a></li>
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
                    <th><?php echo localize("Description"); ?></th>
                    <th>Requirements</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>%MIN_PLAYERS%</td>
                    <td>Minimum players size</td>
                    <td><?php echo localize("None"); ?></td>
                </tr>
                <tr>
                    <td>%MAX_PLAYERS%</td>
                    <td>Maximum players size</td>
                    <td><?php echo localize("None"); ?></td>
                </tr>
                <tr>
                    <td>%PLAYERS%</td>
                    <td>Size of players in arena</td>
                    <td><?php echo localize("None"); ?></td>
                </tr>
                <tr>
                    <td>%PLAYER%</td>
                    <td>Name of player</td>
                    <td><?php echo localize("None"); ?></td>
                </tr>
                <tr>
                    <td>%THEME%</td>
                    <td>Current theme string</td>
                    <td><?php echo localize("None"); ?></td>
                </tr>
                <tr>
                    <td>%TIMER%</td>
                    <td>Current arena timer (ex. 10 seconds before start)</td>
                    <td><?php echo localize("None"); ?></td>
                </tr>
                <tr>
                    <td>%TIME_LEFT%</td>
                    <td>Build time left, voting time left</td>
                    <td><?php echo localize("None"); ?></td>
                </tr>
                <tr>
                    <td>%FORMATTED_TIME_LEFT%</td>
                    <td>Formatted above-mentioned placeholder (ex. 0m10s)</td>
                    <td><?php echo localize("None"); ?></td>
                </tr>
                <tr>
                    <td>%ARENA_ID%</td>
                    <td>Arena ID string</td>
                    <td><?php echo localize("None"); ?></td>
                </tr>
                <tr>
                    <td>%TEAMMATE%</td>
                    <td>In-game teammate nick</td>
                    <td>Teams game type</td>
                </tr>
                <tr>
                    <td><a href="https://www.spigotmc.org/wiki/placeholderapi-placeholders/" target="_blank">All PlaceholderAPI placeholders</a></td>
                    <td>Every placeholder supported by PAPI</td>
                    <td><a href="https://www.spigotmc.org/resources/placeholderapi.6245/" target="_blank">PlaceholderAPI</a></td>
                </tr>
                </tbody>
            </table>
        </div>

        <div class="col-lg-auto col-md-4 col-sm-6 col-xs-12 mb-3">
            <div id="side-menu">
                <div class="menu-content px-3 py-2">
                    <img src="../../inc/img/sidebar-battle.png" class="img-fluid mx-auto d-block" alt="logo" width="200">
                    <h3 id="-general-"><strong><?php echo localize("Sidebar-Category-General"); ?></strong></h3>
                    <ul style="list-style-type: disc;">
                        <li>
                            <a href="https://wiki.plajer.xyz/minecraft/buildbattle/index.php"><?php echo localize("Sidebar-Home"); ?></a>
                        </li>
                        <li>
                            <a href="https://wiki.plajer.xyz/minecraft/buildbattle/cmds_and_perms.php"><?php echo localize("Sidebar-Cmds-And-Perms"); ?></a>
                        </li>
                        <li>
                            <a href="https://wiki.plajer.xyz/minecraft/buildbattle/free_maps.php"><?php echo localize("Sidebar-Free-Maps"); ?></a>
                        </li>
                        <li>
                            <a href="https://wiki.plajer.xyz/minecraft/buildbattle/addons.php"><?php echo localize("Sidebar-Plugin-Addons"); ?></a>
                        </li>
                        <li>
                            <a href="https://wiki.plajer.xyz/minecraft/buildbattle/papi_placeholders.php"><?php echo localize("Sidebar-PAPI-Placeholders"); ?></a>
                        </li>
                    </ul>
                    <h3 id="-support-"><strong><?php echo localize("Sidebar-Category-Support"); ?></strong></h3>
                    <ul style="list-style-type: disc;">
                        <li>
                            <a href="https://www.youtube.com/watch?v=UOfrzj0WdzM"><?php echo localize("Sidebar-Setup-Tutorial"); ?></a>
                        </li>
                        <li style="list-style-image: url('../../inc/img/you-are-here.png');">
                            <a href="https://wiki.plajer.xyz/minecraft/buildbattle/faq.php"><?php echo localize("Sidebar-FAQ"); ?></a> - <?php echo localize("Sidebar-FAQ-Problems-And-Tips"); ?>
                        </li>
                        <li>
                            <a href="https://wiki.plajer.xyz/minecraft/buildbattle/configuration.php"><?php echo localize("Sidebar-Files-Explained"); ?></a>
                        </li>
                    </ul>
                    <h3 id="-developement-space-"><strong><?php echo localize("Sidebar-Category-Development-Space"); ?></strong>
                    </h3>
                    <ul style="list-style-type: disc;">
                        <li>
                            <a href="https://wiki.plajer.xyz/minecraft/buildbattle/api.php"><?php echo localize("Sidebar-Developer-API"); ?></a>
                        </li>
                        <li>
                            <a href="https://jd.plajer.xyz/minecraft/buildbattle"><?php echo localize("Sidebar-Java-Docs"); ?></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <footer class="col-12 page-footer font-small elegant-color-dark p-0">
            <div class="footer-copyright text-center py-3">© 2018 <a target="_blank" href="https://www.spigotmc.org/resources/buildbattle-1-9-1-13-1.44703/">Build Battle 3</a> |
                Created by <a target="_blank" href="https://github.com/Plajer-Lair">Plajer's Lair</a> and maintained by <a target="_blank" href="https://www.spigotmc.org/members/plajer.423193/">Plajer</a>
                and <a target="_blank" href="https://www.spigotmc.org/members/tigerkatze.414545/">Tigerpanzer</a>
            </div>
        </footer>
    </div>
</div>
</body>
</html>