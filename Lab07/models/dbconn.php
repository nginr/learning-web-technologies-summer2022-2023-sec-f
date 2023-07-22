<?php

$table = 'employers';
$hostname = 'localhost';
$username = 'pawn';
$password = '';
$database = 'employers_db';

$tablecols = '(emp_name, company_name, contactno, username, password)';

$connection = mysqli_connect($hostname, $username, $password, $database);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
