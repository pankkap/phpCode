<?php

error_reporting(0);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sectionedb";

$conn = mysqli_connect($servername,$username,$password,$dbname );

if($conn)
{
    // echo "Connection Created";

}
else
{
    die("Connection Not Created due to: ".mysqli_connect_error());
}





?>