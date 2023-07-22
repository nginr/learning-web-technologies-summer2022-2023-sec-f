<?php
require_once '../models/dbconn.php';

$employer = array();
$empId = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $query = "SELECT emp_name, company_name, contactno, username FROM $table WHERE emp_id = $empId";
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) > 0) {
        $employer = mysqli_fetch_assoc($result);
    }
    mysqli_close($connection);
}
