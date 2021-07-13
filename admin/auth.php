<?php
include('security.php');

if(isset($_POST['login_btn'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $query = "SELECT * from users where email='$email'";
    $query_run=mysqli_query($connection, $query);
    if(mysqli_num_rows($query_run)){
        while($row=mysqli_fetch_row($query_run)){
            if(password_verify($password, $row[3])==1){
                /*$_SESSION["user_email"]=$email;*/
                $_SESSION["user_name"]=$username;
                header("location: index.php");
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

?>