<?php
/**
 * Created by PhpStorm.
 * User: TanPhat
 * Date: 13/9/2017
 * Time: 3:17 PM
 */

$rootUri = dirname(dirname(__DIR__));
require_once $rootUri . '/helper/common.helper.php';

if (isAjaxRequest()){
	require_once $rootUri . '/helper/form.helper.php';
	require_once $rootUri . '/helper/account.helper.php';
	if (!isLogged() || getInfo('permission') !== "Admin"){
		die();
	}

	$acaId = getGETValue('id');
	if (!isValidAcademyId($acaId))
		die('{}');
	require_once $rootUri . '/model/ConnectToSQL.php';
	require_once $rootUri . '/model/ClassObj.php';
	if ($acaId === "all"){
		require_once $rootUri . '/model/ClassMod.php';
		$classMod = new ClassMod();
		$listClasses = $classMod->getClass();
	} else{
		require_once $rootUri . '/model/AcademyMod.php';
		require_once $rootUri . '/model/AcademyObj.php';
		$acaMod = new AcademyMod();
		$acaObj = new AcademyObj();
		$acaObj->setIdAcademy($acaId);
		$listClasses = $acaMod->getListClass($acaObj);
	}
	$result = array();
	if (is_array($listClasses)){
		foreach ($listClasses as $class) {
			$result[] = array("classId" => $class->getIdClass(), "className" => $class->getClassName());
		}
	}
	die(json_encode(array(
		"success" => 1,
		"data" => $result
	)));
}

function isValidAcademyId($id){
	return preg_match("/[a-zA-Z0-9]+/", $id);
}