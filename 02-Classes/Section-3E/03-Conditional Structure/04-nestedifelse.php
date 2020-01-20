<?php

// defining variables
$number1 = 40;
$number2 = 12;

if ($number1 != $number2) {
    echo 'number1 is different from number2';
    echo '<br>';
    if ($number1 > $number2) {
        echo 'number1 is greater than number2';
    } else {
        echo 'number2 is greater than number1';
    }
} else {
    echo 'number1 is equal to number2';
}
?>