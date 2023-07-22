<?php include 'includes/header.php'; ?>

<div class="centerdiv">
    <?php include_once 'includes/navigation.php'; ?>
    <fieldset>
        <legend><b> ADD EMPLOYER </b></legend>
        <form method="POST" action="../controllers/add_employer.controller.php">
            <table>
                <tr>
                    <td>Username</td>
                    <td> : <input type="text" placeholder="Enter Username" name="empusername" required> </td>
                </tr>
                <tr>
                    <td> Password </td>
                    <td> : <input type="password" placeholder="Enter Password" name="pass" required> </td>
                </tr>
                <tr>
                    <td>Employer Name</td>
                    <td> : <input type="text" placeholder="Enter Employer Name" name="empname" required> </td>
                </tr>
                <tr>
                    <td>Company Name</td>
                    <td> : <input type="text" placeholder="Enter Company Name" name="companyname" required> </td>
                </tr>
                <tr>
                    <td>Contact No</td>
                    <td> : <input type="text" placeholder="Enter Contact Number" name="contact" maxlength="11" required> </td>
                </tr>
            </table>
            <hr>
            <input type="submit" value="Submit">
        </form>
    </fieldset>
</div>

<?php include 'includes/footer.php'; ?>
