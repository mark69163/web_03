
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<style>
		.piros {color: red;}
		p {text-align: center;}
	</style>
	<body>
	<?php
		//szerver oldali ellenőrzés példa
		echo "<pre>";
		print_r($_POST);
		echo "</pre>";
		
		$kimenet = "Születési dátum: {$_POST['szulev']}.{$_POST['szulho']}.{$_POST['szulnap']}.<br>";
		
		$kimenet.= "Súly: ";
		if(isset($_POST['suly']))
			$kimenet.= $_POST['suly']." - ".($_POST['suly']+30);
		else
			$kimenet.= "<span class='piros'> Hiba: Nem adta meg a súlyt.</span>";
		$kimenet.= "<br>";
			
		$kimenet.= "Név: {$_POST['nev']}";
		if(!isset($_POST['nev']) || strlen($_POST['nev']) < 8 ||  strlen($_POST['nev']) > 20)
		{
			$kimenet.= "<span class='piros'> Hiba: Hiányzó vagy helytelen név.</span>";
		}
		$kimenet.= "<br>";
	
		$re = '/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/';
		$kimenet.= "E-mail: {$_POST['email']}";
		if(!isset($_POST['email']) || !preg_match($re,$_POST['email']) || strlen($_POST['email']) > 40)
		{
			$kimenet.= "<span class='piros'> Hiba: Hiányzó vagy túl hosszú e-mail.</span>";
		}
		$kimenet.= "<br>";
	
		$kimenet.= "Üzenet: {$_POST['szoveg']}";
		if(!isset($_POST['szoveg']) || strlen($_POST['szoveg']) < 20)
		{
			$kimenet.= "<span class='piros'> Hiba: Hiányzó vagy helytelen az üzenet hossza.</span>";
		}
		$kimenet.= "<br>";
	
		echo $kimenet;
	?>
	<p><a href="../index.php">Kattintson ide további regisztrációk rögzítéséhez!</a></p>
	</body>
</html>
