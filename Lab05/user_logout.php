<?php
    session_destroy();
    setcookie('flag', 'true', time()-10, '/');
    header('location: index.php');
?>
