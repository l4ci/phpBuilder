<?php 
/**
 * snippet
 * loads a snippet from snippet folder in the content folder
 * 
 * @author Volker Otto <hello@volkerotto.net>
 * @package phpBuilder
 * 
 */
function snippet($request){
	
	$source      = c::get('content.snippet');
	$snippets    = dir::read($source);

	// check if snippet file is available
	if (in_array($request.".php",$snippets)){
		// yes - include it
		load($source."/".$request);
	}else{
		// no - display error but dont die
		echo "Snippet: \"".$request."\" not found.";
	}
}
?>