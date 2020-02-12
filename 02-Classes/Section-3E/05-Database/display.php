<style>
td{
    padding:10px;
}
</style>
<?php


include 'connection.php';

$query ="select * from secetable";

$data = mysqli_query($conn,$query);

$total = mysqli_num_rows($data);

//echo $total;



//echo $result['rollno'].$result['name'].$result['class'];


if($total!=0)
{
    ?>
    <table>
    <tr>
        <th>RollNo</th>
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