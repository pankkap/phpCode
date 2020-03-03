<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    Username: <input type="text" name="un"><br><br>
    Password: <input type="password" name="pw"><br><br>
    <input type="submit" name="submit" Value="LOGIN">
    
    </form>
</body>
</html>


<?php
include 'connection.php';
session_start();

if(isset($_POST['submit']))
{
     $Uname = $_POST['un'];
     $Pwd = $_POST['pw'];

    $query = "select * from secdtable where username='$Uname' && password='$Pwd'";

    $data = mysqli_query($conn, $query);

    

    $tot = mysqli_num_rows($data);

    if($tot==1)
    {
        $_SESSION['login_user']=$Uname;
        // echo "<br>Login Succesfully";
        header('location:home.php');
    }
    else{
        echo "<br>Login Failed";
    }


}

?>

