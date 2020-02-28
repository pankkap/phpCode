<?php
// How to create a session
// Create a session()
session_start();

// 2. Create a session variable

$_SESSION['user'] = 'pankaj';


echo "<h3>Session Created</h3>";


// 3. To get the value of a session variable

echo "Looged User: ".$_SESSION['user'];







?>