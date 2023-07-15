<?php
    $_SESSION['title'] = "Login";
    include "header.php";
?>

<div class="maincontent centercontent blackborder">
    <fieldset>
        <legend><b> LOGIN</b> </legend>
        <form method="POST" action="funcs/login_validation.php">
            <table>
                <tr>
                    <td width="100px">User Name</td>
                    <td>
                        : <input type="text" placeholder="Enter User Name" name="username" id="username" required>
                    </td>
                </tr>
                <tr>
                    <td> Password </td>
                    <td>
                       : <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
                    </td>
                </tr>
            </table>
        <hr>
        <input type="checkbox" name="remember"> <label for="remember">Remember Me</label>
        <br> <br>
            <input type="submit" name="submit" >
            <a style="padding-left:4px;" href="public_password_recovery.php">Forgot Password?</a>
        </form>
    </fieldset>
</div>

<?php include "footer.php"; ?>
