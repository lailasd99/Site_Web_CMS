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
                    if($role_user[1] = 1){
                        header("location: index.php");
                    }else if($role_user[1] = 2){
                        header("location: index-admin-sec.php");
                    }else if($role_user[1] = 3){
                        header("location: index-redac.php");
                    }
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



//var_dump($_FILES);exit();
if(isset($_POST["submit-article"])){
    $art_title = mysqli_real_escape_string($connection, $_POST['title']);
    $art_id =$_POST['art_id'];
    $content = mysqli_real_escape_string($connection, $_POST['text_editor_article']);
    $photo = time().'-'.$_FILES['art_photo']['name'];
    $photo_path = $_FILES["art_photo"];
    $photoTmpName =$_FILES["art_photo"]["tmp_name"];
        
        $query = "UPDATE articles SET title='$art_title', content='$content', media='$photo' WHERE idArticle=$art_id";
        $query_run=mysqli_query($connection, $query);
    
        if($query_run){
           /* copy($fileTmpName, "C:/xampp/htdocs/RADEEMAA/images/radeema.png");*/
           $target_file = "../images/".$photo;
           //var_dump($photoTmpName, $target_file);exit();
           if (move_uploaded_file($_FILES["art_photo"]["tmp_name"], $target_file)) {
               //var_dump('success');exit();
            echo "<center><i><h4>The file ". basename( $photo). " has been uploaded.</h4></i></center>";
        } else {
            echo "<center>désolé, il y avait un erreur de téléchargement de fichier.</font></center>";
        }
            $_SESSION["success"]="article modifiée successivement";
            $_SESSION["success-code"]="success";
            header("location: articles.php");
        }else{
            $_SESSION["status"]="article n'est pas modifiée";
            $_SESSION["status-code"]="success";
            header("location: articles.php");
        }



}else{
    echo "button not set";
}



?>
