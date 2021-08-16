<?php
include("security.php");

if(isset($_POST['submit'])){

    $query = "UPDATE comments set seen=1";
    $run = mysqli_query($connection, $query);

    if($run){
        echo 'ok';
    }else{
        echo 'error';
    }
}

?>