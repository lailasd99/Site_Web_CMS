<?php
include('security.php');

if(isset($_POST['addbtn']))
{
    $title = $_POST['title'];
    $date1 = $_POST['date1'];
    $date2 = $_POST['date2'];
    $desc= mysqli_real_escape_string($connection, $_POST['desc']);
    $title_ar = $_POST['title_ar'];
    $desc_ar= mysqli_real_escape_string($connection, $_POST['desc_ar']);


    $query = "SELECT * FROM agenda WHERE title='$title'";
    $run = mysqli_query($connection, $query);
    if(mysqli_num_rows($run) > 0)
    {
        $_SESSION['status'] = "titre d'évènement existe déja";
        $_SESSION['status_code'] = "erreur";
        header('Location: agenda.php');  
    }
    else
    {
            
            //insert new page
            $query = "INSERT INTO agenda (title, description, date1, date2, title_ar, description_ar) VALUES ('$title', '$desc', '$date1', '$date2', '$title_ar', '$desc_ar')";

            $query_run = mysqli_query($connection, $query);

            if($query_run)
            {
                $_SESSION['success'] = "évènement ajouté successivement";
                $_SESSION['success_code'] = "success";
                header('Location: agenda.php');
            }
            else 
            {
                $_SESSION['status'] = "évènement n'est pas ajouté";
                $_SESSION['status_code'] = "error";
                header('Location: agenda.php');  
            }

    }

}


if(isset($_POST["deleteeventbtn"]))
{
    $event_id = $_POST['event-id'];


    
    $query = "DELETE FROM agenda WHERE id=$event_id";
    $query_run = mysqli_query($connection, $query);
    if($query_run)
    {
        $_SESSION['success'] = "évènement supprimé successivement";
        $_SESSION['success_code'] = "success";
        header('Location: agenda.php');  
    }
    else
    {
        $_SESSION['status'] = "évènement n'est pas supprimé";
        $_SESSION['status_code'] = "error";
        header('Location: agenda.php');
        
    }

}




var_dump($_POST);
if(isset($_POST['editbtn']))
{
    $id = $_POST['event-id'];
    $title = $_POST['title'];
    $date1= $_POST['date1'];
    $date2 = $_POST['date2'];
    $desc= mysqli_real_escape_string($connection, $_POST['desc']);
    $title_ar = $_POST['title_ar'];
    $desc_ar= mysqli_real_escape_string($connection, $_POST['desc_ar']);

    $title_query = "SELECT * FROM agenda WHERE title='$title' AND id!=$id";
    $title_query_run = mysqli_query($connection, $title_query);
    if(mysqli_num_rows($title_query_run) > 0)
    {
        $_SESSION['status'] = "Titre déja utilisé. Réessayez avec un autre titre";
        $_SESSION['status_code'] = "erreur";
        header('Location: agenda.php');  
    }
    else
    {
    
            $query = "UPDATE agenda SET title='$title', description='$desc', date1='$date1', date2='$date2', title_ar='$title_ar', description_ar='$desc_ar' WHERE id=$id";

            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                $_SESSION['success'] = "évènement modifié successivement";
                $_SESSION['success_code'] = "success";
                header('Location: agenda.php');
            }
            else 
            {
                $_SESSION['status'] = "évènement n'est pas modifié";
                $_SESSION['status_code'] = "error";
                header('Location: agenda.php');  
            }

    }
}




?>
