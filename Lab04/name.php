<?php
$NAMEERROR="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["Name"])) {
        $NAMEERROR =  "Name is required.";
    } else {
        $name = $_POST["Name"];
        $name = trim($name);

        $firstLetter = substr($name, 0, 1);
        if (!preg_match("/^[a-zA-Z]/", $firstLetter)) {
            $NAMEERROR = "Name should start with a letter.";
        } else {
            if (!preg_match("/^[a-zA-Z.\- ]+$/", $name)) {
                $NAMEERROR = "Name can only contain letters, period, dash, and spaces.";
            } else {
                $words = explode(" ", $name);
                if (count($words) < 2) {
                    $NAMEERROR = "Name should contain at least two words.";
                }
            }
        }
    }
}

echo "<form action=" . htmlspecialchars($_SERVER['PHP_SELF']) . " method=\"post\" style=\"display: inline-block;\">";
echo "<fieldset>";
echo "<legend>NAME</legend>";
echo "<input type=\"text\" name=\"Name\"><br>";
echo "<small>" . $NAMEERROR . "</small>";
echo "<hr> <input type=\"submit\" name=\"submit\" >";
echo "</fieldset>";
echo "</form>";

?>
