<?php
include('security.php');

    $ip=$_SERVER['REMOTE_ADDR'];
    $query = "INSERT INTO visitors (ip) values ('$ip')";
    mysqli_query($connection, $query);

    $query_sessions = "SELECT * FROM visitors";
    $count_sessions = mysqli_num_rows(mysqli_query($connection, $query_sessions));

?>