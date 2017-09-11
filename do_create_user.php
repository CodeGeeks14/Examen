<?php

include ("db_connect.php");
date_default_timezone_set("Europe/Amsterdam");
$date = date("d-m-Y H:i:s");
$dateRegister = date('Y-m-d');
$key = $date.substr($_POST["Voornaam"],0,3).substr($_POST["Achternaam"],strlen($_POST["Achternaam"])-4,4);

$password = $_POST[password];



$query_Gebruiker = "INSERT INTO `Gebruiker`
(`idGebruiker`,`Voornaam`,`Tussenvoegsel`,`Achternaam`,`Email`,`Straat`,`Huisnummer`,`Woonplaats`,`Postcode`,`Rekeningnummer`,`ActievatieDatum`,`Activation`,`activationKey`)
VALUES (NULL,
'".$_POST[Voornaam]."',
	'".$_POST[Tussenvoegsel]."',
	'".$_POST[Achternaam]."',
	'".$_POST[Email]."',
	'".$_POST[Straat]."',
	'".$_POST[Huisnummer]."',
	'".$_POST[Woonplaats]."',
	'".$_POST[Postcode]."',
	'".$_POST[Rekeningnummer]."',
	'".$_POST[ActievatieDatum]."',
	'".$_POST[Acivation]."',
	'".md5($key)."');";	

//$query2 = "INSERT INTO Wachtwoord 
//(`gebruiker`,`wachtwoord`)
//    VALUES(NULL,
//    '".$_POST[password]."');";
	

$result = mysqli_query($connection, $query_Gebruiker);
$last_id = mysqli_insert_id($connection);
//$result2 - mysqli_query($connection, $query2);
    

$query_Wachtwoord = "INSERT INTO Wachtwoord VALUES('".$last_id."', '".$_POST[password]."');";
mysqli_query($connection, $query_Wachtwoord);

$query_Rol = "INSERT INTO RolPerGebruiker VALUES('".$_POST["userrole"]."', '".$last_id."');";
mysqli_query($connection, $query_Rol);




?>