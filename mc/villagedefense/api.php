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
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.9/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
          crossorigin="anonymous">

    <link rel="icon" sizes="192x192" href="../../inc/img/faviconmobile.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../inc/img/favicon.ico">
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
            <h1 id="developer-api">Developer API</h1>
            <h4 id="full-java-documentation-https-plajer-lair-github-io-village_defense-">Full java documentation: <a
                        href="https://plajer-lair.github.io/Village_Defense/">https://plajer-lair.github.io/Village_Defense/</a>
            </h4>
            <h2><?php echo localize("Table-Of-Contents"); ?></h2>
            <ul>
                <li><a href="#events">API Events</a></li>
                <li><a href="#stats-storage">Stats storage</a>
                </li>
                <li><a href="#kit-registry">Kit registry</a></li>
                <li><a href="#manipulating-player-join-leave-attempts">Manipulating player join/leave attempts</a></li>
            </ul>
            <div class="alert alert-danger alert-white rounded">
                <div class="icon">
                    <i class="fa fa-times-circle"></i>
                </div>
                <div style="margin-left: 45px;"><strong>Contents may be not up to date!</strong>
                    Please use java docs instead. Here you can only get some simple
                    examples.
                </div>
            </div>
            <h1 id="events">Events</h1>
            <p><code>Event name [since] [extra attributes]</code></p>
            <ul>
                <li><a href="#-villageevent-generic-">VillageEvent</a> [3.0.0] [Generic event]</li>
                <li><a href="#-villagegamejoinattemptevent-cancellable-">VillageGameJoinAttemptEvent</a> [3.0.0]
                    [Cancellable]
                </li>
                <li><a href="#-villagegameleaveattemptevent-">VillageGameLeaveAttemptEvent</a> [3.0.0]</li>
                <li><a href="#-villagegamestartevent-">VillageGameStartEvent</a> [3.0.0]</li>
                <li><a href="#-villagegamestopevent-">VillageGameStopEvent</a> [3.0.0]</li>
                <li><a href="#-villageplayerchoosekitevent-cancellable-">VillagePlayerChooseKitEvent</a> [2.0.0]
                    [Cancellable]
                </li>
                <li><a href="#-villagewaveendevent-">VillageWaveEndEvent</a> [3.0.0]</li>
                <li><a href="#-villagewavestartevent-">VillageWaveStartEvent</a> [3.0.0]</li>
                <li><a href="#-villagegamestatechangeevent-">VillageGameStateChangeEvent</a> [3.8.0]</li>
                <li><a href="#-villageplayerstatisticchangeevent-">VillagePlayerStatisticChangeEvent</a> [3.8.0]</li>
                <li><a href="#-villagegolemupgradeevent-">VillageGolemUpgradeEvent</a> [3.8.0]</li>
                <li><a href="#-villagepoweruppickevent-">VillagePowerupPickEvent</a> [3.8.0]</li>
            </ul>
            <hr>
            <h3 id="-villageevent-generic-"><strong>VillageEvent</strong> (<strong>Generic</strong>)</h3>
            <p>The event is called <strong>everytime</strong> any Village Defense event is called because it&#39;s a
                generic
                event</p>
            <p><strong><?php echo localize("Example")?>:</strong></p>
            <pre><code class="lang-java">    <span class="hljs-meta">@EventHandler</span>
    <span class="hljs-keyword">public</span> <span class="hljs-function"><span class="hljs-keyword">void</span> <span
                                class="hljs-title">onEventCall</span><span
                                class="hljs-params">(VillageEvent event)</span></span>{
        <span class="hljs-keyword">if</span>(event <span class="hljs-keyword">instanceof</span> VillagePowerupPickEvent){
            Bukkit.getConsoleSender().sendMessage(<span class="hljs-string">"VillagePowerupPickEvent was called!"</span>);
        }
    }
</code></pre>
            <blockquote>
                <p>event#getArena() - returns event arena for which event was called</p>
            </blockquote>
            <hr>
            <h3 id="-villagegamejoinattemptevent-cancellable-"><strong>VillageGameJoinAttemptEvent</strong>
                (<strong>Cancellable</strong>)</h3>
            <p>The event is called when a player is trying to join an arena.</p>
            <p><strong><?php echo localize("Example")?>:</strong></p>
            <pre><code class="lang-java">    @<span class="hljs-keyword">EventHandler</span>
    public void onGameJoin(VillageGameJoinAttemptEvent event){
        <span class="hljs-selector-tag">e</span><span class="hljs-selector-class">.getPlayer</span>()<span
                            class="hljs-selector-class">.sendMessage</span>("<span
                            class="hljs-selector-tag">You</span> <span
                            class="hljs-selector-tag">have</span> <span class="hljs-selector-tag">joined</span> " + <span
                            class="hljs-selector-tag">e</span><span class="hljs-selector-class">.getArena</span>()<span
                            class="hljs-selector-class">.getID</span>());
        <span class="hljs-selector-tag">e</span><span class="hljs-selector-class">.setCancelled</span>(<span
                            class="hljs-selector-tag">true</span>);
        <span class="hljs-selector-tag">e</span><span class="hljs-selector-class">.getPlayer</span>()<span
                            class="hljs-selector-class">.sendMessage</span>("<span class="hljs-selector-tag">Or</span> <span
                            class="hljs-selector-tag">maybe</span> <span class="hljs-selector-tag">not</span>? <span
                            class="hljs-selector-pseudo">:D")</span>;
    }
</code></pre>
            <blockquote>
                <p><strong>event#getPlayer()</strong> - returns player involved in this event</p>
                <p><strong>event#getArena()</strong> - returns existing arena where player is attempting to join</p>
                <p><strong>event#isCancelled()</strong> - returns true if event is cancelled</p>
            </blockquote>
            <div class="alert alert-warning alert-white rounded">
                <div class="icon">
                    <i class="fa fa-warning"></i>
                </div>
                <div style="margin-left: 45px;"><strong><?php echo localize("Alert-Warn"); ?></strong>
                    A message from language file is sent to the player when the attempt is cancelled (see
                    <code>In-Game.Join-Cancelled-Via-API</code> in language.yml)
                </div>
            </div>
            <hr>
            <h3 id="-villagegamestartevent-"><strong>VillageGameStartEvent</strong></h3>
            <p>The event is called when the arena starts.</p>
            <p><strong><?php echo localize("Example")?>:</strong></p>
            <pre><code class="lang-java">    <span class="hljs-meta">@EventHandler</span>
    <span class="hljs-keyword">public</span> <span class="hljs-function"><span class="hljs-keyword">void</span> <span
                                class="hljs-title">onGameStart</span><span
                                class="hljs-params">(VillageGameStartEvent event)</span></span>{
        <span class="hljs-keyword">for</span>(Player p : e.getArena().getPlayers()){
            p.sendMessage(<span class="hljs-string">"Game has started!"</span>);
        }
    }
</code></pre>
            <blockquote>
                <p><strong>event#getArena()</strong> - returns event arena</p>
            </blockquote>
            <hr>
            <h3 id="-villagegameleaveattemptevent-"><strong>VillageGameLeaveAttemptEvent</strong></h3>
            <p>The event is called when a player is trying to leave an arena.</p>
            <p><strong><?php echo localize("Example")?>:</strong></p>
            <pre><code class="lang-java">    @<span class="hljs-keyword">EventHandler</span>
    public void onGameQuit(VillageGameLeaveAttemptEvent event){
        <span class="hljs-selector-tag">e</span><span class="hljs-selector-class">.getPlayer</span>()<span
                            class="hljs-selector-class">.sendMessage</span>("<span
                            class="hljs-selector-tag">You</span> <span
                            class="hljs-selector-tag">have</span> <span class="hljs-selector-tag">quitted</span>" + <span
                            class="hljs-selector-tag">e</span><span class="hljs-selector-class">.getArena</span>()<span
                            class="hljs-selector-class">.getID</span>());
    }
</code></pre>
            <blockquote>
                <p><strong>event#getPlayer()</strong> - returns player involved in this event</p>
                <p><strong>event#getArena()</strong> - returns existing arena what player is attempting to leave</p>
            </blockquote>
            <hr>
            <h3 id="-villagegamestopevent-"><strong>VillageGameStopEvent</strong></h3>
            <p>The event is called when a game is stopped.</p>
            <p><strong><?php echo localize("Example")?>:</strong></p>
            <pre><code class="lang-java">    <span class="hljs-meta">@EventHandler</span>
    <span class="hljs-keyword">public</span> <span class="hljs-function"><span class="hljs-keyword">void</span> <span
                                class="hljs-title">onGameStop</span><span
                                class="hljs-params">(VillageGameStopEvent event)</span></span>{
        <span class="hljs-keyword">for</span>(Player p : e.getArena().getPlayers()){
            p.sendMessage(<span class="hljs-string">"You've lost the game! Maybe play again?"</span>);
        }
    }
</code></pre>
            <blockquote>
                <p><strong>event#getArena()</strong> - returns existing arena that is stopped</p>
            </blockquote>
            <hr>
            <h3 id="-villageplayerchoosekitevent-cancellable-"><strong>VillagePlayerChooseKitEvent</strong>
                (<strong>Cancellable</strong>)</h3>
            <p>The event is called when the player chose kit in game.</p>
            <p><strong><?php echo localize("Example")?>:</strong></p>
            <pre><code class="lang-java">    <span class="hljs-meta">@EventHandler</span>
    <span class="hljs-keyword">public</span> <span class="hljs-function"><span class="hljs-keyword">void</span> <span
                                class="hljs-title">onKitChoose</span><span
                                class="hljs-params">(VillagePlayerChooseKitEvent event)</span></span>{
        Kit kit = e.getKit();
        <span class="hljs-keyword">if</span>(kit.getName().contains(<span class="hljs-string">"knight"</span>)){
            e.getPlayer().sendMessage(<span class="hljs-string">"Knight kits aren't for you mate! Use archer kit instead!"</span>);
            e.setCancelled(<span class="hljs-keyword">true</span>);
        }
    }
</code></pre>
            <blockquote>
                <p><strong>event#getArena()</strong> - returns arena player is playing (player is always in arena when
                    this
                    event is called)</p>
                <p><strong>event#getPlayer()</strong> - returns event player</p>
                <p><strong>event#getKit()</strong> - returns selected kit</p>
                <p><strong>event#isCancelled()</strong> - returns true if event is cancelled</p>
            </blockquote>
            <div class="alert alert-danger alert-white rounded">
                <div class="icon">
                    <i class="fa fa-times-circle"></i>
                </div>
                <div style="margin-left: 45px;"><strong><?php echo localize("Alert-Danger"); ?></strong>
                    Cancelling the event doesn&#39;t really influence the in-game kit chooser,
                    <code>#isCancelled()</code> should be
                    used for external add-ons!
                </div>
            </div>
            <hr>
            <h3 id="-villagewaveendevent-"><strong>VillageWaveEndEvent</strong></h3>
            <p>The event is called when the wave is finished (all zombies are killed).</p>
            <p><strong><?php echo localize("Example")?>:</strong></p>
            <pre><code class="lang-java">    <span class="hljs-meta">@EventHandler</span>
    <span class="hljs-keyword">public</span> <span class="hljs-function"><span class="hljs-keyword">void</span> <span
                                class="hljs-title">onWaveEnd</span><span class="hljs-params">(VillageWaveEndEvent event)</span></span>{
        <span class="hljs-keyword">for</span>(Player p : e.getArena().getPlayers()){
            p.sendMessage(<span class="hljs-string">"Wave has ended! You recived free diamond!"</span>);
            p.getInventory().addItem(<span class="hljs-keyword">new</span> ItemStack(Material.DIAMOND, <span
                            class="hljs-number">1</span>);
        }
    }
</code></pre>
            <blockquote>
                <p><strong>event#getArena()</strong> - returns event arena</p>
                <p><strong>event#getWaveNumber()</strong> - returns number of current wave</p>
            </blockquote>
            <hr>
            <h3 id="-villagewavestartevent-"><strong>VillageWaveStartEvent</strong></h3>
            <p>The event is called when the wave starts.</p>
            <p><strong><?php echo localize("Example")?>:</strong></p>
            <pre><code class="lang-java">    <span class="hljs-meta">@EventHandler</span>
    <span class="hljs-keyword">public</span> <span class="hljs-function"><span class="hljs-keyword">void</span> <span
                                class="hljs-title">onWaveStart</span><span
                                class="hljs-params">(VillageWaveStartEvent event)</span></span>{
        <span class="hljs-keyword">for</span>(Player p : e.getArena().getPlayers()){
            p.sendMessage(<span class="hljs-string">"Wave has started! Good luck."</span>);
        }
    }
</code></pre>
            <blockquote>
                <p><strong>event#getArena()</strong> - returns event arena</p>
                <p><strong>event#getWaveNumber()</strong> - returns number of current wave</p>
            </blockquote>
            <hr>
            <h3 id="-villagegamestatechangeevent-"><strong>VillageGameStateChangeEvent</strong></h3>
            <p>The event is called when arena game state changes.</p>
            <p><strong><?php echo localize("Example")?>:</strong></p>
            <pre><code class="lang-java">    @EventHandler
    public void <span class="hljs-keyword">on</span>GameStateChange(VillageGameStateChangeEvent event){
        String <span class="hljs-keyword">state</span> = e.getArenaState().getFormattedName();
        <span class="hljs-keyword">for</span>(Player p : e.getArena().getPlayers()){
            p.sendMessage(<span class="hljs-string">"Arena state changed to "</span> + <span
                            class="hljs-keyword">state</span>);
        }
    }
</code></pre>
            <blockquote>
                <p><strong>event#getArena()</strong> - returns event arena</p>
                <p><strong>event#getArenaState()</strong> - returns current arena state</p>
            </blockquote>
            <hr>
            <h3 id="-villageplayerstatisticchangeevent-"><strong>VillagePlayerStatisticChangeEvent</strong></h3>
            <p>The event is called when the player receives a new statistic.</p>
            <p><strong><?php echo localize("Example")?>:</strong></p>
            <pre><code class="lang-java">    <span class="hljs-meta">@EventHandler</span>
    <span class="hljs-keyword">public</span> <span class="hljs-function"><span class="hljs-keyword">void</span> <span
                                class="hljs-title">onStatChange</span><span class="hljs-params">(VillagePlayerStatisticChangeEvent event)</span></span>{
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
            <hr>
            <h3 id="-villagegolemupgradeevent-"><strong>VillageGolemUpgradeEvent</strong></h3>
            <p>The event is called when the player upgrades a golem.</p>
            <p><strong><?php echo localize("Example")?>:</strong></p>
            <pre><code class="lang-java">    @<span class="hljs-function">EventHandler
    <span class="hljs-keyword">public</span> <span class="hljs-keyword">void</span> <span class="hljs-title">onGolemUpgrade</span>(<span
                                class="hljs-params">VillageGolemUpgradeEvent <span
                                    class="hljs-keyword">event</span></span>)</span>{
        <span class="hljs-keyword">double</span> health = <span class="hljs-keyword">event</span>.getIronGolem().getMaxHealth();
        <span class="hljs-keyword">double</span> originHealth = <span class="hljs-keyword">event</span>.getOriginalHealth();
        <span class="hljs-keyword">if</span>(health == originHealth){
            <span class="hljs-comment">//Golem was healed</span>
            <span class="hljs-keyword">event</span>.getPlayer().sendMessage(<span class="hljs-string">"You've healed your golem!"</span>);
        } <span class="hljs-keyword">else</span>{
            <span class="hljs-comment">//Golem's health was upgraded</span>
            <span class="hljs-keyword">event</span>.getPlayer().sendMessage(<span class="hljs-string">"Your golem's maximum health has increased by "</span> + (health - originHealth));
        }
    }
</code></pre>
            <blockquote>
                <p><strong>event#getIronGolem()</strong> - returns event iron golem entity</p>
                <p><strong>event#getOriginalHealth()</strong> - returns max health of iron golem before upgrade</p>
                <p><strong>event#getPlayer()</strong> - returns player who owns* and who has upgraded golem</p>
            </blockquote>
            <p><code>* may change in the future</code></p>
            <blockquote>
                <p><strong>event#getArena()</strong> - returns arena where golem was upgraded</p>
            </blockquote>
            <hr>
            <h3 id="-villagepoweruppickevent-"><strong>VillagePowerupPickEvent</strong></h3>
            <p>The event is called when the player picks up a power-up.</p>
            <p><strong><?php echo localize("Example")?>:</strong></p>
            <pre><code class="lang-java">    @<span class="hljs-function">EventHandler
    <span class="hljs-keyword">public</span> <span class="hljs-keyword">void</span> <span class="hljs-title">onPowerupPick</span>(<span
                                class="hljs-params">VillagePowerupPickEvent <span
                                    class="hljs-keyword">event</span></span>)</span>{
        PowerupManager.PowerupType powerupType = <span class="hljs-keyword">event</span>.getPowerupType();
        <span class="hljs-keyword">event</span>.getPlayer().sendMessage(<span
                            class="hljs-string">"You've picked up "</span> + powerupType.getName() + <span
                            class="hljs-string">"!"</span>);
    }
</code></pre>
            <blockquote>
                <p><strong>event#getPowerupType()</strong> - returns power up type of PowerupManager.PowerupType enum
                </p>
                <p><strong>event#getPlayer()</strong> - returns player involved in this event</p>
                <p><strong>event#getArena()</strong> - returns arena player is playing</p>
            </blockquote>
            <h1 id="stats-storage">Stats storage</h1>
            <h2 id="table-of-contents"><?php echo localize("Table-Of-Contents"); ?></h2>
            <ul>
                <li><a href="#-retrieving-online-players-stats-">Retrieving online players stats</a></li>
                <li><a href="#-requesting-sorted-statistics-of-all-players-">Requesting sorted statistics of all
                        players</a>
                </li>
                <li><a href="#-available-statistic-types-">Statistic types</a></li>
            </ul>
            <h3 id="-retrieving-online-players-stats-"><strong>Retrieving online players stats</strong></h3>
            <p>You can easily get online players stats using VD3 API - Stats Storage class.</p>
            <p><strong><?php echo localize("Example")?>:</strong></p>
            <pre><code class="lang-java">    <span class="hljs-keyword">public</span> <span class="hljs-function"><span
                                class="hljs-keyword">int</span> <span class="hljs-title">getZombieKills</span><span
                                class="hljs-params">(Player p)</span></span>{
        <span class="hljs-function"><span class="hljs-keyword">return</span> StatsStorage.<span class="hljs-title">getUserStats</span><span
                    class="hljs-params">(p, StatsStorage.StatisticType.KILLS)</span></span>;
    }
</code></pre>
            <p>Very easy, right?</p>
            <hr>
            <h3 id="-requesting-sorted-statistics-of-all-players-"><strong>Requesting sorted statistics of all
                    players</strong>
            </h3>
            <p>To access sorted statistics Map with players you must call it from StatsStorage class.</p>
            <p><strong><?php echo localize("Example")?>:</strong></p>
            <pre><code class="lang-java">    <span class="hljs-function"><span class="hljs-keyword">public</span> <span
                                class="hljs-keyword">void</span> <span class="hljs-title">printBestStats</span>(<span
                                class="hljs-params">StatsStorage.StatisticType statistic</span>)</span>{
        Map&lt;UUID, Integer&gt; statsMap = StatsStorage.getStats(statistic);
        UUID[] uuidsArray = (UUID[]) StatsStorage.getStats(statistic).keySet().toArray();
        <span class="hljs-keyword">for</span>(<span class="hljs-keyword">int</span> i = <span
                            class="hljs-number">0</span>; i &lt; <span class="hljs-number">10</span>; i++){
            Bukkit.broadcastMessage(<span class="hljs-string">"#"</span> + i + <span
                            class="hljs-string">" UUID: "</span> + uuidsArray[i] + <span
                            class="hljs-string">", stats: "</span> + statsMap.<span
                            class="hljs-keyword">get</span>(uuidsArray[i]));
        }
    }
</code></pre>
            <div class="alert alert-danger alert-white rounded">
                <div class="icon">
                    <i class="fa fa-times-circle"></i>
                </div>
                <div style="margin-left: 45px;"><strong><?php echo localize("Alert-Danger"); ?></strong>
                    Be aware of IndexOutOfBoundsException as the list might be not enough big!
                </div>
            </div>
            <hr>
            <h3 id="-available-statistic-types-"><strong>Available statistic types</strong></h3>
            <div class="alert alert-danger alert-white rounded">
                <div class="icon">
                    <i class="fa fa-times-circle"></i>
                </div>
                <div style="margin-left: 45px;"><strong><?php echo localize("Alert-Danger"); ?></strong>
                    Orbs statistic is temporary and shouldn&#39;t be used for out game usages!
                </div>
            </div>
            <table>
                <thead>
                <tr>
                    <th>Statistic name (enum)</th>
                    <th>Statistic identifier (string) (for advanced things)</th>
                    <th>Type</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>ORBS <strong>(<i class="fa fa-warning"></i> non-persistent)</strong></td>
                    <td>orbs</td>
                    <td>int</td>
                </tr>
                <tr>
                    <td>KILLS</td>
                    <td>kills</td>
                    <td>int</td>
                </tr>
                <tr>
                    <td>DEATHS</td>
                    <td>deaths</td>
                    <td>int</td>
                </tr>
                <tr>
                    <td>GAMES_PLAYED</td>
                    <td>gamesplayed</td>
                    <td>int</td>
                </tr>
                <tr>
                    <td>HIGHEST_WAVE</td>
                    <td>highestwave</td>
                    <td>int</td>
                </tr>
                <tr>
                    <td>LEVEL</td>
                    <td>level</td>
                    <td>int</td>
                </tr>
                <tr>
                    <td>XP</td>
                    <td>xp</td>
                    <td>int</td>
                </tr>
                </tbody>
            </table>
            <h1 id="kit-registry">Kit registry</h1>
            <p>Registering new kit is quite simple.
                We need to implement all methods from abstract Kit class and edit it by yourself.
                After that just register it via KitRegistry.</p>
            <p><strong><?php echo localize("Example")?>:</strong></p>
            <pre><code class="lang-java">        <span class="hljs-comment">//This kit will be premium</span>
        Kit supporter = <span class="hljs-keyword">new</span> PremiumKit() {
            <span class="hljs-comment">//We need to implement methods from abstract Kit class</span>

            <span class="hljs-comment">//Permissions needed to unlock it, if it is free just return true</span>
            <span class="hljs-meta">@Override</span>
            <span class="hljs-keyword">public</span> <span class="hljs-function"><span
                                class="hljs-keyword">boolean</span> <span class="hljs-title">isUnlockedByPlayer</span><span
                                class="hljs-params">(Player p)</span> </span>{
                <span class="hljs-function"><span class="hljs-keyword">return</span> p.<span class="hljs-title">hasPermission</span><span
                            class="hljs-params">(<span class="hljs-string">"my.super.kit"</span>)</span></span>;
            }

            <span class="hljs-comment">//Items given on game start</span>
            <span class="hljs-meta">@Override</span>
            <span class="hljs-keyword">public</span> <span class="hljs-function"><span class="hljs-keyword">void</span> <span
                                class="hljs-title">giveKitItems</span><span class="hljs-params">(Player player)</span> </span>{
                player.getInventory().addItem(<span class="hljs-keyword">new</span> ItemStack(Material.IRON_AXE, <span
                            class="hljs-number">1</span>));
                player.getInventory().addItem(<span
                            class="hljs-keyword">new</span> ItemStack(Material.GOLDEN_APPLE, <span
                            class="hljs-number">5</span>));
            }

            <span class="hljs-comment">//Material represented by this kit in the kit menu. Must be unique!</span>
            <span class="hljs-meta">@Override</span>
            <span class="hljs-keyword">public</span> <span class="hljs-function">Material <span class="hljs-title">getMaterial</span><span
                                class="hljs-params">()</span> </span>{
                <span class="hljs-keyword">return</span> Material.GOLDEN_APPLE;
            }

            <span class="hljs-comment">//Items given every next wave</span>
            <span class="hljs-meta">@Override</span>
            <span class="hljs-keyword">public</span> <span class="hljs-function"><span class="hljs-keyword">void</span> <span
                                class="hljs-title">reStock</span><span class="hljs-params">(Player player)</span> </span>{
                player.getInventory().addItem(<span
                            class="hljs-keyword">new</span> ItemStack(Material.GOLDEN_APPLE, <span
                            class="hljs-number">1</span>));
            }
        };
        <span class="hljs-comment">//Now just set kit name and description and register it via KitRegistry</span>
        supporter.setName(<span class="hljs-string">"Supporter"</span>);
        supporter.setDescription(<span class="hljs-keyword">new</span> String[]{ChatColor.GREEN + <span
                            class="hljs-string">"My super description"</span>});
        KitRegistry.registerKit(supporter);
</code></pre>

            <h1 id="manipulating-player-join-leave-attempts">Manipulating player join/leave attempts</h1>
            <h2 id="join-attempt">Join attempt</h2>
            <p>To force player to join specified arena you can use our <code>ArenaManager</code> class.</p>
            <pre><code class="lang-java">  <span class="hljs-function"><span class="hljs-keyword">public</span> <span class="hljs-keyword">void</span> <span class="hljs-title">sendPlayerToArena</span><span class="hljs-params">(String arena, Player player)</span></span>{
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
                <div style="margin-left: 45px;"><strong><?php echo localize("Alert-Warn"); ?></strong>
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
                <div style="margin-left: 45px;"><strong><?php echo localize("Alert-Warn"); ?></strong>
                    You should check is arena isn't null otherwise it will throw NullPointerException
                </div>
            </div>
        </div>

        <div class="col-lg-auto col-md-4 col-sm-6 col-xs-12 mb-3">
            <div id="side-menu">
                <div class="menu-content px-3 py-2">
                    <img src="https://i.imgur.com/vilATio.png" class="img-fluid mx-auto d-block" alt="logo" width="200">
                    <h3 id="-general-"><strong><?php echo localize("Sidebar-Category-General"); ?></strong></h3>
                    <ul style="list-style-type: disc;">
                        <li>
                            <a href="https://plajer.xyz/wiki/mc/villagedefense/index.php"><?php echo localize("Sidebar-Home"); ?></a>
                        </li>
                        <li>
                            <a href="https://plajer.xyz/wiki/mc/villagedefense/cmds_and_perms.php"><?php echo localize("Sidebar-Cmds-And-Perms"); ?></a>
                        </li>
                        <li>
                            <a href="https://plajer.xyz/wiki/mc/villagedefense/free_maps.php"><?php echo localize("Sidebar-Free-Maps"); ?></a>
                        </li>
                        <li>
                            <a href="https://plajer.xyz/wiki/mc/villagedefense/addons.php"><?php echo localize("Sidebar-Plugin-Addons"); ?></a>
                        </li>
                        <li>
                            <a href="https://plajer.xyz/wiki/mc/villagedefense/tips.php"><?php echo localize("Sidebar-Server-Tips"); ?></a>
                        </li>
                        <li>
                            <a href="https://plajer.xyz/wiki/mc/villagedefense/papi_placeholders.php"><?php echo localize("Sidebar-PAPI-Placeholders"); ?></a>
                        </li>
                    </ul>
                    <h3 id="-support-"><strong><?php echo localize("Sidebar-Category-Support"); ?></strong></h3>
                    <ul style="list-style-type: disc;">
                        <li>
                            <a href="https://youtu.be/16GS6zAte5I"><?php echo localize("Sidebar-Setup-Tutorial"); ?></a>
                        </li>
                        <li>
                            <a href="https://plajer.xyz/wiki/mc/villagedefense/faq.php"><?php echo localize("Sidebar-FAQ"); ?></a> - <?php echo localize("Sidebar-FAQ-Problems-And-Tips"); ?>
                        </li>
                        <li>
                            <a href="https://plajer.xyz/wiki/mc/villagedefense/configuration.php"><?php echo localize("Sidebar-Files-Explained"); ?></a>
                        </li>
                    </ul>
                    <h3 id="-developement-space-"><strong><?php echo localize("Sidebar-Category-Development-Space"); ?></strong>
                    </h3>
                    <ul style="list-style-type: disc;">
                        <li style="list-style-image: url('../../inc/img/you-are-here.png');">
                            <a href="https://plajer.xyz/wiki/mc/villagedefense/api.php"><?php echo localize("Sidebar-Developer-API"); ?></a>
                        </li>
                        <li>
                            <a href="https://plajer-lair.github.io/Village_Defense/"><?php echo localize("Sidebar-Java-Docs"); ?></a>
                        </li>
                    </ul>
                    <h3 id="enhancements-addon"><?php echo localize("Enhancements-Sidebar-Addon-Name"); ?></h3>
                    <ul style="list-style-type: disc;">
                        <li>
                            <a href="https://plajer.xyz/wiki/mc/villagedefense/enhancements/cmds_and_perms.php"><?php echo localize("Sidebar-Cmds-And-Perms"); ?></a>
                        </li>
                        <li>
                            <a href="https://plajer.xyz/wiki/mc/villagedefense/enhancements/faq.php"><?php echo localize("Enhancements-Sidebar-FAQ"); ?></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <footer class="col-12 page-footer font-small elegant-color-dark p-0">
            <div class="footer-copyright text-center py-3">© 2018 <a target="_blank" href="https://www.spigotmc.org/resources/41869/">Village Defense 3</a> |
                Created by <a target="_blank" href="https://github.com/Plajer-Lair">Plajer's Lair</a> and maintained by <a target="_blank"
                                                                                                                           href="https://www.spigotmc.org/members/plajer.423193/">Plajer</a>
            </div>
        </footer>
    </div>
</div>
</body>
</html>