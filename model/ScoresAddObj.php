<?php
/**
 * Created by PhpStorm.
 * User: Huynh Hoang Tho
 * Date: 12/08/2017
 * Time: 8:46 SA
 */

class ScoresAddObj
{
    private $idScore;
    private $scoreName;
    private $scores;
    private $decribe;
    private $Transcript_idItem;
    private $idAccountManage;

    public function setTranscript_idItem($Transcript_idItem){
        $this->Transcript_idItem = $Transcript_idItem;
    }
    public function getTranscript_idItem(){
        return $this->Transcript_idItem;
    }
    public function setIdAccountManage($idAccountManage){
        $this->idAccountManage = $idAccountManage;
    }
    public function getIdAccountManage(){
        return $this->idAccountManage;
    }
    public function setScoreName($ScoreName){
        $this->scoreName = $ScoreName;
    }
    public function getScoreName(){
        return $this->scoreName;
    }

    public function setIdScore($idScore){
        $this->idScore =  $idScore;
    }

    public function getidScore(){
        return $this->idScore;
    }

    public function setScores($scores){
        $this->scores = $scores;
    }
    public function getScores(){
        return $this->scores;
    }
    public function setDecribe($decribe){
        $this->decribe = $decribe;
    }
    public function getDecribe(){
        return $this->decribe;
    }

    public function setScoresAddObj($idScore, $scoreName, $scores, $decribe, $Transcript_idItem, $idAccountManage){
        $this->setIdScore($idScore);
        $this->setscoreName($scoreName);
        $this->setScores($scores);
        $this->setDecribe($decribe);
        $this->setTranscript_idItem($Transcript_idItem);
        $this->setidAccountManage($idAccountManage);

    }
    public function getScoresAddObj(){
        return $this;
    }

}
