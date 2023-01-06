<?php

    /**
    * Language: PL
    *
    * @author       Błażej Skrzypniak <blazej@skrzypniak.pl>
    */
	
	$pageSite = $_SESSION['pageSite'];
	$l = [];

	// buttons
	$l['button_start'] = 'Strona główna';
	$l['button_login'] = 'Zaloguj';
	$l['button_logout'] = 'Wyloguj';
	$l['button_registration'] = 'Dołącz do nas';
	$l['button_panel'] = 'Panel';

	// urls
	$l['url_start'] = 'home';
	$l['url_login'] = 'login';
	$l['url_logout'] = 'logout';
	$l['url_registration'] = 'registration';
	$l['url_panel'] = 'panel';

	// footer
	$l['footer_1'] = date("Y").' | Aplikacja dla HYPE';
	$l['footer_2'] = 'polski';
	$l['footer_3'] = 'english';
	$l['footer_4'] = 'Język';

	// cookies alert
	$l['cookies_text'] = 'To jest aplikacja testowa. Testuj i baw się dobrze!';
	$l['cookies_button_ok'] = 'OK!';

	// 404
	$l['e404_1'] = 'Ups! Strona nie znaleziona :(';
	$l['e404_2'] = 'Możesz nie widzieć tej strony, ponieważ:';
	$l['e404_3'] = '<li>Treść jest nieaktualna,</li><li>Twoja przeglądarka nie odświeżyła jeszcze naszej mapy witryny,</li><li>Adres został wprowadzony nieprawidłowo.</li>';
	$l['e404_4'] = 'Przejdź do ';
	$l['e404_5'] = 'strony głównej';

	// 500
	$l['e500_1'] = 'Ups! Coś nie działa :(';
	$l['e500_2'] = 'Przejdź do ';
	$l['e500_3'] = 'strony głównej';

	// pagination
	$l['pagination_page'] = 'strona';

	// hello
	$l['hello'] = 'Witaj';

	switch($pageSite){
		case 'home':
			$l['page_title'] = 'HYPE aplikacja zadania';
			$l['back_link'] = 'Powrót';
			$l['c_1'] = 'Witamy na naszej stronie internetowej :)';
			$l['c_2'] = 'Zaloguj się lub zarejestruj, aby w pełni korzystać z aplikacji.';
			$l['c_3'] = 'Login';
			$l['c_4'] = 'Darmowa rejestracja';
		break;
		case 'panel':
			$l['page_title'] = 'Panel';
			$l['back_link'] = 'Powrót';
			$l['c_1'] = 'Panel';
			$l['c_2'] = 'Id';
			$l['c_3'] = 'Nazwa użytkownika';	
		break;
		case 'login':
			$l['page_title'] = 'Login';
			$l['back_link'] = 'Powrót';
			$l['c_1'] = 'Login';
			$l['c_2'] = 'Login';
			$l['c_3'] = 'Hasło';	
			$l['c_4'] = 'Login';	
			$l['c_5'] = 'Nieprawidłowy login lub hasło.';
			$l['c_6'] = 'Wystąpił nieoczekiwany błąd!';
		break;
		case 'registration':
			$l['page_title'] = 'Rejestracja';
			$l['back_link'] = 'Powrót';
			$l['c_1'] = 'Zarejestruj się';
			$l['c_2'] = 'Login';
			$l['c_3'] = 'Hasło';	
			$l['c_4'] = 'Powtórz hasło';	
			$l['c_5'] = 'Email';	
			$l['c_6'] = 'Istnieje już użytkownik o podanym loginie!';
			$l['c_7'] = 'Istnieje już użytkownik o podanym adresie email!';
			$l['c_8'] = 'Hasła nie są identyczne!';
			$l['c_9'] = 'Nieprawidłowy format adresu email!';
			$l['c_10'] = 'Login musi mieć minimum 5 znaków!';
			$l['c_11'] = 'Hasło musi mieć minimum 5 znaków!';
			$l['c_12'] = 'Wystąpił nieoczekiwany błąd!';
		break;
		default:
			$l['page_title'] = 'HYPE aplikacja zadania';
			$l['back_link'] = 'Powrót';
			$l['c_1'] = 'Witamy na naszej stronie internetowej :)';
			$l['c_2'] = 'Zaloguj się lub zarejestruj, aby w pełni korzystać z aplikacji.';
			$l['c_3'] = 'Login';
			$l['c_4'] = 'Darmowa rejestracja';
		break;
	}