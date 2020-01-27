<?php
declare (strict_types=1);   // strict requirement for PHP 
// function in php

function sum(int $num1, float $num2=0) : int
{
    $c = $num1 + $num2;
   return (int) $c;

}
echo sum(5,20.2);

?>