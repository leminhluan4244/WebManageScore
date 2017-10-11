<?php
	require_once "../model/AccountMod.php";
	require_once "../model/AccountObj.php";
	require_once "../model/ConnectToSQL.php";
	
	//CREATE Account Object and Account Model
	$accountObj = new AccountObj();
	$accountMod = new AccountMod();

	//CREATE POST
	$idAccount = $_POST['idAccount'];
    $password = $_POST['password'];

    //Account Authentication
    if($accountMod->checkLogin($idAccount,$password)){
	 	echo "true";
	}else{
		echo "false";
	}
?>