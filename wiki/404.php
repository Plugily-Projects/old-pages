<?php
$replies = array('Houston, we have a problem', 'Life not found', 'Spaaaaaaaaaaaaaace', 'SOS')

?>
<html>
<head><title>404 Page Not Found</title>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.9/css/mdb.min.css' rel='stylesheet'>
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css'
          integrity='sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO' crossorigin='anonymous'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel='shortcut icon' type='image/x-icon' href='https://plajer.xyz/images/favicon.php?type=favicon'>
    <style>body {
            background: url('https://i.imgur.com/njiXnrH.png'), url('https://i.imgur.com/njiXnrH.png'), url('https://i.imgur.com/njiXnrH.png') center bottom, center top, right top;
        }

        .vertically-center {
            position: relative;
            width: 100%;
            top: 20vw;
        }
    </style>
</head>
<body>
<div class='container'>
    <div class='row'>
        <div class='col vertically-center text-center'>
            <h1 class='heading-2'>404 - <?php echo $replies[array_rand($replies)]; ?></h1>
            <span class="h5-responsive">Click icons below to redirect to the wikis</span>
            <div class="my-2">
                <a href="https://wiki.plajer.xyz/minecraft/villagedefense/index.php"><img src="https://i.imgur.com/56Tl4Ep.png" width="50" height="50" class="d-inline-block align-top mx-1" alt="Village Defense Wiki"></a>
                <a href="https://wiki.plajer.xyz/minecraft/buildbattle/index.php"><img src="https://i.imgur.com/JjcaETY.png" width="50" height="50" class="d-inline-block align-top mx-1" alt="Build Battle Wiki"></a>
                <a href="https://wiki.plajer.xyz/minecraft/murdermystery/index.php"><img src="https://i.imgur.com/du1KLwx.png" width="50" height="50" class="d-inline-block align-top mx-1" alt="Murder Mystery Wiki"></a>
            </div>
            <a href='https://plajer.xyz' class='heading-4'>Back to the main command center</a>
        </div>
    </div>
</div>
</body>