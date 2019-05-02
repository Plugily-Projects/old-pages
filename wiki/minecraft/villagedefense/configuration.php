<?php
include_once('../../inc/tracking.php');
include_once("../../inc/json_localization.php");
include_once("../../inc/poeditor_reader.php");
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
            <h1 id="plugin-files-explained-a-k-a-plugin-configuration-section-">Plugin files - explained (a.k.a Plugin
                configuration section)</h1>
            <h2 id="table-of-contents"><?php echo localize("Wiki.Global.Table-Of-Contents"); ?></h2>
            <p><strong>Basic files</strong></p>
            <ul>
                <li>
                    <a href="#arenas-yml">arenas.yml</a>
                </li>
                <li>
                    <a href="#bungee-yml">bungee.yml</a>
                </li>
                <li>
                    <a href="#config-yml">config.yml</a>
                </li>
                <li><a href="#mysql-yml">mysql.yml</a>
                </li>
            </ul>
            <p><strong>Additional content</strong></p>
            <ul>
                <li><a href="#language-and-locales">Language
                        and l10n (locale)</a></li>
                <li><a href="#stats-storage-types">Stats
                        storage types</a></li>
            </ul>
            <hr>
            <h2 id="basic-files">Basic files</h2>
            <h3 id="arenas-yml">arenas.yml</h3>
            <p>This file is only for in-game usage. It&#39;s not recommended to edit it while the server is on!
                The file contains all information about created arenas.</p>
            <hr>
            <h3 id="bungee-yml">bungee.yml</h3>
            <p>BungeeCord configuration is there. You must enable bungee support first in <strong>config.yml</strong>.
                Set
                <strong>BungeeActivated</strong> to <strong>true</strong> to enable it.</p>
            <div class="alert alert-info alert-white rounded">
                <div class="icon">
                    <i class="fa fa-info-circle"></i>
                </div>
                <div style="margin-left: 45px;"><strong>What is MOTD Manager?</strong>
                    MOTD Manager modifies server&#39;s MOTD to make it readable by Server Bungeecord systems like <a
                            href="https://www.spigotmc.org/resources/timocloud-the-most-efficient-cloud-system.53757/">Timo
                        Cloud</a>
                    and <a href="https://www.spigotmc.org/resources/bungeesigns.6563/">Bungee Signs</a>. MOTD is based
                    on game state
                    if that option is enabled.
                </div>
            </div>
            <hr>
            <h3 id="config-yml">config.yml</h3>
            <p>config.yml is very well commented itself but if you don't see all the options you can check here!</p>
            <p><strong>Not all latest options may be available here!</strong></p>
            <table>
                <thead>
                <tr>
                    <th>Option</th>
                    <th><?php echo localize("Wiki.Global.Description"); ?></th>
                    <th>Default value</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>locale</td>
                    <td>Language that plugin will use</td>
                    <td>default (English)</td>
                </tr>
                <tr>
                    <td>Bossbar-Enabled</td>
                    <td>Should in-game boss bar be enabled?</td>
                    <td>true</td>
                </tr>
                <tr>
                    <td>BungeeActivated</td>
                    <td>Should plugin hook into bungee cord (arena per server)?<br/><strong>You still need to use external plugins for signs and hub server!</strong></td>
                    <td>false</td>
                </tr>
                <tr>
                    <td>InventoryManager</td>
                    <td>Should we save all player data (inventory, health etc.) into file and restore it after player leaves arena?<br/><strong>Useful for shared servers (multi modes)</strong></td>
                    <td>true</td>
                </tr>
                <tr>
                    <td>Respawn-After-Wave</td>
                    <td>Should players respawn after the wave ends/starts?</td>
                    <td>true</td>
                </tr>
                <tr>
                    <td>Custom-Permissions</td>
                    <td>Section for creating custom permissions that will give players extra orbs in game (see <a href="https://wiki.plajer.xyz/minecraft/villagedefense/cmds_and_perms.php#custom-permissions">here</a>)</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Basic-Permissions</td>
                    <td>Basic permissions configuration <a href="https://wiki.plajer.xyz/minecraft/villagedefense/cmds_and_perms.php#basic-permissions">here</a></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Disable-Leave-Command</td>
                    <td>Should /vd leave command be blocked?</td>
                    <td>false</td>
                </tr>
                <tr>
                    <td>Whitelisted-Commands</td>
                    <td>List of all commands that can be used in-game</td>
                    <td></td>
                </tr>
                <tr>
                    <td>DatabaseActivated</td>
                    <td>Should MySQL database be enabled for this plugin?<br/><strong>There is no migrator between yaml files and MySQL database!</strong></td>
                    <td>false</td>
                </tr>
                <tr>
                    <td>Starting-Waiting-Time</td>
                    <td>Amount of seconds to start the game</td>
                    <td>60</td>
                </tr>
                <tr>
                    <td>Cooldown-Before-Next-Wave</td>
                    <td>Time before next wave starts</td>
                    <td>25</td>
                </tr>
                <tr>
                    <td>Mini-Zombie-Speed</td>
                    <td>Speed of baby zombie, suggested between 1.8 and 2.0</td>
                    <td>2.0</td>
                </tr>
                <tr>
                    <td>Zombie-Speed</td>
                    <td>Speed of normal zombies, suggested between 1.2 and 1.4</td>
                    <td>1.3</td>
                </tr>
                <tr>
                    <td>Rewards-Enabled</td>
                    <td>Should rewards.yml rewards be enabled? Rewards after game end/zombie kill etc.</td>
                    <td>false</td>
                </tr>
                <tr>
                    <td>ChatFormat-Enabled</td>
                    <td>Should in-game chat format be enabled?<br/><strong>You can use PlaceholderAPI&#39;s placeholders there!</strong></td>
                    <td>true</td>
                </tr>
                <tr>
                    <td>Orbs-Starting-Amount</td>
                    <td>Amount of orbs given to player when game starts</td>
                    <td>20</td>
                </tr>
                <tr>
                    <td>Block-Commands-In-Game</td>
                    <td>Should we block every not Village Defense associated commands in game?</td>
                    <td>true</td>
                </tr>
                <tr>
                    <td>Firework-When-Game-Ends</td>
                    <td>Should we fire fireworks at location of every player after the game ends?</td>
                    <td>true</td>
                </tr>
                <tr>
                    <td>Sign-Block-States-Enabled</td>
                    <td>Should blocks behind the game signs change their colors based on current arena state?</td>
                    <td>true</td>
                </tr>
                <tr>
                    <td>Entity-Upgrades</td>
                    <td>Entity upgrades section, you can modify upgrades prices there</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Wolves-Spawn-Limit and Golem-Spawn-Limit</td>
                    <td>Limit of mobs player can spawn in-game, will only affect only buying them in shop</td>
                    <td>20 and 15</td>
                </tr>
                <tr>
                    <td>Holidays-Enabled</td>
                    <td>Should special holiday events be enabled?<br/>Example: 4 days before and after and between Halloween spooky effects will be applied for zombies and when you die!</td>
                    <td>true</td>
                </tr>
                <tr>
                    <td>Simple-Zombie-Health-Bar-Enabled</td>
                    <td>Enable simple health bar for zombies? Their name will be their health bar</td>
                    <td>true</td>
                </tr>
                <tr>
                    <td>Powerups</td>
                    <td>Power-ups section modify basic power-ups options here</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Wave-Limit</td>
                    <td>Should game have infinite amount of waves or limited one?</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Update-Notifier</td>
                    <td>Should we notify you if the plugin update gets released?</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Debug</td>
                    <td>Should we print some &#39;debug spam&#39; to help the developers in fixing problems?</td>
                    <td>false</td>
                </tr>
                </tbody>
            </table>
            <p><strong>Part of config.yml</strong></p>
            <p><img src="https://i.imgur.com/3fH8j8k.png" alt=""></p>
            <hr>
            <h3 id="mysql-yml">mysql.yml</h3>
            <p>Here you can set up MySQL plugin configuration.
                You need to enable MySQL first in <strong>config.yml</strong>. Set <strong>DatabaseActivated</strong>
                option to
                <strong>true</strong>.</p>
            <p><strong>This is mysql.yml file with explanations of individual options.</strong>
                <img src="https://i.imgur.com/m31nvuz.png" alt=""></p>
            <h2 id="additional-content">Additional content</h2>
            <h3 id="language-and-locales">Language and locales</h3>
            <p>Plugin is 95% translatable via <strong>language.yml</strong> file.</p>
            <p><img src="https://i.imgur.com/WTG1CL2.png" alt=""></p>
            <p>However, you can use localization support which was implemented in VillageDefense 3.7.4</p>
            <p>To change locale of plugin go to <strong>config.yml</strong> and modify <strong>locale</strong> value.
            </p>
            <p><img src="https://i.imgur.com/gFDRqPP.png" alt=""></p>
            <p><strong>Valid localizations (gathered via POEditor API):</strong></p>
            <ul>
                <li><img src="https://www.plajer.xyz/shared/flags/gb.png" alt=""> English (primary)</li>
                <?php
                    $json = readLanguages(190635);
                    foreach($json->result->languages as $value) {
                        if($value->name == "English") {
                            continue;
                        }
                        $flag = $value->code;
                        $flag = fixFlag($value->name, $flag);
                        if($value->percentage < 80.0) {
                            echo "<li class='text-muted'><img src='https://www.plajer.xyz/shared/flags/$flag.png' alt=''> $value->code - $value->name ($value->percentage% translated) (not implemented)</li>";
                        } else {
                            echo "<li><img src='https://www.plajer.xyz/shared/flags/$flag.png' alt=''> $value->code - $value->name ($value->percentage% translated)</li>";
                        }
                    }
                ?>
            </ul>
            <div class="alert alert-success alert-white rounded">
                <div class="icon">
                    <i class="fa fa-check"></i>
                </div>
                <div style="margin-left: 45px;"><strong><?php echo localize("Wiki.Alerts.Tip"); ?></strong>
                    <a href="https://translate.plajer.xyz/index.php" target="_blank"><?php echo localize("Wiki.Global.You-Can-Translate-Here"); ?></a>
                </div>
            </div>
            <hr>
            <h3 id="stats-storage-types">Stats storage types</h3>
            <p><strong>Current stats storage types for player statistics:</strong></p>
            <ul>
                <li>Flat file (.yml) - enabled by default</li>
                <li>MySQL (database) - can be enabled in config.yml (see <a
                            href="#mysql-yml">mysql.yml</a>)
                </li>
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
                            <a href="https://tutorial.plajer.xyz"><?php echo localize("Wiki.Sidebar.Support.Setup-Tutorial"); ?></a>
                        </li>
                        <li>
                            <a href="https://wiki.plajer.xyz/minecraft/villagedefense/faq.php"><?php echo localize("Wiki.Sidebar.Support.FAQ"); ?></a> - <?php echo localize("Wiki.Sidebar.Support.FAQ.Problems-And-Tips"); ?>
                        </li>
                        <li style="list-style-image: url('../../inc/img/you-are-here.png');">
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

      <?php include('resources/footer.php'); ?>
    </div>
</div>
</body>
</html>