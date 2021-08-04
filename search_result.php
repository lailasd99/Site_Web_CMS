<?php
    include("includes/header.php");
    include('includes/security.php');
?>


<hr style="width:80%; margin-top: 25px">


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
                                            <h5 class="mb-1"><?php echo $row[1];?></h5>
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
                                                <h5 class="mb-1"><?php echo $row[1];?></h5>
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
         </div>
    </div>


    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
        <div class="page-wrapper">
            <!--<input type="text" id="key" value="" hidden>-->
            <script>
                var keyword = sessionStorage.getItem("key");
                /*document.getElementById("key").value = keyword;*/
                

                $.ajax({
                    url: "./search_actions.php",
                    type: "GET",
                    data: { keyword: keyword},
                    success: function(data) {
                        var json;
                        /*if (xhr.status != 200) {
                            failure('HTTP Error: ' + xhr.status);
                            return;
                        }*/
                        
                        json = JSON.parse(xhr.responseText);
                        console.log(json);
                        /*if (!json || typeof json.articles != 'string') {
                            failure('Invalid JSON: ' + xhr.responseText);
                            return;
                        }*/
                        //success(json.articles);
                        
                        
                    //alert('ok') 
                    /*if (data == 'ok'){
                        window.location = "./categories.php?success=1";
                    }
                    else{
                        window.location = "./category_pages.php?status=1";
                    }*/
                    }
                });
            </script>
            
        </div>
    </div>
</section>





<?php
    include("includes/footer.php");
?>