<?php
if(!isset($root)) die('Direct access is not allowed');

/**
 * google_analytics
 *
 * Bindet den Google Analytics Code ein - Variable ID für den TrackingCode
 */
function init_google($id = GOOGLE){
	echo "<script type='text/javascript'>
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', '".$id."']);
			_gaq.push(['_trackPageview']);
			(function() {
		    	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		    })();
		  </script>";
}

/**
 * addthis
 *
 * Bindet den addThis Code ein
 */
function init_addthis(){
	echo '<!-- AddThis Button BEGIN -->
		<div class="addthis_toolbox addthis_default_style ">
		<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
		<a class="addthis_button_tweet"></a>
		<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
		</div>
		<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=xa-4fd4bc737b74e394"></script>
		<!-- AddThis Button END -->';
}


/**
 * bit.ly url
 *
 * Based on code from David Walsh – http://davidwalsh.name/bitly-php 
 */
function bitly($url,$format = 'xml',$version = '2.0.1'){
	//Set up account info
	$bitly_login = BITLY_LOGIN;
	$bitly_api = BITLY_API;
	//create the URL
	$bitly = 'http://api.bit.ly/shorten?version='.$version.'&longUrl='.urlencode($url).'&login='.$bitly_login.'&apiKey='.$bitly_api.'&format='.$format;
	//get the url
	$response = file_get_contents($bitly);
	//parse depending on desired format
	if(strtolower($format) == 'json'){
		$json = @json_decode($response,true);
		return $json['results'][$url]['shortUrl'];
	}else{
		$xml = simplexml_load_string($response);
		return 'http://bit.ly/'.$xml->results->nodeKeyVal->hash;
	}
}

/**
 * Get either a Gravatar URL or complete image tag for a specified email address.
 *
 * @param string $email The email address
 * @param string $s Size in pixels, defaults to 80px [ 1 - 512 ]
 * @param string $d Default imageset to use [ 404 | mm | identicon | monsterid | wavatar ]
 * @param string $r Maximum rating (inclusive) [ g | pg | r | x ]
 * @param boole $img True to return a complete IMG tag False for just the URL
 * @param array $atts Optional, additional key/value attributes to include in the IMG tag
 * @return String containing either just a URL or a complete image tag
 * @source http://gravatar.com/site/implement/images/php/
 */
function get_gravatar( $email, $s = 80, $d = 'mm', $r = 'g', $img = false, $atts = array() ) {
	$url = 'http://www.gravatar.com/avatar/';
	$url .= md5( strtolower( trim( $email ) ) );
	$url .= "?s=$s&d=$d&r=$r";
	if ( $img ) {
		$url = '<img src="' . $url . '"';
		foreach ( $atts as $key => $val )
			$url .= ' ' . $key . '="' . $val . '"';
		$url .= ' />';
	}
	return $url;
}

/**
 * no javascript
 */
function no_javascript(){
	echo '<noscript>
	  For full functionality of this site it is necessary to enable JavaScript.
	  Here are the <a href="http://www.enable-javascript.com/" target="_blank">
	  instructions how to enable JavaScript in your web browser</a>.
	</noscript>';
}
?>