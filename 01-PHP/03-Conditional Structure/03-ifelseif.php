<?php
    //defining a variable
    $marks = 55;
    
    if ($marks>79){
        echo "A";
    }
    elseif($marks<=79 and  $marks>60) { 
        echo "B";
    }
    elseif($marks<=60 && $marks>50) { 
        echo "C";
    }
    elseif($marks=50) { 
        echo "D";
    }
    else{
        echo "F";
    }

?>