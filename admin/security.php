<?php
session_start();
include('database/dbconfig.php');

if($connection)
{
    // echo "Database Connected";
}
else
{
    header("Location: database/dbconfig.php");
}

if(!isset($_SESSION["user_name"])){
    header("location: login.php");
}
?>