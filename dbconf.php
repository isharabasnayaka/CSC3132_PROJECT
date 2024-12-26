<?php
$servername = "127.0.0.1";
$username = "root"; 
$password = "mariadb"; 
$dbname = "Carebond";

try {
    $connect =mysqli_connect($servername, $username, $password, $dbname);
    if (!$connect) {
        die("Connection failed: " . mysqli_connect_error());
    }
    else {

    }
}
catch(Exception $e){
    die($e->getMessage());
}
?>