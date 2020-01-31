<?php 
// call by value 
// call by reference



function selfmultiply(&$number)
{
    $number = ($number * $number);
}

$number = 5;
echo "Before Function Call\n";
echo $number;

Selfmultiply($number);
echo "\nAfter Function Call\n";
echo $number;
                       

?>