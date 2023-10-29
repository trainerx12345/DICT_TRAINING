<?php

$databaseHost = 'localhost';
$databaseName = 'payroll';
$databaseUsername = 'root';
$databasePassword = '';

$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

?>