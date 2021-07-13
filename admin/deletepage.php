<?php
include('security.php');

if(isset($_POST["deletepagebtn"]))
{
    $page_id = $_POST['page-id'];
   
    $query = "DELETE from pages where idPage=$page_id";
    $query_run = mysqli_query($connection, $query);
    if($query_run)
    {
        $_SESSION['success'] = "page supprimée successivement";
        $_SESSION['success_code'] = "success";
        header('Location: pages.php');  
    }
    else
    {
        $_SESSION['status'] = "Page n'est pas supprimée";
        $_SESSION['status_code'] = "error";
        header('Location: pages.php');
        
    }

}
?>
