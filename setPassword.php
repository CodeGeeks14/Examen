<?php
   if(isset($_POST["submit"])) {
   // var_dump($_POST);
    $result = strcmp($_POST["password"], $_POST["check_password"]);
    if($result == 0) {
       
	   include('db_connect.php');

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
        
        $query = "INSERT INTO Wachtwoord (`idGebruiker`,`Wachtwoord`) VALUES ('".$_POST["id"]."', '".$_POST["password"]."');";
        
        $result = mysqli_query($connection, $query);
        
        if($result) {
            echo "Uw wachtwoord is succesvol gewijzigd. U wordt doorgestuurd naar de inlogpagina.";
            ?><script>
    window.location = 'index.php?content=LoginRegister';
</script> <?php
        }
        else
        {
            //var_dump($result);
            "Er is een probleem opgetreden met het instellen van uw wachtwoord. 
             Neem contact op met systeembeheer via info@yoranvderve.pe.hu.php 
             U wordt doorgestuurd naar de startpagaina";
             header("refresh:5;url=index.php?content=homepage");
        }
    }
    else
    {
       // var_dump($result);
        echo ("De wachtwoorden zijn niet gelijk. Probeer het opnieuw!");  	 
        header("refresh:3;url=index.php?content=activation&id=".$_POST["id"]."&pw=".$_POST["pw"]);
    }
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Activatie</title>
	</head>
	<body>
	
		
		<h3>Wachtwoord</h3>
		<form class="table" action="index.php?content=setPassword" method="post" >
		<table>
			<tr>
				<td>Vul hier uw wachtwoord in:</td> 
				<td><input type="password" 
						   name="password"></td>				
			</tr>
			<tr>
				<td>Vul nogmaals uw wachtwoord in:</td> 
				<td><input type="password" 
						   name="check_password"></td>				
			</tr>									
			<tr>
				<td><input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>"></td>
				<td><input type="hidden" name="pw" value="<?php echo $_GET["pw"]; ?>"></td>
				<td><input type="submit" name="submit" value="Opslaan"></td>
		</table>
	
		</form>
		
		
	</body>
</html>