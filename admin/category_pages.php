<?php
    include('security.php');

    if(isset($_GET['modify_cat'])){
        $id = $_GET['cat_id'];

        $query_pages = "SELECT * from pages where parent_id IS NULL and draft=0 order by title";
        $query_run_p = mysqli_query($connection, $query_pages);
    }else{
        header('location: categories.php');
    }

include('includes/header.php');
include('includes/navbar.php');
include('includes/scripts.php');
?>

<div class="facet-container" style="padding:15px">
  <div class="row">
    <div class="left col-7">
      <h3>Les pages de categorie</h3>
      <ul id="allFacets" class="facet-list" data-id="<?php echo $_GET['cat_id'] ?>">
          <?php
            $pages_exist = [];
            $id = $_GET['cat_id'];
            $query = "SELECT * from category_pages where idCat=$id";
            $query_run = mysqli_query($connection, $query);
              while($row = mysqli_fetch_row($query_run)){
                $req = "SELECT * from pages where idPage = ".$row[0]." and parent_id IS NULL";
                $res = mysqli_query($connection, $req);
                while($line = mysqli_fetch_row($res)){
                      array_push($pages_exist, $line[0]);
                      echo '<li id="page-bg" class="facet" value="'.$line[0].'">'.$line[1].'<small class="type" id="page-text">page</small></li>';
                }
              }
          ?>
      </ul>
    </div>
    <div class="right col-5">
        <h3>les pages disponibles</h3>
        <ul id="userFacets" class="facet-list">
        <?php
                while($row = mysqli_fetch_row($query_run_p)){ 
                    //var_dump($row[0], $pages_exist);
                      if(!in_array($row[0], $pages_exist))
                        echo '<li id="page-bg" class="facet" value="'.$row[0].'">'.$row[1].'<small class="type" id="page-text">page</small></li>';
                }
            ?>
        </ul>
    </div>
  </div>
</div>

<div class="row" style="padding:15px">
  <div class="left col-7">
  <h5>Vous pouvez ajouter une description de catégorie</h5>
  <?php
    $id = $_GET['cat_id'];
    $query_section = "SELECT * from category where idCat=$id";
    $result_section = mysqli_query($connection, $query_section);
    if($result_section){
      $row = mysqli_fetch_row($result_section);
    }

  ?>
  <textarea class="tinymce" id="text_editor_page">
      <?php
        echo $row[2];
      ?>
   </textarea>
  </div>
</div>

<div class="row">
  <div class="col-12 submit-publier " style="text-align:right">
      <button onclick="submit_menu();" type="submit" name ="submit-menu" class="btn btn-primary" style="margin:15px">Publier</button>
  </div>
</div>

<script
  src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"
  integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E="
  crossorigin="anonymous"></script>

<script>
    $(function() {
    $("#allFacets, #userFacets").sortable({
      connectWith: "ul",
      placeholder: "placeholder",
      delay: 150
    })
    .disableSelection()
    .dblclick( function(e){
      var item = e.target;
      if (e.currentTarget.id === 'allFacets') {
        //move from all to user
        $(item).fadeOut('fast', function() {
          $(item).appendTo($('#userFacets')).fadeIn('slow');
        });
      } else {
        //move from user to all
        $(item).fadeOut('fast', function() {
          $(item).appendTo($('#allFacets')).fadeIn('slow');
        });
      }
    });
  });


function submit_menu(){
  tinyMCE.get("text_editor_page").save();
    var lis = new Array();
    var catId = $("#allFacets").data('id');
    var content = $("#text_editor_page").val();
    
    // Iterate through the <li> items
    $("#allFacets").children("li").each(function()
    {
        lis.push($(this).val());
    });
    
    //console.log(lis);
    // Make AJAX call and set data to something like "Music::Lion::Dwarf"
    $.ajax({
        url: "./category_actions.php",
        type: "POST",
        data: { items: lis, cat_id: catId, content: content},
        success: function(data) {
           console.log(data)
           //alert('ok') 
           if (data == 'ok'){
             window.location = "./categories.php?success=1";
           }
           else{
            window.location = "./category_pages.php?status=1";
           }
        }
    });
}    
</script>



<?php
    include('includes/footer.php');
?>