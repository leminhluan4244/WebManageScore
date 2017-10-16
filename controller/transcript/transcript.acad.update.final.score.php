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

$cso = $csm->getCalendarWithPermissionPosition("Quản lý khoa");
$semester = 1;
$year = date("Y");
$startDate = $cso['openDate'];
$endDate = $cso['closeDate'];

$pso = new PractiseScoresObj();
$pso->setPractiseScoresObj($finalScore, $semester, $year, $accountId, $startDate, $endDate);
if ($psm->isPractiseScoresExisted($accountId, $semester, $year)){
    $psm->updatePractiseScores($pso);
} else {
    $psm->addPractiseScores($pso);
}