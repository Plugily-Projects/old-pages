<?php
// the original of this code can be found on:
// http://www.mind-it.info/2010/02/22/a-simple-approach-to-localization-in-php/
function localize($phrase) {
    /* Static keyword is used to ensure the file is loaded only once */
    static $translations = NULL;
    if (is_null($translations)) {
        $lang_file = '/locale/' . explode(',', $_SERVER['HTTP_ACCEPT_LANGUAGE'])[0] . '.json';
        /* If no instance of $translations has occured load the language file */
        if (!file_exists(__DIR__ . $lang_file)) {
            $lang_file = '/locale/en-GB.json';
        }
        $lang_file_content = file_get_contents("https://plajer.xyz/wiki2" . $lang_file);
        /* Load the language file as a JSON object
           and transform it into an associative array */
        $translations = json_decode($lang_file_content, true);
    }
    return $translations[$phrase];
}