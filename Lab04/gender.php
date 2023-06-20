<?php
$GENDERERROR="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["gender"])) {
        $GENDERERROR = "Please select a gender";
    }
}


echo "<form action=" . htmlspecialchars($_SERVER['PHP_SELF']) . " method=\"post\" style=\"display: inline-block;\">";
echo "<fieldset>";
echo "<legend>GENDER</legend>";
echo "<input type=\"radio\" name=\"gender\" value=\"Male\">   <label for=\"gender\">Male</label>";
echo "<input type=\"radio\" name=\"gender\" value=\"Female\"> <label for=\"gender\">Female</label>";
echo "<input type=\"radio\" name=\"gender\" value=\"Other\">  <label for=\"gender\">Other</label><br>";
echo "<small> " . $GENDERERROR . " </small>";
echo "<hr> <input type=\"submit\" name=\"submit\" >";
echo "</fieldset>";
echo "</form>";

?>
