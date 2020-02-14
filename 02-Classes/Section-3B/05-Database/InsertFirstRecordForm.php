<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert Record</title>
</head>
<body>
   <form action="" method="POST">
   
   <label for="">Rollno. </label>
   <input type="number" name="t1"><br><br>
   
   <label for="">Name </label>
   <input type="text" name="t2"><br><br>
   <label for="">Class </label>

   <input type="text" name="t3" ><br><br>

    <input type="submit" name="b1" value="Insert Record">

   </form> 
</body>
</html>



<?php

include_once 'connection.php';

if(isset($_POST['b1']))
{
    $roll = $_POST['t1'];

    $name = $_POST['t2'];

    $class = $_POST['t3'];

    if($roll!="" and $name!="" && $class!="")
    {


    $query = "insert into secbtable values('$roll','$name','$class')";


    //"INSERT INTO `secbtable`(`rollno`, `name`, `class`) VALUES (110,'manish kumar','3B')


    $data = mysqli_query($conn,$query);

        if($data)
        {
            echo "Data Inserted Succesfully";
        }
        else
        {
            echo "Data not Inserted";
        }

}
else{
    echo "<p style='color:red'> All Fields are required</p>";
}

}
?>