
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
<br>
<div class="container">
<div class="row">

    <div class="col-12">
    <div class="card mb-4">
        <div class="card-body text-white bg-primary p-1">
            <h3 class="text-center">CRUD OPERATIONS</h3>
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