<?php
include 'connection.php';
$roll = $_GET['rn'];

$query = "DELETE FROM secetable WHERE ROLLNO='$roll'";

$data = mysqli_query($conn,$query);

if($data)
{
    echo "<script> alert('Record Deleted')</script>";
    ?>
    <meta http-equiv="refresh" content="0; url=http://localhost/phpCode/02-Classes/Section-3E/05-Database/read5.php">

    <?php
}
else
{
    echo "Record not Deleted";
}

?>