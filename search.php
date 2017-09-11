<div class="searchWrapper">
 <div class="searchResults">
<?php
if(isset($_GET['query']) && $_GET['query'] != ""){
  $search = $_GET['query'];
  $properSearch = "%".$search."%";
  if($getProducts = mysqli_prepare($connection, "SELECT distinct (p.idProduct), ProductNaam, Prijs FROM Product as p WHERE p.productNaam LIKE ?;")){
    mysqli_stmt_bind_param($getProducts, 's', $properSearch);
    mysqli_stmt_execute($getProducts);
    mysqli_stmt_bind_result($getProducts, $productID, $productName, $productPrice);
	mysqli_stmt_store_result($getProducts);
	$numRows = mysqli_stmt_num_rows($getProducts);
    if($numRows == 0){
      echo "<h3 class='row col-md-12' style='text-align: center'> geen resultaten voor &#39;" .$search."&#39;</h3>";
    }
    else if($numRows == 1){
      echo "<h3 class='row col-md-12' style='text-align: center'> ". $numRows . " resultaat voor &#39;" .$search."&#39;</h3>";
    }
    else{
      echo "<h3 class='row col-md-12' style='text-align: center'> ". $numRows . " resultaten voor &#39;" .$search."&#39;</h3>";
    }
    while(mysqli_stmt_fetch($getProducts)){
      ?>
      <a href="<?= "index.php?content=Product&item=".$productID ?>"><div id="<?=$productID?>" name="<?=$productID?>" class="searchItem col-md-8 col-md-offset-2">
        <div class="col-md-8 searchItemInfoInner">
          <p class="row"><?= $productName ?></p>
          <p class="row"><?= "&#8364;".$productPrice?> </p>
        </div>
      </div></a>
      <?php
    }
  }
}
else{
  echo "<h3 class='row col-md-12' style='text-align: center'> Gebruik de zoek balk om naar producten te zoeken </h3>";
}
 ?>
 </div>
</div>