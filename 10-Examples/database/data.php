<?php
require 'connect.php'; 
extract($_POST);

if (isset($sub))
{
    if($iid!="" && $fna!="" && $lna!="" && $ag!="")
    {
        $id = $iid;
        $fn = $fna;
        $ln = $lna;
        $age = $ag; 

        $query= "INSERT INTO people VALUES('$id','$fn','$ln','$age')";
        $data = mysqli_query($conn,$query);

            if($data)
            {
                echo "Data Inserted Successfully";
            }
            else
            {
                echo "Data Not Inserted";
            }
    }
    else
    {
        echo "All fields are required";

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
    <form action="" method = "POST">
    <input type="text" name="iid"> <b>Enter Student Id</b>  <br><br>   
    <input type="text" name="fna"> <b>Enter Student First Name</b>  <br><br>
    <input type="text" name="lna"> <b>Enter Student Last Name</b>  <br><br>
    <input type="text" name="ag"> <b>Enter Student Age</b>  <br><br>
    <input type="submit" value="Submit" name="sub"><br><br>
    </form>
</body>
</html>