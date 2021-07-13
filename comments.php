<?php
//var_dump($_POST); exit();
                include("includes/security.php");

                if(isset($_POST['submit'])){
                    $idArt = $_POST['idArt'];
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $comment = $_POST['comment'];

                    $query = "INSERT into comments(name, email, comment, idArticle) values('$name', '$email','$comment',$idArt)";
                    $query_run = mysqli_query($connection, $query);

                    if($query_run){
                        $_SESSION['success'] = "commentare ajouté successivement";
                        $_SESSION['success_code'] = "erreur";
                        header('Location: single-blog.php?id='.$idArt);
                    }else{
                        $_SESSION['status'] = "commentare n'est pas ajouté";
                        $_SESSION['status_code'] = "erreur";
                        header('Location: single-blog.php?id='.$idArt);
                    }


                }
        ?>