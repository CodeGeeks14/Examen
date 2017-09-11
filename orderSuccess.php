<!DOCTYPE html>
<html lang="nl">
<head>
  <title>Products Marklin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="ProductPage">
<div class="container-fluid">
<div class="row">
<div style="font-size:20px;" class="col-md-12">
<h1><b>Bedankt voor je bestelling!</b></h1><br>
<img style="width:100%; margin-bottom:20px;" src="img/sailrail-78393416.jpg"><br>
Via e-mail houden wij je op de hoogte van de status van je bestelling. Ook kan je inloggen op je persoonlijke account waar je je bestelling kunt wijgen.<br><br>
<div class="col-md-2">
<?php 
include("db_connect.php");
if(isset($_SESSION["id"]))
                { 
					echo"<a href='index.php?content=OrderedProducts' class='btn' style='color:black;'>Orders</a>";			
				}
else			{
					echo"<a href='index.php?content=LoginRegister' class='btn' style='color:black;'>Inloggen</a>";
				}			
?>
</div>
<br><br><br><br>

Wij gaan meteen met je bestelling aan de slag als deze is betaald. Indien je hebt gekozen voor een overboeking kan je het te betalen bedrag overmaken
op rekening: NL44 INGB 0009632492 t.n.v. SailRail in Amsterdam. Wij wensen je alvast veel plezier met je bestelling en zien je graag eens terug op onze website!
<br><br>

Groet,<br>
Team SailRail

</div>
</div>
	</div>
	</div>	
	
</body>
</html>
