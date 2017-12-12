<?php
	require_once "../model/AccountMod.php";
	require_once "../model/AccountObj.php";
	require_once "../model/ConnectToSQL.php";

	//REQUIRE_ONCE HEADER
	header("Content-type: application/json; charset=UTF-8");

	//CREATE Account Object and Account Model
	$accountObj = new AccountObj();
	$accountMod = new AccountMod();
	
	// //CREATE POST
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		if(isset($_POST['idAccount'])){
			$idAccount = $_POST['idAccount'];
			//GET INFORMATION ACCOUNT
			$response = $accountMod->findInformationAccountByID($idAccount); 
			echo json_encode($response); 
		}
	}
?>