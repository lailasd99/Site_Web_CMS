<?php
    include("includes/header.php");
    include("includes/security.php");
?>


<section class="section single-wrapper">
            <div class="container">
                <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 article-sidebar">
                        <div class="sidebar">
                        <div class="container">
                        <h2 class="widget-title espace-title"><?= _('Agenda'); ?></h2>
                        <?php

                                    include("includes/security.php");

                                    // Check connection
                                    if ($connection -> connect_errno) {
                                    echo "Failed to connect to MySQL: " . $connection -> connect_error;
                                    exit();
                                    }
                                    $query = "SELECT * from agenda";
                                    $run_query = mysqli_query($connection, $query);
                                    
                                    echo "<div class='blog-list-widget'>
                                    <div class='list-group'>";
                                    while($row = mysqli_fetch_row($run_query)){
                                        if($_SESSION['lang']=="Ar"){
                                            $name= $row[5];
                                        }else{
                                            $name= $row[1];
                                        }
                                        echo '<a href="agendaPage.php?id='.$row[0].'" class="list-widget">
                                        <div class="w-100 last-item justify-content-between">
                                            <h5 class="mb-1">'.$name.'</h5>
                                            <small>'.date("m/d/Y", strtotime($row[3])).'</small> - <small>'.date("m/d/Y", strtotime($row[4])).'</small>
                                        </div><hr>
                                            </a>';
                                        
                                    }
                                    echo "</div></div>";
                        ?>

                             </div>
                            <hr class="invis" >
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
                    
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="blog-title-area text-center">
                                <ol class="breadcrumb hidden-xs-down">
                                    <li class="breadcrumb-item"><a href="index.php"><?= _('Accueil'); ?></a></li>
                                    <li class="breadcrumb-item active"><?= _('Agenda'); ?></li>
                                </ol>

                                <!--<span class="color-orange"><a href="tech-category-01.html" title="">Technology</a></span>-->
                               

                                <div class="blog-meta big-meta">
                                    <!--<small><a href="tech-single.html" title="">21 July, 2017</a></small>
                                    <small><a href="tech-author.html" title="">by Jessica</a></small>-->
                                    <!--<small><a href="#" title=""><i class="fa fa-eye"></i> 2344</a></small>-->
                                </div>

                               
                            </div><!-- end title -->

                            <div class="blog-content"> 
                                <?php
                                    $id=$_GET['id'];
                                    
                                    

                                    $query="SELECT * FROM agenda where id=$id";
                                    $query_run=mysqli_query($connection, $query);
                                    if($query_run){
                                       $row=mysqli_fetch_row($query_run);
                                       if($_SESSION['lang']=="Ar"){
                                            $title = $row[5];
                                            $desc = $row[6];
                                        }else{
                                            $title = $row[1];
                                            $desc = $row[2];
                                        }
                                        $date1 = date('d-m-Y', strtotime($row[3]));
                                        $date2= date('d-m-Y', strtotime($row[4]));
                                        
                                    }

                                   
                                ?> 
                                <h1 align="center" style="margin-bottom: 40px"><?php echo $title;?></h1>
                                <p align="center" style="font-size: 18px; color: blue"><?php echo $date1." >> ".$date2;?></p>

                                <div class="pp">
                                    <p>
                                    <?php
                                        echo $desc;
                                    ?>
                                    </p>
                                </div>
                            </div><!-- end content -->
                            

                            <div class="blog-title-area" align="center">
                               

                                <div class="post-sharing">
                                    <ul class="list-inline">
                                        <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span class="down-mobile"><?= _('Partager sur Facebook'); ?></span></a></li>
                                        <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span class="down-mobile"><?= _('Partager sur Twitter'); ?></span></a></li>
                                        <li><a href="#" class="gp-button btn btn-primary"><i class="fa fa-google"></i></a></li>
                                    </ul>
                                </div><!-- end post-sharing -->
                            </div><!-- end title -->
              

                         

                            <hr class="invis1">
                            <hr class="invis1">
<!--
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
-->
                            <div class="custombox clearfix">
                                <h4 class="small-title"><?= _('Envoyer un commentaire'); ?></h4>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form class="form-wrapper">
                                            <input type="text" class="form-control" placeholder="<?= _('Email ici'); ?>">
                                            <textarea class="form-control" placeholder="<?= _('Votre commantaire'); ?>"></textarea>
                                            <button type="submit" class="btn btn-primary"><?= _('Soumettre'); ?></button>
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