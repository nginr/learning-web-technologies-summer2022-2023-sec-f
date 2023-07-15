<?php
    $_SESSION['title'] = "Password Recovery";
    include "header.php";
?>

<div class="maincontent centercontent blackborder">
    <fieldset>
        <legend><b> FORGOT PASSWORD </b></legend>
        <form>
            <table><tr>
                <td width="80px"> Email </td>
                <td>
                   : <input type="text" placeholder="Enter Email" name="email" id="email" required>
                </td>
            </tr></table>
            <hr>
            <input type="submit" name="submit" >
        </form>
    </fieldset>
</div>

<?php include "footer.php"; ?>
