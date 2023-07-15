<?php
    session_start();
    $_SESSION['title'] = "Dashboard";
    if(!isset($_COOKIE['flag'])){
       header('location: index.php');
    }
    include "header.php";
?>

<div id="usercontent">
    <div id="sidebar">
       <?php include "user_sidebar.php"; ?>
    </div>

    <div id="contentbar">
        <?php echo "<h4>Hello " . $_SESSION['username'] . "</h4>"; ?>
    </div>
</div>

<?php include "footer.php"; ?>
