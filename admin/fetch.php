<?php
include("security.php");
    if(isset($_POST['view'])){
        $query = "SELECT * from articles order by createdAt LIMIT 4";
        $result = mysqli_query($connection, $query);
        $output = "";

        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_row($result)){
                $output .= '<a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="mr-3">
                                <div class="icon-circle bg-primary">
                                    <i class="fas fa-file-alt text-white"></i>
                                </div>
                            </div>
                            <div>
                                <div class="small text-gray-500">'.$row[4].'</div>
                                <span class="font-weight-bold">'.$row[1].'</span>
                            </div>
                            </a>';
            }

        }else{
            $output .= '<li><a href="#" class="text-bold text-italic">Aucone notification</a></li>'
        }

        $query_active = "SELECT * from articles where notif_active=0";
        $query_run = mysqli_query($connection, $query_active);
        $count = mysqli_num_rows($query_run);
        $data = array(
            "notification" => $output,
            "unseen_notifications" => $count
        );

        echo json_encode($data);
    }
?>