<?php
include 'includes/header.inc.php';
?>

<div class="centerdiv">
    <fieldset>
        <h1>Welcome Admin!</h1>


        <table>
            <tr>
                <td> <a href="profile.view.php">Profile</a> </td>
            </tr>
            <tr>
                <td> <a href="password.update.view.php">Change Password</a> </td>
            </tr>
            <tr>
                <td>
                    <?php

                    // TODO: implement showuser functionality exclusive to admin type user!
                    echo '<a href="users.show.view.php">View Users</a><br>';

                    ?>
                </td>
            </tr>
            <tr>
                <td> <a href="../controllers/logout.controller.php">Logout</a> </td>
            </tr>
        </table>

        <br>
    </fieldset>
</div>

<?php
include 'includes/footer.inc.php';
?>
