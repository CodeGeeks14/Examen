<?php

$categorie = $_GET["idCategorie"];

include('db_connect.php');

$connection = mysqli_connect($servername, $username, $password, $dbname);

if ($connection->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



?>

<div id="container">
	<div id="col-md-6">
		
		<?php 

		switch ($categorie) {
			case 6:
				echo("<center><p><h3>Actie Deals</h3></p></center>");
				break;
			
			default:
				
				break;
		}

		?>

		<table class="tableRented" align="center">
			<?php

			//Persoonlijke opdracht les: Bovenaan komen nieuwe films met "Nieuw" en bericht "net toegevoegd"
			//Daaronder de andere films

			$query = "SELECT * FROM Product as p, CategorieProduct as cp where cp.idCategorie = '$categorie' AND cp.idProduct = p.idProduct";
			$result = mysqli_query($connection,$query);
			while($row = $result->fetch_assoc()) {

					$query_select_product = "SELECT * FROM Items as it, Product as p WHERE it.Status = (SELECT MIN(it.Status)) and p.idProduct = {$row["idProduct"]} AND it.idProduct = p.idProduct ORDER BY it.Status ASC LIMIT 1";

					$result_select_product = $connection->query($query_select_product);
				    $product = $result_select_product->fetch_assoc();

				    $dateMovieAdded = strtotime($row['datumToegevoegd']);
				    $dateTodayMin10 = strtotime(date(). '- 30 days');

				    if($dateMovieAdded > $dateTodayMin10){
				    	echo 	 "<table class='product col-md-3'>
								  <tr><td><a href='index.php?content=Product&item=".$row['idProduct']."'><img class='productImg' src=".$row["image"]."></a></td></tr>
								  <tr><td>Item No.:".$row["ProductCode"]."</td></tr>
								  <tr><td style='font-weight:bold;font-size:20px;' >".$row["ProductNaam"]."</td></tr>				    			  
								  <tr><td style='text-align:center;font-size:25px;font-weight:bold;'>€".$row["Prijs"]."</td></tr>
				    			  <tr><td><a href='index.php?content=cartAction&action=addToCart&id=".$product['idItems']."' class='btn' style='color:black;'>Toevoegen</a></td></tr>
								  <tr><td><a href='index.php?content=cartAction&action=addWensen&id=".$product['idItems']."' class='btn' style='color:black;'>Wensenlijst</a></td></tr></table>";
				    }
				}

			$query2 = "SELECT * FROM Product as p, CategorieProduct as cp where cp.idCategorie = '$categorie' AND cp.idProduct = p.idProduct";
			$result2 = mysqli_query($connection,$query2);
			while($row = $result2->fetch_assoc()) {

					$query_select_product = "SELECT * FROM Items as it, Product as p WHERE it.Status = (SELECT MIN(it.Status)) and p.idProduct = {$row["idProduct"]} AND it.idProduct = p.idProduct ORDER BY it.Status ASC LIMIT 1";

					$result_select_product = $connection->query($query_select_product);
				    $product = $result_select_product->fetch_assoc();

				    $dateMovieAdded = strtotime($row['datumToegevoegd']);
				    $dateTodayMin10 = strtotime(date(). '- 30 days');

				    if($dateMovieAdded > $dateTodayMin10){
				    	//Niks doen
				    }
				    else{
				    	echo 	 "<table class='product col-md-3'>
								  <tr><td><a href='index.php?content=Product&item=".$row['idProduct']."'><img class='productImg' src=".$row["image"]."></a></td></tr>
								  <tr><td>Item No.:".$row["ProductCode"]."</td></tr>
								  <tr><td style='font-weight:bold;font-size:20px;' >".$row["ProductNaam"]."</td></tr>				  
								  <tr><td style='text-align:center;font-size:25px;font-weight:bold;color:red;'>Oude prijs €".$row["Actieprijs"]."</td></tr>
								  <tr><td style='text-align:center;font-size:25px;font-weight:bold;'>€".$row["Prijs"]."</td></tr>
								  <tr><td><a href='index.php?content=cartAction&action=addToCart&id=".$product['idItems']."' class='btn' style='color:black;'>Toevoegen</a></td></tr>
								  <tr><td><a href='index.php?content=cartAction&action=addWensen&id=".$product['idItems']."' class='btn' style='color:black;'>Wensenlijst</a></td></tr></table>";
				    }
				} 

			$connection->close(); ?>
		</table>
	</div>
</div>





