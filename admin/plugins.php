<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
?>
<label style="margin-bottom: 20px" class="btnadd-action">
  <h1 class="h3 mb-0 text-gray-800">Plugins</h1>
</label>

<div class="card-body">
    <?php
        if(isset($_SESSION['success']) && $_SESSION['success']!=''){
            echo '<div class="alert alert-success" role="alert">menu modifié successivement</div>';
            unset($_SESSION['success']);
        }

        if(isset($_SESSION['status']) && $_SESSION['status']!=''){
            echo '<div class="alert alert-danger" role="alert">menu n\'est pas modifié!</div>';
            unset($_SESSION['status']);
        }
    ?>

<div class="card w-100 border-left-primary" style="margin: 10px">
  <div class="card-body">
    <h5 class="card-title">Table de PDF téléchargeable</h5>
    <a href="modify_plugin.php?id=1" class="btn btn-primary">Modifier</a>
  </div>
</div>

<div class="card w-100 border-left-primary" style="margin: 10px">
  <div class="card-body">
    <h5 class="card-title">Les formulaires</h5>
    <a href="modify_plugin.php?id=4" class="btn btn-primary">Modifier</a>
  </div>
</div>

<div class="card w-100 border-left-primary" style="margin: 10px">
  <div class="card-body">
    <h5 class="card-title">Localisation des agences</h5>
    <a href="modify_plugin.php?id=5" class="btn btn-primary">Modifier</a>
  </div>
</div>

<div class="card w-100 border-left-primary" style="margin: 10px">
  <div class="card-body">
    <h5 class="card-title">Rapports et Publications</h5>
    <a href="modify_plugin.php?id=6" class="btn btn-primary">Modifier</a>
  </div>
</div>

<div class="card w-100 border-left-primary" style="margin: 10px">
  <div class="card-body">
    <h5 class="card-title">Flash info et Communiqués</h5>
    <a href="modify_plugin.php?id=7" class="btn btn-primary">Modifier</a>
  </div>
</div>

<div class="card w-100 border-left-primary" style="margin: 10px">
  <div class="card-body">
    <h5 class="card-title">FAQ</h5>
    <a href="modify_plugin.php?id=9" class="btn btn-primary">Modifier</a>
  </div>
</div>


</div>




<?php
include('includes/scripts.php');
include('includes/footer.php');
?>

<script>
  $('.delete').click(function(e){
    console.log( $(this).data('id'))
    $('#id-article').val($(this).data('id'))  
  })

  function submit_form(e) {
    $('#form-to-submit').submit()
  }

</script>

