<?php
include('security.php');

if(isset($_POST['addbtn']))
{
    $title = mysqli_real_escape_string($connection, $_POST['title']);
    $draft = $_POST['archive'];
    //$file = $_FILES['fl'];
    $fileName = $_FILES['fichier']['name'];
    //$fileTmpName = $_FILES['fl']['tmp_name'];
    //$fileSize = $_FILES['fichier']['size'];
    $fileError = $_FILES['fichier']['error'];
    //$fileType = $_FILES['fl']['type'];
    $file = time().'-'.$_FILES['fichier']['name'];
    $fichier_path = $_FILES["fichier"];
    $fileTmpName =$_FILES["fichier"]["tmp_name"];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array("jpeg", "jpg", "png", "pdf");

    if(in_array($fileActualExt, $allowed)){
                if($fileError === 0){
                        $query = "INSERT into files(link, draft, title) values('$file', $draft, '$title')";
                        $query_run=mysqli_query($connection, $query);

                        if($query_run){
                            $target_file = "../files/".$file;
                            if (move_uploaded_file($_FILES["fichier"]["tmp_name"], $target_file)) {
                                //var_dump('success');exit();
                             echo "<center><i><h4>The file ". basename( $file). " has been uploaded.</h4></i></center>";
                            } else {
                                echo "<center>désolé, il y avait un erreur de téléchargement de fichier.</font></center>";
                            }
                             $_SESSION["success"]="fichier ajouté successivement";
                             $_SESSION["success-code"]="success";
                             header("location: files.php");
                        }else{
                            $_SESSION["status"]="fichier n'est pas ajouté";
                            $_SESSION["status-code"]="status";
                            header("location: files.php");
                        }
                }else{
                    $_SESSION['status'] = "fichier n'est pas téléchargé";
                    $_SESSION['status_code'] = "error";
                    header('Location: files.php');
                }
    }else{
        $_SESSION['status'] = "format de fichier n'est pas supporté";
        $_SESSION['status_code'] = "error";
        header('Location: files.php');
    }
/*

                        $fileNameNew = uniqid('',true).".".$fileActualExt;
                        $fileDestination = "files/".$fileNameNew;
                        move_uploaded_file($fileTmpName, $fileDestination);


                        //insert new file
                        $query = "INSERT INTO files (link, createdAt, draft, title) VALUES ('$fileNameNew', '$today_date', $draft, '$title')";

                        $query_run = mysqli_query($connection, $query);
*/
            
            

}







if(isset($_POST["deletefilebtn"]))
{
    $file_id = $_POST['file-id'];


    
    $query = "DELETE FROM files WHERE idFile=$file_id";
    $query_run = mysqli_query($connection, $query);
    if($query_run)
    {
        $_SESSION['success'] = "fichier supprimé successivement";
        $_SESSION['success_code'] = "success";
        header('Location: files.php');  
    }
    else
    {
        $_SESSION['status'] = "fichier n'est pas supprimé";
        $_SESSION['status_code'] = "error";
        header('Location: files.php');
        
    }

}
?>
