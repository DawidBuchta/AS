<?php require_once dirname(__FILE__) .'/../config.php';?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
	<title>Kalkulator</title>
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
<title>Kalkulator</title>
</head>
<body>
<div style="width:90%; margin: 2em auto;">
	<a href="<?php print(_APP_ROOT); ?>/app/inna_chroniona.php" class="pure-button">kolejna chroniona strona</a>
	<a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a>
</div>



<?php 
 print('<div style="width:90%; margin: 2em auto;">Zalogowany jako: <b> '.$role.'</b> </div>')
 ?>


<div style="width:90%; margin: 2em auto;">
<form action="<?php print(_APP_ROOT);?>/app/calc.php" method="post">

	<label for="id_kwota">Kwota w tysiacach: </label>
	<input style=" width : 3em" id="id_kwota" type="text" name="kwota" value="<?php isset($x) ? print($x): ''; ?>" /><br />

	<label for="id_lat">ile lat? </label>
	<input style="margin-left: 90px; margin-top: 10px; margin-bottom: 10px;width : 3em" id="id_lat" type="text" name="lat" value="<?php isset($y) ? print($y): ''; ?>" /><br />

	<label for="id_procent">ile procent? </label>
	<input style="margin-left: 55px; width : 3em" id="id_procent" type="text" name="procent" value="<?php isset($z) ? print($z): ''; ?>" /><br />

	<input type="submit" value="Oblicz" />
</form>	

<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin-top: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>
<?php if (isset($summary)){ ?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
<?php echo 'Całość wynosi  : '.round($summary,2); ?>
</div>
<?php } ?>
<?php if (isset($odsetki)){ ?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
<?php echo 'Odsetki  : '.round($odsetki,2); ?>
</div>
<?php } ?>

<?php if (isset($result)){ ?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
<?php echo 'Rata miesieczna wynosi : '.round($result,2); ?>
</div>
<?php } ?>
</div>
</body>
</html>