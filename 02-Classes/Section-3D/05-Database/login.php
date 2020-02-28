<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        Username: <input type="text" name="t1"><br><br>
        Password: <input type="password" name="t2"><br><br>
        <input type="submit" name="b1" Value="LOGIN">


    </form>
</body>
</html>



<?php
include 'connection.php';

if(isset($_POST['b1']))
{
    $uname = $_POST['t1'];
     $pwd = $_POST['t2'];


    $query = "select * from secdtable where username='$uname' && password='$pwd'";

    $data = mysqli_query($conn, $query);
    
  $tot = mysqli_num_rows($data);

   if($tot==1)
   {
       echo "Login Succesful";
   }
   else{
       echo "Login Failed";
   }


}


?>
