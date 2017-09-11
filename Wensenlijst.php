<h1 style="text-align:center;color:black;margin-bottom:40px;"><b>Wensenlijst</b></h1>


<?php

include ("db_connect.php");
$query = "SELECT ProductNaam, Prijs, ProductCode, image FROM
`Product` as p,
`Gebruiker` as g,
`Wensen` as w
WHERE w.Gebruiker = '".$_SESSION["id"]."'
AND w.Product = p.idProduct
AND g.idGebruiker = w.Gebruiker";
$result = mysqli_query($connection, $query);
?>
<div>
<table class="tableRented" align="center">
<td><h3><b>verwijder alle wensen</b></h3><a href='index.php?content=do_delete_wensen'> 
								<img src='icons/delete.png' alt='delete icon' height='30'></a></td>
<tr><th>Product Naam</th><th>Product Code</th><th>Prijs</th><th>Afbeelding</th><th>Wijzig</th></tr>
<?php 
while($row = $result->fetch_assoc()){
	
echo "<tr><td>".$row["ProductNaam"]."</td><td>".$row["ProductCode"]."</td><td>€".$row["Prijs"]."</td><td><img src=".$row["image"]." height='200' width='150'></td><td><a href='index.php?content=cartAction&action=addToCart&id=".$product['idItems']."' class='btn' style='color:black;'>Toevoegen</a></td></tr>";}?>

</table>
</div>
