<?php
include("security.php");

//var_dump($_POST); exit();
if(isset($_POST["submit-info"])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    
    $query_check = "SELECT * from users where email='$email' and idUser<>$id";
    $check = mysqli_query($connection, $query_check);
    if(mysqli_num_rows($check) > 0){
        $_SESSION["status"]="email existe déja! essayez avec une autre adresse.";
        $_SESSION["status-code"]="error";
        header("location: params.php");
    }

    $query_update = "UPDATE users SET username='$name', email='$email', tel='$tel' WHERE idUser=$id";
    $run = mysqli_query($connection, $query_update);

    if($run){
        $_SESSION["success"]="Modification enregistrée successivement!";
        $_SESSION["success-code"]="success";
        header("location: params.php");
    }else{
        $_SESSION["status"]="modification échoué";
        $_SESSION["status-code"]="error";
        header("location: params.php");
    }
}



if(isset($_POST["submit-adress"])){
    $id = $_POST['id'];
    $adress = $_POST['adress'];

    $query_update = "UPDATE users SET adress='$adress' WHERE idUser=$id";
    $run = mysqli_query($connection, $query_update);

    if($run){
        $_SESSION["success"]="Modification enregistrée successivement!";
        $_SESSION["success-code"]="success";
        header("location: params.php");
    }else{
        $_SESSION["status"]="modification échoué";
        $_SESSION["status-code"]="error";
        header("location: params.php");
    }
}




if(isset($_POST["submit-pass"])){
    $id = $_POST['id'];
    $old_pass = $_POST['old-pass'];
    $new_pass1 = $_POST['new-pass1'];
    $new_pass2 = $_POST['new-pass2'];
    
    $query_check = "SELECT * from users where idUser=$id";
    $check = mysqli_query($connection, $query_check);
    if($check){
        $row = mysqli_fetch_row($check);
        if(password_verify($old_pass, $row[3])){

            if($new_pass1 === $new_pass2){
                $hashed_password= password_hash($new_pass1, PASSWORD_DEFAULT);

                $query_update = "UPDATE users SET password='$hashed_password' WHERE idUser=$id";
                $run = mysqli_query($connection, $query_update);

                if($run){
                    $_SESSION["success"]="Mot de passe modifié successivement!";
                    $_SESSION["success-code"]="success";
                    header("location: params.php");
                }else{
                    $_SESSION["status"]="modification échoué";
                    $_SESSION["status-code"]="error";
                    header("location: params.php");
                }

            }else{
                $_SESSION["status"]="Le mot de passe de confirmation n'est pas identique au nouveau mot de passe!";
                $_SESSION["status-code"]="error";
                header("location: params.php");

            }
        }else{
            $_SESSION["status"]="Le mot de passe actuel n'est pas correct!";
            $_SESSION["status-code"]="error";
            header("location: params.php");
        }
    }

    
}

?>