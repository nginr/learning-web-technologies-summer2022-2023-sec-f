<?php
include 'includes/header.inc.php';
?>

<div class="centerdiv">
    <div>
        <fieldset>
            <table>
                <tr>
                    <td colspan="3"> Users </td>
                </tr>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>User Type</td>
                </tr>

                <?php

                require_once '../controllers/user.controller.php';
                $uc = new UserController();
                $users = $uc->getUsers();
                foreach ($users as $user) {
                    echo '<tr>';
                    foreach ($user as $u) {
                        echo '<td>' . $u . '</td>';
                    }
                    echo '</tr>';
                }

                ?>

                <tr>
                    <td colspan="3"> <a href="home.view.php">Go Home</a> </td>
                </tr>
            </table>
        </fieldset>
    </div>
</div>

<?php
include 'includes/footer.inc.php';
?>
