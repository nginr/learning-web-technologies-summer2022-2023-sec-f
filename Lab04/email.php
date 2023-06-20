<?php
$EMAILERROR="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["Email"])) {
        $EMAILERROR = "Email is required.";
} elseif (!filter_var($_POST["Email"], FILTER_VALIDATE_EMAIL)) {
        $EMAILERROR = "Invalid email format.";
    }
}

echo "<form action=" . htmlspecialchars($_SERVER['PHP_SELF']) . " method=\"post\" style=\"display: inline-block;\">";
echo "<fieldset>";
echo "<legend>EMAIL</legend>";
echo "<input type=\"email\" name=\"Email\"><br>";
echo "<small> " . $EMAILERROR . " </small>";
echo "<hr><input type=\"submit\" name=\"submit\" >";
echo "</fieldset>";
echo "</form>";

?>
