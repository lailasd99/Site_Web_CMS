<?php

    include('security.php');
    include('includes/header.php');
    include('includes/navbar.php');
    include('includes/scripts.php');

?>

<div class="container">
<div class="row">
    <div class="col-8">
       <h3>Ajouter une article</h3>

<form action="article_actions.php" method="post" enctype="multipart/form-data" name="submitForm" onsubmit="return handleSubmit()">
    <input type="text" name="title" class="form-control" value="" style="margin: 25px 0"></input>
    <textarea name="text_editor_article" class="text_editor_page">
       
    </textarea>
    <input type="file" id="art_photo" name="art_photo" value="" style="display:none"></input>
    <div class="col-4"><button   type="submit" name ="add_article" class="btn btn-primary">Publier</button></div>
</form>
</div>




<!-----image upload--->
<div class="col-4">
<div class="container2">
<h6>Insérer une image d'article</h6>
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
    

</div> 
</div>
</div>


<script>
function handleSubmit(e) {
   
    //document.forms.submitForm.art_photo.files = document.getElementById("default-btn").files;
    document.getElementById("art_photo").files = document.getElementById("default-btn").files;
    //document.forms.submitForm.submit();
    //console.log(document.forms.submitForm.art_photo)
    console.log(document.getElementById("art_photo").files)
    //return false
}

</script>

<?php
include('includes/footer.php');
?>

