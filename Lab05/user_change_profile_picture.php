<?php
    $_SESSION['title'] = "Change Profile Picture";
    include "header.php";
?>

<div id="usercontent">
    <div id="sidebar">
       <?php include "user_sidebar.php"; ?>
    </div>

    <div class="centercontent" id="contentbar">
        <fieldset style="width:400px;">
            <legend><b>CHANGE PROFILE PICTURE</b></legend>
            <form>
                <div> <img id="profilepic" src="assets/logo.png"> </div>
                <br>
                <input type="file"
                       id="profileimage" name="profileimage"
                       accept="image/png, image/jpeg">

                <hr>
                <input type="submit" name="submit" >
            </form>
        </fieldset>
    </div>
</div>

<?php include "footer.php"; ?>
