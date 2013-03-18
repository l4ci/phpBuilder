<?php snippet('html_head'); ?>
<?php snippet('nav'); ?>

<?php
/**
 * error.php
 * 
 * link to the error page with /error?e=some_error_var
 * and define a specific error below.
 * 
 * @author Volker Otto <hello@volkerotto.net>
 * @package phpBuilder
 *  
 */
	$error = get('e');
	switch ($error) {
		case 'not_found':
			echo "<h1>Error</h1>
				  <p>The page you requested could not be found.</p>";
			break;

		case 'welcome':
			echo "<h1>This is your Error-Page</h1>
					<p>Redirect to</p>
					<pre>go('error?e=your_new_error');</pre>
					<p>Then open error.php and define your error message:</p>";
			echo highlight_string(
'case "your_new_error":
	echo "<h1>Your new error</h1>
		<p>Your new error text</p>";
break;',true);
			break;
		
		default:
			echo "<h1>Error</h1>
				  <p>Something went wrong.</p>";
			break;
	}
?>

<?php snippet('html_foot'); ?>