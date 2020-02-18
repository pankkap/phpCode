<?php
session_start();

if(isset($_SESSION['user'])){
    echo "Loged User: ".$_SESSION['user'];
    }
    else
    {
        echo "Your Session Expired";
    }

?>