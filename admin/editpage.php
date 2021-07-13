<?php
include('security.php');


if(isset($_GET['modify_page']))
{
    $page_id=$_GET['page_id'];
   
    $query = "SELECT * from pages where idPage=$page_id";

    $query_run = mysqli_query($connection, $query);
    if($query_run)
    {
        $page= mysqli_fetch_row($query_run);
    }
  }else{
    header("location: pages.php");
  }


  include('includes/header.php');
  include('includes/navbar.php');
  include('includes/scripts.php');
?>

<?php
        if(isset($_SESSION['success']) && $_SESSION['success']!=''){
            echo '<div class="alert alert-success" role="alert">'.$_SESSION['success'].'</div>';
            unset($_SESSION['success']);
        }

        if(isset($_SESSION['status']) && $_SESSION['status']!=''){
            echo '<div class="alert alert-danger" role="alert">'.$_SESSION['status'].'<div>';
            unset($_SESSION['status']);
        }
    ?>

<div class="container">
  <div class="row">
    <div class="col-8"><h3>Modifier la page <?php echo '"'.$page[1].'"';?></h3>

      <form action="page_actions.php" method="post" name="submitForm" onsubmit="return handleSubmit()">
        <input type="text" name="title" class="form-control" value="<?php echo $page[1]?>" style="margin: 25px 0"></input>
        <textarea class="tinymce" name="text_editor_page" id="text_editor_page">
            <?php
                echo $page[8];
            ?>
        </textarea>
        <input type="hidden" name="page_id" value="<?php echo $page[0];?>"></input>
        <input type="hidden" id="parent_page_id" name="parent_page_id" value=""></input>
        <input type="hidden" id="id_categorie" name="id_categorie" value=""></input>
        <input type="hidden" id="id_draft" name="id_draft" value=""></input>
        <button type="submit" name ="submit-page" class="btn btn-primary" style="margin-top: 20px">Publier</button>
      </form>
    </div>

    <div class="col-4">
      <h5 align="center">Choisir la page mère</h5>
        <div class="container">
          <?php 
            $query = "select * from pages where idPage =".$page[2];
            $query_run = mysqli_query($connection, $query);
            if($query_run){
              $prt = mysqli_fetch_row($query_run);
            }else{
              $prt[1] = "choisir une page";
              $prt[0] = "";
            }
          ?>
        <select id="par_id" class="form-select form-select-sm form-control" aria-label=".form-select-sm example" style="width: 100%; margin-top: 30px">
        <option value="<?php echo $prt[0]?>" selected ><?php echo $prt[1]?></option>
          <?php
            $query  = "select * from pages";
            $query_run = mysqli_query($connection, $query);
            if($query_run){
              while($row = mysqli_fetch_row($query_run)){
                  if($row != $page && $row != $prt){
                  echo '<option value="'.$row[0].'">'.$row[1].'</option>';
              }
            }
            }
            echo '<option value=NULL>- aucune page mère -</option>';
        echo "</select>";
      
          ?>
    </div>
    <h5 align="center" style="margin-top: 50px">Choisir une catégorie</h5>
    <div class="container">
      <?php 
          $query = "select * from category where idCat =".$page[9];
          $query_run = mysqli_query($connection, $query);
          if($query_run){
              $cat = mysqli_fetch_row($query_run);
          }else{
            $cat[1] = "choisir une catégorie";
            $cat[0] = "";
          }
        ?>
    <select id="cat_id" class="form-select form-select-sm form-control" aria-label=".form-select-sm example" style="width: 100%; margin-top: 30px">
        <option value="<?php echo $cat[0]?>" selected ><?php echo $cat[1]?></option>
        <?php
          $query  = "select * from category";
          $query_run = mysqli_query($connection, $query);
          if($query_run){
            while($row = mysqli_fetch_row($query_run)){
                if($row != $cat){
                echo '<option value="'.$row[0].'">'.$row[1].'</option>';
            }
          }
          }
          echo '<option value=NULL>- aucune catégorie -</option>';
    echo "</select>";
      
    ?>
  </div>
  <div class="container">
          <h5 align="center" style="margin-top: 50px">Page Archivé</h5>
          <select id="archive" class="form-control" style="width: 100%; margin-top: 30px">
            <?php
              if($page[5] == 1){
                $accept = "oui";
                $other = "non";
                $other_val = 0;
              }else{
                $accept = "non";
                $other = "oui";
                $other_val = 1;
              }
              ?>
              <option value="<?php echo $page[5]?>" selected><?php echo $accept?></option>
              <option value="<?php echo $other_val?>"><?php echo $other?></option>
          </select>
  </div>
</div>
</div>
</div>


<script>
function handleSubmit(e) {
    document.getElementById("parent_page_id").value= document.getElementById("par_id").value;
    document.getElementById("id_categorie").value= document.getElementById("cat_id").value;
    document.getElementById("id_draft").value= document.getElementById("archive").value;
    //document.forms.submitForm.submit();
    //console.log(document.forms.submitForm.art_photo)
    console.log(document.getElementById("parent_page_id").files)
    //return false
}

</script>



<?php 
  include('includes/footer.php');
?>

