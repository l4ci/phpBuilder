<?php
if(!isset($root)) die('Direct access is not allowed');

/**
 * Läd alle PHP Dateien in /lib
 */

$dir = 'lib/';
if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
        while (($file = readdir($dh)) !== false) {
            $pathinfo = pathinfo($file); 
            $ext = $pathinfo["extension"];  
            if ($ext == "php"){
            	require_once "lib/".$file;
            }
        }
        closedir($dh);
    }
}
?>