<?php
// variable argument in function 

 

function sum(...$nums)  {       // varibale length arguments
    
    $sum = 0;
    
    foreach ($nums as $n) {
        $sum += $n;
    }
    
    return $sum;
}

echo sum(1, 2, 3) . "\n";
echo sum(5,5,5,5) . "\n";
echo sum(1, 2, 3, 4, 5) . "\n";
echo sum(5) . "\n";


?>