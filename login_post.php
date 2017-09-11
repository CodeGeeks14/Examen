<?php

//var_dump($_POST);
		if ( empty($_POST["Email"]) || empty($_POST["Wachtwoord"]))
		{
			echo "U heeft nog geen Email of wachtwoord ingevuld, probeer het opnieuw";
			header("refresh:4;url=index.php?content=login_form");
		}
		else
		{
			include('db_connect.php');

			if ($connection->connect_error) {
				die("Connection failed: " . $connection->connect_error);
			}

			
			$query = "SELECT * FROM Gebruiker as g, Wachtwoord as w, RolPerGebruiker as rpg WHERE rpg.idGebruiker = g.idGebruiker and g.idGebruiker = w.idGebruiker and g.Email = '".$_POST["Email"]."' and w.Wachtwoord = '".$_POST["Wachtwoord"]."';";
			
			$result = mysqli_query($connection, $query);
           // var_dump($result);
            if ( mysqli_num_rows($result) > 0 )
            {

                $record = mysqli_fetch_assoc($result);
                
                $_SESSION["id"] = $record["idGebruiker"];
                $_SESSION["Voornaam"] = $record["Voornaam"];
                $_SESSION["Tussenvoegsel"] = $record["Tussenvoegsel"];
                $_SESSION["Achternaam"] = $record["Achternaam"];
                $_SESSION["Email"] = $record["Email"];

                ?>
                <script>
						setInterval(function(){ window.location = 'index.php'},100);
				</script><?php
            }
            else
            {

                echo "Het door u ingevulde Email en/of wachtwoord is niet bekend, log opnieuw in.";
                ?>
				
				<script language="JavaScript" type="text/javascript">
setTimeout("location.href = 'index.php?content=LoginRegister'",3000); // milliseconds, so 10 seconds = 10000ms
</script><?php
                exit();
            }
		}
?>