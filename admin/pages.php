<?php
  include('security.php');
  include('includes/header.php');
  include('includes/navbar.php');
  include('includes/scripts.php');
?>
    
<form action="add_page.php" method="POST" class="btnadd-action" style="margin-bottom: 20px">
<label><h1 class="h3 mb-0 text-gray-800">Pages</h1></label>
    <button type="submit" name="addbtn" class="btn btn-primary" style="margin-left: 20px">
          Ajouter une page
    </button>
</form>


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
                  if($page[5]==1){
                    $draft="oui";
                  }else{
                    $draft="non";
                  }
                   echo"<tr>";
                   echo "<th scope='row'>".$i++."</th>";
                   echo "<td>".$page[1]."</td>";
                    echo "<td>".$draft."</td>";
                    echo "<td><button class='btn btn-danger delete' data-toggle='modal' data-id='". $page[0] ."' data-target='#deletepage'>supprimer</button>
                    <form action='editpage.php' method='get' id='form-of-buttons'>
                    <input type='hidden' name='page_id' value='".$page[0]."'/>
                    <button class='btn btn-success updatebtn' data-toggle='modal' name='modify_page'>Modifier</button></td>";
                    echo "</form></tr>";
                    };
            }
      ?>
    
  </tbody>
</table>

</div>

<div class="modal modal-danger fade" id="deletepage" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Supprimer une page</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="alert alert-danger" role="alert">
      Voulez vous vraiment supprimer cette page?
      <form id="form-to-submit" action="page_actions.php" method="post">
            <input id="id-page" name="page-id" type="hidden" value=""> 
            
      </form>
     </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        <button type="submit" form="form-to-submit" name ="deletepagebtn"class="btn btn-primary" onclick="submit_form()">Confirmer</button>
      </div>
    </div>
  </div>
</div>

<!--
<script>
  $(document).ready(function(){
    $('.updatebtn').on('click', function(){
      $('#updateuser').modal('show');
    });

  });
</script>-->

<script>
  $(document).ready(function () {
    $('#myTable').DataTable({
        "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
        }
    });
});
</script>


<?php
include('includes/footer.php');
?>


<script>
  $('.delete').click(function(e){
    console.log( $(this).data('id'))
    $('#id-page').val($(this).data('id'))  
  })

  function submit_form(e) {
    $('#form-to-submit').submit()
  }

</script>

