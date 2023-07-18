<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userid = htmlspecialchars($_POST['userid']);
    $psw = htmlspecialchars($_POST['psw']);

    if (empty($userid) || empty($psw)) {
        header('Location: ../views/signin.view.php?msg=noemptyallowed');
        exit();
    } else {
        require_once 'users.controller.php';
        $uc = new UserController();
        if ($uc->registerUser($userid, $psw, $name, $usertype) == true) {
            header('Location: ../views/signin.view.php?msg=registrationsuccess');
            exit();
        }
        header('Location: ../views/signin.view.php?msg=registrationfailure');
        exit();
    }
} else {
    header('Location: ../index.php');
    exit();
}
