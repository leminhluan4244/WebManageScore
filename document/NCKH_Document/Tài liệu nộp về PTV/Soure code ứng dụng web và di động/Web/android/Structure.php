<?php
	require_once "../model/StructureMod.php";
	require_once "../model/StructureObj.php";
	require_once "../model/ConnectToSQL.php";

	//REQUIRE_ONCE HEADER
	header("Content-type: application/json; charset=UTF-8");

	//CREATE Structure Model
	$structureMod = new StructureMod();
	
	// //CREATE GET
	if($_SERVER['REQUEST_METHOD'] == 'GET'){
		if(isset($_GET["Structure"])){
			//GET PARENT STRUCTURE
			$response = $structureMod->getEntireStructureTable2(); 
			echo json_encode($response); 
		}
	}
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$itemParent = $_POST["itemParent"];
			$itemChild = $_POST["itemChild"];
			//GET LIST CHILD FROM PARENT
			$response =  $structureMod->getAllDirectChildOfStructure2($itemParent, $itemChild);
			echo json_encode($response); 
	}
?>
