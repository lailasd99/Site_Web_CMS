
<h3><?= _('Rapports et Publications'); ?></h3>
<table class="table table-striped table-bordered">
<thead>
  <tr>
    <th scope="col">#</th>
    <th scope="col">Désignation</th>
    <th scope="col">Voir</th>
    <th scope="col">Télécharger</th>
  </tr>
</thead>
<tbody>
    <?php 
        $i = 1;
        $query = "SELECT * from files where Plugin=6 and draft=0";
        $query_run = mysqli_query($connection, $query);
        if($query_run){
            while($row = mysqli_fetch_row($query_run)){
                echo "<tr>
                        <th scope='row'>".$i."</th>
                        <td>".$row[4]."</td>
                        <td><a href='files/".$row[1]."'><i class='fas fa-fw fa-eye'></i></a></td>
                        <td><a href='files/".$row[1]."' download='".$row[4]."'><i id='pdf-icon' class='fas fa-fw fa-file-pdf'></i></a></td>
                      </tr>";
                $i++;
            }
        }
    ?>
  
</tbody>
</table>
