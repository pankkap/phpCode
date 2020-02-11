<!DOCTYPE html>
<html lang="en">
<head>
   <style>
   td{
       padding:10px;
   }
   </style>
</head>
<body>
    
<?php
require_once 'connection.php';

$query = "select * from crudtable";

$data = mysqli_query($conn,$query);     // Execute 

$total = mysqli_num_rows($data);

// echo "Total no of Records: $total";
// $result = mysqli_fetch_assoc($data);
// echo $result;
// echo $result['rollno']." ".$result['name']." ".$result['class']."<br>;


if($total!=0)
{
?>
    <table>
    <thead>
        <tr>
            <th>RollNo.</th>
            <th>Name</th>
            <th>Class</th>
        </tr>
    </thead>
    

    <?php

    while($result = mysqli_fetch_assoc($data))
    {
        echo "<tr>
                <td>".$result['rollno']."</td>
                <td>".$result['name']."</td>
                <td>".$result['class']."</td>
                <td><a href='update.php'?rn=$result['rollno']</td>
                <td>".$result['class']."</td>
            </tr>";
    }
}
else
{
    echo "No record found";
}

?>
</table>
</div>
</body>
</html>
