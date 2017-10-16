<?php
/**
 * Created by PhpStorm.
 * User: TanPhat
 * Date: 9/10/2017
 * Time: 4:21 PM
 */

define("PATTERN_NAME", "/^[a-zA-Z 0-9àảãáạằẳẵắặầẩẫấậèẻẽéẹềểễếệìỉĩíịòỏõóọồổỗốộờởỡớợùủũúụừửữứựỳỷỹýỵoôơđưăâê]+$/i");
define("SQL_STR", "/(select|insert|update|delete|from|where|into|and|or|values|order by)/i");

/**
 * Hàm kiểm tra tên nhập vào có hợp lệ: bao gồm Khoảng trắng, Chữ Cái và Số
 * @param $name
 * @return boolean
 */

function checkValidName($name){
	return preg_match(PATTERN_NAME, $name) && !preg_match(SQL_STR, $name);
}

/**
 * Hàm kiểm tra hợp lệ ID: bao gồm Chữ cái (ko có dấu) và Số
 * @param $id
 * @return boolean
 */
function checkValidId($id){
	return preg_match("/^[a-zA-Z0-9]+$/", $id) == 1;
}

/**
 * Kiểm tra là số
 * @param $num
 * @return boolean
 */
function checkValidNumber($num){
	return preg_match("/^\d+$/", $num) == 1;
}