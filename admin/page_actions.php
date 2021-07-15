<?php
//var_dump($_POST); exit();
include("security.php");
if(isset($_POST["submit-page"])){
    $title =mysqli_real_escape_string($connection, $_POST['title']);
    $cat = $_POST['id_categorie'];
    $draft = $_POST['id_draft'];
    $page_id =$_POST['page_id'];
    $parent_id = $_POST['parent_page_id'];
    $content = mysqli_real_escape_string($connection, $_POST['text_editor_page']);
    $photo = time().'-'.$_FILES['page_photo']['name'];
    $photo_path = $_FILES["page_photo"];
    $photoTmpName =$_FILES["page_photo"]["tmp_name"];

    $target_file = "../images/".$photo;
    move_uploaded_file($_FILES["page_photo"]["tmp_name"], $target_file);

        if(!empty($parent_id)){
            if(!empty($cat)){
            $query = "UPDATE pages SET title = '$title', parent_id=$parent_id, draft=$draft, content='$content', section=$cat, media='$photo' WHERE idPage=$page_id";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run){
                $_SESSION["success"]="page modifié successivement";
                $_SESSION["success-code"]="success";
                header("location: pages.php");
            }
        }else{
            $query = "UPDATE pages SET title = '$title', parent_id=$parent_id, draft=$draft, content='$content', media='$photo' WHERE idPage=$page_id";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run){
                $_SESSION["success"]="page modifié successivement";
                $_SESSION["success-code"]="success";
                header("location: pages.php");
            }
        }
        }else{
            //parent not identified
                if(!empty($cat)){
                    $query = "UPDATE pages SET title = '$title', draft=$draft, content='$content', section=$cat, media='$photo' WHERE idPage=$page_id";
                    $query_run=mysqli_query($connection, $query);
        
                    if($query_run){
                        $_SESSION["success"]="page modifié successivement";
                        $_SESSION["success-code"]="success";
                        header("location: pages.php");
                    }
                }else{
                    $query = "UPDATE pages SET title = '$title', draft=$draft, content='$content', media='$photo' WHERE idPage=$page_id";
                    $query_run=mysqli_query($connection, $query);
        
                    if($query_run){
                        $_SESSION["success"]="page modifié successivement";
                        $_SESSION["success-code"]="success";
                        header("location: pages.php");
                    }
            }   
        }


}




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




if(isset($_POST['add-page'])){

    $title =mysqli_real_escape_string($connection, $_POST['title']);
    $cat = $_POST['id_categorie'];
    $draft = $_POST['id_draft'];
    $parent_id = $_POST['parent_page_id'];
    $content = mysqli_real_escape_string($connection, $_POST['text_editor_page']);
    $photo = time().'-'.$_FILES['page_photo']['name'];
    $photo_path = $_FILES["page_photo"];
    $photoTmpName =$_FILES["page_photo"]["tmp_name"];


    $query = "SELECT * FROM pages WHERE title='$title'";
    $run = mysqli_query($connection, $query);
    if(mysqli_num_rows($run) > 0)
    {
        $_SESSION['status'] = "titre de page existe déja";
        $_SESSION['status_code'] = "erreur";
        header('Location: pages.php');  
    }
    else
    {

        $target_file = "../images/".$photo;
        move_uploaded_file($_FILES["page_photo"]["tmp_name"], $target_file);

        if(!empty($parent_id)){
            if(!empty($cat)){
            $query = "INSERT INTO pages(title, parent_id, draft, content, section, media) values('$title', $parent_id, $draft,'$content', $cat, '$photo')";
            $query_run = mysqli_query($connection, $query);
            
                if($query_run){
                    $_SESSION["success"]="page ajoutée successivement";
                    $_SESSION["success-code"]="success";
                    header("location: pages.php");
                }
            }else{
                $query = "INSERT into pages(title, parent_id, draft, content, media)  values('$title', $parent_id, $draft, '$content', '$photo')";
                $query_run = mysqli_query($connection, $query);
                
                if($query_run){
                    $_SESSION["success"]="page ajoutée successivement";
                    $_SESSION["success-code"]="success";
                    header("location: pages.php");
                }
            }
        }else{
            //parent not identified
                if(!empty($cat)){
                    $query = "INSERT INTO pages(title, draft, content, section, media) values('$title', $draft, '$content', $cat, '$photo')";
                    $query_run=mysqli_query($connection, $query);
        
                    if($query_run){
                        $_SESSION["success"]="page ajoutée successivement";
                        $_SESSION["success-code"]="success";
                        header("location: pages.php");
                    }
                }else{
                    $query = "INSERT INTO pages(title, draft, content, media) values('$title', $draft, '$content', '$photo')";
                    $query_run=mysqli_query($connection, $query);
        
                    if($query_run){
                        $_SESSION["success"]="page ajoutée successivement";
                        $_SESSION["success-code"]="success";
                        header("location: pages.php");
                    }
                }   
        }
    }
}

?>