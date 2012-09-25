<?php
/**
 * phpBuilder
 *
 * @package 	phpBuilder
 * @version 	0.7
 * @author 		Volker Otto <hello@volkerotto.net>
 * @link 		https://github.com/l4ci/phpBuilder
 *
 */

	$root = $_SERVER['DOCUMENT_ROOT'];
	ob_start();
		
	require_once("config.php");
	require_once("lib.php");	  	
	  	
	init_lang();
?>
<!doctype html>
<html>
	<head>
	<meta charset="utf-8"/>
	<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge;chrome=1"><![endif]-->
	
	<title><?=TITLE?></title>
	
	<meta name="robots" content="<?=ROBOTS?>">
	<meta name="description" content="<?=DESCRIPTION?>">
	<meta name="author" content="<?=AUTOR?>">
	
	<link rel="stylesheet/css" type="text/css" href="<?=FULLURL?>/<?=$path["css"]?>/style.css">
	
	</head>
	<!--[if lt IE 7 ]> <body class="ie6"> <![endif]-->
	<!--[if IE 7 ]>    <body class="ie7"> <![endif]-->
	<!--[if IE 8 ]>    <body class="ie8"> <![endif]-->
	<!--[if IE 9 ]>    <body class="ie9"> <![endif]-->
	<!--[if gt IE 9]>  <body>             <![endif]-->
	<!--[if !IE]><!--> <body>         <!--<![endif]-->
		
		<? ie6_countdown(); ?>
		<? no_javascript(); ?>

		<? init_content(); ?>
		
		<? init_google("UA-11611534-13"); ?>
		
		<? init_js(); ?>

	</body>
</html>	
<? ob_end_flush();?>