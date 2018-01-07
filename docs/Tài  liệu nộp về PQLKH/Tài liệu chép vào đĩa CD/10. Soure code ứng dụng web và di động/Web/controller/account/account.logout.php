<?php
/**
 * Created by PhpStorm.
 * User: TanPhat
 * Date: 18/9/2017
 * Time: 8:42 PM
 */
$rootUri = dirname(dirname(__DIR__));
require_once $rootUri . '/helper/common.helper.php';
require_once $rootUri . '/helper/account.helper.php';
removeSession("userToken");
redirect("account.login.php");