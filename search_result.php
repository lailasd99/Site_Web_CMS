<?php
    include("includes/header.php");
    include('includes/security.php');
?>


<hr style="width:80%; margin-top: 25px">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

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
                                    <?php }} ?>
            
                                </div>
                            </div><!-- end blog-list -->
                        </div><!-- end widget -->


                       
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
                                                <!--<img src="upload/tech_blog_08.jpg" alt="" class="img-fluid float-left">-->
                                                <?php if($_SESSION['lang']=='Ar'){
                                                            $name=$row[3];
                                                        }else{
                                                            $name = $row[1];
                                                        }
                                                ?>
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
                </div>
            </div><!--end col -->
         
    


            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                <div class="page-wrapper espaces">
                    <?php
                        if(isset($_GET['submit-search'])){
                            $key = $_GET['keyword'];
                            

                            //make the keyword as a metaphone word
                            $search = explode(" ", $key);
                            $search_string = "";
                            foreach($search as $word){
                                $search_string.=metaphone($word)." ";
                            }
                            echo $search_string;

                            //ARTICLES FRANCAIS
                            if($_SESSION['lang']=="Fr"){
                                //search the metaphone keyword into the metaphone articles
                                $query = "SELECT * from articles";
                                $run = mysqli_query($connection, $query);
                                $sound = [];
                                $query_articles = "SELECT * from articles where idArticle IN (";
                                while($row = mysqli_fetch_row($run)){
                                    if($row[1] != null){
                                        $words = explode(" ", $row[1]);
                                        foreach($words as $word){
                                            array_push($sound, metaphone($word)." ");
                                        }
                                    }
                                    if(in_array($search_string, $sound)){
                                        $query_articles.= $row[0].",";
                                    }
                                    unset($sound); 
                                    $sound = [];
                                }
                                $query_articles = substr($query_articles, 0, -1);
                                $query_articles.= ")";
                                $query_run_art = mysqli_query($connection, $query_articles);

                            //ARTCILES ARABE    
                            }else if($_SESSION['lang']=="Ar"){
                                
                                $query_articles = "SELECT * from articles where title_ar LIKE '%$key%' and accept=1";
                                $query_run_art = mysqli_query($connection, $query_articles);
                            }
                            

                            
                        
                            //$query_pages = "SELECT * from pages where title like '%$key%' and draft=0";
                            //$query_run_page = mysqli_query($connection, $query_pages);

                            echo "<h5>"._("Résultat de recherche")." >> ".$key." : </h5>";
                            echo "<h6 style='color:gray;'>"._('les articles')." :</h6>";
                            if($query_run_art && mysqli_num_rows($query_run_art)>0){
                                    //if(mysqli_num_rows($query_run_art) > 0){
                                    while($row = mysqli_fetch_row($query_run_art)){
                                        if($_SESSION['lang']=="Ar"){
                                            $name = $row[8];
                                        }else{
                                            $name = $row[1];
                                        }
                                    
                                    ?>
                                    <hr>
                                    <div class="blog-list clearfix">
                                        <div class="blog-box row">
                                            <div class="col-md-2">
                                                <div class="post-media" style="height: 100px">
                                                    <a href="single-blog.php?id=<?php echo $row[0]?>" title="<?php $name?>">
                                                        <img src="<?php echo 'images/'.$row[6];?>" alt="" class="img-fluid" style="object-fit: cover; height: 100%">
                                                        <div class="hovereffect"></div>
                                                    </a>
                                                </div><!-- end media -->
                                            </div><!-- end col -->
                            
                                            <div class="blog-meta big-meta col-md-10">
                                                <h4 style="padding-top: 0px; margin-top: 0px; font-size: 16px"><a href="single-blog.php?id=<?php echo $row[0]?>" title="<?php $name?>"><?php echo $name?></a></h4>
                                                <!--<small class="firstsmall"><a class="bg-orange" href="tech-category-01.html" title="">Gadgets</a></small>-->
                                                <small><a href="single-blog.php?id=<?php echo $row[0]?>" title=""><?php ?></a></small>
                                                <!--<small><a href="single-blog.php?id=<?php echo $row[0]?>" title="">by Matilda</a></small>
                                                <small><a href="single-blog.php?id=<?php echo $row[0]?>" title=""><i class="fa fa-eye"></i> 1114</a></small>--->
                                            </div><!-- end meta -->
                                        </div><!-- end blog-box -->
                                    </div>
                                
                                        <?php
                                            
                                    }
                                    //echo "</div>";

                        
                            }else{
                                echo "<span>"._('aucune article trouvée').".</span>";
                            }
                            echo '<hr class="invis"><br>';


                            //PAGES FRANCAIS
                            if($_SESSION['lang']=="Fr"){
                                //search the metaphone keyword into the metaphone pages
                                $query_p = "SELECT * from pages";
                                $run_p = mysqli_query($connection, $query_p);
                                $sound_p = [];
                                $query_pages = "SELECT * from pages where idPage IN (";
                                while($row_p = mysqli_fetch_row($run_p)){
                                    if($row_p[1] != null){
                                        $words_p = explode(" ", $row_p[1]);
                                        foreach($words_p as $word_p){
                                            array_push($sound_p, metaphone($word_p)." ");
                                        }
                                    }
                                    if(in_array($search_string, $sound_p)){
                                        $query_pages.= $row_p[0].",";
                                    }
                                    unset($sound_p); 
                                    $sound_p = [];
                                }
                                $query_pages = substr($query_pages, 0, -1);
                                $query_pages.= ")";
                                $query_run_page = mysqli_query($connection, $query_pages);

                            //PAGES ARABE
                            }else if($_SESSION['lang']=="Ar"){
                                
                                $query_pages = "SELECT * from pages where title_ar LIKE '%$key%' and draft=0";
                                $query_run_page = mysqli_query($connection, $query_pages);
                            }
                            

                            echo "<h6 style='color:gray;'>"._('les pages')." :</h6>";
                            if($query_run_page && mysqli_num_rows($query_run_page)>0){
                                //if(mysqli_num_rows($query_run_page) > 0){
                                while($row = mysqli_fetch_row($query_run_page)){
                                    if($_SESSION['lang']=="Ar"){
                                        $name = $row[11];
                                    }else{
                                        $name = $row[1];
                                    }
                                
                                ?>
                                    <hr>
                                    <div class="blog-list clearfix">
                                        <div class="blog-box row">
                                            <div class="blog-meta big-meta col-md-10">
                                                <h4 style="padding-top: 0px; margin-top: 0px; font-size: 16px; text-decoration: underline"><a href="single-page.php?id=<?php echo $row[0]?>"><?php echo $name?></a></h4>
                                                <small><a href="single-page.php?id=<?php echo $row[0]?>" title=""><?php ?></a></small>
                                            </div><!-- end meta -->
                                        </div><!-- end blog-box -->
                                    </div>
                        
                                    <?php
                                        
                                }
                            }else{
                                echo "<span>"._('aucune page trouvée').".</span>";
                            }
                        }

                    ?>
                    
                </div>
            </div>
        </div>
    </div>
</section>





<?php
    include("includes/footer.php");
?>