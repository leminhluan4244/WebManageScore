<?php
/**
 * Created by PhpStorm.
 * User: TanPhat
 * Date: 18/9/2017
 * Time: 8:37 PM
 */
$rootUri = dirname(__DIR__);
require_once $rootUri . '/helper/session.helper.php';

function login($accountInfo){
	setSession("userToken", $accountInfo);
}

function isLogged(){
	return !empty(getSession("userToken"));
}

function logout(){
	removeSession("userToken");
}

function getLoggedAccountInfo(){
	return getSession("userToken");
}

function getLoggedAccountId(){
	$account = getLoggedAccountInfo();
	return $account['idAccount'];
}

function getLoggedAccountName(){
	$account = getLoggedAccountInfo();
	return $account['name'];
}

function getInfo($key){
	$account = getLoggedAccountInfo();
	return isset($account[$key]) ? $account[$key]: false;
}