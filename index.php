
<?php
    include('includes/header.php');
    include('includes/security.php');



    //calcul des sessions
    $ip=$_SERVER['REMOTE_ADDR'];
    $query = "INSERT INTO visitors (ip) values ('$ip')";
    mysqli_query($connection, $query);
    
    $limit = 10; 

    $total_articles_query = "SELECT count(*) FROM `articles` WHERE 1;";
    $total_articles_result = mysqli_query($connection, $total_articles_query);
    $total_articles = mysqli_fetch_row($total_articles_result);
    $total_pages = $total_articles[0] / $limit;


    $page = 0;
    if(isset($_GET['page'])){
        $page = $_GET['page'];
    }

        $offset = $page * $limit;
?>

        <section class="section first-section">
            <!--
            <div class="container-fluid">
                <div class="masonry-blog clearfix">
                    <div class="first-slot">
                        <div class="masonry-box post-media">
                             <img src="upload/e-invest1.jpg" alt="" class="img-fluid">
                             <div class="shadoweffect">
                                <div class="shadow-desc">
                                    <div class="blog-meta">
                                        <span class="bg-orange"><a href="tech-category-01.html" title="">Technology</a></span>
                                        <h4><a href="tech-single.html" title="">Say hello to real handmade office furniture! Clean & beautiful design</a></h4>
                                        <small><a href="tech-single.html" title="">24 July, 2017</a></small>
                                        <small><a href="tech-author.html" title="">by Amanda</a></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    

                    <div class="second-slot">
                        <div class="masonry-box post-media">
                             <img src="upload/tech_02.jpg" alt="" class="img-fluid">
                             <div class="shadoweffect">
                                <div class="shadow-desc">
                                    <div class="blog-meta">
                                        <span class="bg-orange"><a href="tech-category-01.html" title="">Gadgets</a></span>
                                        <h4><a href="tech-single.html" title="">Do not make mistakes when choosing web hosting</a></h4>
                                        <small><a href="tech-single.html" title="">03 July, 2017</a></small>
                                        <small><a href="tech-author.html" title="">by Jessica</a></small>
                                    </div>
                                </div>
                             </div>
                        </div>
                    </div>

                    <div class="last-slot">
                        <div class="masonry-box post-media">
                             <img src="upload/tech_03.jpg" alt="" class="img-fluid">
                             <div class="shadoweffect">
                                <div class="shadow-desc">
                                    <div class="blog-meta">
                                        <span class="bg-orange"><a href="tech-category-01.html" title="">Technology</a></span>
                                        <h4><a href="tech-single.html" title="">The most reliable Galaxy Note 8 images leaked</a></h4>
                                        <small><a href="tech-single.html" title="">01 July, 2017</a></small>
                                        <small><a href="tech-author.html" title="">by Jessica</a></small>
                                    </div>
                                </div>
                             </div>
                        </div>
                    </div>
                </div>
            </div>--->
            <div class="container-fluid">
                <div class="masonry-blog clearfix">
                    <div class="first-slot">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="upload/e-invest1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="upload/porte-ouverte.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="upload/radeema-mob.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="upload/ag-en-ligne.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only"><?= gettext("précédent");?></span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only"><?= gettext("suivant");?></span>
  </a>
</div>
</div>


<div class="second-slot">
    <?php 
        $query= "SELECT * from pages where title='Histoire'";
        $run = mysqli_query($connection, $query);
        if($run){
            $row = mysqli_fetch_row($run);
            $id =$row[0];
        }
    ?>
    <div class="masonry-box post-media">
    <a href="single-page.php?id=<?php echo $id?>&catid=3" title="">
        <img src="upload/radeema_histoire.jpg" alt="histoire de la radeema" class="img-fluid">
    </a>
            <div class="shadoweffect">
            <div class="shadow-desc">
                <div class="blog-meta">
                    <!--<span class="bg-orange"><a href="tech-category-01.html" title="">Gadgets</a></span>-->
                    <h4><a href="single-page.php?id=<?php echo $id?>&catid=3" title=""><?= _('Notre Histoire'); ?></a></h4>
                    <!--<small><a href="tech-single.html" title="">03 July, 2017</a></small>
                    <small><a href="tech-author.html" title="">by Jessica</a></small>-->
                </div>
            </div>
            </div>
    </div>
</div>

<div class="last-slot">
    <?php 
        $query= "SELECT * from pages where title='Nos valeurs'";
        $run = mysqli_query($connection, $query);
        if($run){
            $row = mysqli_fetch_row($run);
            $id =$row[0];
        }
    ?>
    <div class="masonry-box post-media">
    <a href="single-page.php?id=<?php echo $id?>&catid=3"><img src="upload/val.jpg" alt="" class="img-fluid"></a>
            <div class="shadoweffect">
            <div class="shadow-desc">
                <div class="blog-meta">
                    <!--<span class="bg-orange"><a href="tech-category-01.html" title="">Gadgets</a></span>-->
                    <h4><a href="single-page.php?id=<?php echo $id?>&catid=3" title=""><?= _('Nos Valeurs'); ?></a></h4>
                    <!--<small><a href="tech-single.html" title="">03 July, 2017</a></small>
                    <small><a href="tech-author.html" title="">by Jessica</a></small>-->
                </div>
            </div>
            </div>
    </div>
</div>
</div>


</div></div>

<hr style="width:80%; margin-top: 25px">

<!----radeema e-invest ------->


<div class="container" >
    <div class="row masonry-box post-media">
        <div class="col-md-5 e-invest" style="display:flex;justify-content:center">
            <a href="https://www.radeema.ma/promoteurs" >
                <img id="e-invest" src="upload/e-invest_radeema.png" alt="e-invest radeema" class="img-fluid" style="object-fit:fill;width:100%"> 
            </a>
        </div>
        <div class="col-md-7 ag_enligne" style="width:100%">
            <div style="background-image: url(upload/agence_en_ligne_form.jpeg);
                background-size: cover;background-repeat:no-repeat; width:100%; padding:10px; height:100%">
                <form action="" method="" id="form_ag_enligne">
                    <div class="form-group">
                            <input type="email" class="form-control form-control-user"
                            name="email" placeholder="Entrez votre adresse email...">
                    </div>
                    <div class="form-group">
                            <input type="password" class="form-control form-control-user"
                            name="password" placeholder="Mot de passe">
                    </div>
                    <div class="form-group">
                                    
                    </div>
                    <button type="submit" name="login_btn" class="btn btn-primary btn-user btn-block"><?= _('Connexion'); ?> </button>
                                            
                                            
                </form>
            </div>
    </div>
  </div>



       
        <section class="section">
            <div class="container">
                <div class="row side">
                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 ">
                        <div class="sidebar">
                            <div class="widget espaces">
                                <div class="blog-list-widget">
                                    <div class="list-group">
                                        <a href="espace.php?id=1" class="list-group-item list-group-item-action flex-column align-items-start espace-item">
                                            <div class="w-100 justify-content-between">
                                                <img src="images/version/clients.png" alt="" class="img-fluid float-left" style="width: 20px: height:auto">
                                                <h5 class="mb-1"><?= _('Espace Clients Particuliers'); ?></h5>
                                            </div>
                                        </a>
                                        <a href="espace.php?id=7" class="list-group-item list-group-item-action flex-column align-items-start espace-item">
                                            <div class="w-100 justify-content-between">
                                                <img src="images/version/grand-c.png" alt="" class="img-fluid float-left" style="width: 20px: height:auto">
                                                <h5 class="mb-1"><?= _('Espace Grands Comptes') ?></h5>
                                            </div>
                                        </a>
                                        <a href="espace.php?id=8" class="list-group-item list-group-item-action flex-column align-items-start espace-item">
                                            <div class="w-100 justify-content-between">
                                                <img src="images/version/rh.png" alt="" class="img-fluid float-left" style="width: 20px: height:auto">
                                                <h5 class="mb-1"><?= _('Espace RH'); ?></h5>
                                            </div>
                                        </a>
                                        <a href="espace.php?id=2" class="list-group-item list-group-item-action flex-column align-items-start espace-item">
                                            <div class="w-100 justify-content-between">
                                                <img src="images/version/fournisseurs.png" alt="" class="img-fluid float-left" style="width: 20px: height:auto">
                                                <h5 class="mb-1"><?= _('Espace Fournisseurs'); ?></h5>
                                            </div>
                                        </a>
                                        <a href="espace.php?id=9" class="list-group-item list-group-item-action flex-column align-items-start espace-item">
                                            <div class="w-100 justify-content-between">
                                                <img src="images/version/DD.png" alt="" class="img-fluid float-left" style="width: 20px: height:auto">
                                                <h5 class="mb-1"><?= _('Développement Durable') ?></h5>
                                            </div>
                                        </a>
                                    </div>
                                </div> 
                            </div>



                            <div class="widget">
                                <h2 class="widget-title espace-title"><?= _('Agenda'); ?></h2>
                                <div class="blog-list-widget">
                                    <div class="list-group">
                                    <?php 
                                    $i=0;
                                    $query = "select * from agenda";
                                    $query_run = mysqli_query($connection, $query);
                                    while($row=mysqli_fetch_row($query_run)){
                                        $i++;
                                        if($i<4){
                                    
                                        echo '<a href="agendaPage.php?id='.$row[0].'" class="list-group-item list-group-item-action flex-column align-items-start">';?>
                                            <div class="w-100 justify-content-between">
                                                <!--<img src="upload/tech_blog_08.jpg" alt="" class="img-fluid float-left">-->
                                                <?php if($_SESSION['lang']=='Ar'){
                                                    $name=$row[5];
                                                }else{
                                                    $name = $row[1];
                                                }
                                                ?>
                                                <h5 class="mb-1"><?php echo $name;?></h5>
                                                <p style="font-size: 13px"><?php echo date('d-m-Y', strtotime($row[3]))." >> ".date('d-m-Y', strtotime($row[4]));?></p>
                                            </div>
                                        </a>
                                        <?php }
                                    } ?>
                
                                    </div>
                                </div><!-- end blog-list -->
                            </div><!-- end widget -->
                            
                         <!-- <div class="sticky"> -->
                            <div class="widget">
                                <h2 class="widget-title espace-title"><?= _('Avis & Alertes'); ?></h2>
                                <div class="blog-list-widget">
                                    <div class="list-group">
                                        <?php 
                                        $i=0;
                                        $query = "select * from avis";
                                        $query_run = mysqli_query($connection, $query);
                                        while($row=mysqli_fetch_row($query_run)){
                                            $i++;
                                            if($i<4){
                                        
                                            echo '<a href="avisPage.php?id='.$row[0].'" class="list-group-item list-group-item-action flex-column align-items-start">';?>
                                                <div class="w-100 justify-content-between">
                                                    <?php if($_SESSION['lang']=='Ar'){
                                                        $name=$row[3];
                                                    }else{
                                                        $name = $row[1];
                                                    }
                                                    ?>
                                                    <!--<img src="upload/tech_blog_08.jpg" alt="" class="img-fluid float-left">-->
                                                    <h5 class="mb-1"><?php echo $name;?></h5>
                                                </div>
                                            </a>
                                            <?php }} ?>
                                       
                                       
                                    </div>
                                </div><!-- end blog-list -->
                            </div><!-- end widget -->

                            <div class="widget">
                                <h2 class="widget-title "><?= _('Suivez-nous'); ?></h2>

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
                            <!-- </div> end sticky -->
                        </div>
                    </div>


                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="blog-top clearfix">
                                <h4 class="pull-left"><?= _('Actualités'); ?><a href="#"><i class="fa fa-rss"></i></a></h4>
                            </div><!-- end blog-top -->

                            <?php $query = "SELECT *, SUBSTRING(content, 1,450), SUBSTRING(content_ar,1, 450) FROM articles where accept=1 order by AdmittedAt limit $offset, $limit";
                            $run =mysqli_query($connection, $query);
                            if($run){
                                while($row = mysqli_fetch_row($run)){
                                    if($_SESSION['lang']=="Ar"){
                                        $title = $row[8];
                                        $content = $row[11];
                                    }else{
                                        $title = $row[1];
                                        $content = $row[10];
                                    }
                                    if($title<>NULL){
                                    ?>
                                    
                                    <div class="blog-list clearfix">
                                        <div class="blog-box row">
                                            <div class="col-md-4">
                                                <div class="post-media" style="height: 200px">
                                                    <a href="single-blog.php?id=<?php echo $row[0]?>" title="<?php $title?>">
                                                        <img src="<?php echo 'images/'.$row[6];?>" alt="" class="img-fluid" style="object-fit: cover; height: 100%">
                                                        <div class="hovereffect"></div>
                                                    </a>
                                                </div><!-- end media -->
                                            </div><!-- end col -->

                                            <div class="blog-meta big-meta col-md-8">
                                                <h4 style="padding-top: 0px; margin-top: 0px"><a href="single-blog.php?id=<?php echo $row[0]?>" title="<?php $title?>"><?php echo $title?></a></h4>
                                                <p><?php echo strip_tags($content)?>...</p>
                                                <!--<small class="firstsmall"><a class="bg-orange" href="tech-category-01.html" title="">Gadgets</a></small>-->
                                                <small><a href="single-blog.php?id=<?php echo $row[0]?>" title=""><?php ?></a></small>
                                                <!--<small><a href="single-blog.php?id=<?php echo $row[0]?>" title="">by Matilda</a></small>
                                                <small><a href="single-blog.php?id=<?php echo $row[0]?>" title=""><i class="fa fa-eye"></i> 1114</a></small>--->
                                            </div><!-- end meta -->
                                        </div><!-- end blog-box -->
                            
                                <hr class="invis">
                                <?php
                                    }
                                }
                            }?>
                            
                            



                            </div><!-- end blog-list -->
                        
                        </div><!-- end page-wrapper -->
                        <hr class="invis">
                        <?php if($total_pages > 1) { ?>
                            <div class="row">
                            <div class="col-md-12">
                                <nav aria-label="Page navigation">
                                    <ul class="pagination justify-content-start">
                                    <?php for($i = 0; $i <= $total_pages ; $i++ ) { ?>
                                        <li class="page-item"><a class="page-link" href="?page=<?= $i ?>"><?= $i+1 ?></a></li>
                                        <!--<li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                        </li> -->
                                        <?php }  ?>
                                    </ul>
                                </nav>
                            </div><!-- end col -->
                        </div><!-- end row -->
                        <?php }  ?> 
                        </div>
                        

                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>

        </div>
        
<?php
    include('includes/footer.php');
?>  


<!--
<script>
    $(function(){
        if($('#sticky').length){
            var el = $('#sticky');
            var stickyTop = $('#sticky').offset().top;
            var stickyHeight = $('#sticky').height();

            $(window).scroll(function(){
                var limit = $('#footer').offset().top - stickyHeight - 20;

                var windowTop = $(window).scrollTop();

                if(stickyTop < windowTop){
                    el.css({
                        position: 'fixed';
                        top: 0;
                    });
                }else{
                    el.css('position', 'static');
                }
                if(limit < windowTop){
                    var diff = limit - windowTop;
                    el.css({
                        top: diff
                    });
                }

            });
        }
    });
</script>
-->