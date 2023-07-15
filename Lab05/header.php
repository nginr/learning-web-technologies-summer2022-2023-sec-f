<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <link rel="icon" href="assets/logo.png">
    <title> <?php echo $_SESSION['title'];  ?>  </title>
</head>
<body>

<?php
    if(!isset($_SESSION['username'])){
        echo "
            <div class=\"headercontent blackborder\">
                    <span>
                        <a href=\"index.php\"><img width=100px src=\"assets/logo.png\"/></a>
                    </span>
                    <span class=\"centercontent\">
                        <a href=\"index.php\">Home</a> |
                        <a href=\"public_login.php\">Login</a> |
                        <a href=\"public_registration.php\">Registration</a>
                    </span>
            </div>
        ";
    }
    else {
        echo "
            <div class=\"headercontent blackborder\">
                <span>
                    <a href=\"index.php\"><img width=100px src=\"assets/logo.png\"/></a>
                </span>
                <span class=\"centercontent\">
                    Logged in as
                    <a href=\"user_view_profile.php\"> " . $_SESSION['username'] . "</a> |
                    <a href=\"user_logout.php\">Logout</a>
                </span>
            </div>
        ";
    }
?>
