<?php
/**
 * Created by PhpStorm.
 * User: TanPhat
 * Date: 16/10/2017
 * Time: 10:40 AM
 */
if ($privilege != ACA_ADMIN)
    die();
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