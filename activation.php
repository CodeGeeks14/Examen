<?php
include('db_connect.php');

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
    $query = "SELECT * FROM Gebruiker WHERE `idGebruiker` = '".$_GET["id"]."' AND `activationKey` = '".$_GET["pw"]."'";
    
    $result = mysqli_query($connection, $query);
    $record = mysqli_fetch_assoc($result);
    
    if(mysqli_num_rows($result) > 0) {
        $query_select_gebruiker = "SELECT * FROM `Gebruiker` WHERE idGebruiker = '".$_GET["id"]."'";
        if($result = mysqli_query($connection,$query_select_gebruiker)){
            $user = mysqli_fetch_assoc($result);
            var_dump($user);
        }
        else{
            echo 'false';
        }
        
        $query = "UPDATE Gebruiker SET `Activation` = '1' WHERE Gebruiker.idGebruiker = '".$_GET["id"]."'";
        
        $query2 = "INSERT INTO RolPerGebruiker (`idGebruiker`,`Rol`) 
        VALUES('".$_GET["id"]."',
                'Klant');";
        
        $result = mysqli_query($connection, $query);
        $result2 = mysqli_query($connection, $query2);
        var_dump($result2);
        var_dump($result1);
        if($result && $result2) {
            
            echo 'De activatie is voltooid! Kies nu een wachtwoord';
			?>
<script> window.location = 'index.php?content=setPassword&id=<?php echo $user['idGebruiker'];?>&pw=<?php echo $user['activationKey'];?>';
</script><?php
?>

<?php
        }
        else {
            echo 'Er is iets mis gegaan. Probeer het later opnieuw';
        }
        
    }
    else {
        echo 'U bent niet bevoegd om deze pagina te bekijken';
    }
    
