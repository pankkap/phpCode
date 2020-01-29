<?php

/*
// Loops in PHP
1. while loop
2. while do 
3. for loop
*/

$a=1;
while ($a<=10)
{
    echo $a."\n";
    $a++;
}

$b =10;

do
{
    echo $b."\n";
    $b--;
}while ($b>=1);

// for loop

echo "\n\nFor Loop\n";
for($c=5;$c<=50;$c+=5)
echo $c."\n";


?>

