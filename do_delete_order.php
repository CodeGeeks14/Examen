<?php
//include('security.php');
include("db_connect");
$connection = mysqli_connect($servername, $username, $password, $dbname);
$query = "DELETE FROM `OrderRegel` WHERE `Items` = '".$_GET['item']."'";
$result = mysqli_query($connection, $query);
if($result){
    echo 'OrderRegel verwijdert';
    echo($_GET['item']);
    echo($_GET['id']);
    $query2 = "DELETE FROM `Order` WHERE `idGebruiker` = '".$_SESSION['id']."'";
    $result2 = mysqli_query($connection, $query2);
    
            ?><script>
    window.location = 'index.php?content=OrderedProducts';
</script><?php
        }?>