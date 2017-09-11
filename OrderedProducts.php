<h1 style="text-align:center;color:black;margin-bottom:40px;"><b>Overzicht Orders</b></h1>


<?php

include ("db_connect.php");
$query = "SELECT ProductNaam, OrderDatum, Prijs, idItems, image FROM
`Product` as p,
`Order` as o,
`OrderRegel` as os,
`Items` as it
WHERE p.idProduct = it.idProduct
AND it.idItems = os.Items
AND os.idOrder = o.idOrder
AND o.idGebruiker = '".$_SESSION["id"]."'";
$result = mysqli_query($connection, $query);
?>
<div>
<table class="tableRented" align="center">
<input class="btn" type="button" 
  onClick="window.print()" 
  value="Print This Page"/>
<tr><th>Product Naam</th><th>Order Datum</th><th>Prijs</th><th>Afbeelding</th><th>Wijzig</th></tr>
<?php while($row = $result->fetch_assoc()){
echo "<tr><td>".$row["ProductNaam"]."</td><td>".$row["OrderDatum"]."</td><td>€".$row["Prijs"]."</td><td><img src=".$row["image"]." height='200' width='150'></td><td>Annuleer Product<a href='index.php?content=do_delete_order&item=".$row["idItems"]."'> 
								<img src='icons/delete.png' alt='delete icon' height='30'></a></td></tr>";}?>

</table>
</div>
