<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';

// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.

//ochrona kontrolera
include _ROOT_PATH.'/app/security/check.php';

// 1. pobranie parametrów

function getpar(&$x,&$y,&$z,)
	{

		$x = isset($_REQUEST ['kwota']) ? $_REQUEST ['kwota'] : null ;
		$y = isset($_REQUEST ['lat']) ? $_REQUEST ['lat'] : null;
		$z = isset($_REQUEST ['procent']) ? $_REQUEST ['procent'] : null;
	}

// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku


function validate(&$x,&$y,&$z,&$messages)
{
	global $role;
	// sprawdzenie, czy parametry zostały przekazane
	if ( ! (isset($x) && isset($y)&& isset($z) )) {
		//sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
		return false;
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

	if(count ($messages) != 0) return false;

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

	//ograniczenia dla user
	if ($role == 'user' && $x>50)
	{

		$messages []='Użytkownik może zabrać kredyt maksymalnie na 50 tysięcy';
	}


	if (count ( $messages ) != 0) return false;
	else return true;

	
}
// 3. wykonaj zadanie jeśli wszystko w porządku

function process(&$x,&$y,&$z,&$messages,&$result,&$summary,&$odsetki)
{
		global $role;
	
	//konwersja parametrów na int
	$x = intval($x);
	$y = intval($y);
	$z = intval($z);

	$result = (($x *(($z/100)*$y)*1000)+($x*1000))/($y*12);
	$summary=(($x *(($z/100)*$y)*1000)+($x*1000));
	$odsetki=($x *(($z/100)*$y)*1000);
	
	//wykonanie operacji
	if($role =='admin')
	{
		$result = (($x *(($z/100)*$y)*1000)+($x*1000))/($y*12);
		$summary=(($x *(($z/100)*$y)*1000)+($x*1000));
		$odsetki=($x *(($z/100)*$y)*1000);
	}else
	if ($role == 'user' && $x<=50)
	{
		$result = (($x *(($z/100)*$y)*1000)+($x*1000))/($y*12);
		$summary=(($x *(($z/100)*$y)*1000)+($x*1000));
		$odsetki=($x *(($z/100)*$y)*1000);
	}else
	{
		$messages []='Użytkownik może zabrać kredyt maksymalnie na 50 tysięcy';
	}
}

getpar($x,$y,$z);
$messages = array();


if(validate($x,$y,$z,$messages))
{
	
	process($x,$y,$z,$messages,$result,$summary,$odsetki);

}

// 4. Wywołanie widoku z przekazaniem zmiennych
// - zainicjowane zmienne ($messages,$x,$y,$z,$result)
//   będą dostępne w dołączonym skrypcie
include 'calc_view.php';