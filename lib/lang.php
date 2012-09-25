<?php
if(!isset($root)) die('Direct access is not allowed');

/*
 * language selector
 *
 * Im Ordner /lang für die verschiedenen Sprachen Dateien anlegen (de.php)
 * in diese Datei das array $t['platzhalter'] = "Platzhalter"; füllen und im Template
 * nutzen.
 * Hinweis: Sprachdateien dürfen nur 2 Zeichen lang sein. (de/en/fr/es...)
 */
function init_lang(){
	
	//make $t global
	global $t;
		
	
	if(!isset($_SESSION['lang']) AND !isset($_GET['lang'])){
		// get browser default language
		$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0,2);
			
	}else if(isset($_SESSION['lang']) AND !empty($_SESSION['lang'])){
		$lang = substr(htmlspecialchars($_GET['lang']),0,2);
		
	}else if(isset($_GET['lang']) AND !empty($_GET['lang'])){
		$lang = substr(htmlspecialchars($_GET['lang']),0,2);
	}

	// write language in session
	$_SESSION['lang'] = $lang;
	
	// get available language files in /lang
	$dir = openDir($path["lang"]);
	$ll = array();
	while($file = readDir($dir)){
		if ($file != "." && $file != ".."){
			// check if filetype is php
			$pathinfo = pathinfo($file); 
            $ext = $pathinfo["extension"];  
            if ($ext == "php"){
            	// get first 2 letters of each file (e.g. de/en/fr...)
            	$ll[] = substr($file,0,2);
            }
			
		}
	}
	
	$t = array();
	// check if language file is available for browser language
	if (in_array($lang,$ll)){
		// yes - include it
		include($path["lang"]."/".$lang.".php");
	}else{
		// include default language file (en.php)
		include($path["lang"]."/en.php");
	}
	
}