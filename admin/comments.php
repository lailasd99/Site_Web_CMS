<?php
  include('security.php');
  include('includes/header.php');
  include('includes/navbar.php');
  include('includes/scripts.php');
?>
    
<div class="btnadd-action" style="margin-bottom: 20px">
    <label><h1 class="h3 mb-0 text-gray-800">Les commentaires</h1></label>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addcomment" style="margin-left: 20px">
       Ajouter un commentaire
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
      <th scope="col">Nom</th>
      <th scope="col">Email</th>
      <th scope="col">Commentaire</th>
      <th scope="col">Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      <?php $query = "SELECT * FROM comments";
            $query_run= mysqli_query($connection, $query);
            $i=1;
            if(mysqli_num_rows($query_run))
            {
                while($com= mysqli_fetch_row($query_run)){
                   echo"<tr>";
                   echo "<th scope='row'>".$i++."</th>";
                   echo "<td>".$com[1]."</td>";
                    echo "<td>".$com[2]."</td>";
                    echo "<td>".$com[3]."</td>";
                    echo "<td>".$com[4]."</td>";
                    echo "<td><button class='btn btn-danger delete' data-toggle='modal' data-id='". $com[0] ."' data-target='#deletecom'>supprimer</button></tr>";
                    };
            }
      ?>
    
  </tbody>
</table>

</div>

<div class="modal modal-danger fade" id="deletecom" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Supprimer un commentaire</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="alert alert-danger" role="alert">
      Voulez vous vraiment supprimer cet commentaire?
      <form id="form-to-submit" action="comment_actions.php" method="post">
            <input id="id-com" name="com-id" type="hidden" value=""> 
            
      </form>
     </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        <button type="submit" form="form-to-submit" name ="deletecombtn"class="btn btn-primary" onclick="submit_form()">Confirmer</button>
      </div>
    </div>
  </div>
</div>




<div class="modal fade" id="addcomment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter un commentaire</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="comment_actions.php" method="POST">
        <div class="modal-body">
            <div class="form-group">
                <label>Nom</label>
                <input type="text" name="nom" class="form-control" placeholder="Entrez votre Nom" value="<?=$_SESSION["user_name"]?>">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control" placeholder="Entrez votre Email" value="<?=$_SESSION["user_email"]?>">
            </div>
            <div class="form-group">
                <label>Commentaire</label>
                <textarea name="comment" class="mini_textarea" placeholder="Entrez un commentaire"></textarea>
            </div>
            <div class="form-group">
                <label>Article</label>
                    <select name="art" class="form-control">
                    <?php 
                      $query = "SELECT * from articles where accept=1";
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
            <button type="submit" name="addbtn" class="btn btn-primary">Ajouter</button>
        </div>
      </form>
    </div>
  </div>
</div>







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
    $('#id-com').val($(this).data('id'))  
  })

  function submit_form(e) {
    $('#form-to-submit').submit()
  }

</script>

