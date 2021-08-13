
<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="../index.php">
    <div class="sidebar-brand-icon">
    <img src="../media/logo_radeema.png" alt="logo radeema" style="width: 100%;
    padding: 10px;">
    </div>
    <div class="sidebar-brand-text mx-3">RADEEMA ADMIN</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="index.php">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Accueil</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Interface
</div>

<!-- Nav Item - Pages  -->
<li class="nav-item">
    <a class="nav-link" href="pages.php">
        <i class="fa fa-columns" aria-hidden="true"></i>
        <span>Pages</span>
    </a>
    
</li>
<li class="nav-item">
    <a class="nav-link" href="categories.php">
        <i class="fa fa-stream" aria-hidden="true"></i>
        <span>Categories</span>
    </a>
    
</li>
 <!-- Nav Item - Articles  -->
<li class="nav-item">
    <a class="nav-link" href="articles.php">
        <i class="fa fa-file-alt" aria-hidden="true"></i>
        <span>Articles</span>
    </a>
</li>

 <!-- Nav Item - Articles  -->
 <li class="nav-item">
    <a class="nav-link" href="comments.php">
        <i class="fa fa-comments" aria-hidden="true"></i>
        <span>Commentaires</span>
    </a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Gestion
</div>
<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="register.php">
        <i class="fa fa-users" aria-hidden="true"></i>
        <span>Users</span>
    </a>
    <!---<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="buttons.html">Buttons</a>
            <a class="collapse-item" href="cards.html">Cards</a>
        </div>
    </div>--->
</li>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
        aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-folder"></i>
        <span>Documents</span>
    </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
           <!-- <h6 class="collapse-header">Login Screens:</h6>-->
            <a class="collapse-item" href="files.php"><i class="fas fa-fw fa-file-pdf"></i> Fichiers</a>
            <a class="collapse-item" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false"><i class="fas fa-fw fa-image"></i> Media</a>
                    <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink1">
                        <a class="dropdown-item" href="articles_media.php">Images des articles</a>
                        <a class="dropdown-item" href="pages_media.php">Images des pages</a>
                        <a class="dropdown-item" href="galery_media.php">Images de Galerie</a>
                    </div>
            <!--<a class="collapse-item" href="forgot-password.html">Forgot Password</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="404.html">404 Page</a>
            <a class="collapse-item" href="blank.html">Blank Page</a>-->
        </div>
    </div>
</li>

<!-- Nav Item - Charts -->
<li class="nav-item">
    <a class="nav-link" href="agenda.php">
        <i class="fa fa-calendar"></i>
        <span>Agenda</span></a>
</li>

<!-- Nav Item - Avis & Alertes -->
<li class="nav-item">
    <a class="nav-link" href="avis.php">
        <i class="fa fa-bell"></i>
        <span>Avis & Alertes</span></a>
</li>

<!-- Nav Item - Menu -->
<li class="nav-item">
    <a class="nav-link" href="menu.php">
        <i class="fas fa-fw fa-table"></i>
        <span>Menu</span></a>
</li>

<!-- Nav Item - Plugins -->
<li class="nav-item">
    <a class="nav-link" href="plugins.php">
        <i class="fas fa-fw fa-link"></i>
        <span>Plugins</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>


</ul>
<!-- End of Sidebar -->

 <!-- Scroll to Top Button-->
 <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Cliquer sur "Déconnexion" pour fermer la session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
                    <a class="btn btn-primary" href="logout.php">Déconnexion</a>
                </div>
            </div>
        </div>
    </div>


    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">



    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

<!-- Sidebar Toggle (Topbar) -->
<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
    <i class="fa fa-bars"></i>
</button>

<!-- Topbar Search -->
<form
    class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
    <div class="input-group">
        <input type="text" class="form-control bg-light border-0 small" placeholder="Rechercher..."
            aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
            <button class="btn btn-primary" type="button">
                <i class="fas fa-search fa-sm"></i>
            </button>
        </div>
    </div>
</form>

<!-- Topbar Navbar -->
<ul class="navbar-nav ml-auto">

    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
    <li class="nav-item dropdown no-arrow d-sm-none">
        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-search fa-fw"></i>
        </a>
        <!-- Dropdown - Messages -->
        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
            aria-labelledby="searchDropdown">
            <form class="form-inline mr-auto w-100 navbar-search">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small"
                        placeholder="Rechercher..." aria-label="Search"
                        aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </li>

    <?php
                
        $query = "SELECT * from articles where notif_active=0 and accept=0 order by createdAt";
        $query_run = mysqli_query($connection, $query);
        if($query_run){
            $num = mysqli_num_rows($query_run);
        }
    ?>

    <!-- Nav Item - notifications -->
    <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw"></i>
            <!-- Counter - notifications -->
            <?php if($num >0){ ?>
            <span class="badge badge-danger badge-counter" count><?=$num?></span>
            <?php } ?>
        </a>
        <!-- Dropdown - notifications -->
        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in drp1"
            aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">
                Articles non admis
            </h6>
            <div class="list-of-notifs">
            <?php
               while($row = mysqli_fetch_row($query_run)){
            ?>
                        <a class="dropdown-item d-flex align-items-center" href="edit_article.php?id=<?php echo $row[0]?>">
                            <div class="mr-3">
                                <div class="icon-circle bg-primary">
                                    <i class="fas fa-file-alt text-white"></i>
                                </div>
                            </div>
                            <div>
                                <div class="small text-gray-500"><?php echo $row[4];?></div>
                                <span class="font-weight-bold"><?php echo $row[1];?></span>
                            </div>
                        </a>
            <?php   }
                    if($num == 0){
                        echo "<span style='margin: 0 10%'>vous trouverez les nouvelles articles ici.</span>";
                    }
            ?>   
            </div>          
           
            <a class="dropdown-item text-center small text-gray-500" href="articles.php">Voir tous</a>
        </div>
    </li>

    <?php
        $comments = "SELECT *, DATEDIFF( current_timestamp(), createdAt) from comments order by createdAt DESC";
        $com_run = mysqli_query($connection, $comments);
        if($com_run){
            $num = mysqli_num_rows($com_run);
        }
    ?>
    <!-- Nav Item - comments-->
    <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-envelope fa-fw"></i>
            <!-- Counter - comments -->
            <span class="badge badge-danger badge-counter"><?=$num?></span>
        </a>
        <!-- Dropdown - comments -->
        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
            aria-labelledby="messagesDropdown">
            <h6 class="dropdown-header">
                Commentaires
            </h6>
            <div class="list-of-comments">
            <?php
               while($row = mysqli_fetch_row($com_run)){
                   if($row[6] == 0){
                       $date = "aujourd'hui";
                   }else if($row[6] == 1){
                       $date = "il y'a ".$row[6]." jour";
                   }else{
                       $date = "il y'a ".$row[6]." jours";
                   }
            ?>
            <a class="dropdown-item d-flex align-items-center" href="../single-blog.php?id=<?=$row[5]?>" target="_blank">
                <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="../images/version/LETTERS/<?=substr($row[1], 0, 1)?>.png"
                        alt="...">
                    <div class="status-indicator bg-success"></div>
                </div>
                <div class="font-weight-bold">
                    <div class="text-truncate"><?=$row[3]?></div>
                    <div class="small text-gray-500"><?=$row[1]?> · <?=$date?></div>
                </div>
            </a>
            <?php   }
                    if($num == 0){
                        echo "<span style='margin: 0 10%'>vous trouverez les commentaires ici.</span>";
                    }
            ?> 
            </div>
            <a class="dropdown-item text-center small text-gray-500" href="comments.php">Lire plus de commentaires.</a>
        </div>
    </li>

    <div class="topbar-divider d-none d-sm-block"></div>

    <!-- Nav Item - User Information -->
    <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                <?php 
                    echo $_SESSION["user_name"];
                ?>
            </span>
            <?php 
            $id = $_SESSION["user_id"];
            $query = "SELECT * from users where idUser=$id";
            $result = mysqli_query($connection, $query);
            if($result){
                $row = mysqli_fetch_row($result);
                if($row[7] == NULL){
                    echo '<img class="img-profile rounded-circle"
                            src="../images/version/LETTERS/'.substr($row[1], 0, 1).'.png">';
                }else{
                    echo '<img class="img-profile rounded-circle"
                            src="../images/version/LETTERS/'.$row[7].'">';
                }
            }
            ?>
            
        </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
            aria-labelledby="userDropdown">
            <!--<a class="dropdown-item" href="profile.php">
                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                Profil
            </a>-->
            <a class="dropdown-item" href="params.php">
                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                Paramètres
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Déconnexion
            </a>
        </div>
    </li>

</ul>
<!--
<script>
   $(document).ready(function(){
    console.log('data')
      function load_unseen_notifications(view = ''){
         $.ajax({
            url: "fetch.php",
            method: "POST",
            data:{view: view},
            dataType: "json",
            success:function(data){
                console.log('data',data)
               $('.drp1').html(data.notification);
               if(data.unseen_notifications >0){
                   $('.count').html(data.unseen_notifications);
               }
            }
         })
      }
   });

   load_unseen_notifications();
</script>
-->
</nav>
<!-- End of Topbar -->
