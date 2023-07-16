<?php

$table = 'products';
$hostname = 'localhost';
$username = 'pawn';
$password = '';
$database = 'products_db';

$connection = mysqli_connect($hostname, $username, $password, $database);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
