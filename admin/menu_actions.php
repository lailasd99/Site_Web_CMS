<?php
include('security.php');
//var_dump($_POST); exit();
if(isset($_POST['items']))
{
    $lis = $_POST['items'];
    $menu_id = $_POST['menu_id'];
    $types = $_POST['type'];

    $delete_query = "DELETE from menu_pages where idMenu = $menu_id";
    $query_run = mysqli_query($connection, $delete_query);
    $add_query = "INSERT INTO menu_pages (idMenu, idPage , type) VALUES ";
    foreach( array_combine($lis, $types) as $li => $type) {
        $add_query .= "(".$menu_id.", ".$li.", '".$type."'),";
    }
    $add_query = substr($add_query, 0, -1);

    $query_run = mysqli_query($connection, $add_query);

    if ($query_run){
        echo "ok";
    }else  {
        echo $add_query;
    }

}
?>
