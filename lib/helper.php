<?php
/**
 * helper.php
 * Various helper functions starting with helper_(function_name)
 *
 * @author Volker Otto <hello@volkerotto.net>
 * @package phpBuilder
 * 
 */

/**
  * error_report
  *
  * @param boolean status set true = error_reporting: on;
  */
function helper_error_report($status=false){
	if ($status === true){
		error_reporting(E_ALL);
		ini_set("display_errors", 1);
	}else{
		error_reporting(0);
	}
}

/**
  * protect
  *
  * @param boolean is_root set false: not root document - no direct acces
  */
function helper_protect($is_root=false) {
	global $root;
	if ($is_root === false) {
		// Direct Access Protection
		$root = $_SERVER['DOCUMENT_ROOT'];
	}else{
		if(!isset($root)) die('Direct access is not allowed');
	}
}
?>