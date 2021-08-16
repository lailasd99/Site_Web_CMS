<?php

include('security.php');


if(isset($_GET['btn-ar'])){
    $page_id=$_GET['id'];
   
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

<div class="container">
  <div class="row">
    <div class="col-8">
    <form method="GET" action="editpage.php">
          <input type="hidden" value="<?=$page[0]?>" name="id">
          <button class="btn btn-success" type="submit" name="btn-ar">FR</button>
       </form>
      <h3>Modifier la page "<?php echo $page[1]?>"</h3>

      <form action="page_actions.php" method="post" enctype="multipart/form-data" name="submitForm" onsubmit="return handleSubmit()">
        <input dir="rtl" type="text" name="title" class="form-control" value="<?php echo $page[11]?>" style="margin: 25px 0"></input>
        <textarea name="text_editor_page" class="text_editor_ar" id="text_editor_page">
            <?php
                echo $page[12];
            ?>
        </textarea>
        <input type="hidden" name="page_id" value="<?php echo $page[0]?>"></input>
        <input type="hidden" id="parent_page_id" name="parent_page_id" value=""></input>
        <input type="hidden" id="id_categorie" name="id_categorie" value=""></input>
        <input type="hidden" id="id_draft" name="id_draft" value=""></input>
        <input type="file" id="page_photo" name="page_photo" value="" style="display:none"></input>
        <input  type="hidden" id="pdf_table" name="pdf" ></input>
        <input  type="hidden" id="contact_form" name="c_form" ></input>
        <input  type="hidden" id="login_form" name="l_form" ></input>
        <input  type="hidden" id="id_forms" name="forms" ></input>
        <input  type="hidden" id="local" name="local" ></input>
        <input  type="hidden" id="publication" name="publication" ></input>
        <input  type="hidden" id="flash" name="flash" ></input>
        <input  type="hidden" id="galery" name="galery" ></input>
        <button type="submit" name ="submit-page-ar" class="btn btn-primary" style="margin-top: 20px">Publier</button>
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
            $query = "SELECT * from pages where idPage =".$page[2];
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
            $query  = "SELECT * from pages order by title";
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
    <select id="cat_id" class="form-select form-select-sm form-control mul-select" aria-label=".form-select-sm example" style="width: 100%; margin-top: 30px" multiple="true">
      <?php 
        $page_id=$_GET['id'];
        $req = "SELECT * from category_pages where idPage=".$page_id;
        $res = mysqli_query($connection, $req);
        if($res){
          while($row = mysqli_fetch_row($res)){
            $query = "SELECT * from category where idCat =".$row[1];
            $query_run = mysqli_query($connection, $query);
            if(!$query_run){
              echo '<option value="" selected >choisir une catégorie</option>';
            }else{
              while($r = mysqli_fetch_row($query_run)){
                echo '<option value="'.$r[0].'" selected >'.$r[1].'</option>';
              }
              
            }
          }
        }
       
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
    <div class="toggle">
      <?php 
        $query_p = "SELECT * from plugins where idPage=$page_id and idPlugin=1";
        $query_run_p = mysqli_query($connection, $query_p);
      ?>
      <input id="table" name="pdf_table" value="oui" type="checkbox" <?php if(mysqli_num_rows($query_run_p) > 0){ echo "checked";}?>/>
      <label class="form-check-label" for="">Table de PDF téléchargeable</label>
    </div>
    <div class="toggle">
    <?php 
        $query_p = "SELECT * from plugins where idPage=$page_id and idPlugin=2";
        $query_run_p = mysqli_query($connection, $query_p);
      ?>
      <input id="contact" name="contact_form" value="oui" type="checkbox" <?php if(mysqli_num_rows($query_run_p) > 0){ echo "checked";}?>/>
      <label class="form-check-label" for="">Formulaire de contact</label>
    </div>
    <div class="toggle">
    <?php 
        $query_p = "SELECT * from plugins where idPage=$page_id and idPlugin=3";
        $query_run_p = mysqli_query($connection, $query_p);
      ?>
      <input id="login" name="login_form" value="oui" type="checkbox" <?php if(mysqli_num_rows($query_run_p) > 0){ echo "checked";}?>/>
      <label class="form-check-label" for="">Formulaire d'authentification</label>
    </div>
    <div class="toggle">
    <?php 
        $query_p = "SELECT * from plugins where idPage=$page_id and idPlugin=4";
        $query_run_p = mysqli_query($connection, $query_p);
      ?>
      <input id="forms" name="forms" value="oui" type="checkbox" <?php if(mysqli_num_rows($query_run_p) > 0){ echo "checked";}?>/>
      <label class="form-check-label" for="">les formulaires</label>
    </div>
    <div class="toggle">
    <?php 
        $query_p = "SELECT * from plugins where idPage=$page_id and idPlugin=5";
        $query_run_p = mysqli_query($connection, $query_p);
      ?>
      <input id="locali" name="locali" value="oui" type="checkbox" <?php if(mysqli_num_rows($query_run_p) > 0){ echo "checked";}?>/>
      <label class="form-check-label" for="">localisation des agences</label>
    </div>
    <div class="toggle">
    <?php 
        $query_p = "SELECT * from plugins where idPage=$page_id and idPlugin=6";
        $query_run_p = mysqli_query($connection, $query_p);
      ?>
      <input id="pub" name="pub" value="oui" type="checkbox" <?php if(mysqli_num_rows($query_run_p) > 0){ echo "checked";}?>/>
      <label class="form-check-label" for="">Rapports et Publications</label>
    </div>
    <div class="toggle">
    <?php 
        $query_p = "SELECT * from plugins where idPage=$page_id and idPlugin=7";
        $query_run_p = mysqli_query($connection, $query_p);
      ?>
      <input id="fl" name="fl" value="oui" type="checkbox" <?php if(mysqli_num_rows($query_run_p) > 0){ echo "checked";}?>/>
      <label class="form-check-label" for="">Flash info et Communiqués</label>
    </div>
    <div class="toggle">
    <?php 
        $query_p = "SELECT * from plugins where idPage=$page_id and idPlugin=8";
        $query_run_p = mysqli_query($connection, $query_p);
      ?>
      <input id="gal" name="gal" value="oui" type="checkbox" <?php if(mysqli_num_rows($query_run_p) > 0){ echo "checked";}?>/>
      <label class="form-check-label" for="">Galerie</label>
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
    document.getElementById("publication").value = document.getElementById("pub").checked;
    document.getElementById("flash").value = document.getElementById("fl").checked;
    document.getElementById("galery").value = document.getElementById("gal").checked;
    
}

//$('#flexSwitchCheckDefault').bootstrapSwitch();

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
