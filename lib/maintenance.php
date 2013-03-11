<?php 
	function maintenance(){
		$get = c::get('site.maintenance',false);
		if($get){
			load(c::get('content.site')."/maintenance");
			exit;
		}
	}
?>