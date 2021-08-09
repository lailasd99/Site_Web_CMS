<footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="widget">
                            <div class="footer-text text-left">
                                <a href="index.php"><img src="images/version/radeema_logo_new.png" alt="" class="img-fluid"></a>
                                <!--<p>Tech Blog is a technology blog, we sharing marketing, news and gadget articles.</p>-->
                                <div class="social" id="social">
                                    <a href="https://fr-fr.facebook.com/RADEEMAKECH/" data-toggle="tooltip" data-placement="bottom" title="<?= _('Facebook'); ?>"><i class="fa fa-facebook"></i></a>              
                                    <a href="https://www.youtube.com/channel/UCFl5dUovd_Wr1AT0aprFAJA" data-toggle="tooltip" data-placement="bottom" title="<?= _('Youtube'); ?>"><i class="fa fa-youtube-play"></i></a>
                                    <a href="https://play.google.com/store/apps/details?id=ma.radeema.redaelouafi.RadeemaMob" data-toggle="tooltip" data-placement="bottom" title="<?= _('Application android'); ?>"><i class="fa fa-android "></i></a>
                                </div>

                                <hr class="invis">

                                <div class="newsletter-widget text-left">
                                    <h2 class="form-title"><?= _('Envoyez nous un message'); ?></h2>
                                    <form class="form-inline" action="contact_us.php" method="post">
                                        <input name="email" type="text" class="form-control" placeholder="<?= _('Entrez votre adresse email');?>...">
                                        <button name ="submit" type="submit" class="btn btn-primary send"><?= _('Soumettre'); ?></button>
                                    </form>
                                </div><!-- end newsletter -->
                               
                            </div><!-- end footer-text -->
                        </div><!-- end widget -->
                        <div class="centre-rel" style="margin-top: 50px">
                            <img src="upload/icon_contact.png" class="img-fluid" style="height: 130px">
                            <!--<h2 id="num-centre">080 2000 123</h2> 
                            <h2 id="centre">Centre de Relation Client</h2>-->
                        </div>    
                    </div><!-- end col -->

                        <?php
                                include("security.php");
                                $query = "select * from menu_pages where idMenu=6";
                                $query_run = mysqli_query($connection, $query);
                                while($row = mysqli_fetch_row($query_run)){
                                    if($row[2] == "page"){
                                        $query1 = "SELECT * from pages where idPage=".$row[1];
                                        $query_run1 = mysqli_query($connection, $query1);
                                        if($query_run1){
                                            $row1 = mysqli_fetch_row($query_run1);
                                            if($locale=="Ar" && !empty($row1[11])){
                                                $name = $row1[11];
                                            }else{
                                                $name = $row1[1];
                                            }
                                            echo '<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                            <div class="widget">
                                                        <a class="nav-link" href="single-page.php?id='.$row1[0].'"><h2 class="widget-title">'.$name.'</h2></a>
                                              </div>
                                              </div>';
                                        }
                                    }
                                            else if($row[2] == "categorie"){
                                                $query1 = "SELECT * from category where idCat=".$row[1];
                                                $query_run1 = mysqli_query($connection, $query1);
                                                if($query_run1){
                                                    $row1 = mysqli_fetch_row($query_run1);
                                                    if($_SESSION['lang']=="Ar" && !empty($row1[3])){
                                                        $name = $row1[3];
                                                    }else{
                                                        $name = $row1[1];
                                                    }
                                                }
                                            
                                                    $query2 = "SELECT * from category_pages where idCat=".$row[1];
                                                    $query_run2 = mysqli_query($connection, $query2);
                                                    if($query_run2){
                                                        //affichage du nom de la categorie
                                                        echo '<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="widget">
                                                        <h2 class="widget-title">'.$name.'</h2>';
                                                        echo '<div class="link-widget">
                                                                <ul>';
                                                                //affichage des pages de la categories
                                                            while($row2 = mysqli_fetch_row($query_run2)){
                                                                $req = "SELECT * from pages where idPage=".$row2[0];
                                                                $res = mysqli_query($connection, $req);
                                                                if($res){
                                                                    $line = mysqli_fetch_row($res);
                                                                    if($_SESSION['lang']=="Ar" && !empty($line[11])){
                                                                        $name = $line[11];
                                                                    }else{
                                                                        $name = $line[1];
                                                                    }
                                                                    echo '<li><a href="single-page.php?id='.$line[0].'&catid='.$row[1].'">'.$name.'</a></li>';
                                                                }
                                                            }

                                                            echo '</ul>
                                                            </div><!-- end link-widget -->';
                                                            echo '</div><!-- end widget -->
                                                       </div><!-- end col -->';
                                                    }
                                                    
                                                     
                                            }
                                }
                           
                            ?>

                </div><!--- end row --->

                <div class="row">
                    <div class="col-md-12 text-center">
                        <br>
                        <div class="copyright">&copy; <?= _('Tous droits réservés RADEEMA 2021'); ?></div>
                    </div>
                </div>
            </div><!-- end container -->
        </footer><!-- end footer -->

        <div class="dmtop"><?=_('Remonter'); ?></div>
        <!--<a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>-->
        
    </div><!-- end wrapper -->



 

    <!-- Core JavaScript
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>

    <?php
        include("scripts.php");
    ?>

</body>
</html>