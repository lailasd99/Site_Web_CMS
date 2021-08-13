<?php
include('security.php');

if(isset($_POST['addbtn'])){
    $name = $_POST['nom'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];
    $article = $_POST['art'];


    $query = "INSERT INTO comments(name, email, comment, idArticle) VALUES('$name', '$email', '$comment', $article)";
    $run = mysqli_query($connection, $query);

    if($run){
        $_SESSION['success'] = "commentaire ajouté successivement";
        $_SESSION['success_code'] = "success";
        header('Location: comments.php');
    }else{
        $_SESSION['status'] = "commentaire n'est pas ajouté";
        $_SESSION['status_code'] = "error";
        header('Location: comments.php');
    }
}




if(isset($_POST['deletecombtn'])){
    $comment = $_POST['com-id'];


    $query = "DELETE FROM comments WHERE idCom=$comment";
    $run = mysqli_query($connection, $query);

    if($run){
        $_SESSION['success'] = "commentaire supprimé successivement";
        $_SESSION['success_code'] = "success";
        header('Location: comments.php');
    }else{
        $_SESSION['status'] = "commentaire n'est pas supprimé";
        $_SESSION['status_code'] = "error";
        header('Location: comments.php');
    }
}

?>