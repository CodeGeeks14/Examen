<!DOCTYPE html>
<html lang="nl">
<head>
  <title>SessionBar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="SessionBar">
<hr></hr>   <?php
				
				
			include("db_connect.php");
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
				$_SESSION["userrole"] = "";
				//var_dump($record);
                $rolQuery = "SELECT Rol as userrole from RolPerGebruiker where idGebruiker = ".$record["idGebruiker"];
                $result = mysqli_query($connection, $rolQuery) or die(mysqli_error($connection));
                foreach($result as $row){
                  $_SESSION['userrole'][count($_SESSION['userrol'])] = $row['userrole'];
                    var_dump($row['userrole']);
                }
                for($i = 0; $i < count($_SESSION['userrol']); $i++){
                    echo $_SESSION['userrole'][$i];
                } ?>
                <script>
						setInterval(function(){ window.location = 'index.php'},100);
				</script><?php
            }
                 if(isset($_SESSION["id"]))
                { 
                echo		
                            "<p style='color:black;font-size:35px;'>Hallo: ".$_SESSION["Voornaam"]." ".$_SESSION["Tussenvoegsel"]." ".$_SESSION["Achternaam"]."
							<a href='index.php?content=OrderedProducts' class='button'><span class='glyphicon glyphicon-inbox'></span></a>";
							//var_dump($_SESSION['userrole']);
							for($i = 0; $i <= count($_SESSION['userrole']); $i++){
								//echo $_SESSION['userrole'][$i];
							}
				}
					function hasRole($role){
					  session_start();
					  require("db_connect.php");
					  $query = "SELECT * FROM RolPerGebruiker WHERE Rol = '{$role}' AND idGebruiker = {$_SESSION['id']}";
					  $result = mysqli_query($connection, $query);
					  $numRows = mysqli_num_rows($result);
						if($numRows > 0){
						  return true;
						}
						else{
						  return false;
						}
					  }
				if(hasRole("Admin")){
					echo '<a style="color:white;font-size:20px;width:200px;text-align:center;" href="index.php?content=Admincontrol" class="btn">Admin Control</a>';
				}
                ?>
<hr></hr>
</div>
</body>
</html>