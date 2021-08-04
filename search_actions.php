
<?php
include("includes/security.php");
var_dump($_GET); exit();
if(isset($_GET['keyword'])){
    $key = $_GET['keyword'];
    $keyword = metaphone($key);
    $query_articles = "SELECT *, SUBSTRING(content, 1,450) from articles where title like '%$keyword%' and accept=1 order by AdmittedAt limit $offset, $limit";
    $query_run_art = mysqli_query($connection, $query_articles);

    if($query_run_art){
        echo "<h5>Résultat de recherche: $key</h5>";

        $articles = [];
        while($row = mysqli_fetch_row($query_run_art)){
            array_push($articles, $row[0]);
/*
?>
        <div class="blog-list clearfix">
            <div class="blog-box row">
                <div class="col-md-4">
                    <div class="post-media" style="height: 200px">
                        <a href="single-blog.php?id=<?php echo $row[0]?>" title="<?php $row[1]?>">
                            <img src="<?php echo 'images/'.$row[6];?>" alt="" class="img-fluid" style="object-fit: cover; height: 100%">
                            <div class="hovereffect"></div>
                        </a>
                    </div><!-- end media -->
                </div><!-- end col -->

                <div class="blog-meta big-meta col-md-8">
                    <h4 style="padding-top: 0px; margin-top: 0px"><a href="single-blog.php?id=<?php echo $row[0]?>" title="<?php $row[1]?>"><?php echo $row[1]?></a></h4>
                    <p><?php echo strip_tags($row[8])?>...</p>
                    <!--<small class="firstsmall"><a class="bg-orange" href="tech-category-01.html" title="">Gadgets</a></small>-->
                    <small><a href="single-blog.php?id=<?php echo $row[0]?>" title=""><?php ?></a></small>
                    <!--<small><a href="single-blog.php?id=<?php echo $row[0]?>" title="">by Matilda</a></small>
                    <small><a href="single-blog.php?id=<?php echo $row[0]?>" title=""><i class="fa fa-eye"></i> 1114</a></small>--->
                </div><!-- end meta -->
            </div><!-- end blog-box -->
    
        <hr class="invis">
        <?php
        */
        }
        /*echo "</div>";*/

        $data= json_encode(array(
            'articles' => "hello"
        ));
        echo $data;



    }else{
        echo "query not run";
    }
}else{
    echo "button not set";
}



?>