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
?>