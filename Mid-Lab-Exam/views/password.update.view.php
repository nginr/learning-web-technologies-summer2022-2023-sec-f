<?php
include 'includes/header.inc.php';
?>

<div class="centerdiv">
    <fieldset>
        <legend><b> CHANGE PASSWORD </b></legend>
        <form action="../controllers/password.update.controller.php" method="post">
            <table>
                <tr>
                    <td> Current Password </td>
                    <td> : <input type="password" placeholder="Enter Current Password" name="cpsw" required> </td>
                </tr>
                <tr>
                    <td> New Password </td>
                    <td> : <input type="password" placeholder="Enter Password" name="npsw" required> </td>
                </tr>
                <tr>
                    <td> Retype New Password </td>
                    <td> : <input type="password" placeholder="Repeat New Password" name="npswrepeat" required> </td>
                </tr>
            </table>
            <hr>
            <input type="submit" name="change" value="Change">
            <a href="home.view.php">Home</a>
        </form>
    </fieldset>
</div>

<?php
include 'includes/footer.inc.php';
?>
