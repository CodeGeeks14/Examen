<?php

echo 'test';
//include('security.php');
include("db_connect");
//$connection = mysqli_connect($servername, $username, $password, $dbname);
$query = "DELETE FROM `Wensen` WHERE `Gebruiker` = {$_SESSION['id']}";
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
var_dump($result);
            ?><script>
    window.location = 'index.php?content=Wensenlijst';
</script>
		