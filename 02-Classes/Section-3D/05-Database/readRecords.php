<style>
td{
    padding:10px;
    
}
</style>

<?php
include 'connection.php';

$query = "SELECT * FROM secdtable";

$data = mysqli_query($conn,$query);

$totRec = mysqli_num_rows($data);

if($totRec)
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
    echo "Database has no Records";
}



?>
  </table>