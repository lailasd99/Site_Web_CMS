<?php
include('security.php');
//var_dump($_POST); exit();
if(isset($_POST['cat_id']))
{

    $art_content = str_replace('../upload',"http://localhost/radeema/upload", $_POST['content']);
    $lis = $_POST['items'];
    $cat_id = $_POST['cat_id'];
    $content = mysqli_real_escape_string($connection, $art_content);
    //var_dump($content);

    $reset_query = "DELETE FROM category_pages where idCat=$cat_id";
    //$reset_query = "UPDATE pages SET section=NULL where section=$cat_id";
    $query_run1 = mysqli_query($connection, $reset_query);
    $update_query="";
    foreach($lis as $li) {
        $update_query .= "INSERT INTO category_pages(idPage, idCat) values($li, $cat_id); ";
    }
    $update_query .= "UPDATE category SET content='$content' where idCat=$cat_id;";
    $query_run = mysqli_multi_query($connection, $update_query);

    if ($query_run){
        echo "ok";
    }else  {
        echo 'fail';
    }
}
?>
