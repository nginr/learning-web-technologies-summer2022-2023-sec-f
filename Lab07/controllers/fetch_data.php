<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $sql = "SELECT * FROM $table WHERE name LIKE '%$searchInput%'";
    $result = mysqli_query($connection, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo " <tr>
                        <td>" . $row['name'] . "</td>
                        <td>" . $bp . "</td>
                        <td>" . $sp . "</td>
                        <td>" . $profit . "</td>
                        <td><a href='edit_product.php?id=" . $row['p_id'] . "'>edit</a></td>
                        <td><a href='delete_product.php?id=" . $row['p_id'] . "'>delete</a></td>
                    </tr>";
        }
    } else {
        echo "<tr><td>0 results found</td></tr>";
    }
    mysqli_close($connection);
}
