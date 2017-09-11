<html lang="nl">
<head>
  <title>Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<form id="register" action="index.php?content=register_send" method="post">
<div class="register">
<div class="container-fluid">
<div class="row">
<div class="col-md-4">
<table class="RegisterPage">
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
        <td>Actievatie Datum (dd-mm-jj):</td>
        <td>
            <input class="textbox"
				   type="date"
                   name="ActievatieDatum"
                   placeholder="..."
                   >
        </td>
    </tr>
        <td><input style="margin-bottom:25px" class="btn" type="submit" value="Registreren"></td>
</table>

</div>
</div>
</div>
</div>
</form>
