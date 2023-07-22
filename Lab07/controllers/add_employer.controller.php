<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $empname     = htmlspecialchars($_POST['empname']);
    $psw         = htmlspecialchars($_POST['pass']);
    $contactno   = htmlspecialchars($_POST['contact']);
    $empusername = htmlspecialchars($_POST['empusername']);
    $companyname = htmlspecialchars($_POST['companyname']);

    if (empty($empusername) || empty($psw) || empty($empname) || empty($companyname) || empty($contactno)) {
        header('Location: ../views/add_employer.view.php?msg=noemptyallowed');
        exit();
    }
    require_once '../models/dbconn.php';
    $query = "INSERT INTO $table $tablecols VALUES ('$empname', '$companyname', '$contactno', '$empusername', '$psw')";

    if (mysqli_query($connection, $query)) {
        header('Location: ../views/add_employer.view.php?msg=employeradded');
        exit();
    } else {
        $err = mysqli_error($connection);
        header('Location: ../views/add_employer.view.php?msg=' . $err);
        exit();
    }

    mysqli_close($connection);
} else {
    header('Location: ../index.php');
    exit();
}
