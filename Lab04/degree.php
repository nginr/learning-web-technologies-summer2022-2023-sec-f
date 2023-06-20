<?php
$DEGREEERROR="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedDegrees = isset($_POST["degree"]) ? $_POST["degree"] : [];
    if (count($selectedDegrees) < 2) {
        $DEGREEERROR = "Please select at least two degrees";
    }
}

echo "<form action=" . htmlspecialchars($_SERVER['PHP_SELF']) . " method=\"post\" style=\"display: inline-block;\">";
echo "<fieldset>";
echo "<legend>DEGREE</legend>";
echo "<input type=\"checkbox\" name=\"degree\"> <label for=\"degree\">SSC</label>";
echo "<input type=\"checkbox\" name=\"degree\"> <label for=\"degree\">HSC</label>";
echo "<input type=\"checkbox\" name=\"degree\"> <label for=\"degree\">BSc</label>";
echo "<input type=\"checkbox\" name=\"degree\"> <label for=\"degree\">MSc</label> <br>";
echo "<small> " . $DEGREEERROR . " </small>";
echo "<hr>  <input type=\"submit\" name=\"submit\" >";
echo "</fieldset>";
echo "</form>";

?>
