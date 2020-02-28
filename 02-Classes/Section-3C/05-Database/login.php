<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    Username: <input type="text" name="t1"><br><br>
    Password: <input type="password" name="t2"><br><br>

    <input type="submit" name="b1" value="LOGIN">
    
    </form>
</body>
</html>


<?php
include 'connection.php';
session_start();

if(isset($_POST['b1']))
{
$uname = $_POST['t1'];
$pwd = $_POST['t2'];


$query = "select * from secctable where username='$uname' && password='$pwd'";

$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);
// // echo $total;

if($total)
{
    // echo "Login Succesful";
    $_SESSION['logged_user']=$uname;

    header('location:home.php');

}
else
{
    echo "Login Failed";
}



}



?>