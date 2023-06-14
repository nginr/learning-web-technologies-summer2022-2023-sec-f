<?php

$NUMS = [1, 2, 3, 34, 90, 102, 546, 89, 53, 88];
$SearchTerm = 15;
$not = False;

echo '<pre>', var_dump($NUMS), '</pre>';

for ($i = 0; $i < sizeof($NUMS); $i++) {
    if ($NUMS[$i] == $SearchTerm) {
        $not = True;
        print( "<p>" . "The Number: " . $SearchTerm . " exists in the array at index <b>$i</b>. </p>");
        break;
    }
 }
if (!$not) {
    print("<p> The Number: " . $SearchTerm . " <b>does not exist</b> in the array." . " </p>");
}

$SearchTerm = 90;
$not = False;
for ($i = 0; $i < sizeof($NUMS); $i++) {
    if ($NUMS[$i] == $SearchTerm) {
        $not = True;
        print( "<p>" . "The Number: " . $SearchTerm . " exists in the array at index <b>$i</b>. </p>");
        break;
    }
}
if (!$not) {
    print("<p> The Number: " . $SearchTerm . " <b>does not exist</b> in the array." . " </p>");
}

?>
