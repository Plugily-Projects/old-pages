<?php
include_once('cache.php');

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

    $server_output = getCachedContent('https://api.plajer.xyz/locale/fetch.php', 'pass=localeservice&type=Pages&locale=' . $locale,
      'locale_' . $locale);

    //use default locale if not found
    if($server_output == '' || isset($_COOKIE['preferred_default_locale'])) {
      $locale = 'en-GB';
      $server_output = getCachedContent('https://api.plajer.xyz/locale/fetch.php', 'pass=localeservice&type=Pages&locale=' . $locale,
        'locale_' . $locale);
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
  $server_output = getCachedContent('https://api.plajer.xyz/locale/fetch.php', 'pass=localeservice&type=Pages&locale=' . $locale,
    'locale_' . $locale);

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