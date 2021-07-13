<?php
include('security.php');

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
