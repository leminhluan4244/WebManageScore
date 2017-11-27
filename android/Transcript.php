<?php
	require_once "../model/TranscriptMod.php";
	require_once "../model/TranscriptObj.php";
	require_once "../model/ConnectToSQL.php";

	//REQUIRE_ONCE HEADER
	header("Content-type: application/json; charset=UTF-8");

	//CREATE Transcript Model
	$transcriptMod = new TranscriptMod();
	
	// //CREATE POST
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		if(isset($_POST["idAccount"]) && isset($_POST["item"])){
			$id = $_POST["idAccount"];
			$item = $_POST["item"];
			$response = $transcriptMod->getTotalScoreOfItem($id,$item);
			echo json_encode($response); 
		}elseif (isset($_POST["idAccount"])) {
			$id = $_POST["idAccount"];
			$response = $transcriptMod->getEntireTranscript2($id);
			echo json_encode($response); 
		}
	}
?>