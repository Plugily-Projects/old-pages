<?php
//saves url content to cache file and returns cached one till it's outdated
function getCachedContent($url, $postFields, $cachedFileName, $cacheTime = 240){

    // Generate the cache version if it doesn't exist or it's too old!
    if(!file_exists(__DIR__ . '/' . $cachedFileName . '.cache') OR (filemtime(__DIR__ . '/' . $cachedFileName. 'cache') < (time() - $cacheTime))) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$url);
        if(!is_null($postFields)) {
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
        }

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $server_output = curl_exec($ch);
        file_put_contents(__DIR__ . '/' . $cachedFileName . '.cache', $server_output, LOCK_EX);

        return $server_output;
    }

    return file_get_contents(__DIR__ . '/' . $cachedFileName . '.cache');
}