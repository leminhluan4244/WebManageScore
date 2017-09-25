<?php
/**
 * Created by PhpStorm.
 * User: Huynh Hoang Tho
 * Date: 12/08/2017
 * Time: 8:46 SA
 */

class ScoresAddObj
{
    private $idScores;
    private $scoreName;
    private $scores;
    private $decribe;
    private $Transcript_idItem;
    private $Transcript_Account_idAccount;

    public function setTranscript_idItem($Transcript_idItem){
        $this->Transcript_idItem = $Transcript_idItem;
    }
    public function getTranscript_idItem(){
        return $this->Transcript_idItem;
    }
    public function setTranscript_Account_idAccount($Transcript_Account_idAccount){
        $this->Transcript_Account_idAccount = $Transcript_Account_idAccount;
    }
    public function getTranscript_Account_idAccount(){
        return $this->Transcript_Account_idAccount;
    }
    public function setScoreName($ScoreName){
        $this->scoreName = $ScoreName;
    }
    public function getScoreName(){
        return $this->scoreName;
    }

    public function setIdScore($idScores){
        $this->idScores =  $idScores;
    }

    public function getIdScores(){
        return $this->idScores;
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

    public function setScoresAddObj($idScores, $scoreName, $scores, $decribe, $Transcript_idItem){
        $this->setIdScore($idScores);
        $this->setscoreName($scoreName);
        $this->setScores($scores);
        $this->setDecribe($decribe);
        $this->setTranscript_idItem($Transcript_idItem);

    }
    public function getScoresAddObj(){
        return $this;
    }

}
