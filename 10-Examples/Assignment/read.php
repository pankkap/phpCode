
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<style>
td{
    padding:10px;

}
</style>
<body>
<div class="container-fluid">
<div class="row">
          <div class="col-xs-offset-2 col-sm-4 form-group">
          <br>
          <div class="row">
          <div class="col-sm-12 form-group">
          <div class="card">
        <div class="card-body text-white bg-primary p-1">
            <h4 class="text-center">INSERT RECORD</h4>
        </div>
        </div>
        </div>
        </div>

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
          </div>
          <div class="col-sm-8 form-group">
          <br>
          <div class="card mb-2">
        <div class="card-body text-white bg-primary p-1">
            <h4 class="text-center">CRUD OPERATIONS</h4>
        </div>
    </div>
    

        


<?php
include 'connection.php';

$query = "SELECT * FROM secetable";

$data = mysqli_query($conn,$query);

$totRec = mysqli_num_rows($data);







// echo $totRec;

if($totRec!=0)
{
    ?>
    
<table class="table table-striped">
  <thead class="thead-dark">
        <tr>
            <th>RollNo.</th>
            <th>Photo</th>
            <th>Name</th>
            <th>Class</th>
            <th class="text-center">Operations</th>
        </tr>
</thead>
       
    

    <?php

     while($result = mysqli_fetch_assoc($data))
     {
        echo "

        <tr>
            <td>".$result['rollno']."</td>
            <td><a href='".$result['photo']."'><img src='".$result['photo']."' width='50'></a></td>
            <td>".$result['name']."</td>
            <td>".$result['class']."</td>
            <td class='text-center'><h4><a class='badge badge-warning' href='profile.php?rn=$result[rollno]&nm=$result[name]&cl=$result[class]&pic=$result[photo]'>Profile</a> | 
            <a class='badge badge-primary' href='update.php?rn=$result[rollno]&nm=$result[name]&cl=$result[class]'>Edit</a> | 
            <a class='badge badge-danger'  href='delete.php?rn=$result[rollno]' onclick = 'return DeleteRecord()'>Delete</a></h4></td>
        </tr>

        ";
         
     }
}
else
{
    echo "No Records found";
}




?>
</table>

<div class="text-center">
<a href="http://localhost/phpCode/02-Classes/Section-3E/05-Database/InsertRecordForm.php">+ Add More Records</a>
</div>
          </div>
    </div>
</div>

<script>
    function DeleteRecord()
    {
        return confirm("Do u want to delete");
    }
</script>
</body>
</html>