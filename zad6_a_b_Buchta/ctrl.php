<?php
require_once 'init.php';


switch ($action) {
	default : 
	   
		$ctrl = new app\controllers\CalcCtrl();
		$ctrl->generateIntro ();
	break;
	case 'wynik' :
		
		$ctrl = new app\controllers\CalcCtrl();
		$ctrl->process ();
	break;
        case 'licz' :
		
		$ctrl = new app\controllers\CalcCtrl();
		$ctrl->generateView ();
	break;
	
}
