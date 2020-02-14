<style>
td
{
    padding:10px;
}
</style>



<?php
include_once 'connection.php';

$query = "select * from secbtable";

$data = mysqli_query($conn,$query);

$totRec = mysqli_num_rows($data);


if($totRec!=0)
{
    ?>

    <table border=1>
        <tr>
            <th>Rollno</th>
            <th>Name</th>
            <th>Class</th>
        </tr>
    

    <?php

    while($result = mysqli_fetch_assoc($data))

    echo "
        <tr>
            <td>".$result['rollno']."</td>
            <td>".$result['name']."</td>
            <td>".$result['class']."</td>
        </tr>
    
    
    ";


}
else
{
    echo "No  records found";
}



?>

</table>



