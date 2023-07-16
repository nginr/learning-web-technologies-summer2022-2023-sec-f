<?php
require_once 'dbconn.php';
$product = array(
    'name' => '',
    'buying_price' => 0,
    'selling_price' => 0,
    'displayable' => 0
);
$productId = 0;

if (isset($_POST['delete'])) {
    $productId = $_GET['id'];
    $query = "DELETE FROM $table WHERE p_id = $productId";
    mysqli_query($connection, $query);
    mysqli_close($connection);
    header("Location: display_products.php?msg=DEL");
    exit();
}

if (isset($_GET['id'])) {
    $productId = $_GET['id'];

    $query = "SELECT name, buying_price, selling_price, displayable FROM $table WHERE p_id = $productId";
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) > 0) {
        $product = mysqli_fetch_assoc($result);
    }
    mysqli_close($connection);
}

include 'header.php';
?>

<fieldset>
    <legend><b> DELETE PRODUCT </b></legend>
    <table id="distable">
        <tr>
            <td id="addprod">Name</td>
            <td id="addprod"> : <?php echo $product['name']; ?> </td>
        </tr>
        <tr>
            <td id="addprod">Buying Price</td>
            <td id="addprod"> : <?php echo $product['buying_price']; ?> </td>
        </tr>
        <tr>
            <td id="addprod">Selling Price</td>
            <td id="addprod"> : <?php echo $product['selling_price']; ?> </td>
        </tr>
        <tr>
            <td id="addprod">Displayable</td>
            <td id="addprod"> : <?php echo $product['displayable'] == 1 ? 'yes' : 'no'; ?> </td>
        </tr>
    </table>
    <hr>
    <form  method="POST" action="<?php echo $_SERVER['PHP_SELF'] . '?id=' .$productId; ?>">
        <input type="submit" name="delete" value="Delete">
        <button type="button" onclick="window.location.href = 'display_products.php';">Cancel</button>
    </form>
</fieldset>

<?php include 'footer.php'; ?>
