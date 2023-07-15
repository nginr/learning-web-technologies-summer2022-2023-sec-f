<?php
    $_SESSION['title'] = "Change Password";
    include "header.php";
?>

<div id="usercontent">
    <div id="sidebar">
       <?php include "user_sidebar.php"; ?>
    </div>

    <div class="centercontent" id="contentbar">
        <fieldset id="profileview">
            <legend><b>CHANGE PASSWORD</b></legend>
            <form>
                <table>
                    <tr>
                        <td width="150px"> Current Password </td>
                        <td>
                           : <input type="password" name="curr_psw" required>
                        </td>
                    </tr>
                    <tr>
                        <td style="color:green;" > New Password </td>
                        <td>
                           : <input type="password" name="curr_psw" required>
                        </td>
                    </tr>
                    <tr>
                        <td style="color:red;" > Retype New Password </td>
                        <td>
                           : <input type="password" name="curr_psw" required>
                        </td>
                    </tr>
                </table>
                <hr>
                <input type="submit" name="submit" >
            </form>
        </fieldset>
    </div>
</div>


<?php include "footer.php"; ?>
