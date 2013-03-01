<?php 
if(!isset($root)) die('Direct access is not allowed');

/**
 * lib.php
 *
 * Includes all the required functions from /lib
 * 
 * @author Volker Otto <hello@volkerotto.net>
 * @link https://github.com/l4ci/phpBuilder
 * @copyright Copyright 2009-2013 Volker Otto
 * @license http://www.opensource.org/licenses/mit-license.php MIT License
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