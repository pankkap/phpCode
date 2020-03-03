<?php
session_start();
include 'connection.php';
$username = $_SESSION['user_name'];


echo "Welcome ".$username;


?>
