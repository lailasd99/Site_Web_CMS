<?php
include('security.php');
//var_dump($_POST);exit();
if(isset($_POST['addbtn']))
{
    if($_POST['num']){
        $num= mysqli_real_escape_string($connection, $_POST['num']);
    }else{
        $num="";
    }
    if($_POST['datecom']){
        $datecom = $_POST['datecom'];
    }else{
        $datecom = "";
    }
    $title = mysqli_real_escape_string($connection, $_POST['title']);
    $draft = $_POST['archive'];
    $plugin = $_POST['plugin'];
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

    $allowed = array("pdf", "docx", "doc", "odt");

    if(in_array($fileActualExt, $allowed)){
                if($fileError === 0){
                        $query = "INSERT into files(link, draft, title, datecom, Plugin, num) values('$file', $draft, '$title', '$datecom', $plugin, '$num')";
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

//var_dump($_POST);exit();
if(isset($_POST["editfile"])){

    $file_id = $_POST['file-id'];
    $title = mysqli_real_escape_string($connection, $_POST['title']);
    $draft = $_POST['archive'];
    $plugin = $_POST['plugin'];
    if($_POST['num']){
        $num= $_POST['num'];
    }else{
        $num="";
    }
    if($_POST['datecom']){
        $datecom = $_POST['datecom'];
    }else{
        $datecom = "";
    }

    
    $query = "UPDATE files SET draft=$draft, title='$title', Plugin=$plugin, datecom='$datecom', num='$num' WHERE idFile=$file_id";
    $query_run = mysqli_query($connection, $query);
    if($query_run)
    {
        $_SESSION['success'] = "fichier modifié successivement";
        $_SESSION['success_code'] = "success";
        header('Location: files.php');  
    }
    else
    {
        $_SESSION['status'] = "fichier n'est pas modifié";
        $_SESSION['status_code'] = "error";
        header('Location: files.php');
        
    }

}

?>
