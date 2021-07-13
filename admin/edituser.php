<?php
include('security.php');

if(isset($_POST['edituserbtn']))
{
    $user_id = $_POST['user-id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $id_role = $_POST['role'];
    $today_date = date('d-m-y h:i:s');



    $email_query = "SELECT * FROM users WHERE email='$email' AND idUser!=$user_id";
    $email_query_run = mysqli_query($connection, $email_query);
    if(mysqli_num_rows($email_query_run) > 0)
    {
        $_SESSION['status'] = "Email déja utilisé. Réessayez avec une autre adresse éléctronique.";
        $_SESSION['status_code'] = "erreur";
        header('Location: register.php');  
    }
    else
    {
    
            $query = "UPDATE users SET username='$username', email='$email', createdAt='$today_date' WHERE idUser=$user_id";

            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                $_SESSION['success'] = "Profile d'admin modifié successivement";
                $_SESSION['success_code'] = "success";
                header('Location: register.php');
            }
            else 
            {
                $_SESSION['status'] = "Prodile d'admin n'est pas modifié";
                $_SESSION['status_code'] = "error";
                header('Location: register.php');  
            }

            //insert role of created user
            $query2 = "UPDATE roles_of_users SET idUser=$user_id, idRole=$id_role WHERE idUser=$user_id";
            $query_run2 = mysqli_query($connection, $query2);

        }
    }
?>
