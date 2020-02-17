<?php
include 'connection.php';
echo $_GET['rn'];
echo $_GET['nm'];
echo $_GET['cl'];


?> 

<?php
include_once 'connection.php';
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
<form action="" method="GET">
    <label for="">Rollno:</label>
    <input type="text" name="rn" value="<?php echo $_GET['rn']; ?>"><br><br>
    <label for="">Name:</label>
    <input type="text" name="na" value="<?php echo $_GET['nm']; ?>"><br><br>
    <label for="">Class:</label>
    <input type="text" name="cl" value="<?php echo $_GET['cl']; ?>"><br><br>
    <input type="submit" name="sub" Value="Update Record"><br><br>
    </form>
</body>
</html>

<?php

$c = extract($_GET);


if(isset($_GET['sub']))
{
    $roll = $rn;
    
    $nam = $na;
     
    $class = $cl;
     

    if($roll!="" && $nam!="" && $class!="")
    {
        $query = "UPDATE secetable SET name = '$nam', class ='$class' where rollno='$roll '";

        $data = mysqli_query($conn,$query);

        if($data)
        {
            echo "Record Inserted";
        }
        else
        {
            echo "Record not Inserted";
        }
    }
    else
    {
        echo "All Fields are Required";
    }

}






?>
