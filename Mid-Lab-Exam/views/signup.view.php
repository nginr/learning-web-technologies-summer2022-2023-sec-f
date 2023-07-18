<div class="centerdiv">
    <fieldset>
        <legend><b> REGISTRATION </b></legend>
        <form action="../controllers/regristration.controller.php" method="post">
            <table>
                <tr>
                    <td>Id</td>
                    <td> : <input type="text" placeholder="Enter Id" name="userid" required> </td>
                </tr>
                <tr>
                    <td> Password </td>
                    <td> : <input type="password" placeholder="Enter Password" name="psw" required> </td>
                </tr>
                <tr>
                    <td> Confirm Password </td>
                    <td> : <input type="password" placeholder="Repeat Password" name="pswrepeat" required> </td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td> : <input type="text" placeholder="Enter Name" name="name" required> </td>
                </tr>
                <tr>
                    <td>User Type</td>
                    <td> :
                        <input type="radio" name="usertype" value="user" checked> <label for="user">User</label>
                        <input type="radio" name="usertype" value="admin"> <label for="admin">Admin</label>
                    </td>
                </tr>
            </table>
            <hr>
            <input type="submit" name="submit" value="Sign Up">
            <a href="signin.view.php">Sign In</a>
        </form>
    </fieldset>
</div>
