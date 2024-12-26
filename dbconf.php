<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
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