<?php
require_once dirname(__FILE__).'/../config.php';

// KONTROLER strony kalkulatora

// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.

//ochrona kontrolera - poniższy skrypt przerwie przetwarzanie w tym punkcie gdy użytkownik jest niezalogowany
include _ROOT_PATH.'/app/security/check.php';

//pobranie parametrów
function getParams(&$x,&$y,&$op){
	$x = isset($_REQUEST['x']) ? $_REQUEST['x'] : null;
	$y = isset($_REQUEST['y']) ? $_REQUEST['y'] : null;
	$op = isset($_REQUEST['op']) ? $_REQUEST['op'] : null;	
}

//walidacja parametrów z przygotowaniem zmiennych dla widoku
function validate(&$x,&$y,&$op,&$messages){
	// sprawdzenie, czy parametry zostały przekazane
	if ( ! (isset($x) && isset($y) && isset($op))) {
		// sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
		// teraz zakładamy, ze nie jest to błąd. Po prostu nie wykonamy obliczeń
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
	if (! is_numeric( $x )|| $x <= 0) {
		$messages [] = 'Kwota nie jest liczbą dodatnią całkowitą';
	}
	
	if (! is_numeric( $y )|| $y <= 0) {
		$messages [] = 'Lata nie są liczbą dodatnią całkowitą';
	}	

	if (! is_numeric( $op ) || $op <= 0) {
	$messages [] = 'Oprocentowanie nie jest dodatnią liczbą całkowitą';
	}
	if (! is_numeric( $y ) || $y > $x) {
		$messages [] = 'Kwota nie może być niższa niż liczba lat';
		}

		else return true;

	
}
if (empty ( $messages )) {

function process(&$x,&$y,&$op,&$messages,&$result){
	global $role;
	
	//konwersja parametrów na int
	$x = intval($x);
	$y = intval($y);
	
	//wykonanie operacji

	$x = intval($x);
	$y = intval($y);
	$op = floatval($op);
	
	//wykonanie operacji
	if (($role == 'admin')||($role == 'user')){
		$result = $x - $y;
	} else {
		$messages [] = 'Tylko administrator, lub użytkownik może obliczać raty !';
	
	$rata = $x/($y*12);
	$result = round($rata*($op/100)+$rata,2);
	}
}
}


//definicja zmiennych kontrolera
$x = null;
$y = null;
$op = null;
$result = null;
$messages = array();

//pobierz parametry i wykonaj zadanie jeśli wszystko w porządku
getParams($x,$y,$op);
if ( validate($x,$y,$op,$messages) ) { // gdy brak błędów
	process($x,$y,$op,$messages,$result);
}

// Wywołanie widoku z przekazaniem zmiennych
// - zainicjowane zmienne ($messages,$x,$y,$op,$result)
//   będą dostępne w dołączonym skrypcie
include 'calc_view.php';