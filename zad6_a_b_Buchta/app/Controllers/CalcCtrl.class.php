<?php


namespace app\controllers;
use app\forms\CalcForm;
use app\transfer\CalcResult;


class CalcCtrl {

	private $msgs;   //wiadomości dla widoku
	private $form;   //dane formularza (do obliczeń i dla widoku)
	private $resulte; //inne dane dla widoku

	/** 
	 * Konstruktor - inicjalizacja właściwości
	 */
	public function __construct(){
		//stworzenie potrzebnych obiektów
		
		$this->form = new CalcForm();
		$this->resulte = new CalcResult();
	}
	
	/** 
	 * Pobranie parametrów
	 */
	public function getParams(){
		$this->form->x = getFromRequest('x');
		$this->form->y = getFromRequest('y');
		$this->form->z = getFromRequest('z');
	}
	
	/** 
	 * Walidacja parametrów
	 * @return true jeśli brak błedów, false w przeciwnym wypadku 
	 */
	public function validate() {
		// sprawdzenie, czy parametry zostały przekazane
		if (! (isset ( $this->form->x ) && isset ( $this->form->y ) && isset ( $this->form->z ))) {
			// sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
			return false; //zakończ walidację z błędem
		}
		
		// sprawdzenie, czy potrzebne wartości zostały przekazane
		if ($this->form->x == "") {
			getMessages()->addError('Nie podano kwoty');
		}
		if ($this->form->y == "") {
			getMessages()->addError('Nie podano ile lat');
		}
                if ($this->form->z == "") {
			getMessages()->addError('Nie podano ile procent');
		}
		
		// nie ma sensu walidować dalej gdy brak parametrów
		if (! getMessages()->isError()) {
			
			// sprawdzenie, czy $x i $y są liczbami całkowitymi
			if (! is_numeric ( $this->form->x )) {
				getMessages()->addError('Kwota nie jest liczbą całkowitą');
			}
			
			if (! is_numeric ( $this->form->y )) {
				getMessages()->addError('dIlość lat nie jest liczbą całkowitą');
			}
                        if (! is_numeric ( $this->form->z )) {
				getMessages()->addError('Ilość procent nie jest liczbą całkowitą');
			}
		}
		
		return ! getMessages()->isError();
	}
	
	/** 
	 * Pobranie wartości, walidacja, obliczenie i wyświetlenie
	 */
	public function process(){

		$this->getparams();
		
		if ($this->validate()) {
				
			//konwersja parametrów na int
			$this->form->x = intval($this->form->x);
			$this->form->y = intval($this->form->y);
                        $this->form->z = intval($this->form->z);
			getMessages()->addInfo('Parametry poprawne.');
				
			//wykonanie operacji
			
			$this->resulte->result = (($this->form->x*(($this->form->z/100)*$this->form->y)*1000) +($this->form->x*1000))/ ($this->form->y*12);
			$this->resulte->summary = (($this->form->x*(($this->form->z/100)*$this->form->y)*1000) +($this->form->x*1000));		
			$this->resulte->odsetki = ($this->form->x*(($this->form->z/100)*$this->form->y)*1000);	
			
				
			
			
			getMessages()->addInfo('Wykonano obliczenia.');
		}
		
		$this->generateView();
	}
	
	
	/**
	 * Wygenerowanie widoku
	 */
	public function generateView(){
	
		
		
		getSmarty()->assign('page_title','Przykład 05');
		getSmarty()->assign('page_description','Obiektowość. Funkcjonalność aplikacji zamknięta w metodach różnych obiektów. Pełen model MVC.');
		getSmarty()->assign('page_header','Obiekty w PHP');
				
		
		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('res',$this->resulte);
                
		
		getSmarty()->display('CalcView.tpl');
	}
        public function generateIntro(){
	
		
		
		getSmarty()->assign('page_title','Przykład 05');
		getSmarty()->assign('page_description','Obiektowość. Funkcjonalność aplikacji zamknięta w metodach różnych obiektów. Pełen model MVC.');
		getSmarty()->assign('page_header','Obiekty w PHP');
		
                
		getSmarty()->display('Intro.tpl');
	}
        
}
