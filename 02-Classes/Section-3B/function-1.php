<?php
// Functions

 

function abc()      // function defination
{
    echo "this is a function in PHP";
}
Abc();            // function call

function sum($num1,$num2)   // function with arguments
{
    echo "\n value passed as arguments: $num1 "."and"."  $num2";
    $c = $num1 + $num2;
    echo "\nSum of arguments:".$c ;
}

sum(5,10);


function sum1($num1,$num2)   // function with arguments
{
    echo "\n value passed as arguments: $num1 "."and"."  $num2";
    $c = $num1 + $num2;
    return $c;
}

echo "\nThe result after return: ".sum1(15,"10");



?>