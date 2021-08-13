<?php
    include("includes/header.php");
?>

        <section class="section single-wrapper">
            <div class="container">
                <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 article-sidebar">
                        <div class="sidebar">
                        <div class="container">
                            <div class='blog-list-widget'>
                                <div class='list-group'>
                                <?php
                                 include("includes/security.php");
                                 // Check connection
                                 if ($connection -> connect_errno) {
                                    echo "Failed to connect to MySQL: " . $connection -> connect_error;
                                    exit();
                                    }

                                    $id=$_GET['id'];
                                    
                                    $req = "SELECT * from category_pages, pages where idCat=$id and parent_id IS NULL and category_pages.idPage = pages.idPage";
                                    $req_run = mysqli_query($connection, $req);
                                    if($req_run){
                                        while($row = mysqli_fetch_row($req_run)){
                                            $requete = "SELECT * from pages where parent_id = ".$row[0];
                                            $run = mysqli_query($connection, $requete);
                                            if(mysqli_num_rows($run) > 0){
                                                if($_SESSION['lang']=="Ar"){
                                                    $name = $row[13];
                                                }else{
                                                    $name = $row[3];
                                                }
                                                if(!empty($name)){
                                                echo '<a class="list-widget collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                                                aria-expanded="true" aria-controls="collapsePages">
                                                    <div class="w-100 last-item justify-content-between">
                                                        <h5 class="mb-1">'.$name.'</h5>
                                                    </div><hr>
                                                </a>';
                                                echo '<div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                                                    <div class="bg-white py-2 collapse-inner rounded">';
                                                while($line = mysqli_fetch_row($run)){
                                                    if($_SESSION['lang']=="Ar"){
                                                        $name_s = $line[11];
                                                    }else{
                                                        $name_s = $line[1];
                                                    }
                                                    if(!empty($name_s)){
                                                    echo '<a class="collapse-item" href="single_page_espace.php?id='.$line[0].'&idcat='.$id.'">'.$name_s.'</a><br>';
                                                    }    
                                                }
                                                echo    '</div>
                                                        </div>';
                                                }
                                            }else{
                                                if($_SESSION['lang']=="Ar"){
                                                    $name = $row[13];
                                                }else{
                                                    $name = $row[3];
                                                }
                                                if(!empty($name)){
                                                echo '<a href="single_page_espace.php?id='.$row[0].'&idcat='.$id.'" class="list-widget">
                                                    <div class="w-100 last-item justify-content-between">
                                                        <h5 class="mb-1">'.$name.'</h5>
                                                    </div><hr>
                                                </a>';
                                                }
                                            }
                                        }
                                    }
                                ?>
                               </div>
                            </div>
                        </div>


                            <hr class="invis1">
                            <div class="widget">
                                <h2 class="widget-title"><?= _('Suivez-nous'); ?></h2>

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


                    <?php
                        $query = "SELECT * from category where idCat=$id";
                        $query_run = mysqli_query($connection, $query);
                        if($query_run){
                            $row = mysqli_fetch_row($query_run);
                            if($_SESSION['lang']=="Ar"){
                                $name = $row[3];
                                $content = $row[4];
                            }else{
                                $name = $row[1];
                                $content = $row[2];
                            }
                        }
                    ?>
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="blog-title-area text-center">
                                <ol class="breadcrumb hidden-xs-down">
                                    <li class="breadcrumb-item"><a href="index.php"><?= _('Accueil'); ?></a></li>
                                    <li class="breadcrumb-item active"><?php echo $name?></li>
                                </ol>  
                            </div><!-- end title -->

                       

                            <div class="blog-content"> 
                                <h1 align="center" style="margin-bottom: 40px"><?php echo $name;?></h1>
                                <div class="single-post-media">
                                <!--<img src="images/<?php echo $row[10]?>" alt="" class="img-fluid">-->
                                </div>

                                <div class="pp">
                                    <p>
                                    <?php
                                        echo $content;
                                    ?>
                                    </p>
                                </div>
                            </div><!-- end content -->


                            <?php 
                            $query_plugin = "SELECT * from plugins where idPage=$id";
                            $query_run_p = mysqli_query($connection, $query_plugin);
                            if($query_run_p){
                                while($row_p = mysqli_fetch_row($query_run_p)){
                                    if($row_p[0]== 1){
                                        include("files_list.php");
                                    }else if($row_p[0]== 2){
                                        include("contact_form.php");
                                    }else if($row_p[0]== 3){
                                        //include("auth.php");
                                    }
                                    echo "<hr style='margin: 50px 0'>";
                                }
                            }
                          
                            ?>

                            <div class="blog-title-area">
                                <div class="post-sharing" align="center">
                                    <ul class="list-inline">
                                        <li><a href="#" class="fb-button btn btn-primary facebook-btn"><i class="fa fa-facebook"></i> <span class="down-mobile"><?= _('Partager sur Facebook'); ?></span></a></li>
                                        <li><a href="#" class="tw-button btn btn-primary twitter-btn"><i class="fa fa-twitter"></i> <span class="down-mobile"><?= _('Partager sur Twitter'); ?></span></a></li>
                                        <li><a href="#" class="gp-button btn btn-primary wtsp-btn"><i class="fa fa-whatsapp"></i></a></li>
                                    </ul>
                                </div><!-- end post-sharing -->
                            </div><!-- end title -->

                            <script>
                                const facebookBtn = document.querySelector(".facebook-btn");
                                const twitterBtn = document.querySelector(".twitter-btn");
                                const wtspBtn = document.querySelector(".wtsp-btn");
                                
                                function init(){
                                    let postURL = encodeURI(document.location.href);
                                    let postTitle = encodeURI("Bonjour, je vous invite de lire ceci: ");

                                    facebookBtn.setAttribute("href", `https://www.facebook.com/sharer.php?u=${postURL}`);
                                    twitterBtn.setAttribute("href", `https://twitter.com/share?url=${postURL}&text=${postTitle}`);
                                    wtspBtn.setAttribute("href", `https://api.whatsapp.com/send?text=${postTitle} ${postURL}`);
                                }

                                init();


                            </script>

                            

            </div><!-- end container -->
        </section>

<?php
    include("includes/footer.php");
?>