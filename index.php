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
 
// Require lib
require_once('lib.php');
// Load global config
load('config');

// Initialize Protect
helper_protect(false);
// Error Reporting
helper_error_report(true);

// Connect to DB
$db  = db::connect();
error($db,true);

// Start Output Buffering
content::start();
// Start Session
s::start();

// Initialize Content
init_content();

// End output Buffering
content::end(); 
?>