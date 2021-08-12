<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
include('includes/scripts.php');

    $id = $_SESSION["user_id"];

    $query = "SELECT * FROM users where idUser=$id";
    $run = mysqli_query($connection, $query);

    if($run){
        $row = mysqli_fetch_row($run);
        if($row[7] == NULL){
          $photo = "../images/version/LETTERS/".substr($row[1], 0, 1).".png";
        }else{
          $photo = $row[7];
        }

        if($row[8] == NULL){
          $tel = "n'est pas défini";
        }else{
          $tel = $row[8];
        }

        if($row[9] == NULL){
          $adress = "n'est pas défini";
        }else{
          $adress = $row[9];
        }
    }
?>

<div class="container-pro">
  <table>
    <tr>
      <td>
        <section>
          <label for="fileToUpload">
            <i class="fa fa-camera"></i>
            <input type="file" id="fileToUpload" style="visibility:hidden;" accept=".png,.jpg,jpeg,.PNG,.JPEG" name="fileToUpload">
          </label>
          <img src="<?=$photo?>" id="blah" alt="Avatar">
        </section>
        <h4 style="margin-top: 50px;"><?=$row[1]?></h4>
        <?php
          $req = "SELECT * from roles_of_users, roles where roles_of_users.idRole = roles.idRole and idUser=$id";
          $query_run = mysqli_query($connection, $req);
          if($query_run){
              $line = mysqli_fetch_row($query_run);
          }
        ?>
        <h5><?=$line[3]?></h5>
      </td>
      <td>
        <ul class="list-profile">
          <li class="profile-labels"><b class="label-pr">Nom Complet</b> <input class="profile-info" type="text" name="fname" id="fname" maxlength="100" value="<?=$row[1]?>" required /></li>
          <li class="profile-labels"><b class="label-pr">E-mail</b> <input class="profile-info" type="email" name="email" id="email" maxlength="150" value="<?=$row[2]?>" required /></li>
          <li class="profile-labels"><b class="label-pr">Numero de téléphone</b> <input class="profile-info" type="tel" name="mobile" id="mobile" maxlength="10" value="<?=$tel?>" required /> </li>
          <li class="profile-labels"><b class="label-pr">Addresse</b> <input class="profile-info" type="text" name="address" id="address" maxlength="250" value="<?=$adress?>" required /></li>
        </ul>
      </td>
    </tr>
  </table>
</div>



<div class="modal fade" id="modal-crop" role="dialog" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="img-container">
            <div class="row">
                <div class="col-md-8">
                    <img src="" id="sample_image"></img>
                </div>
                <div class="col-md-4">
                    <div class="preview-p">
                    </div>
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" id="crop_and_upload" class="btn btn-primary">Confirmer</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>





<script>

        const btnchange = document.querySelector("#fileToUpload");
        const mdl = $('#modal-crop');
        var crop_image = document.querySelector('#sample_image');
        var cropper;
        btnchange.addEventListener("change", function(event){
            var files = event.target.files;
            var done = function(url){
                crop_image.src = url;
                mdl.modal('show');

            };
            if(files && files.length > 0){
                reader = new FileReader();
                reader.onload = function(event){
                    done(reader.result);
                };
                reader.readAsDataURL(files[0]);
            }
        });

        /*mdl.on('shown.bs.modal', function(){
          cropper = new Cropper(crop_image, {
            aspectRatio: 1,
            viewMode: 3,
            preview: '.preview-p'
          })
        }).on('hidden.bs.modal', function(){
          cropper.destroy();
          cropper= null;
        })*/
        
        //document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])
    

</script>





<!--
<div class="shadow p-3 mb-5 bg-white rounded profile-infos">
    <div class="row">
    <div class="col-2">
        <div class="container-profile">
        <div class="wrapper-profile">
        <div class="profile-image">
        <?php
            $id = $_SESSION["user_id"];

            $query = "SELECT * FROM users where idUser=$id";
            $run = mysqli_query($connection, $query);

            if($run){
                $row = mysqli_fetch_row($run);
                if($row[7] == NULL){
                    echo '<img class="photo-profile rounded-circle"
                            src="../images/version/LETTERS/'.substr($row[1], 0, 1).'.png">';
                }else{
                    echo '<img class="photo-profile rounded-circle"
                            src="../images/version/LETTERS/'.$row[7].'">';
                }
            }
        ?>
        </div>
        <button class="btn btn-primary" onclick="defaultBtnActive()" id="image-btn">changer la photo</button>
        <input id="default-btn" type="file" hidden>
        </div>
        </div>
    </div>
    <div class="col-10">
        <div class="info-user">
            <table style="width: 100%">
            <?php
                echo "<tr><td><b>Nom: </b></td><td><h6 style='font-weight: 400'>".$row[1]."</h6></td></tr>";
                echo "<tr><td><b>E-mail: </b></td><td><h6 style='font-weight: 400'>".$row[2]."</h6></td></tr>";
                $req = "SELECT * from roles_of_users, roles where roles_of_users.idRole = roles.idRole and idUser=$id";
                $query_run = mysqli_query($connection, $req);
                if($query_run){
                    $line = mysqli_fetch_row($query_run);
                    echo "<tr><td><b>Rôle: </b></td><td><h6 style='font-weight: 400'>".$line[3]."</h6></td></tr>";
                }
            ?>
            </table>

        </div>
    </div>
    </div>
</div>



<script>
         const wrapper = document.querySelector(".wrapper-profile");
         //const fileName = document.querySelector(".file-name");
         const defaultBtn = document.querySelector("#default-btn");
         const customBtn = document.querySelector("#image-btn");
         //const cancelBtn = document.querySelector("#cancel-btn i");
         const img = document.querySelector(".photo-profile");
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
             /*cancelBtn.addEventListener("click", function(){
               img.src = "";
               wrapper.classList.remove("active");
             })*/
             reader.readAsDataURL(file);
           }
           if(this.value){
             let valueStore = this.value.match(regExp);
             fileName.textContent = valueStore;
           }
         });
      </script>
        -->








<?php

include('includes/footer.php');
?>