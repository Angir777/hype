<?php

    /**
    * Language: EN
    *
    * @author       Błażej Skrzypniak <blazej@skrzypniak.pl>
    */
	
	$pageSite = $_SESSION['pageSite'];
	$l = [];

	// buttons
	$l['button_start'] = 'Home';
	$l['button_login'] = 'Login';
	$l['button_logout'] = 'Logout';
	$l['button_registration'] = 'Join us';
	$l['button_panel'] = 'Panel';

	// urls
	$l['url_start'] = 'home';
	$l['url_login'] = 'login';
	$l['url_logout'] = 'logout';
	$l['url_registration'] = 'registration';
	$l['url_panel'] = 'panel';

	// footer
	$l['footer_1'] = date("Y").' | Application for HYPE';
	$l['footer_2'] = 'polski';
	$l['footer_3'] = 'english';
	$l['footer_4'] = 'Language';

	// cookies alert
	$l['cookies_text'] = 'This is a test application. Test and have fun!';
	$l['cookies_button_ok'] = 'OK!';

	// 404
	$l['e404_1'] = 'Oops! Page not found :(';
	$l['e404_2'] = 'You may not be able to see this page because:';
	$l['e404_3'] = '<li>The content is out of date,</li><li>Your browser has not refreshed our sitemap yet,</li><li>The address was entered incorrectly.</li>';
	$l['e404_4'] = 'Go to ';
	$l['e404_5'] = 'home page';

	// 500
	$l['e500_1'] = 'Oops! Something\'s not working :(';
	$l['e500_2'] = 'Go to ';
	$l['e500_3'] = 'home page';

	// pagination
	$l['pagination_page'] = 'page';

	// hello
	$l['hello'] = 'Hello';

	switch($pageSite){
		case 'home':
			$l['page_title'] = 'HYPE task application';
			$l['back_link'] = 'Back';
			$l['c_1'] = 'Welcome to our website :)';
			$l['c_2'] = 'Log in or register to take full advantage of the application.';
			$l['c_3'] = 'Login';
			$l['c_4'] = 'Free registration';
		break;
		case 'panel':
			$l['page_title'] = 'Panel';
			$l['back_link'] = 'Back';
			$l['c_1'] = 'Panel';
			$l['c_2'] = 'Id';
			$l['c_3'] = 'Username';	
		break;
		case 'login':
			$l['page_title'] = 'Login';
			$l['back_link'] = 'Back';
			$l['c_1'] = 'Login';
			$l['c_2'] = 'Username';
			$l['c_3'] = 'Password';	
			$l['c_4'] = 'Login';	
			$l['c_5'] = 'Incorrect login or password.';
			$l['c_6'] = 'An unexpected error occurred';
		break;
		case 'registration':
			$l['page_title'] = 'Registration';
			$l['back_link'] = 'Back';
			$l['c_1'] = 'Register';
			$l['c_2'] = 'Username';
			$l['c_3'] = 'Password';	
			$l['c_4'] = 'Confirm password';	
			$l['c_5'] = 'Email';	
			$l['c_6'] = 'There is already a user with the given username!';
			$l['c_7'] = 'There is already a user with the given email address!';
			$l['c_8'] = 'The passwords are not identical!';
			$l['c_9'] = 'Invalid email address format!';
			$l['c_10'] = 'Username must be at least 5 characters long!';
			$l['c_11'] = 'The password must be at least 5 characters long!';
			$l['c_12'] = 'An unexpected error occurred';
		break;
		default:
			$l['page_title'] = 'HYPE task application';
			$l['back_link'] = 'Back';
			$l['c_1'] = 'Welcome to our website :)';
			$l['c_2'] = 'Log in or register to take full advantage of the application.';
			$l['c_3'] = 'Login';
			$l['c_4'] = 'Free registration';
		break;
	}