<?php
if(!isset($root)) die('Direct access is not allowed');

/**
 * config file
 *
 */

define("AUTOR" , "Volker Otto"); // Your name - obviously 
define("FULLURL" , "http://phpbuilder.webatu.com"); // full url - WITH http://www.blabla.com - NO ending SLASH
 

/**
 * functions
 */
 
#init_google() 
define("GOOGLE" , ""); // Your google analytic code - if you have more than one for your page, leave blank and use function init_google("YOUR-ID")

# bitly()
define("BITLY_LOGIN" , ""); //Your bitly username
define("BITLY_API" , ""); // Your bitly Api key


?>