<?php

include_once '01-connection.php';

// $query = "INSERT INTO `secdtable`(`rollno`, `name`, `class`) VALUES (104,'Rahul','3B')";

$query = "INSERT INTO secdtable VALUES(105,'Ruchi','3D')";


$data = mysqli_query($conn,$query);

if($data)
{
    echo "Record Insserted Succesfully";
}
else
{
    echo "Record not Insserted ";
}



?>