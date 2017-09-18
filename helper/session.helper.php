<?php
/**
 * Created by PhpStorm.
 * User: TanPhat
 * Date: 18/9/2017
 * Time: 8:37 PM
 */
session_start();

function setSession($key, $value){
	$_SESSION[$key] = $value;
}

function getSession($key){
	return isset($_SESSION[$key]) ? $_SESSION[$key]: false;
}

function removeSession($key){
	unset($_SESSION[$key]);
}