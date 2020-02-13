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
    <label for="">RollNo</label>
    <input type="text" name="t1"><br><br>
    <label for="">Name</label>
    <input type="text" name="t2"><br><br>
    <label for="">Class</label>
    <input type="text" name="t3"><br><br>
    <input type="submit" value="submit" name="b1"><br><br>
    </form>
</body>
</html>

<?php

if(isset($_POST['b1']))
{
    $roll = $_POST['t1'];
    $name = $_POST['t2'];
    $class = $_POST['t3'];
    
    if($roll!="" and $name!="" && $class!="")
    {

        include 'connection.php';

        // $query = "INSERT INTO `secctable`(`rollno`, `name`, `class`) VALUES (104,'manoj','3C')";

        $query = "INSERT INTO secctable VALUES ('$roll','$name','$class')";

        $data = mysqli_query($conn,$query);

        if($data)
        {
            echo "Data inserted in Database";
        }
        else
        {
            echo "Record not Inserted";
        }

    }
    else
    {
        echo "<p style='color:red'>All Fields are Required</p>";
    }

}

?>
