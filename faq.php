
<?php
    $query= "SELECT * from faq";
    $run = mysqli_query($connection, $query)

?>

<section class="collapse-area">
  <div class="container">
    <div class="row">
      <div class="collapse-tab col-xs-12">
        <div class="panel-group" id="accordion">
            <?php
            $i = 0;
             while($row = mysqli_fetch_row($run)){
                 $i++;
            ?>
          <div class="panel panel-default" id="panel<?=$i?>">
            <!-- Start: Tab-1 -->
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#<?=$i;?>" class="collapsed">
                  <?php echo $row[1]; ?>
                  <span class="bar hidden-xs"></span>
                </a>
              </h4>
            </div>
            <div id="<?=$i;?>" class="panel-collapse collapse">
              <div class="panel-body">
                <?php echo $row[2]; ?>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>