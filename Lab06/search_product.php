<?php include 'header.php'; ?>

<div class="container">
    <fieldset>
        <legend><b> SEARCH </b></legend>
        <form method="POST" action="display_products.php">
            <input type="text" id="search" name="searchinput">
            <input type="submit" name="submit" value="Search">
        </form>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Buying Price</th>
                    <th>Selling Price</th>
                    <th>Profit</th>
                    <th colspan="2"> Opertation </th>
                </tr>
            </thead>
            <tbody id="output"> </tbody>
        </table>
    </fieldset>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $("#search").keypress(function() {
            $.ajax({
                type: 'POST',
                url: 'fetch_data.php',
                data: {
                    name: $("#search").val(),
                },
                success: function(data) {
                    $("#output").html(data);
                }
            });
        });
    });
</script>

<?php include 'footer.php'; ?>
