<?php
/**
 * questa funzione caricare il file di configfurazione
 * @param key il file da leggere
 * @return Array restituisce un array
 */
function configFile($key)
{
    $file = dirname(__FILE__).'/config-'.$key.'.json';

    if (file_exists($file) === false) {
            echo "Unable to load config from: " . $file . PHP_EOL;
            return;
    }
    return json_decode(file_get_contents($file),true);
}


