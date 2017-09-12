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
    private $Structure_idItem;

    public function setStructure_idItem($Structure_idItem){
        $this->Structure_idItem = $Structure_idItem;
    }
    public function getStructure_idItem(){
        return $this->Structure_idItem;
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

    public function setScoresAddObj($idScores, $scoreName, $scores, $decribe, $Structure_idItem){
        $this->setIdScore($idScores);
        $this->setscoreName($scoreName);
        $this->setScores($scores);
        $this->setDecribe($decribe);
        $this->setStructure_idItem($Structure_idItem);

    }
    public function getScoresAddObj(){
        return $this;
    }

}
