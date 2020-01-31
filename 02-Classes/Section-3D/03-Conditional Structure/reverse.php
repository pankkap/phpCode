<?php  
$num = 23456;  
$num1 = $num;
$revnum = 0;  
while ($num > 1)  
{  
$rem = $num % 10;  
$revnum = ($revnum * 10) + $rem;  
$num = ($num / 10);   
} 
if($num1==$revnum) 
echo "Number is Palindrom";  
else {
    echo "Number is not Palindrom";  
}
?>  