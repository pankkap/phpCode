<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert Record</title>
</head>
<body>
   <form action="" method="POST" enctype="multipart/form-data">
   
   <label for="">Rollno. </label>
   <input type="number" name="t1"><br><br>
   
   <label for="">Name </label>
   <input type="text" name="t2"><br><br>
   <label for="">Class </label>

   <input type="text" name="t3" ><br><br>

   <label>Upload Image: </label> 
   <input type="file" name="file"><br><br>
    
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

    echo $file = $_FILES['file']['name'];
    
    echo $upload = "upload/".$file;
    
    
    echo (move_uploaded_file($_FILES['file'][tmp_name],$upload));

    if($roll!="" and $name!="" && $class!="")
    {


    $query = "insert into secetable values('$roll','$name','$class','$upload','','')";


    //"INSERT INTO `secbtable`(`rollno`, `name`, `class`) VALUES (110,'manish kumar','3B')


    $data = mysqli_query($conn,$query);

        if($data)
        {
            echo "<p style='color:green'>Record Inserted Succesfully <a href='http://localhost/phpCode/02-Classes/Section-3E/05-Database/read.php'>Click this to see updated Records</a>";
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