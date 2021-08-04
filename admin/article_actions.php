<?php
include('security.php');
if(isset($_POST['add_article']))
{
    $art_content = str_replace('../upload',"http://localhost/radeema/upload", $_POST['text_editor_page']);
    $title = mysqli_real_escape_string($connection, $_POST['title']);
    $content = mysqli_real_escape_string($connection, $art_content);
    $photo = time().'-'.$_FILES['art_photo']['name'];
    $photo_path = $_FILES["art_photo"];
    $photoTmpName =$_FILES["art_photo"]["tmp_name"];


    $query = "SELECT * FROM articles WHERE title='$title'";
    $run = mysqli_query($connection, $query);
    if(mysqli_num_rows($run))
    {
        $_SESSION['status'] = "titre d'article existe déja";
        $_SESSION['status_code'] = "erreur";
        header('Location: articles.php');  
    }
    else
    {
        $query = "INSERT INTO articles(title, content, media) values('$title', '$content', '$photo')";
        $query_run=mysqli_query($connection, $query);
    
        if($query_run){
           $target_file = "../images/".$photo;
           if (move_uploaded_file($_FILES["art_photo"]["tmp_name"], $target_file)) {
            echo "<center><i><h4>The file ". basename( $photo). " has been uploaded.</h4></i></center>";
        } else {
            echo "<center>désolé, il y avait un erreur de téléchargement de fichier.</font></center>";
        }
            $_SESSION["success"]="article ajoutée successivement";
            $_SESSION["success-code"]="success";
            header("location: articles.php");
        }else{
            $_SESSION["status"]="article n'est pas ajoutée";
            $_SESSION["status-code"]="success";
            header("location: articles.php");
        }
          

    }

}



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



if(isset($_POST["submit-article"])){
    $art_content = str_replace('../upload',"http://localhost/radeema/upload", $_POST['text_editor_page']);
    $art_title = mysqli_real_escape_string($connection, $_POST['title']);
    $art_id =$_POST['art_id'];
    $content = mysqli_real_escape_string($connection, $art_content);
    $photo = time().'-'.$_FILES['art_photo']['name'];
    $photo_path = $_FILES["art_photo"];
    $photoTmpName =$_FILES["art_photo"]["tmp_name"];
        if(!empty($_FILES['art_photo']['name'])){
            $query = "UPDATE articles SET title='$art_title', content='$content', media='$photo' WHERE idArticle=$art_id";
            $query_run=mysqli_query($connection, $query);
        
            if($query_run){
            /* copy($fileTmpName, "C:/xampp/htdocs/RADEEMAA/images/radeema.png");*/
            $target_file = "../images/".$photo;
            //var_dump($photoTmpName, $target_file);exit();
            if (move_uploaded_file($_FILES["art_photo"]["tmp_name"], $target_file)) {
                //var_dump('success');exit();
                echo "<center><i><h4>The file ". basename( $photo). " has been uploaded.</h4></i></center>";
                } else {
                    echo "<center>désolé, il y avait un erreur de téléchargement de fichier.</font></center>";
                }
                $_SESSION["success"]="article modifiée successivement";
                $_SESSION["success-code"]="success";
                header("location: articles.php");
            }else{
                $_SESSION["status"]="article n'est pas modifiée";
                $_SESSION["status-code"]="success";
                header("location: articles.php");
            }
        }else{
            $query = "UPDATE articles SET title='$art_title', content='$content' WHERE idArticle=$art_id";
            $query_run=mysqli_query($connection, $query);

            if($query_run){
                $_SESSION["success"]="article modifiée successivement";
                $_SESSION["success-code"]="success";
                header("location: articles.php");
            }else{
                $_SESSION["status"]="article n'est pas modifiée";
                $_SESSION["status-code"]="success";
                header("location: articles.php");
            }
    }

}




if(isset($_POST["submit-article-ar"])){
    $art_content = str_replace('../upload',"http://localhost/radeema/upload", $_POST['text_editor_page']);
    $art_title = mysqli_real_escape_string($connection, $_POST['title']);
    $art_id =$_POST['art_id'];
    $content = mysqli_real_escape_string($connection, $art_content);
    $photo = time().'-'.$_FILES['art_photo']['name'];
    $photo_path = $_FILES["art_photo"];
    $photoTmpName =$_FILES["art_photo"]["tmp_name"];
        if(!empty($_FILES['art_photo']['name'])){
            $query = "UPDATE articles SET title_ar='$art_title', content_ar='$content', media='$photo' WHERE idArticle=$art_id";
            $query_run=mysqli_query($connection, $query);
        
            if($query_run){
            /* copy($fileTmpName, "C:/xampp/htdocs/RADEEMAA/images/radeema.png");*/
            $target_file = "../images/".$photo;
            //var_dump($photoTmpName, $target_file);exit();
            if (move_uploaded_file($_FILES["art_photo"]["tmp_name"], $target_file)) {
                //var_dump('success');exit();
                echo "<center><i><h4>The file ". basename( $photo). " has been uploaded.</h4></i></center>";
                } else {
                    echo "<center>désolé, il y avait un erreur de téléchargement de fichier.</font></center>";
                }
                $_SESSION["success"]="article modifiée successivement";
                $_SESSION["success-code"]="success";
                header("location: articles.php");
            }else{
                $_SESSION["status"]="article n'est pas modifiée";
                $_SESSION["status-code"]="error";
                header("location: edit_article_ar.php");
            }
        }else{
            $query = "UPDATE articles SET title_ar='$art_title', content_ar='$content' WHERE idArticle=$art_id";
            $query_run=mysqli_query($connection, $query);

            if($query_run){
                $_SESSION["success"]="article modifiée successivement";
                $_SESSION["success-code"]="success";
                header("location: articles.php");
            }else{
                $_SESSION["status"]="article n'est pas modifiée";
                $_SESSION["status-code"]="error";
                header("location: edit_article_ar.php");
            }
    }

}


?>
