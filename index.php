<?php
	$root = $_SERVER['DOCUMENT_ROOT'];
	ob_start();
	require_once("lib.php");	  	
  	
  	init_lang();
?>
<!doctype html>
<html>
	<head>
	<meta charset="utf-8"/>
	<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge;chrome=1"><![endif]-->
	
	<title></title>
	
	<meta name="robots" content="index, follow">
	<meta name="description" content="">
	<meta name="author" content="">
	
	<link rel="stylesheet/less" type="text/css" href="css/styles.css">
	
	</head>
	<!--[if lt IE 7 ]> <body class="ie6"> <![endif]-->
	<!--[if IE 7 ]>    <body class="ie7"> <![endif]-->
	<!--[if IE 8 ]>    <body class="ie8"> <![endif]-->
	<!--[if IE 9 ]>    <body class="ie9"> <![endif]-->
	<!--[if gt IE 9]>  <body>             <![endif]-->
	<!--[if !IE]><!--> <body>         <!--<![endif]-->
	
		<? init_content(); ?>
		
		<? init_google("UA-11611534-13"); ?>
		<? no_javascript(); ?>
		<?
		/**
		 * Läd alle JS files in /js
		 */
		
		$dir = 'js/';
		if (is_dir($dir)) {
		    if ($dh = opendir($dir)) {
		        while (($file = readdir($dh)) !== false) {
		            $pathinfo = pathinfo($file); 
		            $ext = $pathinfo["extension"];  
		            if ($ext == "js"){
		            	echo "<script src='js/".$file."' type='text/javascript'></script>";
		            }
		        }
		        closedir($dh);
		    }
		}
		?>
	</body>
</html>	
<? ob_end_flush();?>