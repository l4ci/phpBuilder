<?php 
/**
 * snippet
 * loads a snippet
 * 
 * @author Volker Otto <hello@volkerotto.net>
 * @link https://github.com/l4ci/phpBuilder
 * @copyright Copyright 2009-2013 Volker Otto
 * @license http://www.opensource.org/licenses/mit-license.php MIT License
 * @package phpBuilder
 * 
 */
function snippet($request){
	
	$source      = c::get('content.site')."/".c::get('snippet');
	$snippets    = dir::read($source);
	$request_php = $request.".php"; // append .php

	// check if snippet file is available
	if (in_array($request_php,$snippets)){
		// yes - include it
		load($source."/".$request);
	}else{
		// no - display error but dont die
		echo "Snippet: \"".$request."\" not found.";
	}
}
?>