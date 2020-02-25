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

$query = "SELECT * FROM crudtable";

$data = mysqli_query($conn,$query);

$totRec = mysqli_num_rows($data);
 






// echo $totRec;

if($totRec!=0)
{
    ?>
    <table >
        <tr>
            <th>RollNo.</th>
            <th>Image</th>
            <th>Name</th>
            <th>Class</th>
            <th colspan="2">Operations</th>
        </tr>
    

    <?php

     while($result = mysqli_fetch_assoc($data))
     {
        echo "

        <tr>
            <td>".$result['rollno']."</td>
            <td><img src='".$result['file']."' width='50'></td>
            <td>".$result['name']."</td>
            <td>".$result['class']."</td>
            <td><a href='update5.php?rn=$result[rollno]&nm=$result[name]&cl=$result[class]'>Edit</td>
            <td><a href='delete5.php?rn=$result[rollno]' onclick = 'return DeletRecord()'>Delete</td>
             
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

<script>
function DeletRecord()
{
    return confirm("Do you want to delete the Record");
}
</script>

