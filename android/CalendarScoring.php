<?php
	require_once "../model/CalendarScoringMod.php";
	require_once "../model/CalendarScoringObj.php";
	require_once "../model/ConnectToSQL.php";

	//REQUIRE_ONCE HEADER
	header("Content-type: application/json; charset=UTF-8");

	//CREATE Structure Model
	$calendarScoringMod = new CalendarScoringMod();
	
	// //CREATE GET
	if($_SERVER['REQUEST_METHOD'] == 'GET'){
		if(isset($_GET["AllCalendar"])){
			$response = $calendarScoringMod->getAllCalendar(); 
			echo json_encode($response); 
		} 
	}
?>
