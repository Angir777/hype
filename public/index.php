<?php

	/**
    * @author   Błażej Skrzypniak <blazej@skrzypniak.pl>
    */

	header('Content-Type:text/html;charset=utf-8');

	require_once ('../app/init.php');														// load functions app
	require_once ('vendor/autoload.php');													// load scripts composer
	
	ob_start();
	
	$showPage = new Content();																// create content
	$showPage->getMenuLight();	
	$lang = $_SESSION['lang'];																// load general language
	$l = $getLang->lang($lang);																// load content - menu light
	require_once ('template/' . VIEW . '/header.inc.php');									// load header page
	$showPage->getPage($lang, $l);															// load content - main page
	require_once ('template/' . VIEW . '/footer.inc.php');									// load footer page

	ob_end_flush();