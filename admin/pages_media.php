<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
?>

<div class="modal fade" id="addfile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter une image</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="media_actions.php" method="POST" enctype="multipart/form-data">

        <div class="modal-body">
            <div class="form-group">
                <label>Page</label>
                    <select name="page" class="form-control">
                    <?php 
                      $query = "SELECT * from pages";
                      $query_run = mysqli_query($connection, $query);
                      if($query_run){
                        while($row = mysqli_fetch_row($query_run)){
                    ?>
                        <option value="<?php echo $row[0]?>"><?php echo $row[1]?></option>
                      <?php }
                      } ?>  
                    </select>
            </div>
            <div class="form-group">
                <input id="default-btn" type="file" name="page_photo">
            </div>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            <button type="submit" name="addbtn_page" class="btn btn-primary">Ajouter</button>
        </div>
      </form>
    </div>
  </div>
</div>


<div class="btnadd-action" style="margin-bottom: 20px">
    <label><h1 class="h3 mb-0 text-gray-800">Images des pages</h1></label>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addfile" style="margin-left: 20px">
       Ajouter une image
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
      <th scope="col">image</th>
      <th scope="col">Page</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      <?php $query = "SELECT * FROM pages";
            $query_run= mysqli_query($connection, $query);
            $i=1;
            if(mysqli_num_rows($query_run))
            {
                while($page= mysqli_fetch_row($query_run)){
                   if($page[10]){
                        echo" <tr>";
                        echo "<th scope='row'>".$i++."</th>";
                        echo "<td><img id='miniature' src='../images/".$page[10]."' alt='image'></td>";
                        echo "<td>".$page[1]."</td>";
                        echo "<td><button class='btn btn-danger delete' data-toggle='modal' data-id='". $page[0] ."' data-target='#deleteimage'>supprimer</button>
                        <button class='btn btn-success update' data-toggle='modal' data-id='". $page[10] ."' data-target='#editfile'>Modifier</button></td>
                        </tr>";
                  }
                }
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
      cette image appartient ?? la page ! Voulez vous vraiment la supprim???
      <form id="form-to-submit" action="media_actions.php" method="post">
            <input id="id-page" name="page-id" value="" hidden>
      </form>
     </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        <button type="submit" form="form-to-submit" name ="deleteimg_page"class="btn btn-primary" onclick="submit_form()">Confirmer</button>
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
      <form id="form-update" action="media_actions.php" method="POST">
        <div class="modal-body">
        <input id="id-of-file" name="file-id" type="hidden" value="">
            <div class="form-group">
                <label>Page</label>
                    <select name="page" class="form-control" id="page">
                    <?php 
                      $query = "SELECT * from pages";
                      $query_run = mysqli_query($connection, $query);
                      if($query_run){
                        while($row = mysqli_fetch_row($query_run)){
                    ?>
                        <option value="<?php echo $row[0]?>"><?php echo $row[1]?></option>
                      <?php }
                      } ?>  
                    </select>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            <button type="submit" form="form-update" name="editphoto" class="btn btn-primary" >Enregistrer</button>
        </div>
      </form>
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
    $('#id-page').val($(this).data('id'));
  })

  $('.update').click(function(e){
    $('#id-of-file').val($(this).data('id'))
    $tr=$(this).closest('tr');

    var data=$tr.children("td").map(function(){
      return $(this).text();
    }).get();
    console.log(data);

    $('#page').val(data[3]);
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

<script>
  $(document).ready(function () {
    $('#myTable').DataTable({
        "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
        }
    });
});
</script>

