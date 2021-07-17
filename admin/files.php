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
                <label>Désignation</label>
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
                    <label>Date de Communiqué</label>
                   <input type="date" name="datecom" class="form-control">
            </div>    
            <div class="form-group">
                <input id="fichier" name="fichier" type="file">
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


<div class="btnadd-action" style="margin-bottom: 20px">
    <label><h1 class="h3 mb-0 text-gray-800">Fichiers</h1></label>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addfile" style="margin-left: 20px">
       Ajouter un fichier 
    </button>
</div>

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

<table class="table table-hover" id="myTable">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">titre</th>
      <th scope="col">Archivé</th>
      <th scope="col">Date de communiqué</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      <?php $query = "SELECT * FROM files";
            $query_run= mysqli_query($connection, $query);
            $i=1;
            if(mysqli_num_rows($query_run))
            {
                while($file= mysqli_fetch_row($query_run)){
                  if($file[3]==1){
                    $draft="oui";
                  }else{
                    $draft="non";
                  }
                   echo" <tr>";
                   echo "<th scope='row'>".$i++."</th>";
                   echo "<td>".$file[4]."</td>";
                    echo "<td>".$draft."</td>";
                    echo "<td>".$file[5]."</td>";
                    echo "<td><button class='btn btn-danger delete' data-toggle='modal' data-id='". $file[0] ."' data-target='#deletefile'>supprimer</button>
                    <button class='btn btn-success update' data-toggle='modal' data-id='". $file[0] ."' data-target='#editfile'>Modifier</button></td>
                    </tr>";
                    };
            }
      ?>
    
  </tbody>
</table>

</div>

<div class="modal modal-danger fade" id="deletefile" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Supprimer un fichier</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="alert alert-danger" role="alert">
      Voulez vous vraiment supprimer ce fichier?
      <form id="form-to-submit" action="file_actions.php" method="post">
            <input id="id-file" name="file-id" type="hidden" value=""> 
            
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



<div class="modal fade" id="editfile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modifier le fichier</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="form-update" action="file_actions.php" method="POST">
        <div class="modal-body">
        <input id="id-of-file" name="file-id"  type="hidden" value="">
            <div class="form-group">
                <label>Désignation</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Désignation du fichier">
            </div>
            <div class="form-group">
                <label>Archivé</label>
                    <select name="archive" id="archive" class="form-control" value="">
                        <option value="1">oui</option>
                         <option value ="0">non</option>
                    </select>
            </div>
            <div class="form-group">
                <label>Date de Communiqué</label>
                <input type="date" name="date" id="date" class="form-control">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            <button type="submit" form="form-update" name="editfile" class="btn btn-primary" >Enregistrer</button>
        </div>
      </form>
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
    $('#id-file').val($(this).data('id'))  
  })

  $('.update').click(function(e){
    $('#id-of-file').val($(this).data('id'))
    $tr=$(this).closest('tr');

    var data=$tr.children("td").map(function(){
      return $(this).text();
    }).get();
    console.log(data);

    $('#title').val(data[0]);
    $('#archive').val(data[1]);
    $('#date').val(data[2]);
  })

  function submit_form(e) {
    $('#form-to-submit').submit()
  }
  
</script>


<script>
  $(document).ready(function () {
    $('#myTable').DataTable({
        "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
        }
    });
});
</script>

