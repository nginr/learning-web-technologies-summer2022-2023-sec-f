<?php
    require_once("users.php");

    function is_valid_login(string $username, string $password) : bool {
        $users = $_SESSION['users'];
        $res = isuser($users, $username);
        if ($res[0] == true) {
            if (($username == $users[$res[1]]->username)
            && ($password == $users[$res[1]]->password)) {
                return true;
            }
        }
        return false;
    }

    if(isset($_POST['submit'])) {
        $users = $_SESSION['users'];
        $uname = $_POST['username'];
        $psrd = $_POST['psw'];
        if(is_valid_login($uname, $psrd)){
            $res = isuser($users, $uname);
            $_SESSION['username'] = $uname;
            $_SESSION['users'][$res[1]]->logged = true;
            setcookie('flag', 'true', time()+3600, '/');
            header('location: ../user_dashboard.php');
        } else {
            header('location: ../public_login.php?msg=invalid');
        }
    }
    else {
    }
?>
