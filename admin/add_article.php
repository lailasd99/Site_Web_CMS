<?php
include('security.php');
if(isset($_POST['addbtn']))
{
    $title = mysqli_real_escape_string($connection, $_POST['title']);
    $submitted = 0;


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
            
            //insert new page
            $query = "INSERT INTO articles (title, accept) VALUES ('$title', $submitted)";

            $query_run = mysqli_query($connection, $query);

            if($query_run)
            {
                $_SESSION['success'] = "article ajouté successivement";
                $_SESSION['success_code'] = "success";
                header('Location: articles.php');
            }
            else 
            {
                $_SESSION['status'] = "article n'est pas ajouté";
                $_SESSION['status_code'] = "error";
                header('Location: articles.php');  
            }

    }

}
?>
