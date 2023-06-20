<?php
$DOBERROR="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $day = $_POST["day"];
    $month = $_POST["month"];
    $year = $_POST["year"];

    if (empty($day) || empty($month) || empty($year)) {
        $DOBERROR = "Date of Birth is required";
    } elseif (!preg_match("/^\d{1,2}$/", $day) || !preg_match("/^\d{1,2}$/", $month) || !preg_match("/^\d{4}$/", $year)) {
        $DOBERROR = "Invalid Date of Birth format";
    } elseif ($day < 1 || $day > 31 || $month < 1 || $month > 12 || $year < 1953 || $year > 1998) {
        $DOBERROR = "Invalid Date of Birth range";
    } else {
        $DOBERROR = "";
    }
}

echo "<form action=" . htmlspecialchars($_SERVER['PHP_SELF']) . " method=\"post\" style=\"display: inline-block;\">";
echo "<fieldset>";
echo "<legend>Date of Birth</legend>";
echo "<input type=\"text\" name=\"day\" placeholder=\"dd\" maxlength=\"2\" size=\"2\"> / ";
echo "<input type=\"text\" name=\"month\" placeholder=\"mm\" maxlength=\"2\" size=\"2\"> / ";
echo "<input type=\"text\" name=\"year\" placeholder=\"yyyy\" maxlength=\"4\" size=\"4\"> <br>";
echo "<small> " . $DOBERROR . " </small>";
echo "<hr> <input type=\"submit\" name=\"submit\" >";
echo "</fieldset>";
echo "</form>";

?>
