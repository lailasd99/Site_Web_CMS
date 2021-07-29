<?php
//var_dump($_POST); exit();

include("security.php");
if(isset($_POST["submit-page"])){
    $page_content = str_replace('../upload',"http://localhost/radeema/upload", $_POST['text_editor_page']);
    $title =mysqli_real_escape_string($connection, $_POST['title']);
    $categories = $_POST['id_categorie'];
    $cat = explode(",", $categories);
    $draft = $_POST['id_draft'];
    $page_id =$_POST['page_id'];
    $parent_id = $_POST['parent_page_id'];
    $content = mysqli_real_escape_string($connection, $page_content);
    $photo = time().'-'.$_FILES['page_photo']['name'];
    $photo_path = $_FILES["page_photo"];
    $photoTmpName =$_FILES["page_photo"]["tmp_name"];

    $pdf=$_POST['pdf'];
    $l_form=$_POST['l_form'];
    $c_form=$_POST['c_form'];
    $forms=$_POST['forms'];
    $local=$_POST['local'];
    $pub=$_POST['publication'];
    $flash=$_POST['flash'];
    $galery=$_POST['galery'];

    $target_file = "../images/".$photo;
    move_uploaded_file($_FILES["page_photo"]["tmp_name"], $target_file);

        if(!empty($parent_id)){
            
            $query = "UPDATE pages SET title = '$title', parent_id=$parent_id, draft=$draft, content='$content',  media='$photo' WHERE idPage=$page_id";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run){
                $_SESSION["success"]="page modifié successivement";
                $_SESSION["success-code"]="success";
                header("location: pages.php");
            }
        }else{
            //parent not identified
               
                    $query = "UPDATE pages SET title = '$title', draft=$draft, content='$content', media='$photo' WHERE idPage=$page_id";
                    $query_run=mysqli_query($connection, $query);
        
                    if($query_run){
                        $_SESSION["success"]="page modifié successivement";
                        $_SESSION["success-code"]="success";
                        header("location: pages.php");
                    }
        }

        $query_delete_plugins = "DELETE FROM plugins where idPage=$page_id;";

        if($pdf == "true"){
            $query_delete_plugins .="INSERT INTO plugins(idPlugin, name, idPage) values(1, 'Table de PDF téléchargeable', $page_id);";
        }
        if($l_form == "true"){
            $query_delete_plugins .="INSERT INTO plugins(idPlugin, name, idPage) values(3, 'Formulaire d\'authentification', $page_id);";
        }
        if($c_form == "true"){
            $query_delete_plugins .="INSERT INTO plugins(idPlugin, name, idPage) values(2, 'Formulaire de contact', $page_id);";
        }
        if($forms == "true"){
            $query_delete_plugins .="INSERT INTO plugins(idPlugin, name, idPage) values(4, 'les formulaires', $page_id); ";
        }
        if($local == "true"){
            $query_delete_plugins .="INSERT INTO plugins(idPlugin, name, idPage) values(5, 'localisation des agences', $page_id); ";
        }
        if($pub == "true"){
            $query_delete_plugins .="INSERT INTO plugins(idPlugin, name, idPage) values(6, 'Rapports et Publications', $page_id); ";
        }
        if($flash == "true"){
            $query_delete_plugins .="INSERT INTO plugins(idPlugin, name, idPage) values(7, 'Flash info et Communiqués', $page_id); ";
        }
        if($galery == "true"){
            $query_delete_plugins .="INSERT INTO plugins(idPlugin, name, idPage) values(8, 'Galerie', $page_id); ";
        }

        $query_run=mysqli_multi_query($connection, $query_delete_plugins);



        $query_delete_cat = "DELETE FROM category_pages where idPage=$page_id;";

        foreach($cat as $c){
            $query_delete_cat .="INSERT INTO category_pages(idPage, idCat) values($page_id, $c);"; 
        }
        

        $query_run=mysqli_multi_query($connection, $query_delete_cat);


}




if(isset($_POST["deletepagebtn"]))
{
    $page_id = $_POST['page-id'];
   
    $query = "DELETE from pages where idPage=$page_id; delete from plugins where idPage=$page_id";
    $query_run = mysqli_multi_query($connection, $query);
    if($query_run)
    {
        $_SESSION['success'] = "page supprimée successivement";
        $_SESSION['success_code'] = "success";
        header('Location: pages.php');  
    }
    else
    {
        $_SESSION['status'] = "Page n'est pas supprimée";
        $_SESSION['status_code'] = "error";
        header('Location: pages.php');
        
    }

}




if(isset($_POST['add-page'])){

    $page_content = str_replace('../upload',"http://localhost/radeema/upload", $_POST['text_editor_page']); 
    $title =mysqli_real_escape_string($connection, $_POST['title']);
    $categories = $_POST['id_categorie'];
    $cat = explode(",", $categories);
    $draft = $_POST['id_draft'];
    $parent_id = $_POST['parent_page_id'];
    $content = mysqli_real_escape_string($connection, $page_content);
    $photo = time().'-'.$_FILES['page_photo']['name'];
    $photo_path = $_FILES["page_photo"];
    $photoTmpName =$_FILES["page_photo"]["tmp_name"];

    $pdf=$_POST['pdf'];
    $l_form=$_POST['l_form'];
    $c_form=$_POST['c_form'];
    $forms=$_POST['forms'];
    $local=$_POST['local'];
    $pub=$_POST['publication'];
    $flash=$_POST['flash'];
    $galery=$_POST['galery'];


    $query = "SELECT * FROM pages WHERE title='$title'";
    $run = mysqli_query($connection, $query);
    if(mysqli_num_rows($run) > 0)
    {
        $_SESSION['status'] = "titre de page existe déja";
        $_SESSION['status_code'] = "erreur";
        header('Location: add_page.php?');  
    }
    else
    {

        $target_file = "../images/".$photo;
        move_uploaded_file($_FILES["page_photo"]["tmp_name"], $target_file);

        if(!empty($parent_id)){
          
            $query = "INSERT INTO pages(title, parent_id, draft, content, media) values('$title', $parent_id, $draft,'$content', '$photo')";
            $query_run = mysqli_query($connection, $query);
            
        }else{
                $query = "INSERT into pages(title, parent_id, draft, content, media)  values('$title', $parent_id, $draft, '$content', '$photo')";
                $query_run = mysqli_query($connection, $query);
                
        }

        $query_id = "SELECT * from pages order by idPage DESC LIMIT 1";
        $query_result=mysqli_query($connection, $query_id);
        if($query_result){
            $row = mysqli_fetch_row($query_result);
            $page_id = $row[0];
        }
    
        $query_plugins="";
        if($pdf == "true"){  
            $query_plugins .="INSERT INTO plugins(idPlugin, name, idPage) values(1, 'Table de PDF téléchargeable', $page_id); ";
        }
        if($l_form == "true"){
            $query_plugins .="INSERT INTO plugins(idPlugin, name, idPage) values(3, 'Formulaire d\'authentification', $page_id); ";
        }
        if($c_form == "true"){
            $query_plugins .="INSERT INTO plugins(idPlugin, name, idPage) values(2, 'Formulaire de contact', $page_id); ";
        }
        if($forms == "true"){
            $query_plugins .="INSERT INTO plugins(idPlugin, name, idPage) values(4, 'les formulaires', $page_id); ";
        }
        if($local == "true"){
            $query_plugins .="INSERT INTO plugins(idPlugin, name, idPage) values(5, 'localisation des agences', $page_id); ";
        }
        if($pub == "true"){
            $query_plugins .="INSERT INTO plugins(idPlugin, name, idPage) values(6, 'Rapports et Publications', $page_id); ";
        }
        if($flash == "true"){
            $query_plugins .="INSERT INTO plugins(idPlugin, name, idPage) values(7, 'Flash info et Communiqués', $page_id); ";
        }
        if($galery == "true"){
            $query_plugins .="INSERT INTO plugins(idPlugin, name, idPage) values(8, 'Galerie', $page_id); ";
        }
        

        $query_cat = "";
        foreach($cat as $c){
            $query_cat .="INSERT INTO category_pages(idPage, idCat) values($page_id, $c);"; 
        }
        
        $query_run=mysqli_multi_query($connection, $query_cat);


        if($query_plugins <> ""){
            $query_run_p = mysqli_multi_query($connection, $query_plugins);

            if($query_run_p){
                $_SESSION["success"]="page ajoutée successivement";
                $_SESSION["success-code"]="success";
                header("location: pages.php");
            }else{
                $_SESSION["status"]="page n'est pas ajoutée";
                $_SESSION["status-code"]="error";
                header("location: pages.php");
            }
        }else{
            $_SESSION["success"]="page ajoutée successivement";
            $_SESSION["success-code"]="success";
            header("location: pages.php");
        }
    }

}

?>