<html lang="nl">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<form id="login" action="index.php?content=login_post" method="post">
<div class="login">
<div class="container-fluid">
<div class="row">
<div class="col-md-4">
<table class="LoginPage" id="border">
<tr><td><h2 style="text-align:center;">I'm already a customer.</h2></td></tr>
<tr><td>Log in with your email address and password</td></tr>
    <tr>	  		
		<td><input class="textBox" type="email"
				   name="Email"
				   placeholder="Your email address"
				   value="<?php if ( isset ($_GET["Email"]))
							{
								echo $_GET["Email"];
							}
						  ?>">
		</td>
    </tr>
        <tr>
        <td><input class="textBox" type="password" 
                   name="Wachtwoord"
				   placeholder="Your password"></td>
<tr>
<td><a class="btn" style="width:200px;"href="index.php?content=register">Maak Account aan</a></td>
</tr>
    </tr>
        <td><input style="margin-bottom: 25px;" class="btn" type="submit" value="Login"></td>
</table>

</div>
</div>
</div>
</div>
</form>
