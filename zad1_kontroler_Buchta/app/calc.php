<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';

// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.

// 1. pobranie parametrów

$x = $_REQUEST ['kwota'];
$y = $_REQUEST ['lat'];
$z = $_REQUEST ['procent'];

// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku

// sprawdzenie, czy parametry zostały przekazane
if ( ! (isset($x) && isset($y)&& isset($z) )) {
	//sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
	$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
}

// sprawdzenie, czy potrzebne wartości zostały przekazane
if ( $x == "") {
	$messages [] = 'Nie podano kwoty';
}
if ( $y == "") {
	$messages [] = 'Nie podano lat';
}
if ( $z == "") {
	$messages [] = 'Nie podano procent';
}


//nie ma sensu walidować dalej gdy brak parametrów
if (empty( $messages )) {
	
	// sprawdzenie, czy $x, $y, $z są liczbami całkowitymi
	if (! is_numeric( $x )) {
		$messages [] = 'Pierwsza wartość nie jest liczbą całkowitą';
	}	
	if (! is_numeric( $y )) {
		$messages [] = 'ilość lat nie jest liczbą całkowitą';
	}
	if (! is_numeric( $z )) {
		$messages [] = 'Ilość Procent nie jest liczbą całkowitą';
	}
	//sprawdzenie czy kwota jest mniejsza niz 0;
	if($x<=0 || $y<=0 || $z<=0 )
	{
		$messages [] = 'Liczba nie może być mniejsza niż 0';
	}

}

// 3. wykonaj zadanie jeśli wszystko w porządku

if (empty ( $messages )) { // gdy brak błędów
	
	//konwersja parametrów na int
	$x = intval($x);
	$y = intval($y);
	$z = intval($z);
	
	//wykonanie operacji
	$result = (($x *(($z/100)*$y)*1000)+($x*1000))/($y*12);
	$summary=(($x *(($z/100)*$y)*1000)+($x*1000));
	$odsetki=($x *(($z/100)*$y)*1000);
}

// 4. Wywołanie widoku z przekazaniem zmiennych
// - zainicjowane zmienne ($messages,$x,$y,$z,$result)
//   będą dostępne w dołączonym skrypcie
include 'calc_view.php';