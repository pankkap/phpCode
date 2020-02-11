<?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cruddb";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
    // echo "Ok Connected";
}
else
{
    // echo "Not Connected";
    die("Connection Failed due to ".mysqli_connect_error());
}


?>