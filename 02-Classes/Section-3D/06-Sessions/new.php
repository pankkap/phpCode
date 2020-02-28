<?php


session_start();

if(isset($_SESSION['user']))
{
echo "Logged User: ".$_SESSION['user'];
}
else
{
    echo "Session Expred";
}


?>