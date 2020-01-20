<?php
// conditional statements
/*
1. if structure
2. if-else
3. if-elseif-else
4. nested if-else
5. switch statment
*/

// syntax
/* 
    if(valid-condition)
    {
        statements
    }
*/

extract($_POST);
if(isset($sub))
{
    $num = $data;
    if($data>0)
    {
        echo "Number is POSITIVE";
    }
    else{
        echo "Number is NEGATIVE";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="POST">
<input type="text" name="data"><br><br>
<input type="submit" name="sub">

</form>
    
</body>
</html>