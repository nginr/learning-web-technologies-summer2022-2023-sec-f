<?php

session_start();

$_SESSION['title'] = "Home";

require_once("funcs/users.php");

if (!isset($_SESSION['users'])) {
    $admin = new User("admin no: 1", "admin", "admin@mail.com", "admin", "assets/logo.png",
        "male", array(12, 2, 1989));
    $Bob = new User("Bob W Jobs", "bob", "bob@mail.com", "bob", "assets/logo.png",
        "male", array(24, 9, 1998));
    $users = array($admin, $Bob);
    $_SESSION['users'] = $users;
}

if(isset($_GET['msg'])){
    if($_GET['msg'] == 'invalid'){
        echo "invalid username/password";
    }else if($_GET['msg'] == 'null'){
        echo "null username/password";
    }
}

include "header.php";
include "public_home.php";
include "footer.php";
?>
