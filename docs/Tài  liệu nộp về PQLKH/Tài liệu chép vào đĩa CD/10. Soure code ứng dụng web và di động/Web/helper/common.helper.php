<?php
/**
 * Created by PhpStorm.
 * User: TanPhat
 * Date: 13/9/2017
 * Time: 2:18 PM
 */

define('BASE_URL', 'http://localhost/WebManageScore/');

function getBaseUrl(){
	return BASE_URL;
}

function isAjaxRequest(){
	return !empty($_SERVER['HTTP_X_REQUESTED_WITH'])
				&& strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest';
}

function getCurrentUrl(){
	return isset($_SERVER['HTTPS']) ? 'https': 'http' . "://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
}

function redirect($url){
	header("Location: $url");
	die();
}

function reload(){
    header("Refresh:0");
    die();
}

function softRedirect($url){
	echo "<script>window.location.href = '$url';</script>";
	die();
}