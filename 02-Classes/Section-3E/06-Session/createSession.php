<?php
session_start();
$sess = $_SESSION['user'] = 'Pankaj';

echo "<h3>Session Created</h3>";
echo "Logged User is: ".$_SESSION['user'];




?>