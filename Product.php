<?php
    include('db_connect.php');

    $connection = new mysqli($servername, $username, $password, $dbname);

    if ($connection->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    $id = $_GET["item"];
    $sql = "SELECT * FROM `Product` WHERE `idProduct` = '{$id}'";
    $result = $connection->query($sql);
    $product = $result->fetch_assoc();

    $query_select_product = "SELECT * FROM Items as it, Product as p WHERE it.Status = (SELECT MIN(it.Status)) and p.idProduct = {$product["idProduct"]} AND it.idProduct = p.idProduct ORDER BY it.Status ASC LIMIT 1";
    $result_select_product = $connection->query($query_select_product);
    $product = $result_select_product->fetch_assoc();
    $connection->close();
?>
<h3>Item No.: <?php echo($product['ProductCode']);?></h3>
 <h1><?php echo($product['ProductNaam']);?></h1>
<div class="ProductPerPagina">
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
 <img class="col-md-6" style="margin:20px;" src="<?php echo($product['image']);?>" alt="test" width="auto" height="auto">	
 <h1><div class="col-md-1" style="margin-top:100px;">€<?php echo($product['Prijs']);?></div></h1>	<br><br>
  <a style='color:black;margin-top:100px;' class='col-md-2 btn' href="index.php?content=cartAction&action=addToCart&id=<?php echo $product["idItems"]; ?>">Toevoegen</a>
</div>
</div>
</div>
</div>
<div class="ProductPerPagina" style="margin-top:50px;">
<div class="container-fluid">
<div class="row">
<div class="col-md-12">	
<div style="margin-top:50px; margin-bottom:50px; font-size:20px;"><?php echo($product['Omschrijving']);?></div>
</div>
</div>
</div>
</div>













