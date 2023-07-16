<?php
require_once 'dbconn.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $name = $_POST['name'];
    $buyingPrice = $_POST['buyprice'];
    $sellingPrice = $_POST['sellprice'];
    $displayable = isset($_POST['display']) ? 1 : 0;

    // Prepare the SQL statement
    $query = "INSERT INTO products (name, buying_price, selling_price, displayable)
              VALUES ('$name', $buyingPrice, $sellingPrice, $displayable);";

    // Execute the query
    if (mysqli_query($connection, $query)) {
        echo "Product added successfully.";
    } else {
        echo "Error: " . mysqli_error($connection);
    }

    mysqli_close($connection);
}

include 'header.php';
?>

<fieldset>
    <legend><b> ADD PRODUCT </b></legend>
    <form  method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <table>
            <tr>
                <td id="addprod">Name</td>
                <td id="addprod"> : <input type="text" name="name" id="name" required> </td>
            </tr>
            <tr>
                <td id="addprod">Buying Price</td>
                <td id="addprod"> : <input type="text" name="buyprice" id="buyprice" required> </td>
            </tr>
            <tr>
                <td id="addprod">Selling Price</td>
                <td id="addprod"> : <input type="text" name="sellprice" id="sellprice" required> </td>
            </tr>
        </table>
        <hr>
        <input type="checkbox" name="display"> <label for="display">Display</label>
        <hr>
        <input type="submit" value="Submit">
    </form>
</fieldset>

<?php include 'footer.php'; ?>
