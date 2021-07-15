<?php
include('security.php');

if(isset($_POST["addbtn_art"])){
    $art_id =$_POST['art'];
    $photo = time().'-'.$_FILES['art_photo']['name'];
    $photo_path = $_FILES["art_photo"];
    $photoTmpName =$_FILES["art_photo"]["tmp_name"];
        
        $query = "UPDATE articles SET media='$photo' WHERE idArticle=$art_id";
        $query_run=mysqli_query($connection, $query);
    
        if($query_run){
           $target_file = "../images/".$photo;
           if (move_uploaded_file($_FILES["art_photo"]["tmp_name"], $target_file)) {
                $_SESSION["success"]="image ajoutée successivement";
                $_SESSION["success-code"]="success";
                header("location: articles_media.php");
        } else {
                $_SESSION["status"]="image n'est pas ajoutée";
                $_SESSION["status-code"]="success";
                header("location: articles_media.php");
        }
        }else{
            $_SESSION["status"]="image n'est pas ajoutée";
            $_SESSION["status-code"]="success";
            header("location: articles_media.php");
        }
}

//modifier article d'image
if(isset($_POST["editimage"])){
    $art_id =$_POST['art'];
    $photo = $_POST['file-id'];
        
        $query = "UPDATE articles SET media='' WHERE media='$photo'; UPDATE articles set media='$photo' where idArticle=$art_id";
        $query_run=mysqli_multi_query($connection, $query);
    
        if($query_run){
            $_SESSION["success"]="image modifiée successivement";
            $_SESSION["success-code"]="success";
            header("location: articles_media.php");
        }else{
            $_SESSION["status"]="image n'est pas modifiée";
            $_SESSION["status-code"]="error";
            header("location: articles_media.php");
        }
}


if(isset($_POST["addbtn_page"])){
    $page_id =$_POST['page'];
    $photo = time().'-'.$_FILES['page_photo']['name'];
    $photo_path = $_FILES["page_photo"];
    $photoTmpName =$_FILES["page_photo"]["tmp_name"];
        
        $query = "UPDATE pages SET media='$photo' WHERE idPage=$page_id";
        $query_run=mysqli_query($connection, $query);
    
        if($query_run){
           $target_file = "../images/".$photo;
           if (move_uploaded_file($_FILES["page_photo"]["tmp_name"], $target_file)) {
                $_SESSION["success"]="image ajoutée successivement";
                $_SESSION["success-code"]="success";
                header("location: pages_media.php");
        } else {
                $_SESSION["status"]="image n'est pas ajoutée";
                $_SESSION["status-code"]="success";
                header("location: pages_media.php");
        }
        }else{
            $_SESSION["status"]="image n'est pas ajoutée";
            $_SESSION["status-code"]="success";
            header("location: pages_media.php");
        }
}



//modifier page d'image
if(isset($_POST["editphoto"])){
    $page_id =$_POST['page'];
    $photo = $_POST['file-id'];
        
        $query = "UPDATE pages SET media='' WHERE media='$photo'; UPDATE pages set media='$photo' where idPage=$apage_id";
        $query_run=mysqli_multi_query($connection, $query);
    
        if($query_run){
            $_SESSION["success"]="image modifiée successivement";
            $_SESSION["success-code"]="success";
            header("location: pages_media.php");
        }else{
            $_SESSION["status"]="image n'est pas modifiée";
            $_SESSION["status-code"]="error";
            header("location: pages_media.php");
        }
}


if(isset($_POST["deleteimg_page"])){
    $id_page = $_POST['page-id'];

    $query = "UPDATE pages SET media='' where idPage=$id_page";
    $query_run = mysqli_query($connection, $query);

    if($query_run){
        $_SESSION["success"]="image supprimée successivement";
        $_SESSION["success-code"]="success";
        header("location: pages_media.php");
    }else{
        $_SESSION["status"]="image n'est pas supprimée";
        $_SESSION["status-code"]="error";
        header("location: pages_media.php");
    }
}

?>