<?php
$userrole = "Admin";
//include('security.php');
include ("db_connect.php");

 //FILE UPLOADEN VAN BEHEER MOVIE
$target_dir = "Product/";
$target_file = $target_dir . basename($_FILES["uploadedfile"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["uploadedfile"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["uploadedfile"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["uploadedfile"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["uploadedfile"]["name"]). " has been uploaded.";
		?><script language="JavaScript" type="text/javascript">
setTimeout("location.href = 'index.php?content=Admincontrol'",1); // milliseconds, so 10 seconds = 10000ms
</script><?php
    } else {
        echo "Sorry, there was an error uploading your file.";
		?><script language="JavaScript" type="text/javascript">
setTimeout("location.href = 'index.php?content=Admincontrol'",3000); // milliseconds, so 10 seconds = 10000ms
</script><?php
    }
}



$idProduct = $_POST['idProduct'];
$ProductNaam = $_POST['ProductNaam'];
$Prijs = $_POST['Prijs'];
$ProductCode = $_POST['ProductCode'];
$Omschrijving = str_replace("'", "",$_POST['Omschrijving']);
$image = "Product/".basename($_FILES['uploadedfile']['name'])."";
$Actieprijs = $_POST['Actieprijs'];
$ActieDatum = $_POST['ActieDatum'];

$queryInsertProduct = "INSERT INTO `Product` (`idProduct`,`ProductNaam`,`Prijs`,`ProductCode`,`Omschrijving`,`image`,`Actieprijs`, `ActieDatum`)
	VALUES(
    '".$idProduct."',	
    '".$ProductNaam."',	
	'".$Prijs."',
	'".$ProductCode."',
	'".$Omschrijving."',
	'".$image."',
	'".$Actieprijs."',
	'".$ActieDatum."');";

$resultInserQuery = mysqli_query($connection, $queryInsertProduct);

if($resultInserQuery){
	$Last_product_id = mysqli_insert_id($connection);

	//Binnenkrijgen CategoriePerProductInsert
	$checkboxValues = $_POST['checkboxes'];

	//inserts ModelPerProduct Uitvoeren
	foreach($checkboxValues as $item){

		list($id,$actie) = explode(":", $item);
		
		if($actie === "Categorie"){
			$queryInsertCategorie = "INSERT INTO `CategorieProduct` (`idProduct`, `idCategorie`) VALUES ('".$idProduct."', '".$id."');";
			$resultInsertCategorie = mysqli_query($connection,$queryInsertCategorie);
		}
		else if($actie === "Model"){
			$queryInsertModel = "INSERT INTO `ModelProduct` (`idProduct`, `idModel`) VALUES ('".$idProduct."', '".$id."');";
			$resultInsertModel = mysqli_query($connection,$queryInsertModel);
		}
			
		
	}
	

}
			$queryInsertItem = "INSERT INTO `Items` (`idItems`,`idProduct`, `Status`) VALUES ('".$idProduct."', '".$idProduct."', 0);";
			$resultInsertItem = mysqli_query($connection,$queryInsertItem);
header("Refresh: 3; url=index.php?content=Admincontrol");
exit();

?>


<script type="text">	window.location='index.php?content=controlmovies&action=filmToevoegen';</script>