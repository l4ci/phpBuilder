<?php
if(!isset($root)) die('Direct access is not allowed');

/**
 * Läd alle Lib Dateien
 */

$dir = $path["lib"].'/';
if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
        while (($file = readdir($dh)) !== false) {
            $pathinfo = pathinfo($file); 
            $ext = $pathinfo["extension"];  
            if ($ext == "php"){
            	require_once $path["lib"]."/".$file;
            }
        }
        closedir($dh);
    }
}
?>