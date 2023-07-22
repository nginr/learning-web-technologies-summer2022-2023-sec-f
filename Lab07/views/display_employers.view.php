<?php include 'includes/header.php'; ?>

<div class="centerdiv">
    <?php include_once 'includes/navigation.php'; ?>
    <fieldset>
        <legend><b> DISPLAY EMPLOYERS </b></legend>
        <table id="distable">
            <tr>
                <th>Name</th>
                <th>Company Name</th>
                <th>Contact</th>
                <th>Username</th>
                <th colspan="2">Operation</th>
            </tr>
            <?php require_once '../controllers/display_employers.controller.php'; ?>
        </table>
    </fieldset>
</div>

<?php include 'includes/footer.php'; ?>
