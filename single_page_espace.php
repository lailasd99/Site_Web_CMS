<?php
    include("includes/header.php");
?>

        <section class="section single-wrapper">
            <div class="container">
                <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 article-sidebar">
                        <div class="sidebar">
                        <div class="container">

                                <?php
                                 include("includes/security.php");
                                 // Check connection
                                 if ($connection -> connect_errno) {
                                    echo "Failed to connect to MySQL: " . $connection -> connect_error;
                                    exit();
                                    }

                                    $id=$_GET['id'];
                                    $idcat=$_GET['idcat'];
                                    
                                    $req = "SELECT * from category_pages, pages where category_pages.idPage=$id and category_pages.idPage = pages.idPage";
                                    $req_run = mysqli_query($connection, $req);
                                    if($req_run){
                                        $line = mysqli_fetch_row($req_run);
                                        if($_SESSION['lang']=="Ar"){
                                            $namear = $line[13];
                                        }else{
                                            $namear = $line[3];
                                        }
                                        $query = "SELECT * from category where idCat=".$idcat;
                                        $query_run = mysqli_query($connection, $query);
                                        if($query_run){
                                            $row = mysqli_fetch_row($query_run);
                                            if($_SESSION['lang']=="Ar"){
                                                $nameC = $row[3];
                                            }else{
                                                $nameC = $row[1];
                                            }
                                            echo '<h2 class="widget-title espace-title">'.$nameC.'</h2>';
                                        }
                                    }
                                    $query2= "SELECT * from category_pages, pages where idCat=".$idcat." AND parent_id IS NULL and category_pages.idPage = pages.idPage";
                                    $query_run2 = mysqli_query($connection, $query2);
                                    if($query_run2){
                                        echo "<div class='blog-list-widget'>
                                        <div class='list-group'>";
                                        while($row = mysqli_fetch_row($query_run2)){
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
                                                while($rw= mysqli_fetch_row($run)){
                                                    if($_SESSION['lang']=="Ar"){
                                                        $name = $rw[11];
                                                    }else{
                                                        $name = $rw[1];
                                                    }
                                                    if(!empty($name_s)){
                                                    echo '<a class="collapse-item" href="single_page_espace.php?id='.$rw[0].'">'.$name.'</a><br>';
                                                    }  
                                                }
                                                echo    '</div>
                                                        </div>';
                                            }
                                                    }
                                                else{
                                                    if($_SESSION['lang']=="Ar"){
                                                        $name = $row[13];
                                                    }else{
                                                        $name = $row[3];
                                                    }
                                                    if(!empty($name)){
                                                    echo '<a href="single_page_espace.php?id='.$row[0].'" class="list-widget espace_itm">
                                                            <div class="w-100 last-item justify-content-between">
                                                                <h5 class="mb-1">'.$name.'</h5>
                                                            </div><hr>
                                                         </a>';
                                                    }
                                                }
                                        }
                                        echo "</div></div>";
                                        }
                                ?>

                             </div>

<?php /*?>
                            <div class="widget">
                                <h2 class="widget-title">Popular Posts</h2>
                                <div class="blog-list-widget">
                                    <div class="list-group">
                                        <a href="tech-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 justify-content-between">
                                                <img src="upload/tech_blog_08.jpg" alt="" class="img-fluid float-left">
                                                <h5 class="mb-1">5 Beautiful buildings you need..</h5>
                                                <small>12 Jan, 2016</small>
                                            </div>
                                        </a>

                                        <a href="tech-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 justify-content-between">
                                                <img src="upload/tech_blog_01.jpg" alt="" class="img-fluid float-left">
                                                <h5 class="mb-1">Let's make an introduction for..</h5>
                                                <small>11 Jan, 2016</small>
                                            </div>
                                        </a>

                                        <a href="tech-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 last-item justify-content-between">
                                                <img src="upload/tech_blog_03.jpg" alt="" class="img-fluid float-left">
                                                <h5 class="mb-1">Did you see the most beautiful..</h5>
                                                <small>07 Jan, 2016</small>
                                            </div>
                                        </a>
                                    </div>
                                </div><!-- end blog-list -->
                            </div><!-- end widget -->

                            <div class="widget">
                                <h2 class="widget-title">Recent Reviews</h2>
                                <div class="blog-list-widget">
                                    <div class="list-group">
                                        <a href="tech-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 justify-content-between">
                                                <img src="upload/tech_blog_02.jpg" alt="" class="img-fluid float-left">
                                                <h5 class="mb-1">Banana-chip chocolate cake recipe..</h5>
                                                <span class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                            </div>
                                        </a>

                                        <a href="tech-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 justify-content-between">
                                                <img src="upload/tech_blog_03.jpg" alt="" class="img-fluid float-left">
                                                <h5 class="mb-1">10 practical ways to choose organic..</h5>
                                                <span class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                            </div>
                                        </a>

                                        <a href="tech-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 last-item justify-content-between">
                                                <img src="upload/tech_blog_07.jpg" alt="" class="img-fluid float-left">
                                                <h5 class="mb-1">We are making homemade ravioli..</h5>
                                                <span class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                            </div>
                                        </a>
                                    </div>
                                </div><!-- end blog-list -->
                            </div><!-- end widget -->
<?php */?>
                            <hr class="invis1">
                            <div class="widget social-buttons">
                                <h2 class="widget-title "><?= _('Suivez-nous'); ?></h2>

                                <div class="row text-center">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <a href="https://fr-fr.facebook.com/RADEEMAKECH/" class="fb" target="_blank">
                                            <i class="fa fa-facebook"></i>
                                            
                                        </a>
                                   </div>

                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <a href="https://www.youtube.com/channel/UCFl5dUovd_Wr1AT0aprFAJA" class="yt" target="_blank">
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
                                    <li class="breadcrumb-item"><a href="index.php"><?= _('Accueil'); ?></a></li>
                                    <li class="breadcrumb-item active"><?php echo $namear?></li>
                                </ol>

                                <!--<span class="color-orange"><a href="tech-category-01.html" title="">Technology</a></span>-->
                               

                               <!-- <div class="blog-meta big-meta">
                                    <small><a href="tech-single.html" title="">21 July, 2017</a></small>
                                    <small><a href="tech-author.html" title="">by Jessica</a></small>
                                    <small><a href="#" title=""><i class="fa fa-eye"></i> 2344</a></small>
                                </div>-->

                               
                            </div><!-- end title -->

                            <!---<div class="single-post-media">
                                <img src="upload/tech_menu_08.jpg" alt="" class="img-fluid">
                            </div>--->

                            <div class="blog-content"> 
                                <?php
                                    
                                    
                                    

                                    $query="SELECT * FROM pages where idPage=$id";
                                    $query_run=mysqli_query($connection, $query);
                                    if($query_run){
                                       $row=mysqli_fetch_row($query_run);
                                       if($_SESSION['lang']=="Ar"){
                                            $content=$row[12];
                                        }else{
                                            $content=$row[8];
                                    }
                                        
                                    }

                                  
                                ?> 
                                <h1 align="center" style="margin-bottom: 40px"><?php echo $namear;?></h1>
                                <div class="single-post-media">
                                <?php if (!empty($row[10])){ ?>
                                <img src="images/<?php echo $row[10]?>" alt="" class="img-fluid">
                                <?php } ?>
                                </div>

                                <div class="pp">
                                    <p>
                                    <?php
                                        echo $content;
                                    ?>
                                    </p>
                                </div>
                            </div><!-- end content -->
                            <br><hr>
                            <br><br>


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
                                        include("login_form.php");
                                    }else if($row_p[0]== 4){
                                        include("les_formulaires_pdf.php");
                                    }else if($row_p[0]== 5){
                                        include("localisation_radeema.php");
                                    }else if($row_p[0]== 6){
                                        include("rapports.php");
                                    }else if($row_p[0]== 7){
                                        include("flash_info.php");
                                    }else if($row_p[0]== 8){
                                        include("galery.php");
                                    }
                                    echo "<hr style='margin: 50px 0'>";
                                }
                            }
                            /*if($row[1] =="Espace Presse"){
                                include("files_list.php");
                            }
                            else if($row[1] =="Contactez-nous"){
                                include("contact_form.php");
                            }*/
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

                            
<!--

                            <hr class="invis1">

                            <div class="custombox authorbox clearfix">
                                <h4 class="small-title">About author</h4>
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                        <img src="upload/author.jpg" alt="" class="img-fluid rounded-circle"> 
                                    </div>

                                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                        <h4><a href="#">Jessica</a></h4>
                                        <p>Quisque sed tristique felis. Lorem <a href="#">visit my website</a> amet, consectetur adipiscing elit. Phasellus quis mi auctor, tincidunt nisl eget, finibus odio. Duis tempus elit quis risus congue feugiat. Thanks for stop Tech Blog!</p>

                                        <div class="topsocial">
                                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Youtube"><i class="fa fa-youtube"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i class="fa fa-instagram"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Website"><i class="fa fa-link"></i></a>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <hr class="invis1">

                            <div class="custombox clearfix">
                                <h4 class="small-title">You may also like</h4>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="blog-box">
                                            <div class="post-media">
                                                <a href="tech-single.html" title="">
                                                    <img src="upload/tech_menu_04.jpg" alt="" class="img-fluid">
                                                    <div class="hovereffect">
                                                        <span class=""></span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="blog-meta">
                                                <h4><a href="tech-single.html" title="">We are guests of ABC Design Studio</a></h4>
                                                <small><a href="blog-category-01.html" title="">Trends</a></small>
                                                <small><a href="blog-category-01.html" title="">21 July, 2017</a></small>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="blog-box">
                                            <div class="post-media">
                                                <a href="tech-single.html" title="">
                                                    <img src="upload/tech_menu_06.jpg" alt="" class="img-fluid">
                                                    <div class="hovereffect">
                                                        <span class=""></span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="blog-meta">
                                                <h4><a href="tech-single.html" title="">Nostalgia at work with family</a></h4>
                                                <small><a href="blog-category-01.html" title="">News</a></small>
                                                <small><a href="blog-category-01.html" title="">20 July, 2017</a></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr class="invis1">

                            <div class="custombox clearfix">
                                <h4 class="small-title">3 Comments</h4>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="comments-list">
                                            <div class="media">
                                                <a class="media-left" href="#">
                                                    <img src="upload/author.jpg" alt="" class="rounded-circle">
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading user_name">Amanda Martines <small>5 days ago</small></h4>
                                                    <p>Exercitation photo booth stumptown tote bag Banksy, elit small batch freegan sed. Craft beer elit seitan exercitation, photo booth et 8-bit kale chips proident chillwave deep v laborum. Aliquip veniam delectus, Marfa eiusmod Pinterest in do umami readymade swag. Selfies iPhone Kickstarter, drinking vinegar jean.</p>
                                                    <a href="#" class="btn btn-primary btn-sm">Reply</a>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <a class="media-left" href="#">
                                                    <img src="upload/author_01.jpg" alt="" class="rounded-circle">
                                                </a>
                                                <div class="media-body">

                                                    <h4 class="media-heading user_name">Baltej Singh <small>5 days ago</small></h4>

                                                    <p>Drinking vinegar stumptown yr pop-up artisan sunt. Deep v cliche lomo biodiesel Neutra selfies. Shorts fixie consequat flexitarian four loko tempor duis single-origin coffee. Banksy, elit small.</p>

                                                    <a href="#" class="btn btn-primary btn-sm">Reply</a>
                                                </div>
                                            </div>
                                            <div class="media last-child">
                                                <a class="media-left" href="#">
                                                    <img src="upload/author_02.jpg" alt="" class="rounded-circle">
                                                </a>
                                                <div class="media-body">

                                                    <h4 class="media-heading user_name">Marie Johnson <small>5 days ago</small></h4>
                                                    <p>Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt. Deep v cliche lomo biodiesel Neutra selfies. Shorts fixie consequat flexitarian four loko tempor duis single-origin coffee. Banksy, elit small.</p>

                                                    <a href="#" class="btn btn-primary btn-sm">Reply</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr class="invis1">

                            <div class="custombox clearfix">
                                <h4 class="small-title">Commenter</h4>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form class="form-wrapper">
                                            <input type="text" class="form-control" placeholder="votre nom">
                                            <input type="text" class="form-control" placeholder="Adresse Email">
                                            <textarea class="form-control" placeholder="Votre commentaire"></textarea>
                                            <button type="submit" class="btn btn-primary">Soumettre</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                   
                </div>
                                -->
            </div><!-- end container -->
        </section>

<?php
    include("includes/footer.php");
?>