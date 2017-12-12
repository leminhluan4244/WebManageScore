<?php
/**
 * Created by PhpStorm.
 * User: tanphat
 * Date: 9/11/17
 * Time: 2:33 PM
 */
session_start();
require_once 'Captcha.php';
$captcha = new Captcha();
$code = $captcha->generate();

// Lưu code session
$_SESSION['captcha'] = strtolower($code);