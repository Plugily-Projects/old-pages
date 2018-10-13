<?php
setcookie("preferred_default_locale", true, time() + 604800, "/"); //7 day persistent cookie

header("Refresh:0; url=" . $_GET['redirect']);

die();