<?php

	/**
    * @author   Błażej Skrzypniak <blazej@skrzypniak.pl>
    */

	class Content {
		
		protected $lang;
		protected $l;

		/**
		 * GetMenuLink
		 */
		public function getMenuLight () {

			$requestURI = explode('/', strtolower(substr($_SERVER['REQUEST_URI'], 1)));

			$param = '';
			for ($i=0; $i < count($requestURI); $i++) {$param .= '/' . $requestURI[$i];}

			// PAGE/PARAMETERS
			$getParam1 = (string) $requestURI[1];
			$getParam2 = (int) $requestURI[2];

			$rules = [
				["/", $_SESSION['lang']],
				["/login", $_SESSION['lang']],
				["/login/", $_SESSION['lang']],
				["/registration", $_SESSION['lang']],
				["/registration/", $_SESSION['lang']],
				["/panel", $_SESSION['lang']],
				["/panel/", $_SESSION['lang']],
				["/panel/$getParam1/$getParam2", $_SESSION['lang']],
			];

			$found = false;

			foreach ($rules as $url => $info) {
				if ($param == $info[0]) {
					if ($param == '/' or $param == '') {

						$_SESSION['pageSite'] = 'home';

					} elseif ($param == '/login' or $param == '/login/') {	
						
						$_SESSION['pageSite'] = 'login';

					} elseif ($param == '/registration' or $param == '/registration/') {	
						
						$_SESSION['pageSite'] = 'registration';

					} elseif ($param == '/panel') {	

						$_SESSION['pageSite'] = 'panel';

					} elseif ($param == '/panel/'.$getParam1.'/'.$getParam2) {	

						$_SESSION['pageSite'] = 'panel';
						
					}

			        $found = true;
			        break;
			    }
			}

			if (!$found) {$_SESSION['pageSite'] = '';}
			
			return;
			
		}

		/**
		 * GetPage
		 * 
		 * @param mixed $lang
		 * @param mixed $l
		 */
		public function getPage ($lang, $l) {

			$requestURI = explode('/', strtolower(substr($_SERVER['REQUEST_URI'], 1)));

			$param = '';
			for ($i=0; $i < count($requestURI); $i++) {$param .= '/' . $requestURI[$i];}

			// PAGE/PARAMETERS
			$getParam0 = (string) $requestURI[0];
			$getParam1 = (string) $requestURI[1];
			$getParam2 = (int) $requestURI[2];

			$rules = [
				["/", $_SESSION['lang']],
				["/login", $_SESSION['lang']],
				["/login/", $_SESSION['lang']],
				["/registration", $_SESSION['lang']],
				["/registration/", $_SESSION['lang']],
				["/panel", $_SESSION['lang']],
				["/panel/", $_SESSION['lang']],
				["/panel/logout", $_SESSION['lang']],
				["/panel/logout/", $_SESSION['lang']],
				["/panel/$getParam1/$getParam2", $_SESSION['lang']],
			];

			$found = false;

			foreach ($rules as $url => $info) {
				if ($param == $info[0]) {

					$getLang = new Language();

					if ($param == '/' or $param == '') {

						$model = '../app/model/' . $_SESSION['pageSite'] . '.inc.php';
						if (file_exists($model)) {include ('../app/model/' . $_SESSION['pageSite'] . '.inc.php');} else {break;}
						
						$lang = $_SESSION['lang'];
						$l = $getLang->lang($lang);

						include('../app/views/' . $_SESSION['pageSite'] . '/index.php');

					} elseif ($param == '/login' or $param == '/login/') {	
						
						$model = '../app/model/' . $_SESSION['pageSite'] . '.inc.php';
						if (file_exists($model)) {include ('../app/model/' . $_SESSION['pageSite'] . '.inc.php');} else {break;}

						$_SESSION['lang'] = $info[1];
						$lang = $info[1];
						$l = $getLang->lang($lang);

						include('../app/views/' . $_SESSION['pageSite'] . '/index.php');

					} elseif ($param == '/registration' or $param == '/registration/') {	
						
						$model = '../app/model/' . $_SESSION['pageSite'] . '.inc.php';
						if (file_exists($model)) {include ('../app/model/' . $_SESSION['pageSite'] . '.inc.php');} else {break;}

						$_SESSION['lang'] = $info[1];
						$lang = $info[1];
						$l = $getLang->lang($lang);

						include('../app/views/' . $_SESSION['pageSite'] . '/index.php');

					} elseif ($param == '/panel' or $param == '/panel/') {	

						$model = '../app/model/' . $_SESSION['pageSite'] . '.inc.php';
						if (file_exists($model)) {include ('../app/model/' . $_SESSION['pageSite'] . '.inc.php');} else {break;}

						$_SESSION['lang'] = $info[1];
						$lang = $info[1];
						$l = $getLang->lang($lang);

						include('../app/views/' . $_SESSION['pageSite'] . '/index.php');

					} elseif ($param == '/panel/logout' or $param == '/panel/logout/') {	
						
						$_SESSION = array();
						session_destroy();
						session_start();
						$_SESSION['lang'] = $lang;
						header('Location: '.URL);

					} elseif ($param == '/panel/'.$getParam1.'/'.$getParam2) {	
					
						$model = '../app/model/' . $_SESSION['pageSite'] . '.inc.php';
						if (file_exists($model)) {include ('../app/model/' . $_SESSION['pageSite'] . '.inc.php');} else {break;}

						$_SESSION['lang'] = $info[1];
						$lang = $info[1];
						$l = $getLang->lang($lang);

						include('../app/views/' . $_SESSION['pageSite'] . '/index.php');
						
					}

			        $found = true;
			        break;
			    }
			}

			if (!$found) {
				if ($getParam0 == '500') {
					header("HTTP/1.0 500 Internal Server Error");
					$getLang = new Language();
					$lang = $_SESSION['lang'];
					$l = $getLang->lang($lang);
					include('../app/views/500/index.php');
				} else {
					header("HTTP/1.0 404 Not Found");
					$getLang = new Language();
					$lang = $_SESSION['lang'];
					$l = $getLang->lang($lang);
					include('../app/views/404/index.php');
				}
			}
			
			return;
			
		}

	}