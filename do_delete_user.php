<?php
$userrole = "Admin";
//include('security.php');
include("db_connect");
$connection = mysqli_connect($servername, $username, $password, $dbname);
$query = "DELETE FROM `Wachtwoord` WHERE `idGebruiker` = '".$_GET['id']."'";
$result = mysqli_query($connection, $query);
if($result){
    $query3 = "DELETE FROM `RolPerGebruiker` WHERE `idGebruiker` = '".$_GET['id']."'";
    $result3 = mysqli_query($connection, $query3);
    
    if($result3){
        $query2 = "DELETE FROM `Gebruiker` WHERE `idGebruiker` = '".$_GET['id']."'";
        $result2 = mysqli_query($connection, $query2); 
        
        if($result2) {
            echo '<br>De gebruiker heeft nog openstaande orders, gebruiker word hier door alleen belemmerd bij het inloggen maar word niet verwijderd.';
            ?><script>
  setTimeout("location.href = 'index.php?content=Admincontrol'",100); // milliseconds, so 10 seconds = 10000ms
</script><?php
        }
    }
}



