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
    <form action="" method="POST">
    <label for="">Rollno:</label>
    <input type="text" name="rn"><br><br>
    <label for="">Name:</label>
    <input type="text" name="na"><br><br>
    <label for="">Class:</label>
    <input type="text" name="cl"><br><br>
    <input type="submit" name="sub" Value="Submit Record"><br><br>
    </form>
</body>
</html>

<?php

extract($_POST);
if(isset($_POST['sub']))
{
    $roll = $rn;
    $nam = $na;
    $class = $cl;

    if($roll!="" && $nam!="" && $class!="")
    {
        $query = "insert into secetable values('$roll','$nam','$class')";

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