<?php

session_start();


// echo "<h2>Session Created</h2>";
if(isset( $_SESSION['user']))
{

echo "<p>User Logged: ". $_SESSION['user']."</p>";
}
else
{
    echo "Session Expired";
}

?>