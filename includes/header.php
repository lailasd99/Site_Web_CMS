<?php
//phpinfo(); exit();
$locale = "ar";

    putenv("LC_ALL={$locale}");
    setlocale(LC_ALL, $locale);

    // Spécifie la localisation des tables de traduction
    bindtextdomain("ar", "../locales");
    bind_textdomain_codeset("ar", "UTF-8");

    // Choisit le domaine
    textdomain("ar");

?>

<!DOCTYPE html>
<html lang=<?=$locale?>>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Site Metas -->
    <title>Radeema</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/logo_radeema.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    
    <!-- Design fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet"> 

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    
    
    <!-- FontAwesome Icons core CSS -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- FontAwesome kit -->
    <script src="https://kit.fontawesome.com/c8d09f0286.js" crossorigin="anonymous"></script>

    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">
    

    <!-- Responsive styles for this template -->
    <link href="css/responsive.css" rel="stylesheet">

    <!-- Colors for this template -->
    <link href="css/colors.css" rel="stylesheet">

    <!-- Version Tech CSS for this template -->
    <link href="css/version/tech.css" rel="stylesheet">

    <link href="jquery-flipster-master/dist/jquery.flipster.min.css" rel="stylesheet">


    
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

    <div id="wrapper">
        <header class="tech-header header">
            <div class="container-fluid">
                <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img id="logo_radeema_header" src="images/logo_radeema.png" alt="logo radeema"></a>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php"><?= _('Accueil'); ?></a>
                            </li>
                            <?php
                                include("security.php");
                                $query = "select * from menu_pages where idMenu=1";
                                $query_run = mysqli_query($connection, $query);
                                while($row = mysqli_fetch_row($query_run)){
                                    if($row[2] == "page"){
                                        $query1 = "SELECT * from pages where idPage=".$row[1];
                                        $query_run1 = mysqli_query($connection, $query1);
                                        if($query_run1){
                                            $row1 = mysqli_fetch_row($query_run1);
                                            $name = $row1[1];
                                        }
                                        echo '<li class="nav-item">
                                                <a class="nav-link" href="single-page.php?id='.$row[1].'">'.$name.'</a>
                                              </li>';
                                    }else if($row[2] == "categorie"){
                                        $query1 = "SELECT * from category where idCat=".$row[1];
                                        $query_run1 = mysqli_query($connection, $query1);
                                        if($query_run1){
                                            $row1 = mysqli_fetch_row($query_run1);
                                            $name = $row1[1];
                                        }
                                        $query2 = "SELECT * from category_pages where idCat=".$row1[0];
                                        $query_run2 = mysqli_query($connection, $query2);
                                        if($query_run2){
                                                echo '<li class="nav-item dropdown">
                                                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'.$name.'</a>';
                                                        echo '<ul class="dropdown-menu megamenu" aria-labelledby="dropdown01">
                                                      <li>
                                                        <div class="container">
                                                        <div class="mega-menu-content clearfix">
                                                        <div class="tab">';
                                            
                                                    while($row2 = mysqli_fetch_row($query_run2)){
                                                        $req = "SELECT * from pages where idPage=".$row2[0];
                                                        $res = mysqli_query($connection, $req);
                                                        if($res){
                                                            $line = mysqli_fetch_row($res);
                                                                echo '<a href="single-page.php?id='.$line[0].'&catid='.$row[1].'"><button class="tablinks">'.$line[1].'</button></a>';
                                                        }
                                                                    
                                                    }
                                            }
                                            
                                                
                                                echo '</div>
                                                    </div>
                                                </div>
                                                </li>
                                                </ul>                           
                                                </li>';
                                             }
                                            }
                                             ?>
                           
                        </ul>
                        <ul class="navbar-nav mr-2">
                            <li class="nav-item">
                            <div class="search-box">
                                <!--<form method="GET" action="search_result.php">-->
                                    <button class="btn-search" onclick="onSearch();"><i class="fas fa-search" id="btn-search"></i></button>
                                    <input type="text" id="keyword" class="input-search" placeholder="Rechercher...">
                                <!--</form>-->
                            </div>
                            </li>
                        </ul>
                            <ul class="navbar-nav mr-2">
                            <li class="nav-item">
                                <a class="nav-link" href="https://fr-fr.facebook.com/RADEEMAKECH/"><i class="fa fa-facebook-square"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.youtube.com/channel/UCFl5dUovd_Wr1AT0aprFAJA"><i class="fa fa-youtube-play "></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://play.google.com/store/apps/details?id=ma.radeema.redaelouafi.RadeemaMob"><i class="fa fa-android "></i></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div><!-- end container-fluid -->
        </header><!-- end market-header -->


<script>
    var a_parent =  document.querySelectorAll(".a_parent");
    var dd_menu_a = document.querySelectorAll(".dd_menu_a");

a_parent.forEach(function(aitem){

		aitem.addEventListener("click", function(){
			a_parent.forEach(function(aitem){
				aitem.classList.remove("active");
			})
			dd_menu_a.forEach(function(dd_menu_item){
				dd_menu_item.classList.remove("active");
			})
			aitem.classList.add("active");
		})
})

dd_menu_a.forEach(function(dd_menu_item){

		dd_menu_item.addEventListener("click", function(){
			dd_menu_a.forEach(function(dd_menu_item){
				dd_menu_item.classList.remove("active");
			})
			dd_menu_item.classList.add("active");
		})
})
</script>


<script>
    function onSearch(){
        var key = document.getElementById("keyword").value;
        if(key != ""){
            sessionStorage.setItem("key", key);
            window.location.href = "search_result.php";
        }
    }
</script>

<?php


?>