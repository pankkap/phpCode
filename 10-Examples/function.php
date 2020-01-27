<?php 

declare(strict_types=1);

function selfmultiply(&$number)
{
    $number = ($number * $number);
}

$number = 5;
echo $number;

Selfmultiply($number);
echo $number;


$a = rand(1,100);        // Built-in function 
                        // generate random number

echo $a;                        

?>