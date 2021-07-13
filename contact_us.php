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
                                <h2 class="widget-title">Espace client</h2>
                                <div class="blog-list-widget">
                                    <div class="list-group">
                                        <?php 
                                            include("includes/security.php");
                                            $query = "select * from pages where section = 1";
                                            $query_run = mysqli_query($connection, $query);
                                                if($query_run){
                                                    while($row = mysqli_fetch_row($query_run)){
                                                        echo '<a href="single-page.php?id='.$row[0].'" class="list-group-item list-group-item-action flex-column align-items-start">
                                                        <div class="w-100 justify-content-between">';
                                                        echo '<h5 class="mb-1">'.$row[1].'</h5>';
                                                        echo '</div>';
                                                        echo '</a>';
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