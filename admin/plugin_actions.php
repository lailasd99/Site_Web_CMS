<?php
include("security.php");

if(isset($_POST['deletepluginbtn'])){
    $id = $_POST['plugin-id'];

    $req = "SELECT * from files where idFile=$id";
    $run = mysqli_query($connection, $req);
    if($run){
        $row = mysqli_fetch_row($run);
        $plugin = $row[6];
    }
    $query = "DELETE FROM files where idFile=$id";
    $query_run = mysqli_query($connection, $query);

    if($query_run){
        $_SESSION['success'] = "Fichier supprimé successivement";
        $_SESSION['success_code'] = "success";
        header('Location: modify_plugin.php?id='.$plugin); 
    }else{
        $_SESSION['status'] = "Fichier n'est pas supprimé";
        $_SESSION['status_code'] = "error";
        header('Location: modify_plugin.php?id='.$plugin); 
    }
}



if(isset($_POST['deleteagencebtn'])){
    $id = $_POST['agence-id'];

    $query = "DELETE FROM agences where id=$id";
    $query_run = mysqli_query($connection, $query);

    if($query_run){
        $_SESSION['success'] = "Agence supprimée successivement";
        $_SESSION['success_code'] = "success";
        header('Location: modify_plugin.php?id=5'); 
    }else{
        $_SESSION['status'] = "Fichier n'est pas supprimée";
        $_SESSION['status_code'] = "error";
        header('Location: modify_plugin.php?id=5'); 
    }
}





if(isset($_POST['add_file_com'])){

    $plugin=1;
    $datecom = $_POST['datecom'];
    $title = mysqli_real_escape_string($connection, $_POST['title']);
    $draft = $_POST['archive'];
    $fileName = $_FILES['fichier']['name'];
    $fileError = $_FILES['fichier']['error'];
    $file = time().'-'.$_FILES['fichier']['name'];
    $fichier_path = $_FILES["fichier"];
    $fileTmpName =$_FILES["fichier"]["tmp_name"];
  
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array("pdf", "docx", "doc", "odt");

    if(in_array($fileActualExt, $allowed)){
                if($fileError === 0){
                        $query = "INSERT into files(link, draft, title, datecom, Plugin) values('$file', $draft, '$title', '$datecom', $plugin)";
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
                             header("location: modify_plugin.php?id=1");
                        }else{
                            $_SESSION["status"]="fichier n'est pas ajouté";
                            $_SESSION["status-code"]="status";
                            header("location: modify_plugin.php?id=1");
                        }
                }else{
                    $_SESSION['status'] = "fichier n'est pas téléchargé";
                    $_SESSION['status_code'] = "error";
                    header('Location: modify_plugin.php?id=1');
                }
    }else{
        $_SESSION['status'] = "format de fichier n'est pas supporté";
        $_SESSION['status_code'] = "error";
        header('Location: modify_plugin.php?id=1');
    }
}




if(isset($_POST['add_form'])){

    $num= mysqli_real_escape_string($connection, $_POST['num']);
    $title = mysqli_real_escape_string($connection, $_POST['title']);
    $draft = $_POST['archive'];
    $plugin = 4;
    $fileName = $_FILES['fichier']['name'];
    $fileError = $_FILES['fichier']['error'];
    $file = time().'-'.$_FILES['fichier']['name'];
    $fichier_path = $_FILES["fichier"];
    $fileTmpName =$_FILES["fichier"]["tmp_name"];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array("pdf", "docx", "doc", "odt");

    if(in_array($fileActualExt, $allowed)){
                if($fileError === 0){
                        $query = "INSERT into files(link, draft, title, Plugin, num) values('$file', $draft, '$title', $plugin, '$num')";
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
                             header("location: modify_plugin.php?id=4");
                        }else{
                            $_SESSION["status"]="fichier n'est pas ajouté";
                            $_SESSION["status-code"]="status";
                            header("location: modify_plugin.php?id=4");
                        }
                }else{
                    $_SESSION['status'] = "fichier n'est pas téléchargé";
                    $_SESSION['status_code'] = "error";
                    header('Location: modify_plugin.php?id=4');
                }
    }else{
        $_SESSION['status'] = "format de fichier n'est pas supporté";
        $_SESSION['status_code'] = "error";
        header('Location: modify_plugin.php?id=4');
    }
            
}



if(isset($_POST['add_agence'])){

    $nom = mysqli_real_escape_string($connection, $_POST['title']);
    $adresse = mysqli_real_escape_string($connection, $_POST['adresse']);
    $link = mysqli_real_escape_string($connection, $_POST['link']);
    $num = $_POST['num'];
    $info = mysqli_real_escape_string($connection, $_POST['info']);

    $query = " SELECT * from agences where name=$nom";
    $run = mysqli_query($connection, $query);
    if($run){
        $_SESSION['status'] = "nom d'agence existe déja";
        $_SESSION['status_code'] = "error";
        header('Location: modify_plugin.php?id=5');
    }

    $req = "INSERT into agences(name, adresse, link, phone, info) values('$nom', '$adresse', '$link', '$num', '$info')";
    $query_run = mysqli_query($connection, $req);

    if($query_run){
        $_SESSION['success'] = "agence ajoutée successivement";
        $_SESSION['success_code'] = "success";
        header('Location: modify_plugin.php?id=5');
    }else{
        $_SESSION['status'] = "agence n'est pas ajoutée";
        $_SESSION['status_code'] = "error";
        header('Location: modify_plugin.php?id=5');
    }
}


if(isset($_POST['add_rapport'])){

    $title = mysqli_real_escape_string($connection, $_POST['title']);
    $draft = $_POST['archive'];
    $plugin = 6;
    $fileName = $_FILES['fichier']['name'];
    $fileError = $_FILES['fichier']['error'];
    $file = time().'-'.$_FILES['fichier']['name'];
    $fichier_path = $_FILES["fichier"];
    $fileTmpName =$_FILES["fichier"]["tmp_name"];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array("pdf", "docx", "doc", "odt");

    if(in_array($fileActualExt, $allowed)){
                if($fileError === 0){
                        $query = "INSERT into files(link, draft, title, Plugin) values('$file', $draft, '$title', $plugin)";
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
                             header("location: modify_plugin.php?id=6");
                        }else{
                            $_SESSION["status"]="fichier n'est pas ajouté";
                            $_SESSION["status-code"]="status";
                            header("location: modify_plugin.php?id=6");
                        }
                }else{
                    $_SESSION['status'] = "fichier n'est pas téléchargé";
                    $_SESSION['status_code'] = "error";
                    header('Location: modify_plugin.php?id=6');
                }
    }else{
        $_SESSION['status'] = "format de fichier n'est pas supporté";
        $_SESSION['status_code'] = "error";
        header('Location: modify_plugin.php?id=6');
    }
            
}


if(isset($_POST['add_flash'])){

    $title = mysqli_real_escape_string($connection, $_POST['title']);
    $draft = $_POST['archive'];
    $plugin = 7;
    $fileName = $_FILES['fichier']['name'];
    $fileError = $_FILES['fichier']['error'];
    $file = time().'-'.$_FILES['fichier']['name'];
    $fichier_path = $_FILES["fichier"];
    $fileTmpName =$_FILES["fichier"]["tmp_name"];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array("pdf", "docx", "doc", "odt");

    if(in_array($fileActualExt, $allowed)){
                if($fileError === 0){
                        $query = "INSERT into files(link, draft, title, Plugin) values('$file', $draft, '$title', $plugin)";
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
                             header("location: modify_plugin.php?id=7");
                        }else{
                            $_SESSION["status"]="fichier n'est pas ajouté";
                            $_SESSION["status-code"]="status";
                            header("location: modify_plugin.php?id=7");
                        }
                }else{
                    $_SESSION['status'] = "fichier n'est pas téléchargé";
                    $_SESSION['status_code'] = "error";
                    header('Location: modify_plugin.php?id=7');
                }
    }else{
        $_SESSION['status'] = "format de fichier n'est pas supporté";
        $_SESSION['status_code'] = "error";
        header('Location: modify_plugin.php?id=7');
    }
            
}




if(isset($_POST['edit_com'])){
    $id_file = $_POST['com-id'];
    $title = mysqli_real_escape_string($connection, $_POST['title']);
    $draft = $_POST['archive'];
    $date = $_POST['datecom'];

    $query = "UPDATE files set draft=$draft,title='$title', datecom='$date' where idFile=$id_file";
    $run = mysqli_query($connection, $query);

    if($run){
        $_SESSION['success'] = "fichier modifié successivement";
        $_SESSION['success_code'] = "success";
        header('Location: modify_plugin.php?id=1');
    }else{
        $_SESSION['status'] = "fichier n'est pas modifié";
        $_SESSION['status_code'] = "error";
        header('Location: modify_plugin.php?id=1');
    }
}


if(isset($_POST['edit_form'])){
    $id_file = $_POST['form-id'];
    $title = mysqli_real_escape_string($connection, $_POST['title']);
    $draft = $_POST['archive'];
    $num = $_POST['num'];

    $query = "UPDATE files set draft=$draft, title='$title', num='$num' where idFile=$id_file";
    $run = mysqli_query($connection, $query);

    if($run){
        $_SESSION['success'] = "fichier modifié successivement";
        $_SESSION['success_code'] = "success";
        header('Location: modify_plugin.php?id=4');
    }else{
        $_SESSION['status'] = "fichier n'est pas modifié";
        $_SESSION['status_code'] = "error";
        header('Location: modify_plugin.php?id=4');
    }
}

if(isset($_POST['edit_agence'])){
    $id_agence = $_POST['agence-id'];
    $nom = mysqli_real_escape_string($connection, $_POST['title']);
    $adresse = mysqli_real_escape_string($connection, $_POST['adresse']);
    $link = mysqli_real_escape_string($connection, $_POST['link']);
    $tel = $_POST['num'];
    $info = mysqli_real_escape_string($connection, $_POST['info']);

    $query = "UPDATE agences set name='$nom', adresse='$adresse', link='$link', phone='$tel', info='$info' where id=$id_agence";
    $run = mysqli_query($connection, $query);

    if($run){
        $_SESSION['success'] = "agence modifié successivement";
        $_SESSION['success_code'] = "success";
        header('Location: modify_plugin.php?id=5');
    }else{
        $_SESSION['status'] = "agence n'est pas modifiée";
        $_SESSION['status_code'] = "error";
        header('Location: modify_plugin.php?id=5');
    }
}


if(isset($_POST['edit_rapport'])){
    $id_file = $_POST['rapport-id'];
    $title = mysqli_real_escape_string($connection, $_POST['title']);
    $draft = $_POST['archive'];

    $query = "UPDATE files set draft=$draft,title='$title' where idFile=$id_file";
    $run = mysqli_query($connection, $query);

    if($run){
        $_SESSION['success'] = "fichier modifié successivement";
        $_SESSION['success_code'] = "success";
        header('Location: modify_plugin.php?id=6');
    }else{
        $_SESSION['status'] = "fichier n'est pas modifié";
        $_SESSION['status_code'] = "error";
        header('Location: modify_plugin.php?id=6');
    }
}


if(isset($_POST['edit_flash'])){
    $id_file = $_POST['flash-id'];
    $title = mysqli_real_escape_string($connection, $_POST['title']);
    $draft = $_POST['archive'];

    $query = "UPDATE files set draft=$draft,title='$title' where idFile=$id_file";
    $run = mysqli_query($connection, $query);

    if($run){
        $_SESSION['success'] = "fichier modifié successivement";
        $_SESSION['success_code'] = "success";
        header('Location: modify_plugin.php?id=7');
    }else{
        $_SESSION['status'] = "fichier n'est pas modifié";
        $_SESSION['status_code'] = "error";
        header('Location: modify_plugin.php?id=7');
    }
}





if(isset($_POST['add_acte'])){
    $title = mysqli_real_escape_string($connection, $_POST['title']);
    $content = mysqli_real_escape_string($connection, $_POST['desc']);
    $title_ar = mysqli_real_escape_string($connection, $_POST['title_ar']);
    $content_ar = mysqli_real_escape_string($connection, $_POST['desc_ar']);


    $query = "INSERT INTO faq(question, answer, question_ar, answer_ar) values('$title', '$content', '$title_ar', '$content_ar')";
    $run = mysqli_query($connection, $query);

    if($run){
        $_SESSION['success'] = "ajout réussit!";
        $_SESSION['success_code'] = "success";
        header('Location: modify_plugin.php?id=9');
    }else{
        $_SESSION['status'] = "ajout échoué";
        $_SESSION['status_code'] = "error";
        header('Location: modify_plugin.php?id=9');
    }
}


var_dump($_POST);exit();
if(isset($_POST['edit_acte'])){
    $id_acte = $_POST['acte-id'];
    $title = mysqli_real_escape_string($connection, $_POST['title']);
    $content = mysqli_real_escape_string($connection, $_POST['desc']);
    $title_ar = mysqli_real_escape_string($connection, $_POST['title_ar']);
    $content_ar = mysqli_real_escape_string($connection, $_POST['desc_ar']);


    $query = "UPDATE faq set question='$title', answer='$content', question_ar='$title_ar', answer_ar='$content_ar' where idFaq=$id_acte";
    $run = mysqli_query($connection, $query);

    if($run){
        $_SESSION['success'] = "modification réussite!";
        $_SESSION['success_code'] = "success";
        header('Location: modify_plugin.php?id=9');
    }else{
        $_SESSION['status'] = "modification échouée";
        $_SESSION['status_code'] = "error";
        header('Location: modify_plugin.php?id=9');
    }
}


if(isset($_POST['delete_acte'])){
    $id = $_POST['acte-id'];

    $query = "DELETE FROM faq where idFaq=$id";
    $query_run = mysqli_query($connection, $query);

    if($query_run){
        $_SESSION['success'] = "Question supprimée successivement";
        $_SESSION['success_code'] = "success";
        header('Location: modify_plugin.php?id=9'); 
    }else{
        $_SESSION['status'] = "Question n'est pas supprimée";
        $_SESSION['status_code'] = "error";
        header('Location: modify_plugin.php?id=9'); 
    }
}
?>