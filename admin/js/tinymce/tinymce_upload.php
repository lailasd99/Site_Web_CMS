<?php
    $url = array(
        "http://localhost"
    );

    reset($_FILES);
    $temp = current($_FILES);

    if (is_uploaded_file($temp['tmp_name'])) {
        if (preg_match("/([^\w\s\d\-_~,;:\[\]\(\).])|([\.]{2,})/", $temp['name'])) {
            header("HTTP/1.1 400 Invalid file name,Bad request");
            return;
        }
        
        // Validating File extensions
        if (! in_array(strtolower(pathinfo($temp['name'], PATHINFO_EXTENSION)), array(
            "gif",
            "jpg",
            "png"
        ))) {
            header("HTTP/1.1 400 Not an Image");
            return;
        }
        
        $fileName = "../../../upload/" . $temp['name'];
        move_uploaded_file($temp['tmp_name'], $fileName);
        $file_path = substr($fileName,8);
        // Return JSON response with the uploaded file path.
        echo json_encode(array(
            'file_path' => 'http://localhost/radeema'.$file_path
        ));
    }
    
?>