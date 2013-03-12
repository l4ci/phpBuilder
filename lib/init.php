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
	if(get('a',null) != null){
		$req_content = get('a', 'home');
	}else{
		$req_content = "home";
	}
	$req_content     = str::urlify($req_content);
	$content_files   = dir::read(c::get('content.site'));
	
	if (in_array($req_content.".php",$content_files)){
		load(c::get('content.site')."/".$req_content);
	}else{
		go('error?e=not_found');
	}
}

/**
 * Connect and Select SQL Database if config vars are set
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