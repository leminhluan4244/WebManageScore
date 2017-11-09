<?php
/**
 * Created by PhpStorm.
 * User: TanPhat
 * Date: 9/11/2017
 * Time: 7:55 PM
 */

/**
 * Kích thước ảnh tối đa: 1000px phụ thuộc vào chiều cao hoặc chiều rộng
 */
define("IMG_SIZE_MAX", 1000);

function resize_image($file, $ext, $w = IMG_SIZE_MAX, $h = IMG_SIZE_MAX, $crop = false) {
	list($width, $height) = getimagesize($file);
	$r = $width / $height;
	if ($crop) {
		if ($width > $height) {
			$width = ceil($width-($width*abs($r-$w/$h)));
		} else {
			$height = ceil($height-($height*abs($r-$w/$h)));
		}
		$newWidth = $w;
		$newHeight = $h;
	} else {
		if ($w/$h > $r) {
			$newWidth = $h*$r;
			$newHeight = $h;
		} else {
			$newHeight = $w/$r;
			$newWidth = $w;
		}
	}
	$src = ($ext === "jpg") ? imagecreatefromjpeg($file) : imagecreatefrompng($file);
	$dst = imagecreatetruecolor($newWidth, $newHeight);
	imagecopyresampled($dst, $src, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);

	return $dst;
}

function saveImage($img, $path){
	imagejpeg($img, $path);
}