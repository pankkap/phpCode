<?php
// Control Structure

/* 1. If statement

    syntax:

        if(valid-condition)
        {
            statements
        }

*/
extract($_POST);
if(isset($sub))
{
$num = $getValue;

// if statement

if($num>0)
{
    echo "Number is POSITIVE";
}
else
{
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
    <input type="number" name="getValue"><br><br>
    <input type="submit"name="sub">
    </form>
</body>
</html>



