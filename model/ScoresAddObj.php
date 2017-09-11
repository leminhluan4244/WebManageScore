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
    private $Account_idAccount;
    private $structure_idItem;

    public function setStructure_idItem($Structure_idItem){
        $this->structure_idItem = $Structure_idItem;
    }
    public function getStructure_idItem(){
        return $this->structure_idItem;
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
    public function setAccount_idAccount($Account_idAccount){
        $this->Account_idAccount = $Account_idAccount;
    }
    public function getAccount_idAccount(){
        return $this->Account_idAccount;
    }

    public function setScoresAddObj($idScores, $scoreName,$scores,$decribe,$Account_idAccount, $structure_idItem){
        $this->setIdScore($idScores);
        $this->setscoreName($scoreName);
        $this->setScores($scores);
        $this->setDecribe($decribe);
        $this->setAccount_idAccount($Account_idAccount);
        $this->setStructure_idItem($structure_idItem);

    }
    public function getScoresAddObj(){
        return $this;
    }

}