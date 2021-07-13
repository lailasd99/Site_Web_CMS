<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
?>

<div class="modal fade" id="addarticle" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter une nouvelle article</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="add_article.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label>Titre</label>
                <input type="text" name="title" class="form-control" placeholder="Entrez un titre">
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

<button type="button" class="btn btn-primary btnadd-action" data-toggle="modal" data-target="#addarticle">
       Ajouter une article 
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
      <th scope="col">admis</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      <?php $query = "SELECT * FROM articles";
            $query_run= mysqli_query($connection, $query);
            $i=1;
            if(mysqli_num_rows($query_run))
            {
                while($article= mysqli_fetch_row($query_run)){
                  if($article[3]==1){
                    $admis="oui";
                  }else{
                    $admis="non";
                  }
                   echo" <tr>";
                   echo "<th scope='row'>".$i++."</th>";
                   echo "<td>".$article[1]."</td>";
                   echo "<td>".$admis."</td>";
                    echo "<td><button class='btn btn-danger delete' data-toggle='modal' data-id='". $article[0] ."' data-target='#deletearticle'>supprimer</button>
                    <form action='edit_article.php' method='get' id='form-of-buttons'>
                    <input type='hidden' name='article_id' value='".$article[0]."'/>
                    <button class='btn btn-success updatebtn' data-toggle='modal' name='modify_article'>Modifier</button></td>";
                    echo "</form></tr>";
                    };
            }
      ?>
    
  </tbody>
</table>

</div>

<div class="modal modal-danger fade" id="deletearticle" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Supprimer une article</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="alert alert-danger" role="alert">
      Voulez vous vraiment supprimer cette article?
      <form id="form-to-submit" action="delete_article.php" method="post">
            <input id="id-article" name="article-id" type="hidden" value=""> 
            
      </form>
     </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        <button type="submit" form="form-to-submit" name ="delete-article-btn"class="btn btn-primary" onclick="submit_form()">Confirmer</button>
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
    $('#id-article').val($(this).data('id'))  
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

