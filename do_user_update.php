
<?php
	$userrole = "Admin";
//include('security.php');
	 
	
	include_once("db_connect.php");
	
	$query = "UPDATE `Gebruiker` 
			  SET 	 `Voornaam` 		= '".$_POST["Voornaam"]."',
					 `Tussenvoegsel` 	= '".$_POST["Tussenvoegsel"]."',
					 `Achternaam` 		= '".$_POST["Achternaam"]."',
					 `Email` 			= '".$_POST["Email"]."',
					 `Straat` 			= '".$_POST["Straat"]."',					 
					 `Huisnummer` 		= '".$_POST["Huisnummer"]."',					 
					 `Woonplaats` 		= '".$_POST["Woonplaats"]."',					 
					 `Postcode` 		= '".$_POST["Postcode"]."',					 
					 `Rekeningnummer` 		= '".$_POST["Rekeningnummer"]."'				 
			  WHERE  `idGebruiker` 				= ".$_POST['id'].";";
var_dump($query);
    $query2 = "UPDATE `RolPerGebruiker` 
                SET `Rol` = '".$_POST["userrole"]."' 
                WHERE `idGebruiker` = ".$_POST["id"].";";

				//var_dump($query2);
				exit();
    mysqli_query($connection, $query2);
	mysqli_query($connection, $query) or die("Query-fout: ".mysqli_error($connection));

	?><script language="JavaScript" type="text/javascript">
			setTimeout("location.href = 'index.php?content=Admincontrol'",100); // milliseconds, so 10 seconds = 10000ms
</script>