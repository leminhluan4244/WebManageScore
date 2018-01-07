<?php
	require_once "../model/ImageMod.php";
	require_once "../model/ImageObj.php";
	require_once "../model/ConnectToSQL.php";

	//REQUIRE_ONCE HEADER
	header("Content-type: application/json; charset=UTF-8");

	//CREATE ImageModel
	$imageMod = new ImageMod();
	$response = array();
	
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		if(isset($_POST["Image"]) && isset($_POST["Account_idAccount"]) && isset($_POST["Transcript_idItem"])){
			$imgName = $_POST["Image"];
    		$accountId = $_POST["Account_idAccount"];
    		$transcriptId = $_POST["Transcript_idItem"];

			$imageMod->addImage($accountId, $transcriptId, $imgName);
			$success = true;
      		$message = "Cập nhật CSDL thành công";
		}else{
			$success = false;
      		$message = "Cập nhật CSDL thất bại";
		}
	}
	$response["success"] = $success;
	$response["message"] = $message;
	echo json_encode($response);
?>