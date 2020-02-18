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
            <th colspan='2'>Operations</th>
        </tr>
  



    <?php

    while($result = mysqli_fetch_assoc($data))
    {
        echo "
            <tr>
                <td>".$result['rollno']."</td>
                <td>".$result['name']."</td>
                <td>".$result['class']."</td>
                <td><a href='update.php?rn=$result[rollno]&nm=$result[name]&cl=$result[class]'>Edit</a></td>
                <td><a href='#'>Delete</a></td>
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
