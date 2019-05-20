<?php
// the original of this code can be found on:
// http://www.mind-it.info/2010/02/22/a-simple-approach-to-localization-in-php/
function localize($phrase) {
    /* Static keyword is used to ensure the file is loaded only once */
    static $translations = NULL;
    if (is_null($translations)) {
        $locale = fixLocaleName(explode(',', $_SERVER['HTTP_ACCEPT_LANGUAGE'])[0]);
      if(isset($_COOKIE['preferred_locale'])) {
        $locale = $_COOKIE['preferred_locale'];
      }

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"https://plajer.xyz/localeservice/fetch.php");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "pass=localeservice&type=Pages&locale=" . $locale);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $server_output = curl_exec($ch);

        //use default locale if not found
        if($server_output == "" || isset($_COOKIE["preferred_default_locale"])) {
            $locale = "en-GB";
            curl_setopt($ch, CURLOPT_URL,"https://plajer.xyz/localeservice/fetch.php");
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, "pass=localeservice&type=Pages&locale=" . $locale);

            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $server_output = curl_exec($ch);
        }

        /* Load the language file as a JSON object
           and transform it into an associative array */
        $translations = json_decode($server_output, true);
    }
    return $translations[$phrase];
}

function fixLocaleName($locale) {
    $locale = str_replace("_", "-", $locale);

    if(strlen($locale) == 2) {
	return $locale . "-" . strtoupper($locale);
    }
    return $locale;
}

function getLocaleFlag() {
  $locale = fixLocaleName(explode(',', $_SERVER['HTTP_ACCEPT_LANGUAGE'])[0]);
  if(isset($_COOKIE['preferred_locale'])) {
    $locale = $_COOKIE['preferred_locale'];
  }
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL,"https://plajer.xyz/localeservice/fetch.php");
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, "pass=localeservice&type=Pages&locale=" . $locale);

  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

  $server_output = curl_exec($ch);

  //use default locale if not found
  if($server_output == '') {
    $locale = 'en-GB';
  }
  return "https://plajer.xyz/shared/flags/" . fixLocaleFlag(strtolower(explode("-", $locale)[1])) . ".png";
}

function fixLocaleFlag($locale) {
  switch ($locale) {
    case 'en':
      return 'gb';
    case 'zh':
      return 'cn';
    default:
      return $locale;
  }
}