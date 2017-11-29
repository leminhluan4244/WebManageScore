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
		}elseif (isset($_POST["itemChild"])) {
			$itemChild = $_POST["itemChild"];
			$response = $transcriptMod->getAllDirectChildOfTranscripte($itemChild);
			echo json_encode($response); 
		}elseif (isset($_POST["idItem"]) 
					&& isset($_POST["accountIdAccount"]) 
					&& isset($_POST["itemName"])
					&& isset($_POST["scores"])
					&& isset($_POST["describe"])
					&& isset($_POST["idParent"])
					&& isset($_POST["scoresDefault"])
					&& isset($_POST["scoresMaxx"])
					&& isset($_POST["scoresStudent"])
					&& isset($_POST["scoresTecher"])) {

			$idItem = $_POST["idItem"];
			$accountIdAccount = $_POST["accountIdAccount"];
			$itemName = $_POST["itemName"];
			$scores = $_POST["scores"];
			$describe = $_POST["describe"];
			$idParent = $_POST["idParent"];
			$scoresDefault = $_POST["scoresDefault"];
			$scoresMaxx = $_POST["scoresMaxx"];
			$scoresStudent = $_POST["scoresStudent"];
			$scoresTecher = $_POST["scoresTecher"];

			$transcriptObj = new TranscriptObj();
			$transcriptObj->setIdItem($idItem);
			$transcriptObj->setAccountIdAccount($accountIdAccount);
			$transcriptObj->setItemName($itemName);
			$transcriptObj->setFinalScores($scores);
			$transcriptObj->setDescribe($describe);
			$transcriptObj->setIdParent($idParent);
			$transcriptObj->setScoresDefault($scoresDefault);
			$transcriptObj->setScoresMax($scoresMaxx);
			$transcriptObj->setScoresStudent($scoresStudent);
			$transcriptObj->setScoresTeacher($scoresTecher);
			$transcriptMod->addTranscript2($transcriptObj);
		}elseif (isset($_POST["UpdateTranscript"])) {
			$idAccount = $_POST["UpdateTranscript"];
    		if($transcriptMod->updateTranscript2($idAccount)){
    			$response["message"] = 1;
			}else{
				$response["message"] = 0;
			}
			echo json_encode($response);
		}
		// }elseif (isset($_POST["scoresTecher"]) && isset($_POST["account"])) {
		// 	$idAccount = $_POST["account"];
		// 	$idParent = $_POST["scoresTecher"];
  //   		$response = $transcriptMod->getAllScoresTeacherFromItem($idParent,$idAccount);
		// 	echo json_encode($response);
		// }
	}
?>