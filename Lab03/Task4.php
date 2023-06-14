<?php

$NUMS = [ 23, 12, 90 ];

echo '<pre>', var_dump($NUMS), '</pre>';

if ($NUMS[0] > $NUMS[1]) {
    if ($NUMS[0] > $NUMS[2]) {
        print( "<h3>" . "The Number: " . $NUMS[0] . " is the <b> LARGEST </b> </h3>");
    } else {
        print( "<h3>" . "The Number: " . $NUMS[2] . " is the <b> LARGEST </b> </h3>");
    }
} else {
    if ($NUMS[1] > $NUMS[2]) {
        print( "<h3>" . "The Number: " . $NUMS[1] . " is the <b> LARGEST </b> </h3>");
    } else {
        print( "<h3>" . "The Number: " . $NUMS[2] . " is the <b> LARGEST </b> </h3>");
    }
}


?>
