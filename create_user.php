<?php

	include("db_connect.php");
?>

<!DOCTYPE html>

<html>
	
	<body>
	
		
		<h3>Registratieformulier</h3>
		<form action="index.php?content=do_create_user" method="post" >
		<table style="margin-left: 30%;" class="register_table update-users-td">
        <tr>
        <td>Voornaam:</td> 
        <td><input class="textBox" type="text" 
                   name="Voornaam"
                   placeholder="..."></td>
    </tr>
    <tr>
        <td>Tussenvoegsel:</td> 
        <td><input class="textBox" type="text" 
                   name="Tussenvoegsel"
                   placeholder="..."></td>
    </tr>
    <tr>
        <td>Achternaam:</td> 
        <td><input class="textBox" type="text" 
                   name="Achternaam"
                   placeholder="..."></td>
    </tr>
    <tr>
        <td>Email:</td> 
        <td><input class="textBox" type="Email" 
                   name="Email"
                   placeholder="..."></td>
    </tr>
    <tr>
        <td>Straatnaam:</td>
        <td>
            <input class="textbox"
                   name="Straat"
                   placeholder="..."
                   >
        </td>
    </tr>
    <tr>
        <td>Huisnummer:</td>
        <td>
            <input class="textbox"
                   name="Huisnummer"
                   placeholder="..."
                   >
        </td>
    </tr>
    <tr>
        <td>Woonplaats:</td>
        <td>
            <input class="textbox"
                   name="Woonplaats"
                   placeholder="..."
                   >
        </td>
    </tr>
    <tr>
        <td>Postcode:</td>
        <td>
            <input class="textbox"
                   name="Postcode"
                   placeholder="..."
                   >
        </td>
    </tr>
	<tr>
        <td>Rekeningnummer:</td>
        <td>
            <input class="textbox"
                   name="Rekeningnummer"
                   placeholder="..."
                   >
        </td>
    </tr>
    <tr>
        <td>Actievatie Datum (dd-mm-jjjj):</td>
        <td>
            <input class="textbox"
				   type="date"
                   name="ActievatieDatum"
                   placeholder="..."
                   >
        </td>
    </tr>
				<td>Userrol:</td>
                <td class="update-users-td">
                    <select name = "userrole">
                        <option value="Beheerder">beheerder</option>
                        <option value="Klant">klant</option>
                        <option value="Baliemedewerker">Admin</option>
                    </select>		
                </td>
            </tr>
        <tr>
        <td></td>
        <td><input style="margin-bottom:25px" class="btn" type="submit" value="Registreren"></td>
</table>
	
		</form>
        <a href="index.php?content=Admincontrol" style="color:white;width:300px;" class="btn">Terug gaan zonder wijzigen</a>
		
		
	</body>
</html>


