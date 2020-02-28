<?php
// Create Your Session First

session_start();

// Create a Session Variable

$_SESSION['user']= 'pankaj';

echo "<h2>Session Created</h2>";
echo "<p>User Logged: ". $_SESSION['user']."</p>";


?>