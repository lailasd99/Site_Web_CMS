<?php

include('security.php');


if(isset($_GET['btn-ar']))
{
    $article_id=$_GET['id'];
   
    $query = "SELECT * from articles where idArticle=$article_id";

    $query_run = mysqli_query($connection, $query);
    if($query_run)
    {
        $article= mysqli_fetch_row($query_run);
    }
}else{
   header("location: articles.php");
}



include('includes/header.php');
include('includes/navbar.php');
include('includes/scripts.php');

?>

<div class="container">
<div class="row">
    <div class="col-8">
    <form method="GET" action="edit_article.php">
          <input type="hidden" value="<?=$article[0]?>" name="article_id">
          <button class="btn btn-success" type="submit" name="modify_article">FR</button>
       </form>
       <h3>"<?php echo $article[1]?>" تعديل المقال</h3>

<form action="article_actions.php" method="post" enctype="multipart/form-data" name="submitForm" onsubmit="return handleSubmit()">
    <input type="text" name="title" class="form-control" value="<?php echo $article[8]?>" style="margin: 25px 0"></input>
    <textarea name="text_editor_page" class="text_editor_ar">
        <?php
            echo $article[9];
        ?>
    </textarea>
    <input type="hidden" name="art_id" value="<?php echo $article[0];?>"></input>
    <input type="file" id="art_photo" name="art_photo" value="" style="display:none"></input>
    <input type="hidden" id="id_draft" name="id_draft" value=""></input>
    <button   type="submit" name ="submit-article-ar" class="btn btn-primary">نشر</button>
</form>
</div>




<!-----image upload--->
<div class="col-4">
<div class="container2">
<h6>اختيار صورة للمقال</h6>
         <div class="wrapper2">
            <div class="image2">
               <img id ="preview" src="<?php echo '../images/'.$article[6];?>" alt="">
            </div>
            <div class="content2">
               <div class="icon2">
                  <i class="fas fa-cloud-upload-alt"></i>
               </div>
               <div class="text2">
               لم يتم اختيار ملف
               </div>
            </div>
            <div id="cancel-btn">
               <i class="fas fa-times"></i>
            </div>
            <div class="file-name">
            اسم الملف
            </div>
         </div>
         <button onclick="defaultBtnActive()" id="custom-btn">اختيار ملف</button>
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

         <div class="container">
                  <h5 align="center" style="margin-top: 50px">Article Admis</h5>
                  <select id="archive" class="form-control" style="width: 100%; margin-top: 30px">
                     <?php
                     if($article[3] == 1){
                        $accept = "oui";
                        $other = "non";
                        $other_val = 0;
                     }else{
                        $accept = "non";
                        $other = "oui";
                        $other_val = 1;
                     }
                     ?>
                     <option value="<?php echo $article[3]?>" selected><?php echo $accept?></option>
                     <option value="<?php echo $other_val?>"><?php echo $other?></option>
                  </select>
         </div>
    

      </div> 
   </div>
</div>

<script>
function handleSubmit(e) {
   
    document.forms.submitForm.art_photo.files = document.getElementById("default-btn").files;
    document.getElementById("art_photo").files = document.getElementById("default-btn").files;
    document.getElementById("id_draft").value= document.getElementById("archive").value;
    console.log(document.getElementById("art_photo").files)
}

</script>
<?php
include('includes/footer.php');
?>

