
<?php
/*
$fileName = $_FILES['file']['name'];
$fileType = $_POST['filetype'];
if($fileType == 'image'){
  $validExtension = array('png','jpeg','jpg');
}
$uploadDir = "../../../upload/".$fileName;
$fileExtension = pathinfo($uploadDir, PATHINFO_EXTENSION);
$fileExtension = strtolower($fileExtension);
if(in_array($fileExtension, $validExtension)){
   if(move_uploaded_file($_FILES['file']['tmp_name'],$uploadDir)){ 
    echo $fileName;
  }
}*/
?>

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
        
        // Return JSON response with the uploaded file path.
        echo json_encode(array(
            'file_path' => $fileName
        ));
    }
    
?>