<h3><?=_('Localisation de nos agences'); ?></h3>
<table class="table table-striped table-bordered">
<thead>
  <tr>
    <th scope="col">Agence</th>
    <th scope="col">Adresse</th>
    <th scope="col">Téléphone</th>
    <th scope="col">Horaires d'ouverture</th>
  </tr>
</thead>
<tbody>
    <?php 
        $query = "SELECT * from agences";
        $query_run = mysqli_query($connection, $query);
        if($query_run){
            while($row = mysqli_fetch_row($query_run)){
                echo "<tr>
                        <th scope='row'>".$row[1]."</th>
                        <td><a href='".$row[3]."'>".$row[2]."</a></td>
                        <td>".$row[4]."</td>
                        <td>".$row[5]."</td>
                      </tr>";
            }
        }
    ?>
  
</tbody>
</table>
