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
            <h4 id="full-java-documentation-https-plajer-lair-github-io-buildbattle-">Full java documentation: <a href="https://jd.plajer.xyz/minecraft/murdermystery">https://jd.plajer.xyz/minecraft/murdermystery</a>
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
                        <span class="hljs-tag">&lt;<span class="hljs-name">artifactId</span>&gt;</span>murdermystery<span class="hljs-tag">&lt;/<span class="hljs-name">artifactId</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">version</span>&gt;</span><strong>{version}</strong><span class="hljs-tag">&lt;/<span
                                class="hljs-name">version</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">scope</span>&gt;</span>provided<span class="hljs-tag">&lt;/<span class="hljs-name">scope</span>&gt;</span>
                 <span class="hljs-tag">&lt;/<span class="hljs-name">dependency</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-name">/dependencies</span>&gt;</span></code></pre>

            <h1 id="events">Events</h1>
            <p><code>Event name [since] [extra attributes]</code></p>
            <ul>
                <li><a href="#murdermysteryevent-generic">MurderMysteryEvent</a> [0.0.8] [Generic event]</li>
                <li><a href="#mmgamejoinevent-cancellable-">MMGameJoinAttemptEvent</a> [0.0.8] [Cancellable]</li>
                <li><a href="#mgameleaveevent-">MMGameLeaveAttemptEvent</a> [0.0.8]</li>
                <li><a href="#mmgamestartevent-">MMGameStartEvent</a> [0.0.8]</li>
                <li><a href="#mmgameendevent-">MMGameStopEvent</a> [0.0.8]</li>
                <li><a href="#mmgamestatechangeevent-">MMGameStateChangeEvent</a> [0.0.8]</li>
                <li><a href="#mmplayerstatisticchangeevent-">MMPlayerStatisticChangeEvent [0.0.8]</a></li>
            </ul>
            <hr>
            <h3 id="murdermysteryevent-generic"><strong>MurderMysteryEvent</strong> (<strong>Generic</strong>)</h3>
            <p>The event is called <strong>everytime</strong> any Murder Mystery event is called because it&#39;s a generic event.</p>
            <p><strong><?php echo localize("Wiki.Global.Example")?>:</strong></p>
            <pre><code class="lang-java">    <span class="hljs-meta">@EventHandler</span>
    <span class="hljs-keyword">public</span> <span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">onEventCall</span><span
                            class="hljs-params">(MurderMysteryEvent event)</span></span>{
        <span class="hljs-keyword">if</span>(event <span class="hljs-keyword">instanceof</span> MMGameChangeStateEvent){
            Bukkit.getConsoleSender().sendMessage(<span class="hljs-string">"MMGameChangeStateEvent was called!"</span>);
        }
    }
</code></pre>
            <blockquote>
                <p><strong>event#getArena()</strong> - returns event arena for which event was called</p>
            </blockquote>
            <hr>
            <h3 id="mmgamejoinevent-cancellable-"><strong>MMGameJoinAttemptEvent</strong> (<strong>Cancellable</strong>)</h3>
            <p>The event is called when a player is trying to join an arena.</p>
            <p><strong><?php echo localize("Wiki.Global.Example")?>:</strong></p>
            <pre><code class="lang-java">    @<span class="hljs-function">EventHandler
    <span class="hljs-keyword">public</span> <span class="hljs-keyword">void</span> <span class="hljs-title">onGameJoin</span>(<span class="hljs-params">MMGameJoinAttemptEvent <span class="hljs-keyword">event</span></span>)</span>{
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
            <h3 id="mmgamestartevent-"><strong>MMGameStartEvent</strong></h3>
            <p>The event is called when the arena starts.</p>
            <p><strong><?php echo localize("Wiki.Global.Example")?>:</strong></p>
            <pre><code class="lang-java">    <span class="hljs-meta">@EventHandler</span>
    <span class="hljs-keyword">public</span> <span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">onGameStart</span><span class="hljs-params">(MMGameStartEvent event)</span></span>{
        <span class="hljs-keyword">for</span>(Player p : event.getArena().getPlayers()){
            p.sendMessage(<span class="hljs-string">"Game has started!"</span>);
        }
    }
</code></pre>
            <blockquote>
                <p><strong>event#getArena()</strong> - returns event arena</p>
            </blockquote>
            <hr>
            <h3 id="mgameleaveevent-"><strong>MMGameLeaveAttemptEvent</strong></h3>
            <p>The event is called when a player is trying to leave an arena.</p>
            <p><strong><?php echo localize("Wiki.Global.Example")?>:</strong></p>
            <pre><code class="lang-java">    @<span class="hljs-function">EventHandler
    <span class="hljs-keyword">public</span> <span class="hljs-keyword">void</span> <span class="hljs-title">onGameQuit</span>(<span class="hljs-params">MMGameLeaveAttemptEvent <span class="hljs-keyword">event</span></span>)</span>{
        <span class="hljs-keyword">event</span>.getPlayer().sendMessage(<span class="hljs-string">"You have quitted"</span> + e.getArena().getID());
    }
</code></pre>
            <blockquote>
                <p><strong>event#getPlayer()</strong> - returns player involved in this event</p>
                <p><strong>event#getArena()</strong> - returns existing arena what player is attempting to leave</p>
            </blockquote>
            <hr>
            <h3 id="mmgameendevent-"><strong>MMGameEndEvent</strong></h3>
            <p>The event is called when a game has ended.</p>
            <p><strong><?php echo localize("Wiki.Global.Example")?>:</strong></p>
            <pre><code class="lang-java">    <span class="hljs-meta">@EventHandler</span>
    <span class="hljs-keyword">public</span> <span class="hljs-function"><span class="hljs-keyword">void</span> <span class="hljs-title">onGameStop</span><span class="hljs-params">(MMGameEndEvent event)</span></span>{
        <span class="hljs-keyword">for</span>(Player p : event.getArena().getPlayers()){
            p.sendMessage(<span class="hljs-string">"Cool game? Maybe play again?"</span>);
        }
    }
</code></pre>
            <blockquote>
                <p><strong>event#getArena()</strong> - returns existing arena that is stopped</p>
            </blockquote>
            <hr>
            <h3 id="mmgamestatechangeevent-"><strong>MMGameStateChangeEvent</strong></h3>
            <p>The event is called when a game arena state has changed.</p>
            <p><strong><?php echo localize("Wiki.Global.Example")?>:</strong></p>
            <pre><code class="lang-java">    @<span class="hljs-function">EventHandler
    <span class="hljs-keyword">public</span> <span class="hljs-keyword">void</span> <span class="hljs-title">onGameStop</span>(<span class="hljs-params">MMGameStateChangeEvent <span
                                class="hljs-keyword">event</span></span>)</span>{
        ArenaState prev = <span class="hljs-keyword">event</span>.getPreviousState();
        ArenaState curr = <span class="hljs-keyword">event</span>.getState();
        <span class="hljs-keyword">for</span>(Player p : <span class="hljs-keyword">event</span>.getArena().getPlayers()){
            p.sendMessage(<span class="hljs-string">"Game state changed from "</span> + prev.getFormattedName() + <span class="hljs-string">" to "</span> + curr.getFormattedName());
        }
    }
</code></pre>
            <hr>
            <h3 id="mmplayerstatisticchangeevent-"><strong>MMPlayerStatisticChangeEvent</strong></h3>
            <p>The event is called when the player receives a new statistic.</p>
            <p><strong><?php echo localize("Wiki.Global.Example") ?>:</strong></p>
            <pre><code class="lang-java">    <span class="hljs-meta">@EventHandler</span>
    <span class="hljs-keyword">public</span> <span class="hljs-function"><span class="hljs-keyword">void</span> <span
                                class="hljs-title">onStatChange</span><span class="hljs-params">(MMPlayerStatisticChangeEvent event)</span></span>{
        StatisticType stat = e.getStatisticType();
        <span class="hljs-keyword">int</span> statNumber = e.getNumber();
        e.getPlayer().sendMessage(<span class="hljs-string">"Your statistic "</span> + stat.getName() + <span
                            class="hljs-string">" has changed to "</span> + statNumber);
    }
</code></pre>
            <blockquote>
                <p><strong>event#getPlayer()</strong> - returns player involved in this event</p>
                <p><strong>event#getArena()</strong> - returns arena player is playing (player is always in arena when
                    this
                    event is called)</p>
                <p><strong>event#getStatisticType()</strong> - returns statistic of StatsStorage.StatisticType enum</p>
                <p><strong>event#getNumber()</strong> - returns current value of statistic</p>
            </blockquote>
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
            <p>You can easily get online players stats using MM API - Stats Storage class.</p>
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
                    <th>Persistent</th>
                    <th><?php echo localize("Wiki.Global.Description"); ?></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>CONTRIBUTION_DETECTIVE</td>
                    <td>contribdetective</td>
                    <td>true</td>
                    <td>Points for chances of being detective</td>
                </tr>
                <tr>
                    <td>CONTRIBUTION_MURDERER</td>
                    <td>contribmurderer</td>
                    <td>true</td>
                    <td>Points for chances of being murderer</td>
                </tr>
                <tr>
                    <td>DEATHS</td>
                    <td>deaths</td>
                    <td>true</td>
                    <td>Deaths amount</td>
                </tr>
                <tr>
                    <td>GAMES_PLAYED</td>
                    <td>gamesplayed</td>
                    <td>true</td>
                    <td>Total games played</td>
                </tr>
                <tr>
                    <td>WINS</td>
                    <td>wins</td>
                    <td>true</td>
                    <td>Wins amount</td>
                </tr>
                <tr>
                    <td>LOSES</td>
                    <td>loses</td>
                    <td>true</td>
                    <td>Loses amount</td>
                </tr>
                <tr>
                    <td>HIGHEST_SCORE</td>
                    <td>highestscore</td>
                    <td>true</td>
                    <td>Highest score in-game</td>
                </tr>
                <tr>
                    <td>KILLS</td>
                    <td>kills</td>
                    <td>true</td>
                </tr>
                <tr>
                    <td>LOCAL_SCORE</td>
                    <td>local_score</td>
                    <td>false <i class="fa fa-warning"></i></td>
                    <td>In-game current score amount</td>
                </tr>
                <tr>
                    <td>LOCAL_CURRENT_PRAY</td>
                    <td>local_pray</td>
                    <td>false <i class="fa fa-warning"></i></td>
                    <td>In-game current activated pray perk ID</td>
                </tr>
                <tr>
                    <td>LOCAL_GOLD</td>
                    <td>local_gold</td>
                    <td>false <i class="fa fa-warning"></i></td>
                    <td>In-game current gold amount</td>
                </tr>
                <tr>
                    <td>LOCAL_KILLS</td>
                    <td>local_kills</td>
                    <td>false <i class="fa fa-warning"></i></td>
                    <td>In-game current kills amount (mainly for murderer)</td>
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
                            <a href="https://bit.ly/2CuSR5E"><?php echo localize("Wiki.Sidebar.Support.Setup-Tutorial"); ?></a>
                        </li>
                        <li>
                            <a href="https://wiki.plajer.xyz/minecraft/murdermystery/faq.php"><?php echo localize("Wiki.Sidebar.Support.FAQ"); ?></a> - <?php echo localize("Wiki.Sidebar.Support.FAQ.Problems-And-Tips"); ?>
                        </li>
                        <li>
                            <a href="https://wiki.plajer.xyz/minecraft/murdermystery/configuration.php"><?php echo localize("Wiki.Sidebar.Support.Files-Explained"); ?></a>
                        </li>
                    </ul>
                    <h3 id="-developement-space-"><strong><?php echo localize("Wiki.Sidebar.Development-Space"); ?></strong>
                    </h3>
                    <ul style="list-style-type: disc;">
                        <li style="list-style-image: url('../../inc/img/you-are-here.png');">
                            <a href="https://wiki.plajer.xyz/minecraft/murdermystery/api.php"><?php echo localize("Wiki.Sidebar.Development-Space.Developer-API"); ?></a>
                        </li>
                        <li>
                            <a href="https://jd.plajer.xyz/minecraft/murdermystery"><?php echo localize("Wiki.Sidebar.Development-Space.Java-Docs"); ?></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <footer class="col-12 page-footer font-small elegant-color-dark p-0">
            <div class="footer-copyright text-center py-3">© 2019 <a target="_blank" href="https://github.com/Plajer-Lair/MurderMystery">Murder Mystery</a> |
                Created by <a target="_blank" href="https://github.com/Plajer-Lair">Plajer's Lair</a> and maintained by <a target="_blank" href="https://www.spigotmc.org/members/plajer.423193/">Plajer</a>
                and <a target="_blank" href="https://www.spigotmc.org/members/tigerkatze.414545/">Tigerpanzer</a>
            </div>
        </footer>
    </div>
</div>
</body>
</html>