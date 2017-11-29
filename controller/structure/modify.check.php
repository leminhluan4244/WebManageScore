<?php
/**
 * Created by PhpStorm.
 * User: TanPhat
 * Date: 29/11/2017
 * Time: 6:27 PM
 */
$calMod = new CalendarScoringMod();
$criticalDate = $calMod->getCriticalDate();

$currentTime = mktime();
$minTime = strtotime($criticalDate['min']);
$maxTime = strtotime($criticalDate['max']);

$canModify = ($currentTime < $minTime) || ($currentTime > $maxTime);
if (!$canModify){
	$reasonMsg = "Không được chỉnh sửa cấu trúc khi đang mở chấm điểm";
	return;
}

$transcriptMod = new TranscriptMod();
$canModify = $transcriptMod->transcriptTableEmpty();
if (!$canModify)
	$reasonMsg = "Chỉ được chỉnh sửa khi đã đặt lại cấu trúc dữ liệu (Ở mục Quản lý lịch chấm điểm)";
