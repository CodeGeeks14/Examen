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
<div class="col-md-12">

<img style="width:100%; margin-bottom:20px;" src="img/Marklin-wagon.jpg">
</div>
</div>
<div class="row">
<div class="col-md-12" style="font-size:25px;">
<hr>
With H0 Scale Märklin as the first manufacturer has made sure that the dream of having your own model railroad is easier to fulfill: Sturdy enough to withstand the rough, everyday routine in the playroom, fascinating worlds of play can be created with H0 (1:87 scale) that enable operations close to reality.
<hr>
</div>
</div>
<div class="row" style="margin-top:20px;">
<div class="categorie col-md-3"><img style="width:100%; height:100%;" src="img/Locomotive.PNG"></div>
<div class="categorie col-md-3"><img style="width:100%; height:100%;" src="img/Wagons.PNG"></div>
<div class="categorie col-md-3"><img style="width:100%; height:100%;" src="img/Sets.PNG"></div>
<div class="categorie col-md-3"><img style="width:100%; height:100%;" src="img/Accessories.PNG"></div>

	</div>
<div class="row" style="margin-bottom:10px;">
<div class="col-md-12">
<div class="filterBar">
<div class="dropdown">
<button style="height:50px; width:100px;" onclick="myFunction()" class="dropbtn">Filter</button>
<button style="height:50px; width:100px; margin-left:900px" onclick="" class="dropbtn">Sorting</button>
<div id="myDropdown" class="dropdown-content">
<a href="#">Link 1</a>
<a href="#">Link 2</a>
<a href="#">Link 3</a>
  </div>	
</div>
</div>
</div>
</div>
<?php 
		switch ($Categorie) {
			case 'Stoom':
				echo("<center><p><h3>Stoom locomotive</h3></p></center>");
				break;
			case 'Diesel':
				echo("<center><p><h3>Diesel locomotive</h3></p></center>");
				break;
			case 'Elektrisch':
				echo("<center><p><h3>Elektrische locomotive</h3></p></center>");
				break;
			
			default:
				
				break;
		}

		?>
<table class="tableRented" align="center">

			<?php
					$query = "SELECT * FROM Product";
					$result = mysqli_query($connection,$query);
					while($row = $result->fetch_assoc()) {

					$query_select_product = "SELECT * FROM Items as it, Product as p WHERE it.Status = (SELECT MIN(it.Status)) and p.idProduct = {$row["idProduct"]} AND it.idProduct = p.idProduct ORDER BY it.Status ASC LIMIT 1";

					$result_select_product = $connection->query($query_select_product);
				    $product = $result_select_product->fetch_assoc();
					if($query_select_product){
				    	echo 	 "<table class='product col-md-3'>
								  <tr><td><a href='index.php?content=Product&item=".$row['idProduct']."'><img class='productImg' src=".$row["image"]."></a></td></tr>
								  <tr><td>Item No.:".$row["ProductCode"]."</td></tr>
								  <tr><td style='font-weight:bold;font-size:20px;' >".$row["ProductNaam"]."</td></tr>				    			  
								  <tr><td style='text-align:center;font-size:25px;font-weight:bold;'>€".$row["Prijs"]."</td></tr>
				    			  <tr><td><a href='index.php?content=cartAction&action=addToCart&id=".$product['idItems']."' class='btn' style='color:black;'>Toevoegen</a></td></tr>
								  <tr><td><a href='index.php?content=cartAction&action=addWensen&id=".$product['idItems']."' class='btn' style='color:black;'>Wensenlijst</a></td></tr></table>";
					}
					}
					?>
		</table>
	</div>
	</div>	
	
</body>
</html>
<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
