<?php
include_once('../../inc/json_localization.php');
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

    <link rel="icon" sizes="192x192" href="https://plajer.xyz/images/favicon.php?type=favicon-mobile">
    <link rel="shortcut icon" type="image/x-icon" href="https://plajer.xyz/images/favicon.php?type=favicon">
</head>
<body>
<?php include('resources/navbar.php'); ?>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-xl-5 col-lg-6 col-md-7 col-sm-11 col-xs-12 px-sm-0 px-2">
            <h1 id="frequently-asked-questions">Frequently Asked Questions</h1>
            <h2 id="table-of-contents"><?php echo localize("Wiki.Global.Table-Of-Contents"); ?></h2>
            <ul>
                <li><a href="#supported-versions-of-murder-mystery">What versions do support Murder Mystery?</a></li>
                <li><a href="#players-can-t-join-through-signs"><?php echo localize("Wiki.Global.FAQ.Question.Players-Cant-Join-Through-Signs"); ?></a></li>
                <li><a href="#scoreboard-variables">What are scoreboard variables?</a></li>
                <li><a href="#corpse-last-words">What are corpses last words and their permissions?</a></li>
                <li><a href="#bow-trails">What are bow trails permissions?</a></li>
                <li><a href="#role-permission-chances">Can I increase chance of being Detective/Murderer?</a></li>
            </ul>
            <hr>
            <h3 id="supported-versions-of-murder-mystery">Supported versions of Murder Mystery</h3>
            <p>Supported versions are currently 1.11-1.14.2.
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
Your server version is not supported by Murder Mystery!
Sadly, we must shut off. Maybe you consider changing your server version?</span>
</code></pre>
            <hr>
            <h3 id="players-can-t-join-through-signs"><?php echo localize("Wiki.Global.FAQ.Question.Players-Cant-Join-Through-Signs"); ?></h3>
            <p>This is a very common problem in every minigame plugin.</p>
            <p>It&#39;s <strong>caused by spawn protection</strong> feature in vanilla Minecraft.</p>
            <p>To disable this go to <strong>server.properties</strong> and change <strong>spawn-protection</strong> value <strong>to 0</strong>.</p>
            <div class="alert alert-info alert-white rounded">
                <div class="icon">
                    <i class="fa fa-info-circle"></i>
                </div>
                <div style="margin-left: 45px;"><strong><?php echo localize("Wiki.Alerts.Info"); ?></strong>
                    You can no longer create signs in radius of spawn protection since <strong>Murder Mystery 1.1.2</strong>, you'll be warned instead.
                </div>
            </div>
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
                    <td>%MAX_PLAYERS%</td>
                    <td>Maximum players size</td>
                    <td><?php echo localize("Wiki.Global.None"); ?></td>
                </tr>
                <tr>
                    <td>%PLAYERS%</td>
                    <td>Size of players in arena</td>
                    <td><?php echo localize("Wiki.Global.None"); ?></td>
                </tr>
                <tr>
                    <td>%INNOCENTS%</td>
                    <td>Amount of innocent players alive (including detective)</td>
                    <td><?php echo localize("Wiki.Global.None"); ?></td>
                </tr>
                <tr>
                    <td>%TIME%</td>
                    <td>Current arena timer (ex. 10 seconds before start)</td>
                    <td><?php echo localize("Wiki.Global.None"); ?></td>
                </tr>
                <tr>
                    <td>%FORMATTED_TIME%</td>
                    <td>Formatted above-mentioned placeholder (ex. 0m10s)</td>
                    <td><?php echo localize("Wiki.Global.None"); ?></td>
                </tr>
                <tr>
                    <td>%MAPNAME%</td>
                    <td>Name of the map</td>
                    <td><?php echo localize("Wiki.Global.None"); ?></td>
                </tr>
                <tr>
                    <td>%SCORE%</td>
                    <td>Current in-game score of player</td>
                    <td><?php echo localize("Wiki.Global.None"); ?></td>
                </tr>
                <tr>
                    <td>%KILLS%</td>
                    <td>Current in-game kills of murderer</td>
                    <td><?php echo localize("Wiki.Global.None"); ?></td>
                </tr>
                <tr>
                    <td>%ROLE%</td>
                    <td>Role of player - murderer, innocent, detective</td>
                    <td><?php echo localize("Wiki.Global.None"); ?></td>
                </tr>
                <tr>
                    <td>%DETECTIVE_STATUS%</td>
                    <td>Status of detective - alive, bow dropped, bow picked</td>
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
            <h3 id="corpse-last-words">Corpses last words and their permissions</h3>
            <div class="alert alert-warning alert-white rounded">
                <div class="icon">
                    <i class="fa fa-warning"></i>
                </div>
                <div style="margin-left: 45px;"><strong><?php echo localize("Wiki.Alerts.Warn"); ?></strong>
                    Last words are written in their permission order!
                    First is meme so it will be displayed if player has both permissions for meme and pro for example.
                </div>
            </div>
            <table>
                <thead>
                <tr>
                    <th>Priority</th>
                    <th>Last word</th>
                    <th><?php echo localize("Wiki.Global.Description"); ?></th>
                    <th><?php echo localize("Wiki.Global.Permission"); ?></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Meme</td>
                    <td>Despacito 2 is confirmed by God</td>
                    <td>murdermystery.lastwords.meme</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Rage</td>
                    <td>WHY YOU KILLED ME?!!?</td>
                    <td>murdermystery.lastwords.rage</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Pro</td>
                    <td>It was lagging...</td>
                    <td>murdermystery.lastwords.pro</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Default</td>
                    <td>Please respawn :(</td>
                    <td><?php echo localize("Wiki.Global.None"); ?></td>
                </tr>
                </tbody>
            </table>
            <hr>
            <h3 id="bow-trails">Permissions for bow trails</h3>
            <div class="alert alert-warning alert-white rounded">
                <div class="icon">
                    <i class="fa fa-warning"></i>
                </div>
                <div style="margin-left: 45px;"><strong><?php echo localize("Wiki.Alerts.Warn"); ?></strong>
                    Trails are written in their permission order!
                    First is heart so it will be displayed if player has both permissions for heart and flame for example.
                </div>
            </div>
            <table>
                <thead>
                <tr>
                    <td>Priority</td>
                    <th>Particle type</th>
                    <th><?php echo localize("Wiki.Global.Permission"); ?></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Hearts</td>
                    <td>murdermystery.trails.heart</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Flames</td>
                    <td>murdermystery.trails.flame</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Critical</td>
                    <td>murdermystery.trails.critical</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Cloud</td>
                    <td>murdermystery.trails.cloud</td>
                </tr>
                </tbody>
            </table>
            <hr>
            <h3 id="role-permission-chances">Can I increase chance of being Detective/Murderer?</h3>
            <p>You can check special permission nodes:</p>
            <pre>murdermystery.role.murderer/detective.<1/100></pre>
            <p>Setting up for example <strong>murdermystery.role.detective.15</strong> will give you 15 more points for being a detective</p>
            <div class="alert alert-info alert-white rounded">
                <div class="icon">
                    <i class="fa fa-info-circle"></i>
                </div>
                <div style="margin-left: 45px;"><strong><?php echo localize("Wiki.Alerts.Info"); ?></strong>
                    Please avoid giving very high percentage values because other normal users will likely never be able to play as one of these roles
                </div>
            </div>
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
                        <li>
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
                        <li style="list-style-image: url('../../inc/img/you-are-here.png');">
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

      <?php include('resources/footer.php'); ?>
    </div>
</div>
</body>
</html>