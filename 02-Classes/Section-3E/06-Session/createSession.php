<?php
session_start();
$sess = $_SESSION['user'] = 'kapoor';

echo "<h3>Session Created</h3>";
echo "Logged User is: ".$_SESSION['user'];




?>