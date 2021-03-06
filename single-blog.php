<?php
    include("includes/header.php");
?>

        <section class="section single-wrapper">
            <div class="container">
                <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 article-sidebar">
                        <div class="sidebar">
                        <div class="container">
                                <h2 class="widget-title"><?= _("Plus d'articles"); ?></h2>

                                <?php
                                    $id=$_GET['id'];

                                    include("includes/security.php");

                                    // Check connection
                                    if ($connection -> connect_errno) {
                                    echo "Failed to connect to MySQL: " . $connection -> connect_error;
                                    exit();
                                    }
                                    $query = "SELECT *, SUBSTRING(title, 1, 40), SUBSTRING(title_ar, 1, 40) from articles where accept=1 and idArticle <>$id";
                                    $run_query = mysqli_query($connection, $query);
                                    echo "<div class='blog-list-widget'>
                                    <div class='list-group'>";
                                    while($row = mysqli_fetch_row($run_query)){
                                        if($_SESSION['lang']=="Ar"){
                                            $name = $row[11];
                                        }else{
                                            $name = $row[10];
                                        }
                                        if(!empty($name)){
                                        echo '<a href="single-blog.php?id='.$row[0].'" class="list-widget">
                                        <div class="w-100 last-item justify-content-between">
                                            <img src="images/'.$row[6].'" alt="" class="img-fluid float-left" style="height: 50px; object-fit: cover">
                                            <h5 class="mb-1" alt="'.$row[1].'">'.$name.'...</h5>
                                            <small>'.date("m/d/Y", strtotime($row[4])).'</small>
                                        </div><hr>
                                    </a>';
                                        }
                                        
                                    }
                                    echo "</div></div>";
                                ?>

                             </div>


                        
                       
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
                                    <li class="breadcrumb-item active"><?= _('Actualit??s'); ?></li>
                                </ol>

                                <!--<span class="color-orange"><a href="tech-category-01.html" title="">Technology</a></span>-->
                               
<!--
                                <div class="blog-meta big-meta">
                                    <small><a href="tech-single.html" title="">21 July, 2017</a></small>
                                    <small><a href="tech-author.html" title="">by Jessica</a></small>
                                    <small><a href="#" title=""><i class="fa fa-eye"></i> 2344</a></small>
                                </div>
                                -->
                               
                            </div><!-- end title -->

                            <!---<div class="single-post-media">
                                <img src="upload/tech_menu_08.jpg" alt="" class="img-fluid">
                            </div>--->

                            <div class="blog-content"> 
                                <?php
                                    
                                    
                                    

                                    $query="SELECT * FROM articles where idArticle=$id";
                                    $query_run=mysqli_query($connection, $query);
                                    if($query_run){
                                       $row=mysqli_fetch_row($query_run);
                                        if($_SESSION['lang']=="Ar"){
                                            $title=$row[8];
                                            $content=$row[9];
                                        }else{
                                            $title=$row[1];
                                            $content=$row[2];
                                        }
                                        
                                        
                                    }

                                ?> 
                                <h1 align="center" style="margin-bottom: 40px"><?php echo $title;?></h1>
                                <div class="single-post-media">
                                <img src="images/<?php echo $row[6]?>" alt="" class="img-fluid">
                                </div>

                                <div class="pp">
                                    <p>
                                    <?php
                                        echo $content;
                                    ?>
                                    </p>
                                </div>
                                <div class="pp" style="margin-top: 50px">
                                    <b><?= gettext('Publi?? le :')." "; ?></b><?php echo date("m/d/Y , h:i a", strtotime($row[5]))?>
                                </div>
                            </div><!-- end content -->
                            <hr style="margin: 50px 0">

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


                            <hr class="invis1">
                            <?php
                                $query = "SELECT * from comments where idArticle=$id order by admin DESC";
                                $query_run = mysqli_query($connection, $query);
                                if($query_run){
                                    $num = mysqli_num_rows($query_run);
                                }
                            ?>
                            <div class="custombox clearfix">
                                <h4 class="small-title"><?php echo $num." ".gettext('Commentaires')?></h4>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="comments-list">
                                            <?php
                                                while($row = mysqli_fetch_row($query_run)){
                                            ?>   

                                            <div class="media">
                                                <a class="media-left" href="#">
                                                    <?php if($row[6] == 0){ ?>
                                                    <img src="images/version/LETTERS/<?php echo substr($row[1], 0, 1)?>.png" alt="" class="rounded-circle">
                                                    <?php }else{ ?>
                                                    <img src="images/version/pro-01.png" alt="" class="rounded-circle">
                                                    <?php } ?>
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading user_name"><?php echo $row[1]?><small><?php echo date("m/d/Y , h:i a", strtotime($row[4]))?></small></h4>
                                                    <p><?php echo $row[3]?></p>
                                                    <!--<a href="#" class="btn btn-primary btn-sm">Repondre</a>-->
                                                </div>
                                            </div>

                                            <?php
                                                }
                                            ?>

                                        </div>
                                    </div><!-- end col -->
                                </div><!-- end row -->
                            </div><!-- end custom-box -->

                            <hr class="invis1">
                            <?php
                                if(isset($_SESSION['success']) && $_SESSION['success']!=''){
                                    echo '<div class="alert alert-success" role="alert">'.$_SESSION['success'].'</div>';
                                    unset($_SESSION['success']);
                                }

                                if(isset($_SESSION['status']) && $_SESSION['status']!=''){
                                    echo '<div class="alert alert-danger" role="alert">'.$_SESSION['status'].'<div>';
                                    unset($_SESSION['status']);
                                }
                            ?>

                            <div class="custombox clearfix">
                                <h4 class="small-title"><?= _('Commenter');  ?></h4>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form class="form-wrapper" action="comments.php" method="POST">
                                            <input type="hidden" name="idArt" value="<?php echo $id?>">
                                            <input type="text" name="name" class="form-control" placeholder="<?= _('Votre nom'); ?>">
                                            <input type="text"name="email" class="form-control" placeholder="<?= _('Adresse Email'); ?>">
                                            <textarea class="form-control" name="comment" placeholder="<?= _('Votre commentaire'); ?>"></textarea>
                                            <button type="submit" name="submit" class="btn btn-primary"><?= _('Soumettre'); ?></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end page-wrapper -->
                    </div><!-- end col -->

                    
                </div><!-- end row -->
            </div><!-- end container -->
        </section>

<?php
    include("includes/footer.php");
?>