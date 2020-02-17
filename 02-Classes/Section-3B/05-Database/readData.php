<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" ">
</head>
<body>
    
</body>
</html>



<?php
include_once 'connection.php';

$query = "select * from secbtable";

$data = mysqli_query($conn,$query);

$totRec = mysqli_num_rows($data);


if($totRec!=0)
{
    ?>
<div class="container">
<table class="table table-striped">
  <thead class="thead-dark">
        <tr>
            <th>Rollno</th>
            <th>Name</th>
            <th>Class</th>
            <th class="text-center" colspan='2' >Operations</th>
        </tr>
</thead>

    <?php

    while($result = mysqli_fetch_assoc($data))

    echo "
        <tr>
            <td>".$result['rollno']."</td>
            <td>".$result['name']."</td>
            <td>".$result['class']."</td>
    
            <td><a href='update.php?rn=$result[rollno]&nm=$result[name]&cl=$result[class]'>Edit</a></td>
            <td>Delete</td>
        </tr>
    
    
    ";


}
else
{
    echo "No  records found";
}



?>

</table>



</div>