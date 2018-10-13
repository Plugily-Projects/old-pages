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
            <h1 id="useful-tips-for-your-server">Useful tips for your server</h1>
            <p>This section contains some useful tips to enhance your Village Defense server!</p>
            <div class="alert alert-warning alert-white rounded">
                <div class="icon">
                    <i class="fa fa-warning"></i>
                </div>
                <div style="margin-left: 45px;"><strong><?php echo localize("Wiki.Alerts.Warn"); ?></strong>
                    These tips <strong>should be EULA friendly, but may not</strong>!
                </div>
            </div>
            <p><strong>Let&#39;s start taking profit from our server!</strong></p>
            <h2 id="table-of-contents"><?php echo localize("Wiki.Global.Table-Of-Contents"); ?></h2>
            <ul>
                <li><a href="#buyable-kits-for-coins">Buyable kits for
                        coins</a></li>
                <li><a href="#global-server-boosters">Global server
                        boosters</a></li>
            </ul>
            <hr>
            <h3 id="buyable-kits-for-coins">Buyable kits for coins</h3>
            <p><strong>Required plugins:</strong> ChestCommands GUI (or other), Vault, Permissions plugin, <a
                        href="http://lmgtfy.com/?q=spigot+money+mob+drops+plugin">Any plugin that gives money for mobs
                    killing</a>
            </p>
            <p><strong>1.</strong> Using ChestCommands GUI you can create menu like that:
                <img src="https://i.imgur.com/hl8E7nj.png" alt=""></p>
            <p>Just create good-looking GUI via Chest Commands, set item prices (requires Vault) and in command to
                execute use
                command from your permissions plugin.</p>
            <p><strong><?php echo localize("Wiki.Global.Example")?>:</strong></p>
            <pre><code class="lang-yaml"><span class="hljs-attribute">cleaner-buy</span>:
    <span class="hljs-attribute">ID</span>: magma_cream
    <span class="hljs-attribute">COMMAND</span>: <span class="hljs-string">'console: pex user {player} add villagedefense.kit.cleaner;tell: &amp;eThanks for purchase!'</span> #for PermissionsEx
    #<span class="hljs-attribute">COMMAND</span>: <span class="hljs-string">'console: lp user {player} permission set villagedefense.kit.cleaner true;tell: &amp;eThanks for purchase!'</span> #for LuckPerms
    <span class="hljs-attribute">LORE</span>:
       - <span class="hljs-string">'&amp;7Clean map very fast and easy!'</span>
       - <span class="hljs-string">'&amp;7Click to buy for &amp;e&amp;l3000 coins'</span>
    <span class="hljs-attribute">PRICE</span>: <span class="hljs-number">3000</span>
    <span class="hljs-attribute">POSITION-X</span>: <span class="hljs-number">2</span>
    <span class="hljs-attribute">POSITION-Y</span>: <span class="hljs-number">2</span>
</code></pre>
            <p><strong>2.</strong> Edit kit descriptions in language.yml</p>
            <p>Go to language.yml and modify descriptions of kits that you&#39;re selling via shop above.
                Add information that kit is available to buy for coins. <strong>You must add enough spaces to wrap this
                    line to
                    next line.</strong>
                <img src="https://i.imgur.com/ALkgKO9.png" alt=""></p>
            <p>In overall it looks like this:</p>
            <p><img src="https://i.imgur.com/hYFpLtK.png" alt=""></p>
            <p><strong>3. Profit</strong></p>
            <hr>
            <h3 id="global-server-boosters">Global server boosters</h3>
            <p><strong><?php echo localize("Wiki.Global.Requirements"); ?></strong> Web store (ex. Buycraft), Permissions plugin</p>
            <p>Using <a
                        href="https://wiki.plajer.xyz/minecraft/villagedefense/cmds_and_perms.php#custom-permissions">Custom
                    permissions</a> you can create global server boosters for your server!</p>
            <p><strong>1</strong>. Create new custom permission in config.yml</p>
            <pre><code class="lang-yaml"><span class="hljs-string">CustomPermissions:</span>
  server-<span class="hljs-string">booster:</span> <span class="hljs-number">100</span>
</code></pre>
            <p>Everyone who has this permission will receive <strong>100% more orbs</strong> in-game.</p>
            <p><strong>2.</strong> Add new item to your web store</p>
            <p>Create new item in your store with command:</p>
            <ul>
                <li><code>lp group %your_default_group% permission settemp server-booster 12h</code> for
                    <strong>LuckPerms</strong></li>
                <li><code>pex group %your_default_group% timed add server-booster 43200 *</code> for
                    <strong>PermissionsEx</strong></li>
            </ul>
            <p>This command will give you <strong>12 hour</strong> server booster for your default group.</p>
            <p><strong>3. Profit</strong></p>
        </div>

        <div class="col-auto">
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
                        <li style="list-style-image: url('../../inc/img/you-are-here.png');">
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