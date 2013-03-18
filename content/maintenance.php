<?php snippet('html_head'); ?>
<?php snippet('nav'); ?>



<?php if(c::get('site.maintenance',false) == true): ?>
	<h1>Maintenance</h1>
	<p>Site is currently down for maintenance - please come back later.</p>
<?php else: ?>
	<h1>Maintenance</h1>
	<p>This is your maintenance page - when enabled in config.php your whole site will redirect here.</p>
	<p>Enable it by setting:</p>
	<pre>c::set('site.maintenance' ,true); </pre>
<?php endif; ?>

<?php snippet('html_foot'); ?>