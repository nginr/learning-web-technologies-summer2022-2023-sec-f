<?php
include 'includes/header.php';
include '../controllers/fetch_employer.controller.php';
?>

<div class="centerdiv">
    <?php include_once 'includes/navigation.php'; ?>
    <fieldset>
        <legend><b> DELETE PRODUCT </b></legend>
        <table>
            <tr>
                <td id="leftal">Name</td>
                <td id="leftpad"> : <?php echo $employer['emp_name']; ?> </td>
            </tr>
            <tr>
                <td id="leftal">Company Name</td>
                <td id="leftpad"> : <?php echo $employer['company_name']; ?> </td>
            </tr>
            <tr>
                <td id="leftal">Contact No</td>
                <td id="leftpad"> : <?php echo $employer['contactno']; ?> </td>
            </tr>
            <tr>
                <td id="leftal">Username</td>
                <td id="leftpad"> : <?php echo $employer['username']; ?> </td>
            </tr>
        </table>
        <hr>
        <form method="POST" action="../controllers/delete_employer.controller.php">
            <input type="hidden" name="empid" <?php echo "value=\"" . $empId . "\""; ?>>
            <input type="submit" name="delete" value="Delete">
            <button type="button" onclick="window.location.href = '../views/display_employers.view.php';">Cancel</button>
        </form>
    </fieldset>
</div>

<?php include 'includes/footer.php'; ?>
