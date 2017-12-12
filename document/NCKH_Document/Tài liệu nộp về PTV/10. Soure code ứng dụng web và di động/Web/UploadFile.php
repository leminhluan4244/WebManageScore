<?php
require_once "controller/transcript/evidence.image/img.util.php";
$target_dir = "upload/";
$target_file_name = $target_dir .basename($_FILES["file"]["name"]);
$fileType = pathinfo($target_file_name,PATHINFO_EXTENSION);
$response = array();

// Check if image file is a actual image or fake image
if (isset($_FILES["file"])) 
{
  //Chỉ cho phép 4 loại file được upload jpg, png, jpeg và pdf
  if($fileType  == "pdf") {
    savePdf($_FILES["file"]["name"], $target_file_name);
    $success = true;
    $message = "Upload thành công";
  }elseif ($fileType  == "jpg" or $fileType == "png" or $fileType  == "jpeg") {
    //Kiểm tra dung lượng file nếu lớn hơn 5Mb thì không cho upload
    if ($_FILES["file"]["size"] < 5242880){
      if($fileType == "png"){
        move_uploaded_file( $_FILES['file']['tmp_name'], $target_file_name);
        $success = true;
        $message = "Upload thành công!";
      }else{
        $fileClient = resize_image($_FILES["file"]["tmp_name"], "jpg");
        saveImage($fileClient, $target_file_name);
        $success = true;
        $message = "Upload thành công!";
      }
    } else{
      $success = false;
      $message = "Upload thất bại! Dung lượng file lớn hơn 5Mb";
    }
  }else{
    $success = false;
    $message = "Kiểu file không được hỗ trợ ".$fileType;
  }
}
$response["success"] = $success;
$response["message"] = $message;
echo json_encode($response);
?>