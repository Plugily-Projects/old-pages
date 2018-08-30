<?php
setcookie("preferred_default_locale", true, time() + 30, "/");

echo "<html><meta http-equiv='refresh' content='0;url='" . $_GET['redirect'] . "></html>";