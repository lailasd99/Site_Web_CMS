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
    <div class="col-8"><h3>Modifier la page <?php echo $page[1]?></h3>

      <form action="page_actions.php" method="post" enctype="multipart/form-data" name="submitForm" onsubmit="return handleSubmit()">
        <input type="text" name="title" class="form-control" value="<?php echo $page[1]?>" style="margin: 25px 0"></input>
        <textarea class="tinymce" name="text_editor_page" id="text_editor_page">
            <?php
                echo $page[8];
            ?>
        </textarea>
        <input type="hidden" name="page_id" value="<?php echo $page[0]?>"></input>
        <input type="hidden" id="parent_page_id" name="parent_page_id" value=""></input>
        <input type="hidden" id="id_categorie" name="id_categorie" value=""></input>
        <input type="hidden" id="id_draft" name="id_draft" value=""></input>
        <input type="file" id="page_photo" name="page_photo" value="" style="display:none"></input>
        <input  id="pdf_table" name="pdf" value=""></input>
        <input  id="contact_form" name="c_form" value=""></input>
        <input  id="login_form" name="l_form" value=""></input>
        <button type="submit" name ="submit-page" class="btn btn-primary" style="margin-top: 20px">Publier</button>
      </form>
    </div>

    <div class="col-4">

    <div class="container2">
        <h6>Insérer une image de page</h6>
         <div class="wrapper2">
            <div class="image2">
               <img id ="preview" src="../images/<?php echo $page[10]?>" alt="">
            </div>
            <div class="content2">
               <div class="icon2">
                  <i class="fas fa-cloud-upload-alt"></i>
               </div>
               <div class="text2">
                  Aucun fichier n'est choisi
               </div>
            </div>
            <div id="cancel-btn">
               <i class="fas fa-times"></i>
            </div>
            <div class="file-name">
               Nom de fichier
            </div>
         </div>
         <button onclick="defaultBtnActive()" id="custom-btn">Choisir un fichier</button>
         <input id="default-btn" type="file" hidden>
      </div>


      
        <div class="container" style="margin-top: 50px">
        <h5 align="center">Choisir la page mère</h5>
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
    <div class="container">
    <h5 align="center" style="margin-top: 50px">Choisir une catégorie</h5>
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

  <div class="container">
    <h5 align="center" style="margin-top: 50px">Insérer des "plugins"</h5>
    <div class="form-check form-switch">
      <input name="pdf_table" class="form-check-input" value="oui" type="checkbox" id="flexSwitchCheckDefault" />
      <label class="form-check-label" for="flexSwitchCheckDefault">Table de pdf téléchargeable</label>
    </div>
    <div class="form-check form-switch">
      <input name="contact_form" class="form-check-input" value="oui" type="checkbox" id="flexSwitchCheckDefault"/>
      <label class="form-check-label" for="flexSwitchCheckDefault">Formulaire de contact</label>
    </div>
    <div class="form-check form-switch">
      <input name="login_form"class="form-check-input" value="oui" type="checkbox" id="flexSwitchCheckDefault" />
      <label class="form-check-label" for="flexSwitchCheckDefault">Formulaire de d'inscription</label>
    </div>
  </div>
</div>
</div>
</div>


<script>
         const wrapper = document.querySelector(".wrapper2");
         const fileName = document.querySelector(".file-name");
         const defaultBtn = document.querySelector("#default-btn");
         const customBtn = document.querySelector("#custom-btn");
         const cancelBtn = document.querySelector("#cancel-btn i");
         const img = document.querySelector("#preview");
         let regExp = /[0-9a-zA-Z\^\&\'\@\{\}\[\]\,\$\=\!\-\#\(\)\.\%\+\~\_ ]+$/;
         function defaultBtnActive(){
           defaultBtn.click();
         }
         defaultBtn.addEventListener("change", function(){
           const file = this.files[0];
           if(file){
               //$("#preview").fadeIn("fast").attr('src',URL.createObjectURL(event.target.files[0]));
             const reader = new FileReader();
             reader.onload = function(){
               const result = reader.result;
               img.src = result;
               wrapper.classList.add("active");
             }
             cancelBtn.addEventListener("click", function(){
               img.src = "";
               wrapper.classList.remove("active");
             })
             reader.readAsDataURL(file);
           }
           if(this.value){
             let valueStore = this.value.match(regExp);
             fileName.textContent = valueStore;
           }
         });
      </script>



<script>
function handleSubmit(e) {
    document.getElementById("parent_page_id").value= document.getElementById("par_id").value;
    document.getElementById("id_categorie").value= document.getElementById("cat_id").value;
    document.getElementById("id_draft").value= document.getElementById("archive").value;
    document.getElementById("page_photo").files= document.getElementById("default-btn").files;

    document.getElementById("pdf_table").value= document.getElementByName("pdf_table").value;
    document.getElementById("contact_form").value= document.getElementByName("contact_form").value;
    document.getElementById("login_form").value= document.getElementByName("login_form").value;
    //document.forms.submitForm.submit();
    //console.log(document.forms.submitForm.art_photo)
    console.log(document.getElementById("parent_page_id").files)
    //return false
}

//$('#flexSwitchCheckDefault').bootstrapSwitch();

</script>



<?php 
  include('includes/footer.php');
?>

