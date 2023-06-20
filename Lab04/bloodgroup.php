<?php
$BLOODGROUPERROR="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedBloodGroup = $_POST["blood-group"] ?? "";

    if (empty($selectedBloodGroup)) {
        $BLOODGROUPERROR = "Please select a blood group";
    }
}

echo "<form action=" . htmlspecialchars($_SERVER['PHP_SELF']) . " method=\"post\" style=\"display: inline-block;\">";
echo "<fieldset>";
echo "<legend>BLOOD GROUP</legend>";
echo "<select name=\"blood-group\" id=\"blood-group\">
  <option value=\"\"> --- </option>
  <option value=\"A+\"> A+ </option>
  <option value=\"A-\"> A- </option>
  <option value=\"B+\"> B+</option>
  <option value=\"B-\"> B- </option>
  <option value=\"AB+\"> AB+</option>
  <option value=\"AB-\"> AB- </option>
  <option value=\"O+\"> O+</option>
  <option value=\"O-\"> O- </option>
</select><br>
";
echo "<small> " . $BLOODGROUPERROR . " </small>";
echo "<hr> <input type=\"submit\" name=\"submit\" >";
echo "</fieldset>";
echo "</form>";

?>
