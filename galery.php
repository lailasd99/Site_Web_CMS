
<div class="hero">
    <div class="carousel">
        <ul>
            <?php 
                $query_img = "SELECT * from galery";
                $img_run = mysqli_query($connection, $query_img);
                if($img_run){
                    while($img = mysqli_fetch_row($img_run)){
            ?>
                        <li><img src="images/galery/<?=$img[1]?>"></li>
            <?php
                    }
                }
            ?>
        </ul>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="jquery-flipster-master/dist/jquery.flipster.min.js"></script>

<script>
    $('.carousel').flipster({
        style:'carousel',
        spacing: -0.3,
    });

</script>