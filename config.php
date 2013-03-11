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

// SQL CONFIG
c::set('db.host'    			, 'localhost');
c::set('db.user'    			, '');
c::set('db.password'			, '');
c::set('db.name'    			, '');
c::set('db.prefix'  			, '');

// FOLDER CONFIG
c::set('lib'					,'lib');
c::set('assets'					,'assets');
c::set('content'				,'content');
c::set('content.site'			,c::get('content').'');
c::set('content.snippet'		,c::get('content').'/snippet');

// SERVER CONFIG
c::set('server.subfolder'		,false);
c::set('server.error_reporting'	,true);


// SITE INFORMATION
c::set('site.maintenance'		,false);
c::set('site.googleanalytics'	,'UA-XXXXXX-XX');
c::set('site.name'				,'Title');
c::get('site.fulldomain'		, '');
c::get('site.domain'			, '');
c::get('site.ssl'				, '');
?>