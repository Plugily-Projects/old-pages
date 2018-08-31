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

    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#9e9e9e">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#9e9e9e">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#9e9e9e">
    <link rel="icon" sizes="192x192" href="../../img/faviconmobile.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../img/favicon.ico">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12">
            <h1 id="frequently-asked-questions">Frequently Asked Questions</h1>
            <h2 id="table-of-contents">Table of contents</h2>
            <ul>
                <li><strong><a
                                href="#-limitation-of-liability-disclaimer-"><i class="fa fa-warning"></i> Limitation of
                            liability disclaimer</a></strong></li>
                <li>
                    <a href="#how-to-set-up-the-shop-">How
                        to setup the shop?</a></li>
                <li>
                    <a href="#can-i-set-up-secret-well-">Can
                        I set up secret well?</a></li>
                <li>
                    <a href="#supported-versions-of-village-defense-3">What
                        versions do support Village Defense 3?</a></li>
                <li>
                    <a href="#players-can-t-join-through-signs">Players
                        can&#39;t join through signs</a></li>
                <li>
                    <a href="#language-yml-file-is-empty">language.yml
                        file is empty!</a></li>
                <li><a href="#how-power-ups-work-">How
                        power-ups work?</a></li>
                <li><a href="#what-s-new-in-vd-3-">What&#39;s
                        new in VD 3?</a></li>
                <li>
                    <a href="#how-can-i-donate-you-">Can
                        I donate you?</a></li>
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
                <div style="margin-left: 45px;"><strong><?php echo localize("VD-Alert-Tip"); ?></strong>
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
                <div style="margin-left: 45px;"><strong><?php echo localize("VD-Alert-Danger"); ?></strong>
                    Always delete VD 3 files when the server is stopped. It&#39;s recommended too to edit them manually
                    when the
                    server is stopped.
                </div>
            </div>
            <hr>
            <h3 id="supported-versions-of-village-defense-3">Supported versions of Village Defense 3</h3>
            <p>Supported versions are currently 1.9-1.13.1
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
            <h3 id="players-can-t-join-through-signs">Players can&#39;t join through signs</h3>
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
        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12">
            <div id="side-menu">
                <img src="https://i.imgur.com/ZMPQeCz.png" class="img-fluid mx-auto d-block" alt="logo"
                     width="200">
                <div class="menu-content">
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
                        <li style="list-style-image: url('../../img/you-are-here.png');">
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
                        <li>
                            <a href="https://plajer.xyz/wiki/mc/villagedefense/enhancements/cmds_and_perms.php"><?php echo localize("VD-Sidebar-Cmds-And-Perms"); ?></a>
                        </li>
                        <li>
                            <a href="https://plajer.xyz/wiki/mc/villagedefense/enhancements/faq.php"><?php echo localize("VD-Sidebar-Enhancements-FAQ"); ?></a>
                        </li>
                    </ul>
                    <br/>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="page-footer font-small grey">

    <div class="footer-copyright text-center py-3">© 2018 <a target="_blank" href="https://www.spigotmc.org/resources/village-defence-1-8-8-and-1-12-only.41869/">Village Defense 3</a> |
        Created by <a target="_blank" href="https://github.com/Plajer-Lair">Plajer's Lair</a> and maintained by
        <a target="_blank" href="https://www.spigotmc.org/members/plajer.423193/">Plajer</a>
    </div>

</footer>
</body>
</html>