
<?php 
    include('security.php');
    include('includes/header.php');
    include('includes/navbar.php');
    include('includes/scripts.php');

    //select sessions
    $query_sessions = "SELECT * FROM visitors";
    $count_sessions = mysqli_num_rows(mysqli_query($connection, $query_sessions));

    //select unique visitors
    $query_visitors = "SELECT DISTINCT ip FROM visitors";
    $count_visitors = mysqli_num_rows(mysqli_query($connection, $query_visitors));
    

?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Panel</h1>
                        <!--<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>-->
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                       
                        <div class="col-xl-6 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total des sessions aujourd'hui</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $count_sessions?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-eye fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                     
                        <div class="col-xl-6 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Visiteurs uniques aujourd'hui</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $count_visitors?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    
                    <div class="row">
                    <div class="col-xl-12 col-md-12 mb-12">
                        <?php
                            $query = "SELECT * from stats order by id DESC LIMIT 6";
                            $result = mysqli_query($connection, $query);
                            $chart_data = "";
                            while($row = mysqli_fetch_array($result)){
                                $chart_data .="{ day:'".$row[3]."', session:".$row[1].", visitor:".$row[2]."}, ";
                            }
                            $chart_data = substr($chart_data, 0, -1);
                            
                        ?>

                        <div id="chart">
                        </div>
                        </div>
                    </div>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->


<script>
    Morris.Line({
        element: 'chart',
        data: [<?php echo $chart_data; ?>],
        xkey: 'day',
        ykeys: ['session', 'visitor'],
        labels: ['sessions', 'visiteurs'],
        hideHover: 'auto',
    });

</script>


<?php 
    include('includes/footer.php');
?>  
