<?php

include_once 'connection.php';

$query = "insert into secbtable values(111,'manish yadav','3B')";


//"INSERT INTO `secbtable`(`rollno`, `name`, `class`) VALUES (110,'manish kumar','3B')


$data = mysqli_query($conn,$query);

if($data)
{
    echo "Data Inserted Succesfully";
}
else
{
    echo "Data not Inserted";
}

?>