<?php
declare(strict_types=1);    // php 7 

// Functions with strict specifications


function sum1(int $num1, int $num2)   // function with arguments
{
    echo "\n value passed as arguments: $num1 "."and"."  $num2";
    $c = $num1 + $num2;
    return $c;
}

echo "\nThe result after return: ".sum1(15,10);



?>