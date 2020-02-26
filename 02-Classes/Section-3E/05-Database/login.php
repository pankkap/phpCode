<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    Username: <input type="text" name="un"><br><br>
    password: <input type="password" name="pw"><br><br>
    
    <input type="submit" name="b1" value="Login">
    </form>
</body>
</html>


<?php

include 'connection.php';
session_start();

if(isset($_POST['b1']))
{
$uname = $_POST['un'];
$pwd = $_POST['pw'];

$_SESSION['user'] = $uname;

$query = "select * from secetable where username='$uname' && password='$pwd'";

$data = mysqli_query($conn, $query);

$tot = mysqli_num_rows($data);


if($tot==1)
{

    header('location:home.php');
}
else
{
    echo "Login Failed";
}
}
?>