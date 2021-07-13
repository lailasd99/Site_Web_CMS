<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
?>
<div class="card-body">
    <?php
        if(isset($_GET['success']) && $_GET['success']!=''){
            echo '<div class="alert alert-success" role="alert">categorie a été modifier</div>';
        }

        if(isset($_SESSION['status']) && $_SESSION['status']!=''){
            echo '<div class="alert alert-danger" role="alert"></div>';
        }
    ?>

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">nom</th>
      <th scope="col">nombre des pages</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      <?php $query = "SELECT * FROM category";
            $query_run= mysqli_query($connection, $query);
            $i=1;
            if(mysqli_num_rows($query_run))
            {
                while($cat= mysqli_fetch_row($query_run)){
                    $query1 = "SELECT count(*) FROM pages where section=$cat[0]";
                    $query_run1= mysqli_query($connection, $query1);
                    if($query_run1){
                        $num = mysqli_fetch_row($query_run1);
                    }
                   echo" <tr>";
                   echo "<th scope='row'>".$i++."</th>";
                   echo "<td>".$cat[1]."</td>";
                   echo "<td>".$num[0]."</td>";
                    echo "<td><form action='category_pages.php' method='get' id='form-of-buttons'>
                    <input type='hidden' name='cat_id' value='".$cat[0]."'/>
                    <button class='btn btn-success updatebtn' data-toggle='modal' name='modify_cat'>Modifier</button></form></td>";
                    echo "</tr>";
                    };
            }
      ?>
    
  </tbody>
</table>

</div>


<?php
include('includes/scripts.php');
include('includes/footer.php');
?>

<script>
 /* $('.delete').click(function(e){
    console.log( $(this).data('id'))
    $('#id-article').val($(this).data('id'))  
  })*/

  function submit_form(e) {
    $('#form-to-submit').submit()
  }
</script>

