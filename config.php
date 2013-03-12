<?php
if(!isset($root)) die('Direct access is not allowed');
/**
 * config.php
 *
 * Stores all the c:: vars
 * 
 * @package phpBuilder
 * 
 */

// phpBuilder 
c::set('pB.version'				,'0.512');
c::set('pB.git'					,'https://github.com/l4ci/phpBuilder');
c::set('pB.mail'				,'hello@volkerotto.net');

// FOLDERS 
c::set('lib'					,'lib');
c::set('assets'					,'assets');
c::set('content'				,'content');
c::set('content.site'			,c::get('content').'');
c::set('content.snippet'		,c::get('content').'/snippet');

// SQL 
// leave empty when you are not using mysql
c::set('db.host'    			, 'localhost');
c::set('db.user'    			, '');
c::set('db.password'			, '');
c::set('db.name'    			, '');
c::set('db.prefix'  			, '');

// SERVER 
c::set('server.subfolder'		,false); 			// Site running in a subfolder? Define it here: 'subfolder'
c::set('server.error_reporting'	,true); 			// php_error_reporting


// SITE INFORMATION
c::set('site.maintenance'		,false); 			// set to true -> site will always redirect to /maintenance
c::set('site.googleanalytics'	,'UA-XXXXXX-XX'); 	// Your google analytics code
c::set('site.name'				,'Title'); 			// set your global title here
c::get('site.fulldomain'		, ''); 				// full domain with http:// and ending slash
c::get('site.domain'			, ''); 				// domain withouth http:// and withouth ending slash
c::get('site.ssl'				, ''); 				// full domain with https:// and ending slash
?>