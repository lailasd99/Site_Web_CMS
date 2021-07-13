<?php
//var_dump($_POST); exit();
include("security.php");
if(isset($_POST["submit-page"])){
    $title =mysqli_real_escape_string($connection, $_POST['title']);
    $cat = $_POST['id_categorie'];
    $draft = $_POST['id_draft'];
    //$pic =$_POST['pic'];
    $page_id =$_POST['page_id'];
    $parent_id = $_POST['parent_page_id'];
    //$menu =$_POST['menu_id'];
    $content = mysqli_real_escape_string($connection, $_POST['text_editor_page']);
        if(!empty($parent_id)){
            if(!empty($cat)){
            $query = "UPDATE pages SET title = '$title', parent_id=$parent_id, draft=$draft, content='$content', section=$cat WHERE idPage=$page_id";
            $query_run = mysqli_query($connection, $query);
            //var_dump($query_run); exit();
            if($query_run){
                $_SESSION["success"]="page modifié successivement";
                $_SESSION["success-code"]="success";
                header("location: pages.php");
            }
        }else{
            $query = "UPDATE pages SET title = '$title', parent_id=$parent_id, draft=$draft, content='$content' WHERE idPage=$page_id";
            $query_run = mysqli_query($connection, $query);
            //var_dump($query_run); exit();
            if($query_run){
                $_SESSION["success"]="page modifié successivement";
                $_SESSION["success-code"]="success";
                header("location: pages.php");
            }
        }
        }else{
            //parent not identified
                if(!empty($cat)){
                    $query = "UPDATE pages SET title = '$title', draft=$draft, content='$content', section=$cat WHERE idPage=$page_id";
                    $query_run=mysqli_query($connection, $query);
        
                    if($query_run){
                        $_SESSION["success"]="page modifié successivement";
                        $_SESSION["success-code"]="success";
                        header("location: pages.php");
                    }
                }else{
                    $query = "UPDATE pages SET title = '$title', draft=$draft, content='$content' WHERE idPage=$page_id";
                    $query_run=mysqli_query($connection, $query);
        
                    if($query_run){
                        $_SESSION["success"]="page modifié successivement";
                        $_SESSION["success-code"]="success";
                        header("location: pages.php");
                    }
            }   
        }


}else{
    echo "button not set";
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




if(isset($_POST['addbtn']))
{
    $title = mysqli_real_escape_string($connection, $_POST['title']);;
    //$menu = $_POST['visible'];
    $draft = $_POST['archive'];
    $today_date = date('d-m-y h:i:s');


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
            
            //insert new page
            $query = "INSERT INTO pages (title, draft, createdAt, updatedAt) VALUES ('$title',$draft, '$today_date', '$today_date')";

            $query_run = mysqli_query($connection, $query);

            if($query_run)
            {
                $_SESSION['success'] = "page ajouté successivement";
                $_SESSION['success_code'] = "success";
                header('Location: pages.php');
            }
            else 
            {
                $_SESSION['status'] = "page n'est pas ajouté";
                $_SESSION['status_code'] = "error";
                header('Location: pages.php');  
            }

    }

}

?>