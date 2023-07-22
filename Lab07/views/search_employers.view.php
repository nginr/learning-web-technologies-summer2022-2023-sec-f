<?php include 'includes/header.php'; ?>

<div class="centerdiv">
    <?php include_once 'includes/navigation.php'; ?>
    <fieldset>
        <legend><b> SEARCH </b></legend>
            <input type="text" id="search" name="searchinput">
        <table id="distable">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Company Name</th>
                    <th>Contact No</th>
                    <th>Username</th>
                    <th colspan="2"> Opertation </th>
                </tr>
            </thead>
            <tbody id="output"> </tbody>
        </table>
    </fieldset>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $("#search").keyup(function() {
            $.ajax({
                type: 'POST',
                url: '../controllers/display_employers.controller.php',
                data: {
                    searchinput: $("#search").val(),
                },
                success: function(data) {
                    $("#output").html(data);
                }
            });
        });
    });
</script>

<?php include 'includes/footer.php'; ?>
