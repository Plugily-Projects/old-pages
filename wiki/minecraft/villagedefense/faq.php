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
        <div class="col-xl-5 col-lg-6 col-md-7 col-sm-11 col-xs-12 px-sm-0 px-2">
            <h1 id="frequently-asked-questions">Frequently Asked Questions</h1>
            <h2 id="table-of-contents"><?php echo localize("Wiki.Global.Table-Of-Contents"); ?></h2>
            <ul>
                <li><strong><a href="#-limitation-of-liability-disclaimer-"><i class="fa fa-warning"></i> Limitation of liability disclaimer</a></strong></li>
                <li>
                    <a href="#how-to-set-up-the-shop-">How to setup the shop?</a></li>
                <li>
                    <a href="#can-i-set-up-secret-well-">Can I set up secret well?</a></li>
                <li>
                    <a href="#supported-versions-of-village-defense-3">What versions do support Village Defense 3?</a></li>
                <li>
                    <a href="#players-can-t-join-through-signs"><?php echo localize("Wiki.Global.FAQ.Question.Players-Cant-Join-Through-Signs"); ?></a></li>
                <li>
                    <a href="#language-yml-file-is-empty">language.yml file is empty!</a></li>
                <li><a href="#how-power-ups-work-">How power-ups work?</a></li>
                <li><a href="#scoreboard-variables">What are scoreboard variables?</a></li>
                <li><a href="#what-s-new-in-vd-3-">What&#39;s new in VD 3?</a></li>
                <li>
                    <a href="#how-can-i-donate-you-">Can I donate you?</a></li>
            </ul>
            <hr>
            <h3 id="-limitation-of-liability-disclaimer-"><i class="fa fa-warning"></i> <strong>Limitation of liability
                    disclaimer</strong></h3>
            <p><strong>Village Defense 3</strong> plugin <strong>SHOULD BE RUN</strong> on a separate map when using it
                on
                multi-mode servers like Factions, Survival, SkyBlock etc.</p>
            <p><strong>What Village Defense 3 modifies in the world:</strong></p>
            <ul>
                <li>Blocks mob spawning other than Village Defense ones</li>
                <li>Cleans hoppers inventories</li>
                <li>Manipulates Villager entities</li>
            </ul>
            <div class="alert alert-danger alert-white rounded">
                <div class="icon">
                    <i class="fa fa-times-circle"></i>
                </div>
                <div style="margin-left: 45px;"><strong>Using Village Defense you accept GPLv3 license and limitations
                        of liability that Village Defense can
                        cause, please become acquainted with following warnings before using Village Defense on a production
                        server.</strong></div>
            </div>
            <hr>
            <h3 id="how-to-set-up-the-shop-">How to set up the shop?</h3>
            <p>If you follow <a href="https://www.youtube.com/watch?v=16GS6zAte5I&feature=youtu.bep">this tutorial</a> you
                will
                setup it properly.</p>
            <div class="alert alert-success alert-white rounded">
                <div class="icon">
                    <i class="fa fa-check"></i>
                </div>
                <div style="margin-left: 45px;"><strong><?php echo localize("Wiki.Alerts.Tip"); ?></strong>
                    You <strong>may</strong> want use Secret well too in your map, see how to use it below.
                </div>
            </div>
            <hr>
            <h3 id="can-i-set-up-secret-well-">Can I set up secret well?</h3>
            <p>You need to build a secret well to throw out rotten flesh there.
                If players throw there enough rotten flesh they will get an extra heart.</p>
            <p><strong>How it should be created:</strong>
                <img src="https://i.imgur.com/SAoUarT.png" alt=""></p>
            <p>(2x2 hoppers and water above them)</p>
            <p><strong>Number of needed rotten flesh is based on a simple algorithm:</strong></p>
            <p><strong>First heart:</strong> 50 rotten flesh needed</p>
            <p><strong>Next hearts:</strong> bonus hearts * in-game players size + 10</p>
            <hr>
            <h3 id="language-yml-file-is-empty">language.yml file is empty</h3>
            <p>This problem is caused mainly when you try to delete this file before you restart the server.</p>
            <div class="alert alert-danger alert-white rounded">
                <div class="icon">
                    <i class="fa fa-times-circle"></i>
                </div>
                <div style="margin-left: 45px;"><strong><?php echo localize("Wiki.Alerts.Danger"); ?></strong>
                    Always delete VD 3 files when the server is stopped. It&#39;s recommended too to edit them manually
                    when the
                    server is stopped.
                </div>
            </div>
            <hr>
            <h3 id="supported-versions-of-village-defense-3">Supported versions of Village Defense 3</h3>
            <p>Supported versions are currently 1.11-1.13.1
                If your plugin doesn&#39;t startup and you don&#39;t have this version you&#39;re receiving this
                message:</p>
            <pre><code>  _   _           _                                                    _                _
 |<span class="hljs-string"> \ </span>|<span class="hljs-string"> </span>|<span
                            class="hljs-string">   ___   </span>|<span class="hljs-string"> </span>|<span
                            class="hljs-string">_     ___   _   _   _ __    _ __     ___    _ __  </span>|<span
                            class="hljs-string"> </span>|<span class="hljs-string">_    ___    __</span>|<span
                            class="hljs-string"> </span>|
 |<span class="hljs-string">  \</span>|<span class="hljs-string"> </span>|<span
                            class="hljs-string">  / _ \  </span>|<span class="hljs-string"> __</span>|<span
                            class="hljs-string">   / __</span>|<span
                            class="hljs-string"> </span>|<span class="hljs-string"> </span>|<span
                            class="hljs-string"> </span>|<span
                            class="hljs-string"> </span>|<span class="hljs-string"> </span>|<span
                            class="hljs-string"> '_ \  </span>|<span
                            class="hljs-string"> '_ \   / _ \  </span>|<span class="hljs-string"> '__</span>|<span
                            class="hljs-string"> </span>|<span class="hljs-string"> __</span>|<span class="hljs-string">  / _ \  / _` </span>|
 |<span class="hljs-string"> </span>|<span class="hljs-string">\  </span>|<span class="hljs-string"> </span>|<span
                            class="hljs-string"> (_) </span>|<span class="hljs-string"> </span>|<span
                            class="hljs-string"> </span>|<span class="hljs-string">_    \__ \ </span>|<span
                            class="hljs-string"> </span>|<span class="hljs-string">_</span>|<span
                            class="hljs-string"> </span>|<span
                            class="hljs-string"> </span>|<span class="hljs-string"> </span>|<span
                            class="hljs-string">_) </span>|<span class="hljs-string"> </span>|<span
                            class="hljs-string"> </span>|<span class="hljs-string">_) </span>|<span
                            class="hljs-string"> </span>|<span class="hljs-string"> (_) </span>|<span
                            class="hljs-string"> </span>|<span class="hljs-string"> </span>|<span
                            class="hljs-string">    </span>|<span class="hljs-string"> </span>|<span
                            class="hljs-string">_  </span>|<span
                            class="hljs-string">  __/ </span>|<span class="hljs-string"> (_</span>|<span
                            class="hljs-string"> </span>|
 |<span class="hljs-string">_</span>|<span class="hljs-string"> \_</span>|<span class="hljs-string">  \___/   \__</span>|<span
                            class="hljs-string">   </span>|<span class="hljs-string">___/  \__,_</span>|<span
                            class="hljs-string"> </span>|<span class="hljs-string"> .__/  </span>|<span class="hljs-string"> .__/   \___/  </span>|<span
                            class="hljs-string">_</span>|<span class="hljs-string">     \__</span>|<span
                            class="hljs-string">  \___</span>|<span class="hljs-string">  \__,_</span>|
                                       |<span class="hljs-string">_</span>|<span class="hljs-string">     </span>|<span
                            class="hljs-string">_</span>|<span class="hljs-string">
Your server version is not supported by Village Defense!
Sadly, we must shut off. Maybe you consider changing your server version?</span>
</code></pre>
            <hr>
            <h3 id="players-can-t-join-through-signs"><?php echo localize("Wiki.Global.FAQ.Question.Players-Cant-Join-Through-Signs"); ?></h3>
            <p>This is a very common problem in every minigame plugin.</p>
            <p>It&#39;s <strong>caused by spawn protection</strong> feature in vanilla Minecraft.</p>
            <p>To disable this go to <strong>server.properties</strong> and change <strong>spawn-protection</strong>
                value
                <strong>to 0</strong>.</p>
            <hr>
            <h3 id="how-power-ups-work-">How power-ups work?</h3>
            <p>Power-ups added in Village Defense <strong>3.3.0</strong> enhances your game a bit.</p>
            <p><strong>Requires <a href="https://dev.bukkit.org/projects/holographic-displays">Holographic Displays</a>
                    to work!</strong>
            </p>
            <p><strong>There are few types of them right now:</strong></p>
            <ul>
                <li>Map clean power-up (cleans map from all zombies that are spawned, not every zombie from the pool)
                </li>
                <li>Double damage power-up (Every player gets Strength I potion for 15 seconds by default)</li>
                <li>Healing power-up (Every player gets Regeneration I for 10 seconds by default)</li>
                <li>Golem raid power-up (3 golems are spawned in the village by default)</li>
                <li>One shot one kill power-up (Every zombie can be killed for one hit (Strength 255) for 15 seconds by
                    default)
                </li>
            </ul>
            <p>Every option and messages from these power-ups are configurable. Drop chance, time of power-up,
                disabling/enabling specific power-ups are configurable via <strong>config.yml</strong>. Messages are
                configurable via <strong>language.yml</strong>.</p>
            <hr>
            <h3 id="scoreboard-variables">Scoreboard variables</h3>
            <table>
                <thead>
                <tr>
                    <th>Variable</th>
                    <th><?php echo localize("Wiki.Global.Description"); ?></th>
                    <th><?php echo localize("Wiki.Global.Requirements"); ?></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>%MIN_PLAYERS%</td>
                    <td>Minimum players size</td>
                    <td><?php echo localize("Wiki.Global.None"); ?></td>
                </tr>
                <tr>
                    <td>%PLAYERS%</td>
                    <td>Size of all players in arena</td>
                    <td><?php echo localize("Wiki.Global.None"); ?></td>
                </tr>
                <tr>
                    <td>%PLAYERS_LEFT%</td>
                    <td>Size of alive players in arena</td>
                    <td><?php echo localize("Wiki.Global.None"); ?></td>
                </tr>
                <tr>
                    <td>%TIME%</td>
                    <td>Current arena timer (ex. 10 seconds before start)</td>
                    <td><?php echo localize("Wiki.Global.None"); ?></td>
                </tr>
                <tr>
                    <td>%VILLAGERS%</td>
                    <td>Alive villagers number</td>
                    <td><?php echo localize("Wiki.Global.None"); ?></td>
                </tr>
                <tr>
                    <td>%ZOMBIES%</td>
                    <td>Total zombies amount in wave (not alive ones!)</td>
                    <td><?php echo localize("Wiki.Global.None"); ?></td>
                </tr>
                <tr>
                    <td>%ORBS%</td>
                    <td>Player's orbs amount (game currency)</td>
                    <td><?php echo localize("Wiki.Global.None"); ?></td>
                </tr>
                <tr>
                    <td>%ROTTEN_FLESH%</td>
                    <td>Arena's rotten flesh amount (more flesh, more bonus hearts) (see more <a href="#can-i-set-up-secret-well-">here</a>)</td>
                    <td><?php echo localize("Wiki.Global.None"); ?></td>
                </tr>
                <tr>
                    <td><a href="https://www.spigotmc.org/wiki/placeholderapi-placeholders/" target="_blank">All PlaceholderAPI placeholders</a></td>
                    <td>Every placeholder supported by PAPI</td>
                    <td><a href="https://www.spigotmc.org/resources/placeholderapi.6245/" target="_blank">PlaceholderAPI</a></td>
                </tr>
                </tbody>
            </table>
            <hr>
            <h3 id="what-s-new-in-vd-3-">What&#39;s new in VD 3?</h3>
            <p>There are many <strong>major and minor changes</strong> in Village Defense 3.</p>
            <p>Primary changes:</p>
            <ul>
                <li>Entire code refactor and improvement</li>
                <li>Support for 1.9.2 and 1.11 versions</li>
                <li>Implemented VillageAPI to create external add-ons</li>
                <li>New kits and translations</li>
                <li>Few locales support (German and Polish)</li>
                <li>Creation of wiki (this wiki)</li>
                <li>Golem upgrades</li>
                <li>Revamped commands entirely</li>
                <li>And many other fixes and additions...</li>
            </ul>
            <hr>
            <h3 id="how-can-i-donate-you-">How can I donate you?</h3>
            <p>If you really like my work you can donate me here: <a href="https://www.paypal.me/Plajer">https://www.paypal.me/Plajer</a>
            </p>
            <p>If you are on my discord server I&#39;ll give you <strong>Donator</strong> role too.</p>

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
                        <li>
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
                        <li style="list-style-image: url('../../inc/img/you-are-here.png');">
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
            <div class="footer-copyright text-center py-3">© 2018 <a target="_blank" href="https://www.spigotmc.org/resources/41869/">Village Defense 3</a> |
                Created by <a target="_blank" href="https://github.com/Plajer-Lair">Plajer's Lair</a> and maintained by <a target="_blank"
                                                                                                                           href="https://www.spigotmc.org/members/plajer.423193/">Plajer</a>
                and <a target="_blank" href="https://www.spigotmc.org/members/tigerkatze.414545/">Tigerpanzer</a>
            </div>
        </footer>
    </div>
</div>
</body>
</html>