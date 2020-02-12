<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
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

$result = mysqli_fetch_assoc($data);






// echo $totRec;

if($totRec!=0)
{
    ?>
    <table border="1">
        <tr>
            <th>RollNo.</th>
            <th>Name</th>
            <th>Class</th>
        </tr>
    

    <?php

     while($result = mysqli_fetch_assoc($data))
     {
        echo "

        <tr>
            <td>".$result['rollno']."</td>
            <td>".$result['name']."</td>
            <td>".$result['class']."</td>
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