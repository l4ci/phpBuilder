<?php snippet('html_head'); ?>
<?php snippet('nav'); ?>

<h1>phpBuilder <?=c::get('pB.version');?></h1>
<p>
	If you can read this you have everything installed corecctly. I think.<br>
	Go on filling your pages with something - they are located in /content.
</p>

<h2>Any questions left?</h2>
<p>
	Check the <a href="<?=c::get('pB.git')?>">github page</a>.<br>
	Or mail me <a href="mailto:<?=c::get('pB.email')?>"><?=c::get('pB.email')?></a>
</p>

<?php snippet('html_foot'); ?>