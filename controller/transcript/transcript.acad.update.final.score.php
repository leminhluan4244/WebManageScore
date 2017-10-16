<?php
/**
 * Created by PhpStorm.
 * User: TanPhat
 * Date: 16/10/2017
 * Time: 10:40 AM
 */
if (!defined("IN_TRS"))
    die("Bad request!");
$csm = new CalendarScoringMod();
$psm = new PractiseScoresMod();
$ysm = new yearsSemesterMod();

$cso = $csm->getCalendarWithPermissionPosition("Quản lý khoa");

$practiceScoreObj = $ysm->getData();

$semester = $practiceScoreObj->getSemester();
$year = $practiceScoreObj->getYears();
$startDate = $cso['openDate'];
$endDate = $cso['closeDate'];

$practiceScoreObj->setPractiseScoresObj($finalScore, $semester, $year, $accountId, $startDate, $endDate);
if ($psm->isPractiseScoresExisted($accountId, $semester, $year)){
    $psm->updatePractiseScores($practiceScoreObj);
} else {
    $psm->addPractiseScores($practiceScoreObj);
}