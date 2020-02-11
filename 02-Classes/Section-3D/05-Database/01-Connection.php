<?php

error_reporting(0);
$servername = "localhost";

$username = "root";

$password = "";

$dbname = "sectionddb";

$conn = mysqli_connect($servername, $username, $password,$dbname );

if($conn)
{
    // echo "Connection Created";
}
else
{
    die("Connection Failed DUE TO:".mysqli_connect_error());
}




?>