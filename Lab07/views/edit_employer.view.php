<?php
include 'includes/header.php';
include '../controllers/fetch_employer.controller.php';
?>

<div class="centerdiv">
    <?php include_once 'includes/navigation.php'; ?>
    <div>
        <fieldset>
            <legend><b> EDIT PRODUCT </b></legend>
            <form method="POST" action="../controllers/edit_employer.controller.php">
                <?php
                foreach ($employer as $key => $value) {
                    echo '<input type="hidden" name="oldemp[' . $key . ']" value="' . $value . '">';
                }
                ?>

                <table>
                    <tr>
                        <td id="leftal">Name</td>
                        <td> : <input type="text" name="newemp[emp_name]" <?php echo "value=\"" . $employer['emp_name'] . "\""; ?> required> </td>
                    </tr>
                    <tr>
                        <td id="leftal">Company Name</td>
                        <td> : <input type="text" name="newemp[company_name]" <?php echo "value=\"" . $employer['company_name'] . "\""; ?> required> </td>
                    </tr>
                    <tr>
                        <td id="leftal">Contact No</td>
                        <td> : <input type="text" name="newemp[contactno]" <?php echo "value=\"" . $employer['contactno'] . "\""; ?> maxlength="11" required> </td>
                    </tr>
                    <tr>
                        <td id="leftal">Username</td>
                        <td> : <input type="text" name="newemp[username]" <?php echo "value=\"" . $employer['username'] . "\""; ?> required> </td>
                    </tr>
                </table>
                <input type="hidden" name="empid" <?php echo "value=\"" . $empId . "\""; ?>>
                <hr>
                <input type="submit" name="submit" value="Save">
                <button type="button" onclick="window.location.href = 'display_employers.view.php';">Cancel</button>
            </form>
        </fieldset>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
