<?php
/**
 * When enabled in config - show div with serveral information
 * write an error by setting it in s::set('devlog',)
 * @return [type] [description]
 */

function devlog(){
	if(c::get('server.devlog',false) == true){
		echo "<div class='devlog'><h1><small>Devlog v1.0 - <a target='_blank' href='https://github.com/l4ci/phpBuilder'>phpBuilder</a></small></h1><p><small>Change the \"server.devlog = false\" inside the config.php to get rid of me.</small></p>
				<h1 class='visible'>DEVLOG</h1><p>";
		$devlog = s::get('devlog',false);
		if(!$devlog){
			echo "No errors so far.";
		}else{
			if(is_array($devlog)){
				foreach ($devlog as $key => $value) {
					echo "<span class='color1'>". $key . "</span> => <span class='color2'>" . $value . "</span><br>";
				}
			}
		}
		echo "</p><h1>SESSION</h1><p>";
		foreach (s::get() as $key => $value) {
			if($key != 'devlog'){
				echo "<span class='color1'>". $key . "</span> => <span class='color2'>" . $value . "</span><br>";
			}
		}

		echo "</p><h1>GET/POST</h1><p>";
		foreach (r::get() as $key => $value) {
			echo "<span class='color1'>". $key . "</span> => <span class='color2'>" . $value . "</span><br>";
		}
		echo "</p></div>";
	}
}

function write_log($key,$text=false){
	// load errors
	$errors = s::get('devlog',false);
	if($errors == false){
		$errors = array($key => $text);
	}else{
		// append or overwrite new error
		$errors[$key] = $text;
	}
	// save errors
	s::set('devlog',$errors);
}
/**
 * to preserve log even when restarting/deleting sessions
 * use:
 * $log = save_log();
 * // Destroy and restart session
 * load_log($log);
 */
function save_log(){
	// load errors
	$errors = s::get('devlog',false);
	if($errors != false){
		return $errors;
	}	
}

function load_log($errors){
	// is array?
	if(is_array($errors)){
		s::set('devlog',$errors);
	}
}

function clean_log(){
	s::set('devlog',false);
}

function dlog($key,$text=false){
	write_log($key,$text);
}
?>