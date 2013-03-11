<?php 
if(!isset($root)) die('Direct access is not allowed');

/**
 * lib.php
 *
 * Includes all the required functions from /lib
 * 
 * @author Volker Otto <hello@volkerotto.net>
 * @package phpBuilder
 * 
 */

// read all files
$files = dir::read(c::get('lib'));

foreach ($files as $file => $value) {
	// cut the .php extension
	$value = substr($value, 0, -4);
	// include it
	load(c::get('lib')."/".$value);
}

?>