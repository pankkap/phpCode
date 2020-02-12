<?php

include 'connection.php';

// $query = "INSERT INTO `secctable`(`rollno`, `name`, `class`) VALUES (104,'manoj','3C')";

$query = "INSERT INTO secctable1 VALUES (105,'Sandeep','3A')";

$data = mysqli_query($conn,$query);

if($data)
{
    echo "Data inserted in Database";
}
else
{
    echo "Record not Inserted";
}









?>
