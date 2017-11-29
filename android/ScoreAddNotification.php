<?php
	require_once "../model/ScoresAddMod.php";
	require_once "../model/ScoresAddObj.php";
	require_once "../model/ConnectToSQL.php";

	//REQUIRE_ONCE HEADER
	header("Content-type: application/json; charset=UTF-8");

	//CREATE ImageModel
	$scoresAddMod = new ScoresAddMod();
	$response = array();
	
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		if(isset($_POST["idAccount"])){
			$idAccount = $_POST["idAccount"];
			$response = $scoresAddMod->getScoresAddNoti($idAccount);
		}
	}
	echo json_encode($response);
?>