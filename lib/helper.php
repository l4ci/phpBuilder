<?php
if(!isset($root)) die('Direct access is not allowed');

/**
 * go
 *
 * leitet einen um, falls header schon abgesendet wurde, per js oder html
 */
function go($url){
	if (!headers_sent()){
		// header noch nicht gesendet - header umleitung
        header('Location: '.$url); 
        exit;
    }else{
    	// header bereits gesendet - javascript und html umleitung
        echo '<script type="text/javascript">';
        echo 'window.location.href="'.$url.'";';
        echo '</script>';
        echo '<noscript>';
        echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
        echo '</noscript>'; 
        exit;
    }
}

/**
 * cut
 *
 * vereinfachtes substr
 */
function cut($string,$chars=100){
	$string = substr($string, 0, $chars);
	return $string;
}

/**
 * urlify 
 *
 * creates nice urls
 * echo string_to_underscore_name("13: inside movie films```''''---\//\Bye!?");
 * Output: 13_inside_movie_films_bye
 *
 * @param  string  $text The unsafe string
 * @return string  The safe string
 */
function urlify($text) {
	$text = trim($text);
    $text = strtolower($text);
    $text = str_replace('ä', 'ae', $text);
    $text = str_replace('ö', 'oe', $text);
    $text = str_replace('ü', 'ue', $text);
    $text = str_replace('ß', 'ss', $text);
    $text = preg_replace('/[\'"]/', '', $text);
    $text = preg_replace('/[^a-zA-Z0-9]+/', '_', $text);
    $text = strtolower(trim($text, '_'));
    return $text;
}

/** 
* Checks for valid email address
* 
* @param  string  $email
* @return boolean
*/
function email($email) {
	$regex = '/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i';
	return (preg_match($regex, $email)) ? true : false;
}

/** 
* Checks for valid URL
* 
* @param  string  $url
* @return boolean
*/
function url($url) {
	$regex = '/^(https?|ftp|rmtp|mms|svn):\/\/(([A-Z0-9][A-Z0-9_-]*)(\.[A-Z0-9][A-Z0-9_-]*)+)(:(\d+))?\/?/i';
	return (preg_match($regex, $url)) ? true : false;
}
?>