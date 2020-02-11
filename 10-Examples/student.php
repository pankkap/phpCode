<?php
extract($_POST);
 
 
if(isset($sub))
{
    $name = $text1;
    $email = $text2;
    $mobile = $text3;

    echo "<ul>
         <li>$name</li>
         <li>$email</li>
         <li>$mobile</li>
         </ul>";
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
    <h2>Student Details</h2>
    <input type="text" name="text1"placeholder="Enter Student Name"><br><br>
    <input type="email" name="text2"placeholder="Enter Student Email-ID"><br><br>
    <input type="number" name="text3"placeholder="Enter Mobile Number "><br><br>
    <button type="submit" name="sub">Submit</button>
</form>

</html>