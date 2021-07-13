<?php

include('admin/database/dbconfig.php');

if($connection)
{
    // echo "Database Connected";
}
else
{
    header("Location: database/dbconfig.php");
}
?>