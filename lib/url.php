<?php
/**
 * Liefert die aktuelle URL aus der config.php
 * @param  boolean $http 
 * @param  boolean $ssl  
 * @return string        
 */
function url($http=true,$ssl=false){
	if($http){
		return c::get('site.fulldomain');
	}else if($ssl){
		return c::get('site.ssl');
	}else{
		return c::get('site.domain');	
	}
}
?>