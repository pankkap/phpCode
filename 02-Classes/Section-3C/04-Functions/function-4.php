<?php
// return type specification 
declare (strict_types=1);

function sum1(int $num1, float $num2) : int
{
    echo "\n This is function with arguments";
    $c = $num1 + $num2;
    return (int) $c;
}

echo "\n Return from Function: ".sum1(25,10.5);


?>