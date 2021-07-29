<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
?>
<label style="margin-bottom: 20px" class="btnadd-action">
  <h1 class="h3 mb-0 text-gray-800">Catégories</h1>
</label>
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
                    $num=0;
                    $query1 = "SELECT * FROM category_pages, pages where category_pages.idCat=$cat[0] and category_pages.idPage = Pages.idPage";
                    $query_run1= mysqli_query($connection, $query1);
                    if($query_run1){
                        while($line = mysqli_fetch_row($query_run1)){
                          if($line[4] == NULL){
                            $num++;
                          }
                        }
                        //$num = mysqli_fetch_row($query_run1);
                    }
                   echo" <tr>";
                   echo "<th scope='row'>".$i++."</th>";
                   echo "<td>".$cat[1]."</td>";
                   echo "<td>".$num."</td>";
                    echo "<td><form action='category_pages.php' method='get'>
                    <input type='hidden' name='cat_id' value='".$cat[0]."'/>
                    <button type='submit' class='btn btn-success updatebtn' name='modify_cat'>Modifier</button></form></td>";
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
<!--
<script>


  function submit_form(e) {
    $('#form-to-submit').submit()
  }
</script>
-->
