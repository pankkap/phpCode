<?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sectionbdb1";

$conn = mysqli_connect($servername ,$username,$password,$dbname);

if($conn)
{
    echo "Coonection Done";
}
else
{
    die("Connection Failed due to: ".mysqli_connect_error());
}


?>