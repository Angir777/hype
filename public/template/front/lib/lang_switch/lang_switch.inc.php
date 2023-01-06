<?php

	/**
    * @author   Błażej Skrzypniak <blazej@skrzypniak.pl>
    */

	session_start();

	// set the selected language
	if ($_POST['langSwitch'] == TRUE) {
		// change the language
		$_SESSION['lang'] = $_POST['lang'];
	}