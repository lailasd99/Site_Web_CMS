<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
include("includes/scripts.php");
?>

<div class="modal fade" id="addavis" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter un avis</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="avis_actions.php" method="POST">
        <div class="modal-body">
            <div class="form-group">
                <label>Titre</label>
                <input type="text" name="title" class="form-control" placeholder="Entrez un titre">
            </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea name="desc" class="tinymce"></textarea>
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

<button type="button" class="btn btn-primary btnadd-action" data-toggle="modal" data-target="#addavis">
       Ajouter un avis 
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
      <th scope="col">titre</th>
      <th scope="col" style="display:none;">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      <?php $query = "SELECT * FROM avis";
            $query_run= mysqli_query($connection, $query);
            $i=1;
            if($query_run){
            if(mysqli_num_rows($query_run))
            {
                while($avis= mysqli_fetch_row($query_run)){
                   echo" <tr>";
                   echo "<th scope='row'>".$i++."</th>";
                   echo "<td>".$avis[1]."</td>";
                   echo "<td style='display:none;''>".$avis[2]."</td>";
                    echo "<td><button class='btn btn-danger delete' data-toggle='modal' data-id='". $avis[0] ."' data-target='#deleteavis'>supprimer</button>
                    <button class='btn btn-success update' data-toggle='modal' name='modify_eavis' data-target='#editavis' data-id='". $avis[0] ."'>Modifier</button></td>";
                    echo "</tr>";
                };
            }
        }
      ?>
    
  </tbody>
</table>

</div>

<div class="modal modal-danger fade" id="deleteavis" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Supprimer un avis</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="alert alert-danger" role="alert">
            Voulez vous vraiment supprimer cet avis?
            <form id="form-to-submit" action="avis_actions.php" method="post">
                <input id="id-avis" name="avis-id" type="hidden" value=""> 
            
            </form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        <button type="submit" form="form-to-submit" name ="deleteavisbtn"class="btn btn-primary" onclick="submit_form()">Confirmer</button>
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="editavis" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter un évènement</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="avis_actions.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label>Titre</label>
                <input id="title" type="text" name="title" class="form-control" placeholder="Entrez un titre">
            </div>
            <input id="id-of-avis" name="avis-id" type="hidden" value="">
            <div class="form-group">
                <label>Description</label>
                <textarea  name="desc" class="tinymce">
                    <?php
                        echo "";
                    ?>
                </textarea>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            <button type="submit" name="editbtn" class="btn btn-primary">Modifier</button>
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




<script>
  $('.delete').click(function(e){
    console.log( $(this).data('id'))
    $('#id-avis').val($(this).data('id')) 
 
  })

  $('.update').click(function(e){
    $('#id-of-avis').val($(this).data('id'))
    $tr=$(this).closest('tr');

    var data=$tr.children("td").map(function(){
      return $(this).text();
    }).get();
    console.log(data);

    $('#title').val(data[0]);
    $('#desc').val(data[1]);
  })

  function submit_form(e) {
    $('#form-to-submit').submit()
  }
</script>


<?php

include('includes/footer.php');
?>