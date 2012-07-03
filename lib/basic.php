<?php
if(!isset($root)) die('Direct access is not allowed');

/*
 * content selector
 *
 * Im Ordner /content für den unterschiedlichen Content Dateien anlegen (home.php).
 * Der Dateiname ist gleichzeitig auch die url unter der sie dann erreichbar ist:
 * home.php -> ?c=home
 */	
function init_content(){

	//make $t global - to make language files working
	global $t;
	
	// get url-link
	if(isset($_GET['c']) AND !empty($_GET['c'])){
		// make it safe
		$content = htmlspecialchars($_GET['c']);
		
		// get available content files in /content
		$dir = openDir("content");
		$cc = array();
		while($file = readDir($dir)){
			if ($file != "." && $file != ".."){
				// delete php ending
				$helper = explode(".php",$file);
				$cc[] = $helper[0];
			}
		}
		// check if content file is available
		if (in_array($content,$cc)){
			// yes - include it
			include("content/".$content.".php");
		}else{
			// include default content file
			include("content/home.php");
		}
	}else{
		include("content/home.php");
	}	
}
/**
 * error
 *
 * handles error messages
 * @param	string	$msg Fehlermeldung
 * @param	bool	$die abbruch oder nicht
 */
function error($msg,$die=false){
	if($die){
		die($msg);
	}else{
		echo $msg;
	}
}

/**
 * snippet
 *
 * bindet ein snippet aus dem /snippet ordner ein
 * @param	string	Name des Snippets ohne Dateiendung
 */
function snippet($s){
	//make $t global - to make language files working
	global $t;

	// get available snippet files in /snippet
	$dir = openDir("snippet");
	$cc = array();
	while($file = readDir($dir)){
		if ($file != "." && $file != ".."){
			// delete php ending
			$helper = explode(".php",$file);
			$cc[] = $helper[0];
		}
	}
	// check if snippet file is available
	if (in_array($s,$cc)){
		// yes - include it
		include("snippet/".$s.".php");
	}else{
		error("Snippet ".$s." is missing!");
	}
}
?>