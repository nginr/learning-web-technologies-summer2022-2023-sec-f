<?php
require_once '../models/dbconn.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $empId = $_POST['empid'];
    $oldemp = $_POST['oldemp'];
    $newemp = $_POST['newemp'];

    foreach ($newemp as $key => $value) {
        $newemp[$key] = htmlspecialchars($value);
    }

    $modified_columns = array();

    foreach ($newemp as $key => $value) {
        if ($value !== $oldemp[$key]) {
            $escapedValue = mysqli_real_escape_string($connection, $value);
            $modified_columns[] = "`$key` = '$escapedValue'";
        }
    }

    if (!empty($modified_columns)) {
        $modified = implode(", ", $modified_columns);
        $query = "UPDATE $table SET $modified WHERE emp_id = $empId";
        mysqli_query($connection, $query);

        if (mysqli_affected_rows($connection) > 0) {
            mysqli_close($connection);
            header("Location: ../views/display_employers.view.php?msg=UPD");
            exit();
        }
    }
    mysqli_close($connection);
    header("Location: ../views/display_employers.view.php?msg=NUPD");
    exit();
}
