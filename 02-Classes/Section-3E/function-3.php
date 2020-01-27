<?php
// strict requirement of PHP 7 
declare (strict_types=1);

function sum1(int $num1, int $num2)
{
    echo "\n This is function with arguments";
    $c = $num1 + $num2;
    return $c;
}

echo "\n Return from Function: ".sum1(25,10);



?>