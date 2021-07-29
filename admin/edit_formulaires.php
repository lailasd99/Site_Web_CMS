
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
    <label><h1 class="h3 mb-0 text-gray-800">Formulaires</h1></label>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addform" style="margin-left: 20px">
       Ajouter un fichier 
    </button>
    </div>

    <table class="table table-hover">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Numero de Formulaire</th>
        <th scope="col">Désignation</th>
        <th scope="col">Archivé</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
        <?php 
            $i = 1;
            $query = "SELECT * from files where Plugin=4";
            $query_run = mysqli_query($connection, $query);
            if($query_run){
                while($row = mysqli_fetch_row($query_run)){
                    if($row[3] == 0){
                        $draft = "non";
                    }else{
                        $draft = "oui";
                    }
                    echo "<tr>
                            <th scope='row'>".$i."</th>
                            <td>".$row[7]."</td>
                            <td>".$row[4]."</td>
                            <td>".$draft."</td>
                            <td style='display:none;'>".$row[3]."</td>
                            <td><button class='btn btn-danger delete' data-toggle='modal' data-id='". $row[0] ."' data-target='#deleteplugin'>supprimer</button>
                            <button class='btn btn-success update_form' data-toggle='modal' name='modify_form' data-target='#editform' data-id='". $row[0] ."'>Modifier</button></td>
                        </tr>";
                    $i++;
                }
            }
        ?>
    
    </tbody>
    </table>
</div>



<div class="modal fade" id="addform" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter une formulaire</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="plugin_actions.php" method="POST" enctype="multipart/form-data">

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
                <label for="form">Numero de formulaire</label> 
                <input class="form-control" type="text" id="num" name="num" />
            </div>
            <div class="form-group">
                <input id="fichier" name="fichier" type="file">
            </div>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            <button type="submit" name="add_form" class="btn btn-primary">Ajouter</button>
        </div>
      </form>
    </div>
  </div>
</div>


<div class="modal fade" id="editform" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter un évènement</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="plugin_actions.php" method="POST">

        <div class="modal-body">

        <div class="form-group">
                <label>Désignation</label>
                <input type="text" id="title" name="title" class="form-control" placeholder="Entrez un titre">
            </div>
            <div class="form-group">
                <label>Archivé</label>
                    <select name="archive" class="form-control" id="archive">
                        <option value="1">oui</option>
                         <option value ="0">non</option>
                    </select>
            </div>    
            <div class="form-group">
                <label for="form">Numero de formulaire</label> 
                <input class="form-control" type="text" id="numero" name="num">
            </div>
            <input id="id-of-form" name="form-id" type="hidden" value="">
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            <button type="submit" name="edit_form" class="btn btn-primary">Modifier</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
     $('.update_form').click(function(e){
    $('#id-of-form').val($(this).data('id'))
    $tr=$(this).closest('tr');

    var data=$tr.children("td").map(function(){
      return $(this).text();
    }).get();
    console.log(data);

    $('#title').val(data[1]);
    $('#archive').val(data[3]);
    $('#numero').val(data[0]);
   
  })
</script>