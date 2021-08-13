
<?php
    $query= "SELECT * from faq";
    $run = mysqli_query($connection, $query);

?>


<section class="collapse-area">
  <div class="container">
    <div class="row1">
      <div class="collapse-tab col-xs-12">
        <div class="panel-group" id="accordion">
            <?php
            $i = 0;
             while($row = mysqli_fetch_row($run)){
                 $i++;
                 if($_SESSION['lang'] == 'Fr'){
                      $question = $row[1];
                      $answer = $row[2];
                 }else{
                      $question = $row[3];
                      $answer = $row[4];
                 }
                 if(!empty($question)){
            ?>
          <div class="panel panel-default" id="panel<?=$i?>">
            <!-- Start: Tab-1 -->
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#<?=$i;?>" class="collapsed">
                  <?php echo $question; ?>
                  <span class="bar hidden-xs"></span>
                </a>
              </h4>
            </div>
            <div id="<?=$i;?>" class="panel-collapse collapse">
              <div class="panel-body">
                <?php echo $answer; ?>
              </div>
            </div>
          </div>
          <?php }
          }?>
        </div>
      </div>
    </div>
  </div>
</section>
