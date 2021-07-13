<?php
include("security.php");


if(isset($_POST["submit_article"])){
   
    $content = $_POST['text_editor_article'];
    $art_id = $_POST['art_id'];

    if(!empty($content)){
        $query = "UPDATE articles SET content='$content' WHERE idArticle=$art_id";
        $query_run=mysqli_query($connection, $query);
    
        if($query_run){
            $_SESSION["status"]="article updated successfully";
            $_SESSION["status-code"]="success";
            header("location: articles.php");
        }
    }else{
        $_SESSION["status"]="article not updated";
        $_SESSION["status-code"]="eror";
        header("location: articles.php");
    }


}
?>