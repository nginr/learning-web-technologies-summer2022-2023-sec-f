<fieldset>
    <legend><b> LOGIN </b></legend>
    <form action="../controllers/login.controller.php">
        <table>
            <tr>
                <td>User Id</td>
                <td>
                    : <input type="text" placeholder="Enter Id" name="userid" id="userid" required>
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
        <input type="submit" name="submit" value="Sign In">
        <a href="signup.view.php">Register</a>
    </form>
</fieldset>
