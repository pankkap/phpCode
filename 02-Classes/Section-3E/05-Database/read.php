
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
<body>
<div class="container">
    <div class="card">
        <div class="card-body text-white bg-primary p-1">
            <h2 class="text-center">CRUD Operations</h2>
        </div>
    </div>
</div>    

</body>
</html>        
<style>
td{
    padding:10px;

}
</style>

<?php
include 'connection.php';

$query = "SELECT * FROM secetable";

$data = mysqli_query($conn,$query);

$totRec = mysqli_num_rows($data);







// echo $totRec;

if($totRec!=0)
{
    ?>
    <div class="container">
<table class="table table-striped">
  <thead class="thead-dark">
        <tr>
            <th>RollNo.</th>
            <th>Name</th>
            <th>Class</th>
            <th class="text-center"colspan="2">Operations</th>
        </tr>
</thead>
       
    

    <?php

     while($result = mysqli_fetch_assoc($data))
     {
        echo "

        <tr>
            <td>".$result['rollno']."</td>
            <td>".$result['name']."</td>
            <td>".$result['class']."</td>
            <td><a href='update.php?rn=$result[rollno]&nm=$result[name]&cl=$result[class]'>Edit</a></td>
            <td><a href='delete.php?rn=$result[rollno]' onclick = 'return DeleteRecord()'>Delete</a></td>
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
<script>
    function DeleteRecord()
    {
        return confirm("Do u want to delete");
    }
</script>