<?php

require_once '../models/dbconn.php';

$suffix = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $searchinput = $_POST['searchinput'];
    $suffix = "WHERE emp_name LIKE '%$searchinput%'";
}

$query = "SELECT * FROM $table $suffix";
$result = mysqli_query($connection, $query);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '
            <tr>
                <td>' . $row['emp_name'] . '</td>
                <td>' . $row['company_name'] . '</td>
                <td>' . $row['contactno'] . '</td>
                <td>' . $row['username'] . '</td>
                <td><a href="edit_employer.view.php?id=' . $row['emp_id'] . '">edit</a></td>
                <td><a href="delete_employer.view.php?id=' . $row['emp_id'] . '">delete</a></td>
            </tr>';
    }
} else {
    echo "<tr><td colspan=\"6\">0 results found</td></tr>";
}

mysqli_close($connection);
