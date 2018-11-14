<?php
include_once('cache.php');

// the original of this code can be found on:
// http://www.mind-it.info/2010/02/22/a-simple-approach-to-localization-in-php/
function localize($phrase) {
    /* Static keyword is used to ensure the file is loaded only once */
    static $translations = NULL;
    if (is_null($translations)) {
        $locale = explode(',', $_SERVER['HTTP_ACCEPT_LANGUAGE'])[0];

        $server_output = getCachedContent('https://plajer.xyz/localeservice/fetch.php', 'pass=localeservice&type=Pages&locale=' . $locale,
            'locale_' . $locale);

        //use default locale if not found
        if($server_output == '' || isset($_COOKIE['preferred_default_locale'])) {
            $locale = 'en-GB';
            $server_output = getCachedContent('https://plajer.xyz/localeservice/fetch.php', 'pass=localeservice&type=Pages&locale=' . $locale,
                'locale_' . $locale);
        }

        /* Load the language file as a JSON object
           and transform it into an associative array */
        $translations = json_decode($server_output, true);
    }
    return $translations[$phrase];
}