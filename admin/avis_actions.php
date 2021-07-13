<?php
include('security.php');
//var_dump($_POST);
if(isset($_POST['addbtn']))
{
    $title = $_POST['title'];
    $desc= mysqli_real_escape_string($connection, $_POST['desc']);


    $query = "SELECT * FROM avis WHERE title='$title'";
    $run = mysqli_query($connection, $query);
        if(mysqli_num_rows($run) > 0)
        {
            $_SESSION['status'] = "titre d'avis existe déja";
            $_SESSION['status_code'] = "erreur";
            header('Location: avis.php');  
        }
        
    else
    {
        
            
            //insert new avis
            $query = "INSERT INTO avis (title, description) VALUES ('$title', '$desc')";
            $query_run = mysqli_query($connection, $query);

            if($query_run)
            {
                $_SESSION['success'] = "avis ajouté successivement";
                $_SESSION['success_code'] = "success";
                header('Location: avis.php');
            }
            else 
            {
                $_SESSION['status'] = "avis n'est pas ajouté";
                $_SESSION['status_code'] = "error";
                header('Location: avis.php');  
            }

    }


}


if(isset($_POST["deleteavisbtn"]))
{
    $avis_id = $_POST['avis-id'];


    
    $query = "DELETE FROM avis WHERE id=$avis_id";
    $query_run = mysqli_query($connection, $query);
    if($query_run)
    {
        $_SESSION['success'] = "avis supprimé successivement";
        $_SESSION['success_code'] = "success";
        header('Location: avis.php');  
    }
    else
    {
        $_SESSION['status'] = "avis n'est pas supprimé";
        $_SESSION['status_code'] = "error";
        header('Location: avis.php');
        
    }

}




//var_dump($_POST);
if(isset($_POST['editbtn']))
{
    $id = $_POST['avis-id'];
    $title = $_POST['title'];
    $desc= mysqli_real_escape_string($connection, $_POST['desc']);

    $title_query = "SELECT * FROM avis WHERE title='$title' AND id!=$id";
    $title_query_run = mysqli_query($connection, $title_query);
    if(mysqli_num_rows($title_query_run) > 0)
    {
        $_SESSION['status'] = "Titre déja utilisé. Réessayez avec un autre titre.";
        $_SESSION['status_code'] = "erreur";
        header('Location: avis.php');  
    }
    else
    {
    
            $query = "UPDATE avis SET title='$title', description='$desc' WHERE id=$id";

            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                $_SESSION['success'] = "avis modifié successivement";
                $_SESSION['success_code'] = "success";
                header('Location: avis.php');
            }
            else 
            {
                $_SESSION['status'] = "avis n'est pas modifié";
                $_SESSION['status_code'] = "error";
                header('Location: avis.php');  
            }

        }
    }



?>
