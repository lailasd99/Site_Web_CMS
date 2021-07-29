
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
    <label><h1 class="h3 mb-0 text-gray-800">Les agences</h1></label>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addagence" style="margin-left: 20px">
       Ajouter une agence 
    </button>
</div>

    <table class="table table-hover">
    <thead>
    <tr>
        <th>#</th>
        <th scope="col">Agence</th>
        <th scope="col">Adresse</th>
        <th scope="col">Téléphone</th>
        <th scope="col">Horaires d'ouverture</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
        <?php 
            $query = "SELECT * from agences";
            $query_run = mysqli_query($connection, $query);
            if($query_run){
                $i = 1;
                while($row = mysqli_fetch_row($query_run)){
                    echo "<tr>
                            <th scope='row'>".$i."</th>
                            <td>".$row[1]."</td>
                            <td><a href='".$row[3]."'>".$row[2]."</a></td>
                            <td>".$row[4]."</td>
                            <td>".$row[5]."</td>
                            <td style='display:none;'>".$row[3]."</td>
                            <td><button class='btn btn-danger delete_agence' data-toggle='modal' data-id='". $row[0] ."' data-target='#delete_agence'>supprimer</button>
                            <button class='btn btn-success update_agence' data-toggle='modal' name='modify_agence' data-target='#editagence' data-id='". $row[0] ."'>Modifier</button></td>
                        </tr>";
                        $i++;
                }
            }
        ?>
    
    </tbody>
    </table>
</div>


<div class="modal fade" id="addagence" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter une agence</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="plugin_actions.php" method="POST" enctype="multipart/form-data">

        <div class="modal-body">

            <div class="form-group">
                <label>Nom</label>
                <input type="text" name="title" class="form-control" placeholder="Entrez un nom d'agence">
            </div>
            <div class="form-group">
                <label>Adresse</label>
                <input type="text" name="adresse" class="form-control" placeholder="Entrez une adresse">
            </div>
            <div class="form-group">
                <label>Lien de localisation google</label>
                <input type="text" name="link" class="form-control" placeholder="Entrez le lien google maps">
            </div>
            <div class="form-group">
                <label>Numero de téléphone</label>
                <input type="text" name="num" class="form-control" placeholder="Entrez un numero de téléphone">
            </div>
            <div class="form-group">
                <label>Horaire de travail</label>
                <textarea name="info" class="mini_textarea">

                </textarea>
             </div>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            <button type="submit" name="add_agence" class="btn btn-primary">Ajouter</button>
        </div>
      </form>
    </div>
  </div>
</div>


<div class="modal modal-danger fade" id="delete_agence" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Supprimer l'agence</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="alert alert-danger" role="alert">
      Voulez vous vraiment supprimer cette agence?
      <form id="form-to-submit" action="plugin_actions.php" method="post">
            <input id="id-agence" name="agence-id" type="hidden" value=""> 
            
      </form>
     </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        <button type="submit" form="form-to-submit" name ="deleteagencebtn"class="btn btn-primary" onclick="submit_form_agence()">Confirmer</button>
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="editagence" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modifier l'agence</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="plugin_actions.php" method="POST">

        <div class="modal-body">
            <div class="form-group">
                <label>Nom</label>
                <input type="text" id="title" name="title" class="form-control" placeholder="Entrez un nom d'agence">
            </div>
            <div class="form-group">
                <label>Adresse</label>
                <input type="text" id="adress" name="adresse" class="form-control" placeholder="Entrez une adresse">
            </div>
            <div class="form-group">
                <label>Lien de localisation google</label>
                <input type="text" id="link" name="link" class="form-control" placeholder="Entrez le lien google maps">
            </div>
            <div class="form-group">
                <label>Numero de téléphone</label>
                <input type="text" id="tel" name="num" class="form-control" placeholder="Entrez un numero de téléphone">
            </div>
            <div class="form-group">
                <label>Horaire de travail</label>
                <textarea id="horaire" name="info" class="mini_textarea">

                </textarea>
             </div>
            <input id="id-of-agence" name="agence-id" type="hidden" value="">
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            <button type="submit" name="edit_agence" class="btn btn-primary">Modifier</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
     $('.update_agence').click(function(e){
    $('#id-of-agence').val($(this).data('id'))
    $tr=$(this).closest('tr');

    var data=$tr.children("td").map(function(){
      return $(this).text();
    }).get();
    console.log(data);

    $('#title').val(data[0]);
    $('#adress').val(data[1]);
    $('#link').val(data[4]);
    $('#tel').val(data[2]);
    tinymce.activeEditor.setContent(data[3]);
   
  })
</script>


<script>
  $('.delete_agence').click(function(e){
    console.log( $(this).data('id'))
    $('#id-agence').val($(this).data('id'))  
  })

  function submit_form_agence(e) {
    $('#form-to-submit').submit()
  }

</script>
