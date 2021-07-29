<?php
    include("includes/header.php");
?>

        <section class="section single-wrapper">
            <div class="container">
                <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 article-sidebar">
                        <div class="sidebar">
                        <div class="container">
                            
                             </div>

                            <div class="widget">
                                <h2 class="widget-title espace-title">Espace client</h2>
                                <div class="blog-list-widget">
                                    <div class="list-group">
                                        <?php 
                                            include("includes/security.php");
                                            $query = "SELECT * from category_pages where idCat = 1";
                                            $query_run = mysqli_query($connection, $query);
                                                if($query_run){
                                                    while($row = mysqli_fetch_row($query_run)){
                                                        $req = "SELECT * from pages where idPage=".$row[0];
                                                        $run = mysqli_query($connection, $req);
                                                        if($run){
                                                            while($line = mysqli_fetch_row($run)){
                                                               
                                                                $requete = "SELECT * from pages where parent_id = ".$line[0];
                                                                $run = mysqli_query($connection, $requete);
                                                                if(mysqli_num_rows($run) > 0){
                                                                    echo '<a class="list-widget collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                                                                    aria-expanded="true" aria-controls="collapsePages">
                                                                        <div class="w-100 last-item justify-content-between">
                                                                            <h5 class="mb-1">'.$line[1].'</h5>
                                                                        </div><hr>
                                                                    </a>';
                                                                    echo '<div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                                                                        <div class="bg-white py-2 collapse-inner rounded">';
                                                                    while($rw= mysqli_fetch_row($run)){
                                                                        echo '<a class="collapse-item" href="single-page.php?id='.$rw[0].'&catid=1">'.$rw[1].'</a><br>';
                                                                            
                                                                    }
                                                                    echo    '</div>
                                                                            </div>';
                                                                }
                                                                    else{
                                                                        echo '<a href="single-page.php?id='.$line[0].'&catid=1" class="list-widget">
                                                                                <div class="w-100 last-item justify-content-between">
                                                                                    <h5 class="mb-1">'.$line[1].'</h5>
                                                                                </div><hr>
                                                                            </a>';
                                                                    }
                                                            }
                                                        }
                                                    }
                                                }        
                                        ?>
                                    </div>
                                </div><!-- end blog-list -->
                            </div><!-- end widget -->

                            <div class="widget">
                                <h2 class="widget-title">Suivez-nous</h2>

                                <div class="row text-center">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <a href="https://fr-fr.facebook.com/RADEEMAKECH/" class="social-button facebook-button">
                                            <i class="fa fa-facebook"></i>
                                            
                                        </a>
                                    </div>

                                 
                                  

                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <a href="https://www.youtube.com/channel/UCFl5dUovd_Wr1AT0aprFAJA" class="social-button youtube-button">
                                            <i class="fa fa-youtube"></i>
                                          
                                        </a>
                                    </div>
                                </div>
                            </div><!-- end widget -->
                        </div><!-- end sidebar -->
                    </div><!-- end col -->



                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="blog-title-area text-center">
                                <ol class="breadcrumb hidden-xs-down">
                                    <li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
                                    <li class="breadcrumb-item active">contact</li>
                                </ol>

                                <!--<span class="color-orange"><a href="tech-category-01.html" title="">Technology</a></span>-->
                               

                              

                               
                            </div><!-- end title -->

                            <!---<div class="single-post-media">
                                <img src="upload/tech_menu_08.jpg" alt="" class="img-fluid">
                            </div>--->

                            <div class="blog-content"> 
                                <?php
                                    if(isset($_POST['submit'])){
                                    $email = $_POST['email'];
                                    }else{
                                        $email="";
                                    }
                                ?>
                                <div class="custombox clearfix col-lg-9 col-md-12 col-sm-12 col-xs-12" id="contact-form-a">
                                    <h4 class="small-title">Envoyer un message</h4>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <form class="form-wrapper">
                                                <input type="email" name="mail" class="form-control" value="<?php echo $email?>" placeholder="email ici">
                                                <input type="text" name="subject" class="form-control" placeholder="Sujet">
                                                <textarea rows="16" class="form-control" placeholder="votre message"></textarea>
                                                <button type="submit" class="btn btn-primary">Envoyer</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                
                        </div><!-- end content -->




                            
                        </div><!-- end page-wrapper -->
                    </div><!-- end col -->

                    
                </div><!-- end row -->
            </div><!-- end container -->
        </section>

<?php
    include("includes/footer.php");
?>