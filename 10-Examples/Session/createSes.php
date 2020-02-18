<?php
session_start();

$_SESSION['user'] = "Pankaj";

echo "Login User: ".$_SESSION['user'];

?>