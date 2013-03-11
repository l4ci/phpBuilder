<?php
/**
 * phpBuilder -- an easy to use toolkit for PHP
 *
 * @version 0.51
 *
 * @author Volker Otto <hello@volkerotto.net>
 * @link https://github.com/l4ci/phpBuilder
 * @copyright Copyright 2009-2013 Volker Otto
 * @license http://www.opensource.org/licenses/mit-license.php MIT License
 * @package phpBuilder
 */
 
// Init Protection
$root = $_SERVER['DOCUMENT_ROOT'];

// Require kirby
require_once('kirby.php');

// Load global config
load('config');

// Require lib
require_once('lib.php');

// Run basic functions
helper_error_report();
maintenance();

// Sql
init_sql();

// Start Output Buffering
content::start();
// Start Session
s::start();

// Initialize Content
init_content();

// End output Buffering
content::end(); 
?>