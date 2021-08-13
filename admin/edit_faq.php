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

<div class="btnadd-action" style="margin-bottom: 20px">
    <label><h1 class="h3 mb-0 text-gray-800">FAQ</h1></label>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addacte" style="margin-left: 20px">
       Ajouter une section 
    </button>
</div>


<?php
    $query= "SELECT * from faq";
    $run = mysqli_query($connection, $query)

?>
<section class="collapse-area">
  <div class="container">
    <div class="row1">
      <div class="collapse-tab col-xs-12">
        <div class="panel-group" id="accordion">
            <?php
            $i = 0;
             while($row = mysqli_fetch_row($run)){
                 $i++;
            ?>
          <div class="panel panel-default" id="panel<?=$i?>">
            <!-- Start: Tab-1 -->
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#<?=$i;?>" class="collapsed">
                  <?php echo $row[1]; ?>
                  <input id="title_acte" value="<?php echo $row[1]; ?>" hidden>
                  <input id="title_acte_ar" value="<?php echo $row[3]; ?>" hidden>
                  <span class="bar hidden-xs"></span>
                  <button class="update_acte" style="float: right" data-toggle="modal" data-target="#editacte" data-id="<?= $row[0]?>"><i class=" fas fa-edit"></i></button>
                  <button class="delete_acte" style="float: right" data-toggle="modal" data-target="#deleteacte" data-id="<?= $row[0]?>"><i class=" fas fa-trash-alt"></i></button>
                </a>
              </h4>
            </div>
            <div id="<?=$i;?>" class="panel-collapse collapse">
              <div class="panel-body">
                <?php echo $row[2]; ?>
                <textarea id="desc_acte" hidden><?= $row[2]; ?></textarea>
                <textarea id="desc_acte_ar" hidden><?= $row[4]; ?></textarea>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>

</div>



<div class="modal fade" id="addacte" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter une section dans les questions et réponses</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="plugin_actions.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label>question</label>
                <input type="text" name="title" class="form-control" placeholder="Entrez une question">
            </div>   
            <div class="form-group">
                <label>réponse</label>
                <textarea class="mini_textarea" name="desc">
                </textarea>
            </div> 
            <hr>
            <div class="form-group">
                <label>question en arabe</label>
                <input type="text" name="title_ar" class="form-control" placeholder="Entrez une question">
            </div>   
            <div class="form-group">
                <label>réponse en arabe</label>
                <textarea class="mini_textarea_ar" name="desc_ar">

                </textarea>
            </div> 
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            <button type="submit" name="add_acte" class="btn btn-primary">Ajouter</button>
        </div>
      </form>
    </div>
  </div>
</div>


<div class="modal fade" id="editacte" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modifier une question et réponse</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="plugin_actions.php" method="POST">

        <div class="modal-body">
        <input id="id-of-acte" name="acte-id">
            <div class="form-group">
                <label>question</label>
                <input id="title" type="text" name="title" class="form-control" placeholder="Entrez une question">
            </div>   
            <div class="form-group">
                <label>réponse</label>
                <textarea id="content" class="mini_textarea" name="desc">

                </textarea>
            </div> 
            <hr>
            <div class="form-group">
                <label>question en arabe</label>
                <input id="title_ar" type="text" name="title_ar" class="form-control" placeholder="Entrez une question">
            </div>   
            <div class="form-group">
                <label>réponse en arabe</label>
                <textarea id="content_ar" class="mini_textarea" name="desc_ar">

                </textarea>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            <button type="submit" name="edit_acte" class="btn btn-primary">Modifier</button>
        </div>
      </form>
    </div>
  </div>
</div>



<div class="modal modal-danger fade" id="deleteacte" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Supprimer la question</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="alert alert-danger" role="alert">
      Voulez vous vraiment supprimer cet section?
      <form id="form-submit" action="plugin_actions.php" method="post">
            <input id="id-acte" name="acte-id" value=""> 
            
      </form>
     </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        <button type="submit" form="form-submit" name ="delete_acte"class="btn btn-primary" onclick="submit_form()">Confirmer</button>
      </div>
    </div>
  </div>
</div>


<script>
     $('.update_acte').click(function(e){
    $('#id-of-acte').val($(this).data('id'));

    document.getElementById("title").value= document.getElementById("title_acte").value;
    var $con = $('textarea#desc_acte').val();
    tinymce.get("content").setContent($con);

    document.getElementById("title_ar").value= document.getElementById("title_acte_ar").value;
    var $con_ar = $('textarea#desc_acte_ar').val();
    tinymce.get("content"_ar).setContent($con_ar);
    


   
  })

  $('.delete_acte').click(function(e){
        console.log( $(this).data('id'))
        $('#id-acte').val($(this).data('id'))  
    })
    function submit_form(e) {
        $('#form-submit').submit()
    }
</script>