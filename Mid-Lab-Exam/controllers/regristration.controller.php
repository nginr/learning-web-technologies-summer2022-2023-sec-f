<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userid = htmlspecialchars($_POST['userid']);
    $psw = htmlspecialchars($_POST['psw']);
    $pswc = htmlspecialchars($_POST['pswrepeat']);
    $name = htmlspecialchars($_POST['name']);
    $usertype = htmlspecialchars($_POST['usertype']);

    if(empty($userid) || empty($psw) || empty($pswc) || empty($name)) {
        header('Location: ../views/signin.view.php?msg=noemptyallowed');
        exit();
    } else if ($psw == $pswc) {
        require_once 'users.controller.php';
        $uc = new UserController();
        if($uc->registerUser($userid, $psw, $name, $usertype) == true) {
            header('Location: ../views/signin.view.php?msg=registrationsuccess');
            exit();
        } else {
            header('Location: ../views/signup.view.php?msg=registrationfailure');
            exit();
        }
    } else {
        header('Location: ../views/signup.view.php?msg=errorrepeatpsw');
        exit();
    }
}
else {
    header('Location: ../index.php');
    exit();
}
