<?php
if(!isset($root)) die('Direct access is not allowed');

/**
 * config.php
 *
 * Stores all the c:: vars
 * 
 * @author Volker Otto <hello@volkerotto.net>
 * @link https://github.com/l4ci/phpBuilder
 * @copyright Copyright 2009-2013 Volker Otto
 * @license http://www.opensource.org/licenses/mit-license.php MIT License
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

// SITE INFORMATION
c::set('site.wartung'			,false);
c::set('site.googleanalytics'	,'UA-XXXXXX-XX');

c::set('site.name'				,'Title');

?>