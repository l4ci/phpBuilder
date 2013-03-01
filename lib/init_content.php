<?php 
/**
 * init_content
 * loads the content files
 * 
 * @author Volker Otto <hello@volkerotto.net>
 * @link https://github.com/l4ci/phpBuilder
 * @copyright Copyright 2009-2013 Volker Otto
 * @license http://www.opensource.org/licenses/mit-license.php MIT License
 * @package phpBuilder
 * 
 */
function init_content(){
	// if there is an GET['a'] -> if not a=home
	if (r::is_get(get('a'))){
		$req_content = get('a', 'home');
	}else{
		$req_content = "home";
	}
	$req_content     = str::urlify($req_content);
	$req_content_php = $req_content.".php";
	$content_files   = dir::read(c::get('content.site'));
	
	// check if content file is available
	if (in_array($req_content_php,$content_files)){
		// yes - include it
		load(c::get('content.site')."/".$req_content);
	}else{
		go('error?e=not_found');
	}
}
?>