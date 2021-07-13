<?php
include('security.php');

if(isset($_POST["deleteuserbtn"]))
{
    $user_id = $_POST['user-id'];



    $query = "DELETE FROM users WHERE idUser=$user_id";
    $query_run = mysqli_query($connection, $query);
    if($query_run)
    {
        $_SESSION['success'] = "utilisateur supprimé successivement";
        $_SESSION['success_code'] = "success";
        header('Location: register.php');  
    }
    else
    {
        $_SESSION['status'] = "utilisateur n'est pas supprimé";
        $_SESSION['status_code'] = "error";
        header('Location: register.php');
        
    }

}

?>
