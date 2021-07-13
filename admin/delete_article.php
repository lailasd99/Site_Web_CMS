<?php
include('security.php');
//var_dump($_POST);exit();
if(isset($_POST["delete-article-btn"]))
{
    $art_id = $_POST['article-id'];

    
    $query = "DELETE FROM articles WHERE idArticle=$art_id";
    $query_run = mysqli_query($connection, $query);
    
    if($query_run)
    {
        $_SESSION['success'] = "Article supprimée successivement";
        $_SESSION['success_code'] = "success";
        header('Location: articles.php');  
    }
    else
    {
        $_SESSION['status'] = "Article n'est pas supprimé";
        $_SESSION['status_code'] = "error";
        header('Location: articles.php');
    }
}
?>
