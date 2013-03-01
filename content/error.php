<?php snippet('html_head'); ?>

<?php
/**
 * error.php
 * 
 * link to the error page with /error?e=some_error_var
 * and define a specific error below.
 * 
 * @author Volker Otto <hello@volkerotto.net>
 * @link https://github.com/l4ci/phpBuilder
 * @copyright Copyright 2009-2013 Volker Otto
 * @license http://www.opensource.org/licenses/mit-license.php MIT License
 * @package phpBuilder
 *  
 */
	$error = get('e');
	switch ($error) {
		case 'not_found':
			echo "<h1>Error</h1>
				  <p>The page you requested could not be found.</p>";
			break;
		
		default:
			echo "<h1>Error</h1>
				  <p>Something went wrong.</p>";
			break;
	}
?>

<?php snippet('html_foot'); ?>