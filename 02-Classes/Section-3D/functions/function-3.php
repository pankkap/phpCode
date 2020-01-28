<?php
/*
------variable scope------

1. Local variable (scope)
2. Global variable (Scope)
3. Static (scope)



$num =5;

function abc1(){
    $num = 10;      // local variable
    echo $num;
    
}

function abc2(){
    global $num;    // global  variable
    $num ++;
    echo $num;
    
}

abc1();
echo $num;

abc2();
echo $num;
*/

function abc3(){
    static $sum=0;      // static variable
    $sum ++;
    echo $sum."\n";
    
}

abc3();
abc3();
abc3();






?>
