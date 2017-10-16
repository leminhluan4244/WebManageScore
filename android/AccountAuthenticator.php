<?php
	require_once "../model/AccountMod.php";
	require_once "../model/AccountObj.php";
	require_once "../model/ConnectToSQL.php";

	//REQUIRE_ONCE HEADER
	header("Content-type: application/json; charset=UTF-8");

	//CREATE Account Object and Account Model
	$accountObj = new AccountObj();
	$accountMod = new AccountMod();
	$response = array();
	//CREATE POST
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$idAccount = $_POST['idAccount'];
    	$password = $_POST['password'];
    	//Account Authentication
    	if($accountMod->checkLogin($idAccount,$password)){
    		$response["message"] = 1;
		}else{
			$response["message"] = 0;
		}
	}
	//ECHOING JSION response
	echo json_encode($response);
?>