<?php
/**
 * phpBuilder -- an easy to use toolkit for PHP
 *
 * @version 0.5
 *
 * @author Volker Otto <hello@volkerotto.net>
 * @link https://github.com/l4ci/phpBuilder
 * @copyright Copyright 2009-2013 Volker Otto
 * @license http://www.opensource.org/licenses/mit-license.php MIT License
 * @package phpBuilder
 */

// 	Error Reporting
error_reporting(E_ALL); // off -> error_reporting(0);
ini_set("display_errors", 1);

// Direct Access Protection
$root = $_SERVER['DOCUMENT_ROOT'];

//	Require framework
require_once('kirby.php');

//	Load global config
load('config');

//	Require lib
require_once('lib.php');



//	Connect to DB
$db  = db::connect();
error($db,true);

//	Start Output Buffering
content::start();
s::start();

init_content();


// End output Buffering
content::end(); 
?>