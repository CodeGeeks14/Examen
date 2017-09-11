<?php
date_default_timezone_set("Europe/Amsterdam");
$date = date("d-m-Y H:i:s");
$dateRegister = date('Y-m-d');
$key = $date.substr($_POST["Voornaam"],0,3).substr($_POST["Achternaam"],strlen($_POST["Achternaam"])-4,4);

include('db_connect.php');

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

else{
$query = "INSERT INTO `Order`
(`Opmerking`)
VALUES ('".$_POST[opmerking]."');";
	
	$result = mysqli_query($connection, $query) or die (mysqli_error($connection));
	}


?>