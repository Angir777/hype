<?php

	/**
    * @author   Błażej Skrzypniak <blazej@skrzypniak.pl>
    */

	if (!version_compare(PHP_VERSION, '7.4.0', '>=')) {
		exit("Fixit requires at least <b>PHP 7.4</b>");
	}

	// URL files
	define('VIEW', 'front');

	// URL path
	$path = 'https://' . $_SERVER['HTTP_HOST'] . '/';
	define('URL', $path);

	// data base settings
	define('DB_PREFIX', 'mycms');

	// name company
	define('NAME_COMPANY', 'Hype');

	// email base settings
	define('EMAIL_COMPANY', 'mail@example.com');