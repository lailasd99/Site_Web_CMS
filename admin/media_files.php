<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
?>

<div class="modal fade" id="addfile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter un fichier téléchargeable</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="file_actions.php" method="POST" enctype="multipart/form-data">

        <div class="modal-body">

            <div class="form-group">
                <label>Titre</label>
                <input type="text" name="title" class="form-control" placeholder="Entrez un titre">
            </div>
            <div class="form-group">
                <label>Archivé</label>
                    <select name="archive" class="form-control">
                        <option value="1">oui</option>
                         <option value ="0">non</option>
                    </select>
            </div>
            <div class="form-group">
                <input id="default-btn" type="file" name="fl">
            </div>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            <button type="submit" name="addbtn" class="btn btn-primary">Ajouter</button>
        </div>
      </form>
    </div>
  </div>
</div>

<button type="button" class="btn btn-primary btnadd-action" data-toggle="modal" data-target="#addfile">
       Ajouter un fichier 
</button>

<div class="card-body">
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

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">image</th>
      <th scope="col">Article</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      <?php $query = "SELECT * FROM articles";
            $query_run= mysqli_query($connection, $query);
            $i=1;
            if(mysqli_num_rows($query_run))
            {
                while($art= mysqli_fetch_row($query_run)){
                    if($art[6] != ""){
                        $image = $art[6];
                    }else{
                        $image = "aucune image";
                    }
                   echo" <tr>";
                   echo "<th scope='row'>".$i++."</th>";
                   echo "<td><img src='images/".$image."' alt='image'></td>";
                    echo "<td>".$art[1]."</td>";
                    echo "<td><button class='btn btn-danger delete' data-toggle='modal' data-name ='".$art[1]."' data-id='". $art[0] ."' data-target='#deleteimage'>supprimer</button></tr>";
                    };
            }
      ?>
    
  </tbody>
</table>

</div>

<div class="modal modal-danger fade" id="deleteimage" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Supprimer un fichier</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="alert alert-danger" role="alert">
      cette image appartient à l'article <h5 id="name_image" value=""></h5>! Voulez vous vraiment la supprimé?
      <form id="form-to-submit" action="image_actions.php" method="post">
            <input id="id-image" name="image-id" type="hidden" value=""> 
            
      </form>
     </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        <button type="submit" form="form-to-submit" name ="deletefilebtn"class="btn btn-primary" onclick="submit_form()">Confirmer</button>
      </div>
    </div>
  </div>
</div>


<script>
  $(document).ready(function(){
    $('.updatebtn').on('click', function(){
      $('#updateuser').modal('show');
    });

  });
</script>


<?php
include('includes/scripts.php');
include('includes/footer.php');
?>

<script>
  $('.delete').click(function(e){
    console.log( $(this).data('id'))
    $('#id-image').val($(this).data('id'));
    $('#name-image').val($(this).data('name'));
  })

  function submit_form(e) {
    $('#form-to-submit').submit()
  }
/*
  function modify_page(e) {
    location.href = "http://localhost/RADEEMA/admin/editpage.php";
  }
*/
</script>

