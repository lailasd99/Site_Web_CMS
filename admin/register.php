<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
?>

<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter un admin</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="user_actions.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label> Nom d'utilisateur </label>
                <input type="text" name="username" class="form-control" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control checking_email" placeholder="Email">
                <small class="error_email" style="color: red;"></small>
            </div>
            <div class="form-group">
                <label>Type</label>
                        <select name="role" class="form-control">
                            <option value=1>admin général</option>
                            <option value =2>admin secondaire</option>
                            <option value =3>rédacteur</option>
                        </select>
            </div>
            <div class="form-group">
                <label>Mot de passe</label>
                <input type="password" name="password" class="form-control" placeholder="mot de passe">
            </div>
            <div class="form-group">
                <label>Confirmer votre mot de passe</label>
                <input type="password" name="confirmpassword" class="form-control" placeholder="Confirmer le mot de passe">
            </div>


        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>


<div class="btnadd-action" style="margin-bottom: 20px">
<label><h1 class="h3 mb-0 text-gray-800">Utilisateurs</h1></label>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile" style="margin-left: 20px">
       Ajouter un admin 
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
      <th scope="col">Rôle</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      <?php $query = "SELECT * FROM users";
            $query_run= mysqli_query($connection, $query);
            $i=1;
            if(mysqli_num_rows($query_run))
            {
                while($user= mysqli_fetch_row($query_run)){
                  $query = "select * from roles_of_users where idUser=".$user[0];
                  $run = mysqli_query($connection, $query);
                  if(mysqli_num_rows($run)){
                  $row = mysqli_fetch_row($run);
                  
                  if($row[1] == 1){
                    $roleuser = "admin général";
                  }elseif($row[1] == 2){
                    $roleuser = "admin secondaire";
                  }elseif($row[1] == 3){
                    $roleuser = "rédacteur";
                  }elseif($row[1] == ''){
                    $roleuser = "not defined";
                  }
                }
                  //var_dump($user);
                   echo" <tr>";
                   echo "<th scope='row' id='id'>".$i++."</th>";
                   echo "<td id='name'>".$user[1]."</td>";
                    echo "<td id='email'>".$user[2]."</td>";
                    echo "<td id='role'>".$roleuser."</td>";
                    echo "<td style='display:none;'>".$row[1]."</td>";
                    echo "<td><button  class='btn btn-danger delete' data-toggle='modal' data-id='". $user[0] ."' data-target='#deleteuser'>supprimer</button>
                    <button class='btn btn-success update' data-toggle='modal' data-id='". $user[0] ."' data-target='#edituser'>Modifier</button></td>";
                    echo "</tr>";
                    };
            }
      ?>
    
  </tbody>
</table>

</div>

<div class="modal modal-danger fade" id="deleteuser" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Supprimer un utilisateur</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="alert alert-danger" role="alert">
      Voulez vous vraiment supprimer cet utilisateur?
      <form id="form-to-submit" action="user_actions.php" method="POST">
            <input id="id-user" name="user-id" type="hidden" value=""> 
            
      </form>
     </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        <button type="submit" form="form-to-submit" name ="deleteuserbtn" class="btn btn-primary" onclick="submit_form()">Confirmer</button>
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="edituser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Admin Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="form-update" action="user_actions.php" method="POST">
        <div class="modal-body">
            <div class="form-group">
                <label> Nom d'utilisateur </label>
                <input type="text" name="username" id="id_name" class="form-control" placeholder="Enter Username">
            </div>
            <input id="id-of-user" name="user-id"  type="hidden" value="">
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" id="id_email" class="form-control checking_email" placeholder="Email">
                <small class="error_email" style="color: red;"></small>
            </div>
            <div class="form-group">
                <label>Type</label>
                <select name="rolemodif" id="id_role" class="form-control" value="">
                    <option value=1>admin général</option>
                    <option value =2>admin secondaire</option>
                    <option value =3>rédacteur</option>
                </select>
            </div>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" form="form-update" name="edituserbtn" class="btn btn-primary" >Save</button>
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
    $('#id-user').val($(this).data('id'))  
  })

  $('.update').click(function(e){
    $('#id-of-user').val($(this).data('id'))
    $tr=$(this).closest('tr');

    var data=$tr.children("td").map(function(){
      return $(this).text();
    }).get();
    console.log(data);

    $('#id_name').val(data[0]);
    $('#id_email').val(data[1]);
    $('#id_role').val(data[3]);

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



