<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert Record</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
   <form action="" method="POST" enctype="multipart/form-data">
   
   <div class="form-group">
    <label for="rollno">RoolNo.</label>
    <input type="number" class="form-control" id="rollno" name="t1">
     
  </div>
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="t2">
  </div>
  <div class="form-group">
    <label for="class">Class</label>
    <input type="text" class="form-control" id="class" name="t3">
  </div>
  <div class="form-group">
    <label for="image">Upload Image</label>
    <input type="file" class="form-control" id="image" name="file">
  </div>

  
    
    <input class=" btn btn-primary"type="submit" name="b1" value="Insert Record">
    
    
   </form> 



<?php

include_once 'connection.php';

if(isset($_POST['b1']))
{
    $roll = $_POST['t1'];

    $name = $_POST['t2'];

    $class = $_POST['t3'];

     $file = $_FILES['file']['name'];
    
     $upload = "upload/".$file;
    
    
     (move_uploaded_file($_FILES['file'][tmp_name],$upload));

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