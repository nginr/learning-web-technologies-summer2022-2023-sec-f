<?php
require_once '../models/dbconn.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $empId = $_POST['empid'];
    $query = "DELETE FROM $table WHERE emp_id = $empId";
    mysqli_query($connection, $query);
    mysqli_close($connection);
    header("Location: ../views/display_employers.view.php?msg=DEL");
    exit();
}
