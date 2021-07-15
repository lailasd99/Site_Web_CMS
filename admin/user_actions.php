<?php
include('security.php');

if(isset($_POST['registerbtn']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];
    $id_role = $_POST['role'];
    $today_date = date('d-m-y h:i:s');



    $email_query = "SELECT * FROM users WHERE email='$email' ";
    $email_query_run = mysqli_query($connection, $email_query);
    if(mysqli_num_rows($email_query_run) > 0)
    {
        $_SESSION['status'] = "Email déja utilisé. Réessayez avec une autre adresse éléctronique.";
        $_SESSION['status_code'] = "erreur";
        header('Location: register.php');  
    }
    else
    {
        if($password === $cpassword)
        {
            $hashed_password= password_hash($password, PASSWORD_DEFAULT);
            //insert new user
            $query = "INSERT INTO users (username,email,password, createdAt) VALUES ('$username','$email','$hashed_password', '$today_date')";

            $query_run = mysqli_query($connection, $query);
            
            $get_user_id_query = "SELECT idUser FROM users WHERE email='$email'";
            $query0 = mysqli_query($connection, $get_user_id_query);
            if(mysqli_num_rows($query0) > 0)
            {
                $new_user = mysqli_fetch_row($query0);
                $id = $new_user[0];
            }
            
            if($query_run)
            {
                $_SESSION['success'] = "Profile d'admin ajoutée";
                $_SESSION['success_code'] = "success";
                header('Location: register.php');
            }
            else 
            {
                $_SESSION['status'] = "profile n'est pas ajouté";
                $_SESSION['status_code'] = "error";
                header('Location: register.php');  
            }

            //insert role of created user
            $query2 = "INSERT INTO roles_of_users (idUser, idRole) VALUES ($id, $id_role)";
            $query_run2 = mysqli_query($connection, $query2);

        }
        else 
        {
            $_SESSION['status'] = "les deux mots de passe ne sont pas identiques";
            $_SESSION['status_code'] = "warning";
            header('Location: register.php');  
        }
    }

}


if(isset($_POST['login_btn'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $query = "SELECT * from users where email='$email'";
    $query_run=mysqli_query($connection, $query);
    if(mysqli_num_rows($query_run)){
        while($row=mysqli_fetch_row($query_run)){
            if(password_verify($password, $row[3])){
                $_SESSION["user_id"]=$row[0];
                $_SESSION["user_name"]=$row[1];
                $_SESSION["user_email"]=$row[2];
                //header("location: index.php");
                $query_role = "SELECT * from roles_of_users where idUser=".$row[0];
                $run_role=mysqli_query($connection, $query_role);
                if($run_role){
                    $role_user = mysqli_fetch_row($run_role);
                    $_SESSION["role"]= $role_user[1];
                    header("location: index.php");
                }
                
                
            }else{
                $_SESSION["status"]="mot de passe incorrect";
                header("location: login.php");
            }
        }
    }else{
        $_SESSION["status-mail"]="email invalide";
        header("location: login.php");
    }


}



//var_dump($_POST); exit();
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
    
            $query = "UPDATE users SET username='$username', email='$email' WHERE idUser=$user_id; UPDATE roles_of_users SET idRole=$id_role WHERE idUser=$user_id";

            $query_run = mysqli_multi_query($connection, $query);
            
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


        }
    }





if(isset($_POST["deleteuserbtn"]))
{
    $user_id = $_POST['user-id'];
   


    $query = "DELETE FROM roles_of_users WHERE idUser=$user_id ; DELETE FROM users WHERE idUser=$user_id ;";
    $query_run = mysqli_multi_query($connection, $query);
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
