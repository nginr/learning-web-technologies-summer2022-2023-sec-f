<?php
    $_SESSION['title'] = "Edit Profile";
    include "header.php";
?>


<div id="usercontent">
    <div id="sidebar">
       <?php include "user_sidebar.php"; ?>
    </div>

    <div class="centercontent" id="contentbar">
        <fieldset id="profileview">
            <legend><b>EDIT PROFILE</b></legend>
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
                        <td> Gender </td>
                        <td> :
                            <input type="radio" name="gender" value="male">
                            <label for="male">Male</label>
                            <input type="radio" name="gender" value="female" >
                            <label for="female">Female</label>
                        </td>
                    <tr>
                    </tr>
                    <tr>
                        <td> Date of Birth </td>
                        <td>
                           : <input type="date" placeholder="Enter DOB" name="dob" id="dob">
                            <br><i><small style="padding-left:10px;">(dd / mm / yyyy)</small></i>
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
