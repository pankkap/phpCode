<style>
td{
    padding:10px;
}

</style>

<?php
include 'connection.php';

$query = "select * from secctable";

$data = mysqli_query($conn, $query);

$totRec = mysqli_num_rows($data);


if($totRec)
{

    ?>
    <table border="1">
        <tr>
            <th>Rollno</th>
            <th>Name</th>
            <th>Class</th>
            <th colspan="2">Operations</th>
        </tr>
    

    <?php

    while($result = mysqli_fetch_assoc($data)){

        echo "
            <tr>
            <td>".$result['rollno']."</td>
            <td>".$result['name']."</td>
            <td>".$result['class']."</td>
            <td><a href='update.php?rn=$result[rollno]&nm=$result[name]&cl=$result[class]'>Edit</td>
            <td><a href='delete.php?rn=$result[rollno]' onclick = 'return DeleteRecord()'>Delete</td>
    </tr>
        
        ";

  
    // echo "There are records in The database: $totRec";
    }
}
else
{
    echo "There are no records in The database";
}




?>


</table>


<br>
<a href="http://localhost/phpCode/02-Classes/Section-3C/05-Database/insertFirstRecord.php"> + Add New Record </a>

<script>
function DeleteRecord()
{
    return confirm ("Do you want to delete this Record");
}

</script>