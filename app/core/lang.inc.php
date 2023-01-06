<?php

	/**
    * @author   Błażej Skrzypniak <blazej@skrzypniak.pl>
    */

	// language for app on start
	if (!isset($_SESSION['lang'])) {$_SESSION['lang'] = 'en';}

	class Language {

		/**
		 * Lang
		 * 
		 * @param mixed $lang
		 */
		public function lang($lang) {
		    require_once('template/' . VIEW . '/lang/lang_' . $lang . '.inc.php');
		    return $l;
		}

	}
	
	$getLang = new Language();