<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userid = htmlspecialchars($_POST['userid']);
    $psw = htmlspecialchars($_POST['psw']);

    if (empty($userid) || empty($psw)) {
        header('Location: ../views/signin.view.php?msg=noemptyallowed');
        exit();
    } else {
        require_once 'user.controller.php';
        $uc = new UserController();
        if ($uc->authenticate($userid, $psw) == true) {
            header('Location: ../views/home.view.php');
            exit();
        }
        header('Location: ../views/signin.view.php?msg=erroridpsw');
        exit();
    }
} else {
    header('Location: ../index.php');
    exit();
}
