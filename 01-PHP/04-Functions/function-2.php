<?php
// User-defined function

function abc()  //  Function defination
{
echo "This  is my user defined function ";

}

Abc();      // function call


function sum($num1, $num2)
{
    echo "\n This is function with arguments";
    $c = $num1 + $num2;
    echo "\n SUm of numbers: ".$c;
}

sum(5,10);



function sum1($num1, $num2)
{
    echo "\n This is function with arguments";
    $c = $num1 + $num2;
    return $c;
}

echo "\n Return from Function: ".sum1("25",10);



?>


