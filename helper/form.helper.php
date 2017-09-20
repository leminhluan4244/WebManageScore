<?php
/**
 * Created by PhpStorm.
 * User: tanphat
 * Date: 9/11/17
 * Time: 2:50 PM
 */

function getGETValue($key){
	return isset($_GET[$key]) ? $_GET[$key]: false;
}

function getPOSTValue($key){
	return isset($_POST[$key]) ? $_POST[$key]: false;
}

function isSubmit($key){
	$submit = getPOSTValue('requestName');
	return !empty($submit) && $submit === $key;
}

function showMessage($message){
	echo "<script>alert('$message');</script>";
}