<?php
date_default_timezone_set("Europe/Amsterdam");
$date = date("d-m-Y H:i:s");
$dateRegister = date('Y-m-d');
$key = $date.substr($_POST["Voornaam"],0,3).substr($_POST["Achternaam"],strlen($_POST["Achternaam"])-4,4);

$servername = "10.3.1.216";
$username = "offriyk183";
$password = "5zaqw4by5t73vFwqP";
$dbname = "offriyk183_SailTrail";

$connection = new mysqli($servername, $username, $password, $dbname);

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