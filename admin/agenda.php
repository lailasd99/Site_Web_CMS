<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
?>

<div class="modal fade" id="addevent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter un évènement</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="event_actions.php" method="POST">
        <div class="modal-body">
            <div class="form-group">
                <label>Titre</label>
                <input type="text" name="title" class="form-control" placeholder="Entrez un titre">
            </div>
            <table>
                    <tr>
                    <div class="form-group">
                    <td><label>Du  </label></td>
                   <td><input type="date" name="date1" class="form-control"></td></tr>
                    </div>
                    <tr>
            <div class="form-group">
                <td><label>à  </label></Td>
                  <td><input type="date" name="date2" class="form-control"></td></tr>
                    </div></table>
               <div class="form-group">
                <label>Description</label>
                <textarea name="desc" class="mini_textarea" placeholder="Entrez une description"></textarea>
            </div>
            <hr>
            <div class="form-group">
                <label>Titre en arabe</label>
                <input dir="rtl" type="text" name="title_ar" class="form-control" placeholder="Entrez un titre">
            </div>
            <div class="form-group">
                <label>Description en arabe</label>
                <textarea name="desc_ar" class="mini_textarea_ar" placeholder="Entrez une description"></textarea>
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
    <label><h1 class="h3 mb-0 text-gray-800">Agenda</h1></label>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addevent" style="margin-left: 20px">
       Ajouter un évènement 
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

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">titre</th>
      <th scope="col">Du</th>
      <th scope="col">à</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      <?php $query = "SELECT * FROM agenda";
            $query_run= mysqli_query($connection, $query);
            $i=1;
            if($query_run){
                while($event= mysqli_fetch_row($query_run)){
                   echo" <tr>";
                   echo "<th scope='row'>".$i++."</th>";
                   echo "<td>".$event[1]."</td>";
                    echo "<td>".$event[3]."</td>";
                    echo "<td>".$event[4]."</td>";
                    echo "<td style='display:none;'>".$event[2]."</td>";
                    echo "<td style='display:none;'>".$event[5]."</td>";
                    echo "<td style='display:none;'>".$event[6]."</td>";
                    echo "<td><button class='btn btn-danger delete' data-toggle='modal' data-id='". $event[0] ."' data-target='#deleteevent'>supprimer</button>
                    <button class='btn btn-success update' data-toggle='modal' name='modify_event' data-target='#editevent' data-id='". $event[0] ."'>Modifier</button></td>";
                    echo "</tr>";
                }
            }
      ?>
    
  </tbody>
</table>

</div>

<div class="modal modal-danger fade" id="deleteevent" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Supprimer un évènement</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="alert alert-danger" role="alert">
      Voulez vous vraiment supprimer cet évènement?
      <form id="form-to-submit" action="event_actions.php" method="post">
            <input id="id-event" name="event-id" type="hidden" value=""> 
            
      </form>
     </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        <button type="submit" form="form-to-submit" name ="deleteeventbtn"class="btn btn-primary" onclick="submit_form()">Confirmer</button>
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="editevent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter un évènement</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="event_actions.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label>Titre</label>
                <input id="title" type="text" name="title" class="form-control" placeholder="Entrez un titre">
            </div>
            <input id="id-of-event" name="event-id" type="hidden" value="">
            <table>
                    <tr>
                    <div class="form-group">
                    <td><label>Du  </label></td>
                   <td><input class="form-control" id="date1" type="date" name="date1"></td></tr>
                    </div>
                    <tr>
            <div class="form-group">
                <td><label>à  </label></Td>
                  <td><input class="form-control" id="date2" type="date" name="date2"></td></tr>
                    </div></table>
                    <div class="form-group">
                <label>Description</label>
                <textarea id="desc" name="desc" class="mini_textarea" placeholder="Entrez une description"></textarea>
            </div>
            <hr>
            <div class="form-group">
                <label>Titre en arabe</label>
                <input id='ar_title' dir="rtl" type="text" name="title_ar" class="form-control" placeholder="Entrez un titre">
            </div>
            <div class="form-group">
                <label>Description en arabe</label>
                <textarea id='ar_desc' name="desc_ar" class="mini_textarea_ar" placeholder="Entrez une description"></textarea>
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


<?php
include('includes/scripts.php');
include('includes/footer.php');
?>

<script>
  $('.delete').click(function(e){
    console.log( $(this).data('id'))
    $('#id-event').val($(this).data('id')) 
 
  })

  $('.update').click(function(e){
    $('#id-of-event').val($(this).data('id'))
    $tr=$(this).closest('tr');

    var data=$tr.children("td").map(function(){
      return $(this).text();
    }).get();
    

    $('#title').val(data[0]);
    $('#date1').val(data[1]);
    $('#date2').val(data[2]);
    tinymce.get("desc").setContent(data[3]);
    $('#ar_title').val(data[4]);
    tinymce.get("ar_desc").setContent(data[5]);
  
    //tinymce.activeEditor.setContent(data[3]);
  })

  function submit_form(e) {
    $('#form-to-submit').submit()
  }
</script>

