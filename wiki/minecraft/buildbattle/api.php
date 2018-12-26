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
            <h1 id="developer-api">Developer API</h1>
            <h4 id="full-java-documentation-https-plajer-lair-github-io-buildbattle-">Full java documentation: <a href="https://jd.plajer.xyz/minecraft/buildbattle">https://jd.plajer.xyz/minecraft/buildbattle</a>
            </h4>
            <h2 id="table-of-contents"><?php echo localize("Wiki.Global.Table-Of-Contents"); ?></h2>
            <ul>
                <li><a href="#maven">Maven repository</a></li>
                <li><a href="#events">API Events</a></li>
                <li><a href="#stats-storage">Stats storage</a></li>
                <li><a href="#manipulating-player-join-leave-attempts">Manipulating player join/leave attempts</a></li>
            </ul>

            <div class="alert alert-danger alert-white rounded">
                <div class="icon">
                    <i class="fa fa-times-circle"></i>
                </div>
                <div style="margin-left: 45px;"><strong><?php echo localize("Wiki.Alerts.Danger"); ?></strong>
                    Contents may be not up to date! Please use java docs instead. Here you can only get some simple examples.
                </div>
            </div>

            <h1 id="maven">Maven repository</h1>
            <p>Maven repository usually contains latest releases, if not, please check in few days if release is there.</p>
            <p><strong>How to access repo:</strong></p>
            <p>1. Add repository</p>
            <pre><code class="lang-xml">        <span class="hljs-tag">&lt;<span class="hljs-name">repositories</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-name">repository</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">id</span>&gt;</span>plajerlair-repo<span class="hljs-tag">&lt;/<span class="hljs-name">id</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-name">url</span>&gt;</span>https://maven.plajer.xyz/minecraft<span class="hljs-tag">&lt;/<span class="hljs-name">url</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-name">repository</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-name">repositories</span>&gt;</span></code></pre>
            <p>2. Add the dependency</p>
            <pre><code class="lang-xml">        <span class="hljs-tag">&lt;<span class="hljs-name">dependencies</span>&gt;</span>
                 <span class="hljs-tag">&lt;<span class="hljs-name">dependency</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">groupId</span>&gt;</span>pl.plajer<span class="hljs-tag">&lt;/<span class="hljs-name">groupId</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">artifactId</span>&gt;</span>buildbattle4<span class="hljs-tag">&lt;/<span class="hljs-name">artifactId</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">version</span>&gt;</span><strong>{version}</strong><span class="hljs-tag">&lt;/<span
                                class="hljs-name">version</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">scope</span>&gt;</span>provided<span class="hljs-tag">&lt;/<span class="hljs-name">scope</span>&gt;</span>
                 <span class="hljs-tag">&lt;/<span class="hljs-name">dependency</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">/dependencies</span>&gt;</span></code></pre>
            <hr>

            <h1 id="events">Events</h1>
            <p><code>Event name [since] [extra attributes]</code></p>
            <ul>
                <li><a href="#-bbevent-generic-">BBEvent</a> [3.0.0] [Generic event]</li>
                <li><a href="#-bbgamejoinevent-cancellable-">BBGameJoinEvent</a> [3.0.0] [Cancellable]</li>
                <li><a href="#-bbgameleaveevent-">BBGameLeaveEvent</a> [3.0.0]</li>
                <li><a href="#-bbgamestartevent-">BBGameStartEvent</a> [3.0.0]</li>
                <li><a href="#-bbgameendevent-">BBGameEndEvent</a> [3.0.0]</li>
                <li><a href="#-bbgamestatechangeevent-">BBGameStateChangeEvent</a> [3.0.0]</li>
                <li>BBPlayerStatisticChangeEvent [3.4.1]</li>
            </ul>
            <hr>
            <h3 id="-bbevent-generic-"><strong>BBEvent</strong> (<strong>Generic</strong>)</h3>
            <p>The event is called <strong>everytime</strong> any Build Battle event is called because it&#39;s a generic event.</p>
            <p><strong><?php echo localize("Wiki.Global.Example")?>:</strong></p>
            <pre><code class="lang-java">    <span class="hljs-meta">@EventHandler</span>
    <span class="hljs-keyword">public</span> <span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">onEventCall</span><span
                                class="hljs-params">(BBEvent event)</span></span>{
        <span class="hljs-keyword">if</span>(event <span class="hljs-keyword">instanceof</span> BBGameChangeStateEvent){
            Bukkit.getConsoleSender().sendMessage(<span class="hljs-string">"BBGameChangeStateEvent was called!"</span>);
        }
    }
</code></pre>
            <blockquote>
                <p><strong>event#getArena()</strong> - returns event arena for which event was called</p>
            </blockquote>
            <hr>
            <h3 id="-bbgamejoinevent-cancellable-"><strong>BBGameJoinEvent</strong> (<strong>Cancellable</strong>)</h3>
            <p>The event is called when a player is trying to join an arena.</p>
            <p><strong><?php echo localize("Wiki.Global.Example")?>:</strong></p>
            <pre><code class="lang-java">    @<span class="hljs-function">EventHandler
    <span class="hljs-keyword">public</span> <span class="hljs-keyword">void</span> <span class="hljs-title">onGameJoin</span>(<span class="hljs-params">BBGameJoinEvent <span class="hljs-keyword">event</span></span>)</span>{
        <span class="hljs-keyword">event</span>.getPlayer().sendMessage(<span class="hljs-string">"You have joined "</span> + <span class="hljs-keyword">event</span>.getArena().getID());
        <span class="hljs-keyword">event</span>.setCancelled(<span class="hljs-literal">true</span>);
        <span class="hljs-keyword">event</span>.getPlayer().sendMessage(<span class="hljs-string">"Or maybe not? :D"</span>);
    }
</code></pre>
            <blockquote>
                <p><strong>event#getPlayer()</strong> - returns player involved in this event</p>
                <p><strong>event#getArena()</strong> - returns existing arena where player is attempting to join</p>
            </blockquote>
            <hr>
            <h3 id="-bbgamestartevent-"><strong>BBGameStartEvent</strong></h3>
            <p>The event is called when the arena starts.</p>
            <p><strong><?php echo localize("Wiki.Global.Example")?>:</strong></p>
            <pre><code class="lang-java">    <span class="hljs-meta">@EventHandler</span>
    <span class="hljs-keyword">public</span> <span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">onGameStart</span><span class="hljs-params">(BBGameStartEvent event)</span></span>{
        <span class="hljs-keyword">for</span>(Player p : event.getArena().getPlayers()){
            p.sendMessage(<span class="hljs-string">"Game has started!"</span>);
        }
    }
</code></pre>
            <blockquote>
                <p><strong>event#getArena()</strong> - returns event arena</p>
            </blockquote>
            <hr>
            <h3 id="-bbgameleaveevent-"><strong>BBGameLeaveEvent</strong></h3>
            <p>The event is called when a player is trying to leave an arena.</p>
            <p><strong><?php echo localize("Wiki.Global.Example")?>:</strong></p>
            <pre><code class="lang-java">    @<span class="hljs-function">EventHandler
    <span class="hljs-keyword">public</span> <span class="hljs-keyword">void</span> <span class="hljs-title">onGameQuit</span>(<span class="hljs-params">BBGameLeaveEvent <span class="hljs-keyword">event</span></span>)</span>{
        <span class="hljs-keyword">event</span>.getPlayer().sendMessage(<span class="hljs-string">"You have quitted"</span> + e.getArena().getID());
    }
</code></pre>
            <blockquote>
                <p><strong>event#getPlayer()</strong> - returns player involved in this event</p>
                <p><strong>event#getArena()</strong> - returns existing arena what player is attempting to leave</p>
            </blockquote>
            <hr>
            <h3 id="-bbgameendevent-"><strong>BBGameEndEvent</strong></h3>
            <p>The event is called when a game has ended.</p>
            <p><strong><?php echo localize("Wiki.Global.Example")?>:</strong></p>
            <pre><code class="lang-java">    <span class="hljs-meta">@EventHandler</span>
    <span class="hljs-keyword">public</span> <span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">onGameStop</span><span class="hljs-params">(BBGameStartEvent event)</span></span>{
        <span class="hljs-keyword">for</span>(Player p : event.getArena().getPlayers()){
            p.sendMessage(<span class="hljs-string">"Cool game? Maybe play again?"</span>);
        }
    }
</code></pre>
            <blockquote>
                <p><strong>event#getArena()</strong> - returns existing arena that is stopped</p>
            </blockquote>
            <hr>
            <h3 id="-bbgamestatechangeevent-"><strong>BBGameStateChangeEvent</strong></h3>
            <p>The event is called when a game arena state has changed.</p>
            <p><strong><?php echo localize("Wiki.Global.Example")?>:</strong></p>
            <pre><code class="lang-java">    @<span class="hljs-function">EventHandler
    <span class="hljs-keyword">public</span> <span class="hljs-keyword">void</span> <span class="hljs-title">onGameStop</span>(<span class="hljs-params">BBGameStateChangeEvent <span
                                    class="hljs-keyword">event</span></span>)</span>{
        ArenaState prev = <span class="hljs-keyword">event</span>.getPreviousState();
        ArenaState curr = <span class="hljs-keyword">event</span>.getState();
        <span class="hljs-keyword">for</span>(Player p : <span class="hljs-keyword">event</span>.getArena().getPlayers()){
            p.sendMessage(<span class="hljs-string">"Game state changed from "</span> + prev.getFormattedName() + <span class="hljs-string">" to "</span> + curr.getFormattedName());
        }
    }
</code></pre>
            <blockquote>
                <p><strong>event.getPreviousState()</strong> - returns arena state before change</p>
                <p><strong>event.getState()</strong> - returns current arena state</p>
                <p><strong>event#getArena()</strong> - returns existing arena that is stopped</p>
            </blockquote>
            <hr>
            <h1 id="stats-storage">Stats storage</h1>
            <h2 id="table-of-contents"><?php echo localize("Wiki.Global.Table-Of-Contents"); ?></h2>
            <ul>
                <li><a href="#-retrieving-online-players-stats-">Retrieving online players stats</a></li>
                <li><a href="#-requesting-sorted-statistics-of-all-players-">Requesting sorted statistics of all players</a></li>
                <li><a href="#-available-statistic-types-">Statistic types</a></li>
            </ul>
            <h3 id="-retrieving-online-players-stats-"><strong>Retrieving online players stats</strong></h3>
            <p>You can easily get online players stats using BB3 API - Stats Storage class.</p>
            <p><strong><?php echo localize("Wiki.Global.Example")?>:</strong></p>
            <pre><code class="lang-java">    <span class="hljs-keyword">public</span> <span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">getWins</span><span
                                class="hljs-params">(Player p)</span></span>{
        <span class="hljs-function"><span class="hljs-keyword">return</span> StatsStorage.<span class="hljs-title">getUserStats</span><span
                    class="hljs-params">(p, StatsStorage.StatisticType.WINS)</span></span>;
    }
</code></pre>
            <p>Very easy, right?</p>
            <hr>
            <h3 id="-requesting-sorted-statistics-of-all-players-"><strong>Requesting sorted statistics of all players</strong></h3>
            <p>To access sorted statistics hMap with players you must call it from StatsStorage class.</p>
            <p><strong><?php echo localize("Wiki.Global.Example")?>:</strong></p>
            <pre><code class="lang-java">    <span class="hljs-function"><span class="hljs-keyword">public</span> <span class="hljs-keyword">void</span> <span class="hljs-title">printBestStats</span>(<span
                                class="hljs-params">StatsStorage.StatisticType statistic</span>)</span>{
        Map&lt;UUID, Integer&gt; statsMap = StatsStorage.getStats(statistic);
        UUID[] uuidsArray = (UUID[]) StatsStorage.getStats(statistic).keySet().toArray();
        <span class="hljs-keyword">for</span>(<span class="hljs-keyword">int</span> i = <span class="hljs-number">0</span>; i &lt; <span class="hljs-number">10</span>; i++){
            Bukkit.broadcastMessage(<span class="hljs-string">"#"</span> + i + <span class="hljs-string">" UUID: "</span> + uuidsArray[i] + <span
                            class="hljs-string">", stats: "</span> + statsMap.<span class="hljs-keyword">get</span>(uuidsArray[i]));
        }
    }
</code></pre>
            <div class="alert alert-danger alert-white rounded">
                <div class="icon">
                    <i class="fa fa-times-circle"></i>
                </div>
                <div style="margin-left: 45px;"><strong><?php echo localize("Wiki.Alerts.Danger"); ?></strong>
                    Be aware of IndexOutOfBoundsException as the list might be not enough big!
                </div>
            </div>
            <hr>
            <h3 id="-available-statistic-types-"><strong>Available statistic types</strong></h3>
            <table>
                <thead>
                <tr>
                    <th>Statistic name (enum)</th>
                    <th>Statistic identifier (string) (for advanced things)</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>BLOCKS_BROKEN</td>
                    <td>blocksbroken</td>
                </tr>
                <tr>
                    <td>BLOCKS_PLACED</td>
                    <td>blocksplaced</td>
                </tr>
                <tr>
                    <td>GAMES_PLAYED</td>
                    <td>gamesplayed</td>
                </tr>
                <tr>
                    <td>WINS</td>
                    <td>wins</td>
                </tr>
                <tr>
                    <td>LOSES</td>
                    <td>loses</td>
                </tr>
                <tr>
                    <td>HIGHEST_WIN</td>
                    <td>highestwin</td>
                </tr>
                <tr>
                    <td>PARTICLES_USED</td>
                    <td>particles</td>
                </tr>
                </tbody>
            </table>

            <h1 id="manipulating-player-join-leave-attempts">Manipulating player join/leave attempts</h1>
            <h2 id="join-attempt">Join attempt</h2>
            <p>To force player to join specified arena you can use our <code>ArenaManager</code> class.</p>
            <pre><code class="lang-java">  <span class="hljs-function"><span class="hljs-keyword">public</span> <span class="hljs-keyword">void</span> <span class="hljs-title">sendPlayerToArena</span><span
                                class="hljs-params">(String arena, Player player)</span></span>{
    ArenaManager.joinAttempt(player, ArenaRegistry.getArena(arena));
  }

  <span class="hljs-comment">// or</span>

  <span class="hljs-function"><span class="hljs-keyword">public</span> <span class="hljs-keyword">void</span> <span class="hljs-title">sendPlayerToArena</span><span class="hljs-params">(Arena arena, Player player)</span></span>{
    ArenaManager.joinAttempt(player, arena);
  }
</code></pre>

            <div class="alert alert-warning alert-white rounded">
                <div class="icon">
                    <i class="fa fa-warning"></i>
                </div>
                <div style="margin-left: 45px;"><strong><?php echo localize("Wiki.Alerts.Warn"); ?></strong>
                    You should check is arena name exist otherwise it will throw NullPointerException
                </div>
            </div>

            <p>After that you can check for <code>#isCancelled()</code> if join attempt was cancelled or not.</p>
            <h2 id="leave-attempt">Leave attempt</h2>
            <p>You can also use <code>ArenaManager</code> class to force player to quit arena.</p>
            <pre><code class="lang-java">  public void forcePlayerQuit(<span class="hljs-built_in">Player</span> <span class="hljs-built_in">player</span>){
    Arena arena = ArenaRegistry.getArena(<span class="hljs-built_in">player</span>);

    ArenaManager.leaveAttempt(<span class="hljs-built_in">player</span>, arena);
  }
</code></pre>
            <div class="alert alert-warning alert-white rounded">
                <div class="icon">
                    <i class="fa fa-warning"></i>
                </div>
                <div style="margin-left: 45px;"><strong><?php echo localize("Wiki.Alerts.Warn"); ?></strong>
                    You should check is arena isn't null otherwise it will throw NullPointerException
                </div>
            </div>
        </div>

        <div class="col-auto mb-3">
            <div id="side-menu">
                <div class="menu-content px-3 py-2">
                    <img src="../../inc/img/sidebar-battle.png" class="img-fluid mx-auto d-block" alt="logo" width="200">
                    <h3 id="-general-"><strong><?php echo localize("Wiki.Sidebar.General"); ?></strong></h3>
                    <ul style="list-style-type: disc;">
                        <li>
                            <a href="https://wiki.plajer.xyz/minecraft/buildbattle/index.php"><?php echo localize("Wiki.Sidebar.General.Home"); ?></a>
                        </li>
                        <li>
                            <a href="https://wiki.plajer.xyz/minecraft/buildbattle/cmds_and_perms.php"><?php echo localize("Wiki.Sidebar.General.Commands-And-Permissions"); ?></a>
                        </li>
                        <li>
                            <a href="https://wiki.plajer.xyz/minecraft/buildbattle/free_maps.php"><?php echo localize("Wiki.Sidebar.General.Free-Maps"); ?></a>
                        </li>
                        <li>
                            <a href="https://wiki.plajer.xyz/minecraft/buildbattle/addons.php"><?php echo localize("Wiki.Sidebar.General.Plugin-Addons"); ?></a>
                        </li>
                        <li>
                            <a href="https://wiki.plajer.xyz/minecraft/buildbattle/papi_placeholders.php"><?php echo localize("Wiki.Sidebar.General.PAPI-Placeholders"); ?></a>
                        </li>
                    </ul>
                    <h3 id="-support-"><strong><?php echo localize("Wiki.Sidebar.Support"); ?></strong></h3>
                    <ul style="list-style-type: disc;">
                        <li>
                            <a href="https://www.youtube.com/watch?v=UOfrzj0WdzM"><?php echo localize("Wiki.Sidebar.Support.Setup-Tutorial"); ?></a>
                        </li>
                        <li>
                            <a href="https://wiki.plajer.xyz/minecraft/buildbattle/faq.php"><?php echo localize("Wiki.Sidebar.Support.FAQ"); ?></a> - <?php echo localize("Wiki.Sidebar.Support.FAQ.Problems-And-Tips"); ?>
                        </li>
                        <li>
                            <a href="https://wiki.plajer.xyz/minecraft/buildbattle/configuration.php"><?php echo localize("Wiki.Sidebar.Support.Files-Explained"); ?></a>
                        </li>
                    </ul>
                    <h3 id="-developement-space-"><strong><?php echo localize("Wiki.Sidebar.Development-Space"); ?></strong>
                    </h3>
                    <ul style="list-style-type: disc;">
                        <li style="list-style-image: url('../../inc/img/you-are-here.png');">
                            <a href="https://wiki.plajer.xyz/minecraft/buildbattle/api.php"><?php echo localize("Wiki.Sidebar.Development-Space.Developer-API"); ?></a>
                        </li>
                        <li>
                            <a href="https://jd.plajer.xyz/minecraft/buildbattle/"><?php echo localize("Wiki.Sidebar.Development-Space.Java-Docs"); ?></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <footer class="col-12 page-footer font-small elegant-color-dark p-0">
            <div class="footer-copyright text-center py-3">© 2019 <a target="_blank" href="https://www.spigotmc.org/resources/44703/">Build Battle</a> |
                Created by <a target="_blank" href="https://github.com/Plajer-Lair">Plajer's Lair</a> and maintained by <a target="_blank" href="https://www.spigotmc.org/members/plajer.423193/">Plajer</a>
                and <a target="_blank" href="https://www.spigotmc.org/members/tigerkatze.414545/">Tigerpanzer</a>
            </div>
        </footer>
    </div>
</div>
</body>
</html>