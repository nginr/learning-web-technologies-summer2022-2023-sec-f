<?php
require_once 'dbconn.php';

$query = "SELECT p_id, name, buying_price, selling_price FROM $table WHERE displayable = 1";
$result = mysqli_query($connection, $query);

include 'header.php';

if ($result) {
    echo '
    <fieldset>
        <legend><b> DISPLAY </b></legend>
        <table id="distable">
            <tr>
                <th>Name</th>
                <th>Profit</th>
                <th colspan="2">Operations</th>
            </tr>';

    while ($row = mysqli_fetch_assoc($result)) {
        $profit = $row['selling_price'] - $row['buying_price'];
        echo '
        <tr>
            <td>' . $row['name'] . '</td>
            <td>' . $profit . '</td>
            <td><a href="edit_product.php?id=' . $row['p_id'] . '">edit</a></td>
            <td><a href="delete_product.php?id=' . $row['p_id'] . '">delete</a></td>
        </tr>';
    }

    echo '
        </table>
    </fieldset>';
}
else {
    echo 'Error: ' . mysqli_error($connection);
}

mysqli_close($connection);
include 'footer.php';
?>
