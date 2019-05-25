<?php
include_once('../../../inc/tracking.php');
include_once("../../../inc/json_localization.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Plajer's Lair Wiki</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
    <link rel="stylesheet" href="../../../inc/css/markdown.css">
    <link rel="stylesheet" href="../../../inc/css/alerts.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.9/css/mdb.min.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="../../../inc/css/bootstrap-4.1.3.min.css" rel="stylesheet">

    <link rel="icon" sizes="192x192" href="https://plajer.xyz/images/favicon.php?type=favicon-mobile">
    <link rel="shortcut icon" type="image/x-icon" href="https://plajer.xyz/images/favicon.php?type=favicon">
</head>
<body>
<?php include('../resources/navbar.php'); ?>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-xl-5 col-lg-6 col-md-7 col-sm-11 col-xs-12 px-sm-0 px-2">
            <h1 id="enhancements-commands-and-permissions">Enhancements Commands and Permissions</h1>
            <h2 id="table-of-contents"><?php echo localize("Wiki.Global.Table-Of-Contents"); ?></h2>
            <ul>
                <li><a href="#commands-and-permissions-custom-kits-module">Commands and Permissions - Custom kits</a></li>
                <li><a href="#commands-and-permissions-achievements-module">Commands and Permissions - Achievements</a></li>
            </ul>

            <div class="alert alert-info alert-white rounded">
                <div class="icon">
                    <i class="fa fa-info-circle"></i>
                </div>
                <div style="margin-left: 45px;"><strong><?php echo localize("Wiki.Alerts.Info"); ?></strong>
                    Since Village Defense 4.0.0 Enhancements addon commands are registered directly into Village Defense plugin.
                    Before 3.0.0 the commands were having /vdck (for custom kits) and /vdach (for achievements) names.
                </div>
            </div>

            <h2 id="commands-and-permissions-custom-kits-module">Commands and Permissions - custom kits module</h2>
            <p>In game view:</p>
            <img class="img-fluid" src="https://i.imgur.com/I6g02yc.png" height="200px">
            <p><code><?php echo localize("Wiki.Global.Command-Aliases-Explained"); ?></code></p>
            <div class="alert alert-success alert-white rounded">
                <div class="icon">
                    <i class="fa fa-check"></i>
                </div>
                <div style="margin-left: 45px;"><strong><?php echo localize("Wiki.Alerts.Tip"); ?></strong>
                    You can use <code>villagedefense.customkits.*</code> permission to give all commands permission
                </div>
            </div>
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
                    <td>/vda customkits create [kit]</td>
                    <td>villagedefense.customkits.command.create</td>
                    <td>Create new custom kit</td>
                </tr>
                <tr>
                    <td>/vda customkits edit [kit]</td>
                    <td>villagedefense.customkits.command.edit</td>
                    <td>Edit already existing custom kit</td>
                </tr>
                <tr>
                    <td>/vda customkits delete [kit]</td>
                    <td>villagedefense.customkits.command.delete</td>
                    <td>Delete existing custom kit</td>
                </tr>
                <tr>
                    <td>/vda customkits list</td>
                    <td>villagedefense.customkits.command.list</td>
                    <td>Open inventory will all loaded custom kits</td>
                </tr>
                <tr>
                    <td>/vda customkits reload</td>
                    <td>villagedefense.customkits.command.reload</td>
                    <td>Reload configuration and re-register custom kits to update them</td>
                </tr>
                <tr>
                    <td>/vda customkits potiongen [potion type] [duration] [amplifier]</td>
                    <td>villagedefense.customkts.command.potiongen</td>
                    <td>Create custom potion effect for kits <strong>(effects will be applied to player not given into their inventory)</strong></td>
                </tr>
                <tr>
                    <td>/vda customkits mobgen [iron_golem/wolf] [amount of mobs]</td>
                    <td>villagedefense.customkits.command.mobgen</td>
                    <td>Create custom mobs for kits <strong>(they will be spawned at the start/per wave)</strong></td>
                </tr>
                <tr>
                    <td>/vda customkits commandgen [player/console] [command]</td>
                    <td>villagedefense.customkits.command.commandgen</td>
                    <td>Create command for kits <strong>(%player% placeholder supported)</strong></td>
                </tr>
                </tbody>
            </table>
            <h2 id="commands-and-permissions-achievements-module">Commands and Permissions - achievements module</h2>
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
                    <td>/vd achievements list</td>
                    <td>villagedefense.achievements.command</td>
                    <td>Shows list of unlocked achievements</td>
                </tr>
                <tr>
                    <td>/vd achievements reload</td>
                    <td>villagedefense.achievements.command.reload</td>
                    <td>Reloads achievements configuration</td>
                </tr>
                <tr>
                    <td>/vda achievements create [name]</td>
                    <td>villagedefense.achievements.command.create</td>
                    <td>Creates new achievement</td>
                </tr>
                <tr>
                    <td>/vda achievements delete [name]</td>
                    <td>villagedefense.achievements.command.delete</td>
                    <td>Deletes existing achievement</td>
                </tr>
                <tr>
                    <td>/vda achievements edit [name]</td>
                    <td>villagedefense.achievements.command.edit</td>
                    <td>Edits existing achievement</td>
                </tr>
                <tr>
                    <td>/vda achievements commandgen [player/console] [command]</td>
                    <td>villagedefense.achievements.command.commandgen</td>
                    <td>Create reward command for achievements <strong>(%player% placeholder supported)</strong></td>
                </tr>
                </tbody>
            </table>
        </div>

        <div class="col-auto mb-3">
            <div id="side-menu">
                <div class="menu-content px-3 py-2">
                    <img src="../../../inc/img/sidebar-village.png" class="img-fluid mx-auto d-block" alt="logo" width="200">
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
                        <li style="list-style-image: url('../../../inc/img/you-are-here.png');">
                            <a href="https://wiki.plajer.xyz/minecraft/villagedefense/enhancements/cmds_and_perms.php"><?php echo localize("Wiki.Sidebar.General.Commands-And-Permissions"); ?></a>
                        </li>
                        <li>
                            <a href="https://wiki.plajer.xyz/minecraft/villagedefense/enhancements/faq.php"><?php echo localize("Wiki.Sidebar.Enhancements.FAQ"); ?></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

      <?php include('../resources/footer.php'); ?>
    </div>
</div>
</body>
</html>