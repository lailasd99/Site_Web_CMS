<?php

include("security.php");

if(isset($_GET['id'])){
    $id_plugin = $_GET['id'];

}else{
    header("location: plugins.php");
}

  include('includes/header.php');
  include('includes/navbar.php');
  include('includes/scripts.php');
  
if($id_plugin == 1){
    include('edit_communique.php');
}else if($id_plugin == 4){
    include('edit_formulaires.php');
}else if($id_plugin == 5){
    include('edit_localisation.php');
}else if($id_plugin == 6){
  include('edit_rapport.php');
}else if($id_plugin == 7){
  include('edit_flash.php');
}


?>




<div class="modal modal-danger fade" id="deleteplugin" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Supprimer le fichier</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="alert alert-danger" role="alert">
      Voulez vous vraiment supprimer cet fichier?
      <form id="form-to-submit" action="plugin_actions.php" method="post">
            <input id="id-plugin" name="plugin-id" type="hidden" value=""> 
            
      </form>
     </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        <button type="submit" form="form-to-submit" name ="deletepluginbtn"class="btn btn-primary" onclick="submit_form()">Confirmer</button>
      </div>
    </div>
  </div>
</div>



<script>
  $('.delete').click(function(e){
    console.log( $(this).data('id'))
    $('#id-plugin').val($(this).data('id'))  
  })

  function submit_form(e) {
    $('#form-to-submit').submit()
  }

</script>


<?php 
  include('includes/footer.php');
?>
