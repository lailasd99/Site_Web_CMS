<?php
include('security.php');
//var_dump($_POST); exit();
if(isset($_POST['cat_id']))
{

    $lis = $_POST['items'];
    $cat_id = $_POST['cat_id'];

    $reset_query = "UPDATE pages SET section=NULL where section=$cat_id";
    $query_run1 = mysqli_query($connection, $reset_query);
    $update_query="";
    foreach($lis as $li) {
        $update_query .= "UPDATE pages SET section=$cat_id WHERE idPage=$li; ";
    }
    //$add_query = substr($add_query, 0, -1);
    $query_run = mysqli_multi_query($connection, $update_query);

    if ($query_run){
        echo "ok";
    }else  {
        echo 'fail';
    }
}
?>
