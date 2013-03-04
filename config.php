<?php

helper_protect();

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
c::set('content.site'			,'content');

// SERVER CONFIG
c::set('server.dev'				,true);
c::set('server.subfolder'		,false);

// SITE INFORMATION
c::set('site.maintenance'		,false);
c::set('site.googleanalytics'	,'UA-XXXXXX-XX');
c::set('site.name'				,'Title');

?>