<?php
require_once 'dbconn.php';
$product = array(
    'name' => '',
    'buying_price' => 0,
    'selling_price' => 0,
    'displayable' => 0
);

if (isset($_GET['id'])) {
    $productId = $_GET['id'];

    $query = "SELECT name, buying_price, selling_price, displayable FROM $table WHERE p_id = $productId";
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) > 0) {
        $product = mysqli_fetch_assoc($result);
    }
    mysqli_close($connection);
}

if (isset($_POST['submit'])) {
    $productId = $_POST['pid'];
    $old_product = array(
        'name' => $product['name'],
        'buying_price' => $product['buying_price'],
        'selling_price' => $product['selling_price'],
        'displayable' => $product['displayable']
    );

    $changed_product = array(
        'name' => $_POST['name'],
        'buying_price' => $_POST['buyprice'],
        'selling_price' => $_POST['sellprice'],
        'displayable' => isset($_POST['display']) ? 1 : 0
    );

    $modified_columns = array();

    foreach ($changed_product as $key => $value) {
        if ($value !== $old_product[$key]) {
            $escapedValue = mysqli_real_escape_string($connection, $value);
            $modified_columns[] = "`$key` = '$escapedValue'";
        }
    }

    if (!empty($modified_columns)) {
        $modified = implode(", ", $modified_columns);
        $query = "UPDATE $table SET $modified WHERE p_id = $productId";

        mysqli_query($connection, $query);

        if (mysqli_affected_rows($connection) > 0) {
            mysqli_close($connection);
            header("Location: display_products.php?msg=UPD");
        }
    }
    mysqli_close($connection);
    header("Location: display_products.php?msg=NUPD");
}

include 'header.php';
?>

<fieldset>
    <legend><b> EDIT PRODUCT </b></legend>
    <form  method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <table id="distable">
            <tr>
                <td id="addprod">Name</td>
                <td id="addprod"> : <input type="text" name="name" id="name" <?php echo "value=\"" . $product['name'] . "\""; ?> required> </td>
            </tr>
            <tr>
                <td id="addprod">Buying Price</td>
                <td id="addprod"> : <input type="text" name="buyprice" id="buyprice" <?php echo "value=\"" . $product['buying_price'] . "\""; ?> required> </td>
            </tr>
            <tr>
                <td id="addprod">Selling Price</td>
                <td id="addprod"> : <input type="text" name="sellprice" id="sellprice" <?php echo "value=\"" . $product['selling_price'] . "\""; ?> required> </td>
            </tr>
        </table>
        <hr>
        <input type="checkbox" name="display" <?php echo $product['displayable'] == 1 ? 'checked' : ''; ?>> <label for="display">Display</label>
        <input type="hidden" name="pid" <?php echo "value=\"". $productId . "\""; ?>>
        <hr>
        <input type="submit" name="submit" value="Save">
        <button type="button" onclick="window.location.href = 'display_products.php';">Cancel</button>
    </form>
</fieldset>

<?php include 'footer.php'; ?>
