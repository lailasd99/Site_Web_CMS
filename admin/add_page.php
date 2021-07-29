<?php
    include('security.php');
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
            echo '<div class="alert alert-danger" role="alert">'.$_SESSION['status'].'</div>';
            unset($_SESSION['status']);
        }
    ?>

<div class="container">
  <div class="row">
    <div class="col-8"><h3>Ajouter une page</h3>

      <form action="page_actions.php" method="post" enctype="multipart/form-data" name="submitForm" onsubmit="return handleSubmit()">
        <input type="text" name="title" class="form-control" value="" style="margin: 25px 0"></input>
        <textarea class="tinymce" name="text_editor_page" id="text_editor_page">
            
        </textarea>
        <input type="hidden" id="parent_page_id" name="parent_page_id" value=""></input>
        <input type="hidden" id="id_categorie" name="id_categorie" value=""></input>
        <input type="hidden" id="id_draft" name="id_draft" value=""></input>
        <input type="file" id="page_photo" name="page_photo" value="" style="display:none"></input>
        <input  type="hidden" id="pdf_table" name="pdf" ></input>
        <input  type="hidden" id="contact_form" name="c_form" ></input>
        <input  type="hidden" id="login_form" name="l_form" ></input>
        <input  type="hidden" id="id_forms" name="forms" ></input>
        <input  type="hidden" id="local" name="local" ></input>
        <button type="submit" name ="add-page" class="btn btn-primary" style="margin-top: 20px">Publier</button>
      </form>
    </div>

    <div class="col-4">

    <div class="container2">
        <h6>Insérer une image de page</h6>
         <div class="wrapper2">
            <div class="image2">
               <img id ="preview" src="" alt="">
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
        <select id="par_id" class="form-select form-select-sm form-control" aria-label=".form-select-sm example" style="width: 100%; margin-top: 30px">
        <option value=NULL selected >Choisir une page mère</option>
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
    <select id="cat_id" class="form-select form-select-sm form-control mul-select" aria-label=".form-select-sm example" style="width: 100%; margin-top: 30px" multiple="true">
       <!-- <option value="<?php echo $cat[0]?>" selected ><?php echo $cat[1]?></option>-->
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
              <option value="1">oui</option>
              <option value="0" selected>non</option>
          </select>
  </div>

  <div class="container">
    <h5 align="center" style="margin-top: 50px">Insérer des "plugins"</h5>
    <div class="toggle">
      <input id="table" name="pdf_table" value="oui" type="checkbox" />
      <label class="form-check-label" for="">Table de PDF téléchargeable</label>
    </div>
    <div class="toggle">
      <input id="contact" name="contact_form" value="oui" type="checkbox" />
      <label class="form-check-label" for="">Formulaire de contact</label>
    </div>
    <div class="toggle">
      <input id="login" name="login_form" value="oui" type="checkbox" />
      <label class="form-check-label" for="">Formulaire d'authentification</label>
    </div>
      <input id="forms" name="forms" value="oui" type="checkbox"/>
      <label class="form-check-label" for="">les formulaires</label>
    </div>
    <div class="toggle">
      <input id="locali" name="locali" value="oui" type="checkbox" />
      <label class="form-check-label" for="">localisation des agences</label>
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
    document.getElementById("id_categorie").value= $('#cat_id').val();
    document.getElementById("id_draft").value= document.getElementById("archive").value;
    document.getElementById("page_photo").files= document.getElementById("default-btn").files;

    document.getElementById("pdf_table").value = document.getElementById("table").checked;
    document.getElementById("contact_form").value = document.getElementById("contact").checked;
    document.getElementById("login_form").value = document.getElementById("login").checked;
    document.getElementById("id_forms").value = document.getElementById("forms").checked;
    document.getElementById("local").value = document.getElementById("locali").checked;
    //document.forms.submitForm.submit();
    //console.log(document.forms.submitForm.art_photo)
    console.log(document.getElementById("parent_page_id").files)
    //return false
}

</script>

<script>
  $(document).ready(function(){
    $(".mul-select").select2({
        placeholder: "choisir une catégorie",
        tags: true,
        tokenSeparators: ['/', ',', ',', " "],
        
    })
  })
</script>


<?php 
  include('includes/footer.php');
?>

