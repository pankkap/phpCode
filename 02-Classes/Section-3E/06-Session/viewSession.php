<?php
session_start();

 if(isset( $_SESSION['user']))
 {
 
echo "Logged User is: ".$_SESSION['user'];
 }
 else
 {
  echo "<h4>User Session has been Expired</h4>";
 }



?>