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
<h1><b>Admin control pagina</b></h1>
</div>
</div>
<div class="row">
<div class="col-md-12" style="font-size:25px;">
<hr>
<h2>Account gegevens wijzigen</h2>
<?php
$userrole = "Admin";
//include('security.php');
    include("db_connect.php");
    $query_Gebruiker = "SELECT * FROM Gebruiker";
    $result_Gebruiker = mysqli_query($connection, $query_Gebruiker);

    $query_Rol = "SELECT * FROM RolPerGebruiker";
    $result_Rol = mysqli_query($connection, $query_Rol);
    mysqli_close();
    
?>

<table class="read-users-table">
			<tr>
				<th class="read-users-th">id</th>
				<th class="read-users-th">Voornaam</th>
				<th class="read-users-th">Tussenvoegsel</th>
				<th class="read-users-th">Achternaam</th>
				<th class="read-users-th">Email</th>
				<th class="read-users-th">Activatie</th>
				<th class="read-users-th">Userrole</th>
			
				<th class="read-users-th"></th>
				<th class="read-users-th"></th>
			</tr>
			<?php
            
			while($row = mysqli_fetch_assoc($result_Gebruiker))
			{
                $row2 = mysqli_fetch_assoc($result_Rol);
                
				echo "<tr><td class='read-users-td'>".$row["idGebruiker"]."</td>
						  <td class='read-users-td'>".$row["Voornaam"]."</td>
						  <td class='read-users-td'>".$row["Tussenvoegsel"]."</td>
						  <td class='read-users-td'>".$row["Achternaam"]."</td>
						  <td class='read-users-td'>".$row["Email"]."</td>
						  <td class='read-users-td'>".$row["Activation"]."</td>
						  <td class='read-users-td'>".$row2["Rol"]."</td>
						  						  
						  						  
						  <td class='read-users-td'>
								<a id='link' href='index.php?content=user_update&id=".$row["idGebruiker"]."'> 
								<img src='icons/edit.png' 
									 alt='edit icon' 
									 height='30'>
								</a>
						  </td>
						  <td class='read-users-td'>
								<a href='index.php?content=do_delete_user&id=".$row["idGebruiker"]."'> 
								<img src='icons/delete.png' 
									 alt='delete icon' 
									 height='30'>
								</a>
						  </td>
			 
						  
					 </tr>";

			}
			?>
		</table>
<hr>
<h2>Product toevoegen</h2>
    <div class="col-md-12	"> 
        <form action="index.php?content=product_send" method="post" enctype="multipart/form-data">
        <div>

            <table style="width:100%;" class="read-users-td">
                <tr>
                    <td style="color:black;"> Product ID </td>
                    <td> <input  class="textBox"type="text"
                                name="idProduct"
                                placeholder=""></td>
                </tr>
				<tr>
                    <td style="color:black;"> Product naam </td>
                    <td> <input  class="textBox"type="text"
                                name="ProductNaam"
                                placeholder=""></td>
                </tr>
				 <tr>
                    <td style="color:black;"> Prijs </td>
                    <td> <input class="textBox" type="float"
                                name="Prijs"
                                placeholder=""></td>
                </tr>
				<tr>
                    <td style="color:black;">Actie Prijs </td>
                    <td> <input class="textBox" type="float"
                                name="Actieprijs"
                                placeholder=""></td>
                </tr>
				 <tr>
				<td>Actievatie Datum (dd-mm-jj):</td>
				<td>
					<input class="textbox"
						   type="date"
						   name="ActieDatum"
						   placeholder="..."
						   >
				</td>
			</tr>
				<tr>
                    <td style="color:black;"> ProductCode </td>
                    <td> <input class="textBox" type="float"
                                name="ProductCode"
                                placeholder=""></td>
                </tr>
                <tr>
                    <td style="color:black;"> Omschrijving </td>
                    <td> <input class="textBox" type="text"
                                name="Omschrijving"
                                placeholder=""></td>
                </tr>
                <tr>
                    <td style="color:black;"> Afbeelding </td>
                    <td><input class="textBox"  style="color:black;" name="uploadedfile" type="file" /></td>
                    <input type="hidden" name="MAX_FILE_SIZE" value="100000" />
                </tr>
                <tr>
                    <td style="color:black;"> Categorie toewijzen </td>
                    <td>
                        <?php
                            include('db_connect.php');

                            $querySelectCategorieProduct = "SELECT * FROM `Categorie`;";

                            $resultSelectCategorieProduct = mysqli_query($connection,$querySelectCategorieProduct);

                            while($rowResultCategorieProduct = $resultSelectCategorieProduct->fetch_assoc()){
                                    echo "<p><input type='checkbox' name='checkboxes[]' value='".$rowResultCategorieProduct['idCategorie'].":Categorie'><h4>".$rowResultCategorieProduct['Categorie']."</h4></p>";
                            }

                        ?>
                    </td>
                </tr>
                <tr>
                    <td style="color:black;"> Model toewijzen </td>
                    <td>
                        <?php

                            $querySelectModel = "SELECT * FROM `Model`";

                            $resultSelectModel = mysqli_query($connection,$querySelectModel);

                            while($rowResultModel = $resultSelectModel->fetch_assoc()){
                                    echo "<p><input type='checkbox' name='checkboxes[]' value='".$rowResultModel['idModel'].":Model'><h4>".$rowResultModel['Model']."</h4></p>";
                            }

                        ?>
                    </td>
                </tr>
                <tr>
                    <td></td>

                    <td> <input class="btn" width="100px" type="submit" value="Save">
                    </td>
                </tr>
            </table>
        </div>
    </form>
        <br><br>
    </div>


<hr>
</div>
</div>
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
