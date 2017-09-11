<?php
$userrole = 'Beheerder';
include('security.php');
include("db_connect.php");
	
	
	$query_Gebruiker = "SELECT * FROM `Gebruiker` WHERE `idGebruiker` =".$_GET["id"];
	$query_Rol = "SELECT * FROM `RolPerGebruiker` WHERE `gebruiker` = ".$_GET["id"];
	$result_Gebruiker = mysqli_query($connection, $query_Gebruiker);
	$result_Rol= mysqli_query($connection, $query_Rol);
	
	$record = mysqli_fetch_assoc($result_Gebruiker);
	$record2 = mysqli_fetch_assoc($result_Rol);

?>

 
<!DOCTYPE html>



<html>
	
	<body>
	<br>
	

		
		<h3>Update gegevens</h3>
		<form action="index.php?content=do_user_update" method="post" >
		<input style="visibility:hidden;" type="text" name="id" value="<?php echo $record["idGebruiker"]; ?>">
		<table class="update-users-table">
			<tr>
				<td class='update-users-td'>Voornaam:</td> 
				<td class='update-users-td'><input type="text" 
						   name="Voornaam"
						   value= "<?php echo $record["Voornaam"]; ?>"</td>
			</tr>
			<tr>
				<td class='update-users-td'>Tussenvoegsel:</td> 
				<td class='update-users-td'><input type="text" 
						   name="Tussenvoegsel"
						   value= "<?php echo $record["Tussenvoegsel"]; ?>"</td>
			</tr>
			<tr>
				<td class='update-users-td'>Achternaam:</td> 
				<td class='update-users-td'><input type="text" 
						   name="Achternaam"
						   value= "<?php echo $record["Achternaam"]; ?>"</td>
			</tr>
			<tr>
				<td class='update-users-td'>Email:</td> 
				<td class='update-users-td'><input type="email" 
						   name="Email"
						   value= "<?php echo $record["Email"]; ?>"></td>
			</tr>
							<tr class='update-users-td'>
						<td>Straatnaam:</td>
						<td>
							<input class="textbox"
								   name="Straat"
								   placeholder="..."
								   value= "<?php echo $record["Straat"]; ?>"
								   >
						</td>
					</tr>
					<tr class='update-users-td'>
						<td>Huisnummer:</td>
						<td>
							<input class="textbox"
								   name="Huisnummer"
								   placeholder="..."
								   value= "<?php echo $record["Huisnummer"]; ?>"
								   >
						</td>
					</tr>
					<tr class='update-users-td'>
						<td>Woonplaats:</td>
						<td>
							<input class="textbox"
								   name="Woonplaats"
								   placeholder="..."
								   value= "<?php echo $record["Woonplaats"]; ?>"
								   >
						</td>
					</tr>
					<tr class='update-users-td'>
						<td>Postcode:</td>
						<td>
							<input class="textbox"
								   name="Postcode"
								   placeholder="..."
								   value= "<?php echo $record["Postcode"]; ?>"
								   >
						</td>
					</tr class='update-users-td'>
					<tr class='update-users-td'>
						<td>Rekeningnummer:</td>
						<td>
							<input class="textbox"
								   name="Rekeningnummer"
								   placeholder="..."
								   value= "<?php echo $record["Rekeningnummer"]; ?>"
								   >
						</td>
    </tr>
            <tr>
				<td class='update-users-td'>Userrole</td>
				<td class='update-users-td'>
                    <select name = "userrole">
                        <option value= "<?php echo $record["userrole"]; ?>"></option>
                        <option value="Beheerder">Beheerder</option>
						<option value="Klant">Klant</option>
						<option value="Admin">Admin</option>
                    </select>
                </td>
            </tr>
			
			
			
			<tr>
				<td class='update-users-td'></td>
				<td class='update-users-td'><input class="btn" style="width:200px;" type="submit" value="Wijzig gegevens"></td>
		</table>
	
		</form>
			<br>
			
	<a href="index.php?content=Admincontrol" style="color:black">
		<img src='icons/back.png' 
									 alt='back icon' 
									 height='30'></a>
	</body>
</html>