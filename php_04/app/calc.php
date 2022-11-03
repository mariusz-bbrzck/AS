<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';

//załaduj Twig
require_once _ROOT_PATH.'/vendor/Autoload.php';

// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.

// 1. pobranie parametrów

$x = isset($_REQUEST['x']) ? $_REQUEST['x'] : '';
$y = isset($_REQUEST['y']) ? $_REQUEST['y'] : '';
$op = isset($_REQUEST['op']) ? $_REQUEST['op'] : '';
if ( ! (isset($x)  && isset($y) && isset($op))) {
	//sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
	$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
}

// sprawdzenie, czy potrzebne wartości zostały przekazane
if ( $x == "") {
	$messages [] = 'Nie podano liczby 1';
}
if ( $y == "") {
	$messages [] = 'Nie podano liczby 2';
}

//nie ma sensu walidować dalej gdy brak parametrów
if (empty( $messages )) {
	
	// sprawdzenie, czy $x i $y są liczbami całkowitymi dodatnimi
	if (! is_numeric( $x )|| $x <= 0) {
		$messages [] = 'Kwota nie jest liczbą dodatnią całkowitą';
	}
	
	if (! is_numeric( $y )|| $y <= 0) {
		$messages [] = 'Lata nie są liczbą dodatnią całkowitą';
	}	

	if (! is_numeric( $op ) || $op <= 0) {
	$messages [] = 'Oprocentowanie nie jest dodatnią liczbą całkowitą';
	}
}

// 3. wykonaj zadanie jeśli wszystko w porządku

if (empty ( $messages )) { // gdy brak błędów
	
	//konwersja parametrów na int
	$x = intval($x);
	$y = intval($y);
	$op = floatval($op);
	
	//wykonanie operacji
	$rata = $x/($y*12);
	$result = round($rata*($op/100)+$rata,2);
}

// 4. Przygotowanie szablonu i zmiennych

//start Twig
//Twig_Autoload::register();
//załaduj szablony (wskazanie folderów z potrzebnymi szablonami)
$loader = new Twig_Loader_Filesystem(_ROOT_PATH.'/templates'); //szablon ogólny
$loader->addPath(_ROOT_PATH.'/app'); //szablon strony kalkulatora
//skonfiguruj folder cache
$twig = new Twig_Environment($loader, array(
  //  'cache' => _ROOT_PATH.'/twig_cache',
));

//przygotowanie zmiennych dla szablonu
$variables = array(
	'app_url' => _APP_URL,
	'root_path' => _ROOT_PATH,


);
if (isset($x)) $variables ['x'] =  $x;
if (isset($y)) $variables ['y'] = $y;
if (isset($op)) $variables ['op'] = $op;
if (isset($result)) $variables ['result'] = $result;
if (isset($messages)) $variables ['messages'] = $messages;
if (isset($infos)) $variables ['infos'] = $infos;



// 5. Wywołanie szablonu (wygenerowanie widoku)
echo $twig->render('calc.html', $variables);