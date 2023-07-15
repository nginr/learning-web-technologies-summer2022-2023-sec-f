<?php
    $_SESSION['title'] = "Registration";

    include "header.php";
?>

<div class="maincontent centercontent">
    <fieldset>
        <legend><b> REGISTRATION </b></legend>
        <form>
            <table>
                <tr>
                    <td>Name</td>
                    <td>
                       : <input type="text" placeholder="Enter Name" name="name" id="name" required>
                    </td>
                </tr>
                <tr>
                    <td> Email </td>
                    <td>
                       : <input type="text" placeholder="Enter Email" name="email" id="email" required>
                    </td>
                </tr>
                <tr>
                    <td>User Name</td>
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
                <tr>
                    <td> Repeat Password </td>
                    <td>
                       : <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
                    </td>
                </tr>
            </table>

        <div id="gendob">
            <fieldset>
            <legend>Gender</legend>
                <input type="radio" name="gender" value="male">
                <label for="male">Male</label>
                <input type="radio" name="gender" value="female" >
                <label for="female">Female</label>
            </fieldset>

            <hr>

            <fieldset>
            <legend>Date of Birth</legend>
                <input type="text" name="day" placeholder="dd" maxlength="2" size="2"> /
                <input type="text" name="month" placeholder="mm" maxlength="2" size="2"> /
                <input type="text" name="year" placeholder="yyyy" maxlength="4" size="4"> <br>
            </fieldset>
        </div>

        <hr>
            <input type="submit" name="submit" >
            <input type="reset" name="reset" >
        </form>
    </fieldset>
</div>

<?php include "footer.php"; ?>
