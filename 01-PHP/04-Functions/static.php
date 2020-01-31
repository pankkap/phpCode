<?php 
  
// function to demonstrate static variables 
function static_var() 
{    
    // static variable 
    static $num = 5; 
           $sum = 2; 
      
    $sum++; 
    $num++; 
      
    echo $num, "\n"; 
    echo $sum, "\n"; 
} 
  
// first function call 
static_var(); 
  
// second function call 
static_var(); 
  
?> 
