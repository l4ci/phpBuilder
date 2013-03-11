<?php 
/**
 * init_content
 * loads the content files on an ?a=request or /request
 * 
 * @author Volker Otto <hello@volkerotto.net>
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
	$content_files   = dir::read(c::get('content.site'));
	
	// check if content file is available
	if (in_array($req_content.".php",$content_files)){
		// yes - include it
		load(c::get('content.site')."/".$req_content);
	}else{
		go('error?e=not_found');
	}
}
/**
 * Connect and Select SQL Database
 */
function init_sql(){
	if ( 
		(c::get('db.host',false) 		!= false) && 
		(c::get('db.user',false) 		!= false) && 
		(c::get('db.password',false) 	!= false) && 
		(c::get('db.name',false) 		!= false) 
	   ){
		// Connect to DB
		$db  = db::connect();
		error($db,true);
	}
}
?>