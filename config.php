<?php
if(!isset($root)) die('Direct access is not allowed');

/**
 * config file
 *
 */

//-----------------------------------------------------------
// GLOBAL 
//----------------------------------------------------------
define("FULLURL" 		, "http://phpbuilder.webatu.com"); // full url - WITH http://www.blabla.com - NO ending SLASH

//-----------------------------------------------------------
// META 
//-----------------------------------------------------------
define("AUTOR" 			, "Volker Otto"); 
define("ROBOTS"			, "index, follow");
define("DESCRIPTION"	, "My personal Website")

//-----------------------------------------------------------
// Paths
// if you make changes to the folder names
//-----------------------------------------------------------
$path = array();
$path["css"] 		= "css";
$path["js"]  		= "js";
$path["lib"] 		= "lib";
$path["content"] 	= "content";
$path["lang"] 		= "lang";
$path["snippet"] 	= "snippet";

//-----------------------------------------------------------
// Functions 	-	used in functions 
//-----------------------------------------------------------
 
#init_google() 
define("GOOGLE" 		, ""); // Your google analytic code - if you have more than one for your page, leave blank and use function init_google("YOUR-ID")

# bitly()
define("BITLY_LOGIN" 	, ""); //Your bitly username
define("BITLY_API" 		, ""); // Your bitly Api key


?>