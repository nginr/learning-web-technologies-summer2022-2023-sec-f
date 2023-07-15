<?php
    $_SESSION['title'] = "Profile";
    include "header.php";
?>

<div id="usercontent">
    <div id="sidebar">
       <?php include "user_sidebar.php"; ?>
    </div>

    <div class="centercontent" id="contentbar">
        <fieldset id="profileview">
            <legend><b>PROFILE</b></legend>
            <table>
                <tr class="bottombordered">
                    <td>Name</td>
                    <td> : Bob </td>
                    <td class="centertext" rowspan="4">
                        <img id="profilepic" src="assets/logo.png"> <br>
                        <a href="user_change_password.php">Change</a>
                    </td>
                </tr>
                <tr class="bottombordered">
                    <td> Email </td>
                    <td> : bob@mail.com </td>
                </tr>
                <tr class="bottombordered">
                    <td>Gender</td>
                    <td> : Male </td>
                </tr>
                <tr class="bottombordered">
                    <td>Date of Birth</td>
                    <td> : 19 / 09 / 1998 </td>
                </tr>
            </table>
            <br>
            <a href="user_edit_profile.php">Edit Profile</a>
        </fieldset>
    </div>
</div>

<?php include "footer.php"; ?>
