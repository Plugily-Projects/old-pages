<?php
include_once("inc/json_localization.php");
include_once("inc/poeditor_reader.php");
include_once("inc/tracking.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Plajer's Lair Translation Project</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.9/css/mdb.min.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="inc/css/bootstrap-4.1.3.min.css">

    <link rel="icon" sizes="192x192" href="https://plajer.xyz/images/favicon.php?type=favicon-mobile">
    <link rel="shortcut icon" type="image/x-icon" href="https://plajer.xyz/images/favicon.php?type=favicon">

    <style>
        body {
            background: url("https://i.imgur.com/kOzGO9k.png");
        }

        .vertically-center {
            position: relative;
            width: 100%;
            top: 60px;
        }

        .card-deck a {
            text-decoration: none;
            color: black;
        }

        .jumbotron {
            background-image: url("https://i.imgur.com/JMvNnXe.png"), url("https://i.imgur.com/JMvNnXe.png"), url("https://i.imgur.com/JMvNnXe.png");
            background-repeat: no-repeat, repeat, no-repeat;
            background-position: center bottom, center top, right top;
        }

        .fixed-card {
            min-width: 250px !important;
            max-width: 300px !important;
            border-radius: 0;
            margin-bottom: .5rem !important;
            margin-right: .5rem !important;
            margin-left: .5rem !important;
            box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .075) !important;
            text-align: center !important;
        }

        .px-max {
            padding-right: 4.5rem !important;
            padding-left: 4.5rem !important;
        }

        .corner-ribbon{
            width: 200px;
            background: #2f2f2f;
            color: #fff;
            position: fixed;
            text-align: center;
            bottom: 35px;
            line-height: 40px;
            z-index: 100;
        }

        .corner-ribbon.right{
            right: -45px;
            left: auto;
            -ms-transform: rotate(-45deg);
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
        }
    </style>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-nav-index">
    <a class="navbar-brand text-truncate" href="#">
        <img src="https://plajer.xyz/images/favicon.php?type=navbar" width="30" height="30" class="d-inline-block align-top" alt=""> Plajer's Lair Translation Project</a>
    <button class="navbar-toggler px-1" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active ml-2">
                <a class="nav-link" href="https://plajer.xyz"><i class="fa fa-home mr-1"></i> Command Center</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container-fluid vertically-center">
    <a target="_blank" href="https://beta.plajer.xyz" class="corner-ribbon right" style="text-decoration: none; color:white">Join beta program</a>
    <div class="row justify-content-center">
        <div class="col-xl-8 col-lg-9 col-md-10 col-12">
            <h2 class="jumbotron text-center mb-3"><?php echo localize("Translation.Select-Project"); ?></h2>
            <div class="card-deck justify-content-center align-items-center">
                <div class="card fixed-card">
                    <a target="_blank" href="https://poeditor.com/join/project/w8GqqwkET1" class="card-body">
                        <img src="https://i.imgur.com/0UuPzhx.png" width="30%" class="my-3 img-fluid">
                        <h5 class="card-title">Village Defense</h5>
                    </a>
                    <div class="card-footer px-5">
                        <strong><?php echo localize("Translation.Current-Languages"); ?></strong>
                        <br/>
                        <img src="https://www.plajer.xyz/shared/flags/gb.png" alt="">
                        <?php
                        $i = 1;
                        $json = readLanguages(190635);
                        foreach ($json->result->languages as $value) {
                            if ($value->name == "English") {
                                continue;
                            }
                            $flag = $value->code;
                            $flag = fixFlag($value->name, $flag);
                            if ($value->percentage < 80.0) {
                                continue;
                            } else {
                                echo "<img src='https://www.plajer.xyz/shared/flags/$flag.png' alt='$value->code'> ";
                            }
                            $i++;
                        }
                        ?>
                        <br/>
                        <small class='text-muted'><?php echo str_replace('%num%', $i, localize('Translation.Languages-In-Total')); ?></small>
                    </div>
                    <div class="card-footer">
                        <strong><?php echo localize("Translation.Pending-Languages"); ?></strong>
                        <br/>
                        <small class="text-muted"><?php echo localize("Translation.Pending-Languages.Description"); ?></small>
                        <br/>
                        <?php
                        $i = 0;
                        foreach ($json->result->languages as $value) {
                            if ($value->name == "English") {
                                continue;
                            }
                            $flag = $value->code;
                            $flag = fixFlag($value->name, $flag);
                            if ($value->percentage < 80.0) {
                                echo "<img src='https://www.plajer.xyz/shared/flags/$flag.png' alt='$value->code'> ";
                            } else {
                                continue;
                            }
                            $i++;
                        }
                        ?>
                        <br/>
                        <small class='text-muted'><?php echo str_replace('%num%', $i, localize('Translation.Languages-In-Total')); ?></small>
                    </div>
                </div>


                <div class="card fixed-card">
                    <a target="_blank" href="https://poeditor.com/join/project/wEpcZ7Htnn" class="card-body">
                        <img src="https://i.imgur.com/JVU6H3a.png" width="30%" class="my-3 img-fluid">
                        <h5 class="card-title">Build Battle</h5>
                    </a>
                    <div class="card-footer">
                        <strong><?php echo localize("Translation.Current-Languages"); ?></strong>
                        <br/>
                        <img src="https://www.plajer.xyz/shared/flags/gb.png" alt="">
                        <?php
                        $i = 1;
                        $json = readLanguages(196919);
                        foreach ($json->result->languages as $value) {
                            if ($value->name == "English") {
                                continue;
                            }
                            $flag = $value->code;
                            $flag = fixFlag($value->name, $flag);
                            if ($value->percentage < 80.0) {
                                continue;
                            } else {
                                echo "<img src='https://www.plajer.xyz/shared/flags/$flag.png' alt='$value->code'> ";
                                $i++;
                            }
                        }
                        ?>
                        <br/>
                        <small class='text-muted'><?php echo str_replace('%num%', $i, localize('Translation.Languages-In-Total')); ?></small>
                    </div>
                    <div class="card-footer">
                        <strong><?php echo localize("Translation.Pending-Languages"); ?></strong>
                        <br/>
                        <small class="text-muted"><?php echo localize("Translation.Pending-Languages.Description"); ?></small>
                        <br/>
                        <?php
                        $i = 0;
                        foreach ($json->result->languages as $value) {
                            if ($value->name == "English") {
                                continue;
                            }
                            $flag = $value->code;
                            $flag = fixFlag($value->name, $flag);
                            if ($value->percentage < 80.0) {
                                echo "<img src='https://www.plajer.xyz/shared/flags/$flag.png' alt='$value->code'> ";
                            } else {
                                continue;
                            }
                            $i++;
                        }
                        ?>
                        <br/>
                        <small class='text-muted'><?php echo str_replace('%num%', $i, localize('Translation.Languages-In-Total')); ?></small>
                    </div>
                </div>

                <div class="card fixed-card">
                    <a target="_blank" href="https://poeditor.com/join/project/doHF7qKEa0" class="card-body">
                        <img src="https://i.imgur.com/YFoCR6R.png" width="30%" class="my-3 img-fluid">
                        <h5 class="card-title">Murder Mystery</h5>
                    </a>
                    <div class="card-footer px-5">
                        <strong><?php echo localize("Translation.Current-Languages"); ?></strong>
                        <br/>
                        <img src="https://www.plajer.xyz/shared/flags/gb.png" alt="">
                        <?php
                        $i = 1;
                        $json = readLanguages(202329);
                        foreach ($json->result->languages as $value) {
                            if ($value->name == "English") {
                                continue;
                            }
                            $flag = $value->code;
                            $flag = fixFlag($value->name, $flag);
                            if ($value->percentage < 80.0) {
                                continue;
                            } else {
                                echo "<img src='https://www.plajer.xyz/shared/flags/$flag.png' alt='$value->code'> ";
                                $i++;
                            }
                        }
                        ?>
                        <br/>
                        <small class='text-muted'><?php echo str_replace('%num%', $i, localize('Translation.Languages-In-Total')); ?></small>
                    </div>
                    <div class="card-footer">
                        <strong><?php echo localize("Translation.Pending-Languages"); ?></strong>
                        <br/>
                        <small class="text-muted"><?php echo localize("Translation.Pending-Languages.Description"); ?></small>
                        <br/>
                        <?php
                        $i = 0;
                        foreach ($json->result->languages as $value) {
                            if ($value->name == "English") {
                                continue;
                            }
                            $flag = $value->code;
                            $flag = fixFlag($value->name, $flag);
                            if ($value->percentage < 80.0) {
                                echo "<img src='https://www.plajer.xyz/shared/flags/$flag.png' alt='$value->code'> ";
                            } else {
                                continue;
                            }
                            $i++;
                        }
                        ?>
                        <br/>
                        <small class='text-muted'><?php echo str_replace('%num%', $i, localize('Translation.Languages-In-Total')); ?></small>
                    </div>
                </div>
                <div class="card fixed-card">
                    <a target="_blank" href="https://poeditor.com/join/project/SyQ3OElBb1" class="card-body">
                        <img src="https://i.imgur.com/kxmqOL7.png" width="30%" class="my-3 img-fluid">
                        <h5 class="card-title">Plajer's Lair Pages</h5>
                    </a>
                    <div class="card-footer">
                        <strong><?php echo localize("Translation.Current-Languages"); ?></strong>
                        <br/>
                        <div class="px-max">
                            <img src="https://www.plajer.xyz/shared/flags/gb.png" alt="">
                            <?php
                            $i = 1;
                            $json = readLanguages(206301);
                            foreach ($json->result->languages as $value) {
                                if ($value->name == "English") {
                                    continue;
                                }
                                $flag = $value->code;
                                $flag = fixFlag($value->name, $flag);
                                if ($value->percentage < 65.0) {
                                    continue;
                                } else {
                                    echo "<img src='https://www.plajer.xyz/shared/flags/$flag.png' alt='$value->code'> ";
                                    $i++;
                                }
                            }
                            ?>
                            <br/>
                            <small class='text-muted'><?php echo str_replace('%num%', $i, localize('Translation.Languages-In-Total')); ?></small>
                        </div>
                    </div>
                    <div class="card-footer">
                        <strong><?php echo localize("Translation.Pending-Languages"); ?></strong>
                        <br/>
                        <small class="text-muted"><?php echo localize("Translation.Pending-Languages.Description"); ?></small>
                        <br/>
                        <?php
                        $i = 0;
                        foreach ($json->result->languages as $value) {
                            if ($value->name == "English") {
                                continue;
                            }
                            $flag = $value->code;
                            $flag = fixFlag($value->name, $flag);
                            if ($value->percentage < 65.0) {
                                echo "<img src='https://www.plajer.xyz/shared/flags/$flag.png' alt='$value->code'> ";
                            } else {
                                continue;
                            }
                            $i++;
                        }
                        ?>
                        <br/>
                        <small class='text-muted'><?php echo str_replace('%num%', $i, localize('Translation.Languages-In-Total')); ?></small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>