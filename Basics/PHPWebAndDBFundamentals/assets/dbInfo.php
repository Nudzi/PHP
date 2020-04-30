<?php
$dbPassword = "insertYourPass";
$dbUser = "insertYourUser";
$dbName = "insertYourDBName";
$dbServer = "localhost";


$connection = new mysqli($dbServer, $dbUser, $dbPassword, $dbName);

if($connection->connect_errno){
    exit("Database connection failed. Reason: ".$connection->connect_error);
}
?>
