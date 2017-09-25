<?php
/**
 * Created by PhpStorm.
 * User: TanPhat
 * Date: 5/8/2017
 * Time: 5:42 PM
 */

class TranscriptObj {

    private $Transcript_idItem;
    private $Account_idAccount;
    private $itemName;
    private $scores;
    private $describe;
    private $idParent;
    private $scoresDefault;
    private $scoresMax;
    private $scoresStudent;
    private $scoresTeacher;


    public function __construct(){
        $this->Transcript_idItem = '';
        $this->Account_idAccount = '';
        $this->itemName='';
        $this->scores = 0;
        $this->describe = '';
        $this->idParent = '';
        $this->scoresDefault = 0;
        $this->scoresMax=0;
        $this->scoresStudent = 0;
        $this->scoresTeacher = 0;
    }

    public function getStructureObj(){
        return $this;
    }

    public function setStructureObj($Transcript_idItem,$Account_idAccount,$itemName,$scores,$describe,$idParent,$scoresDefault,$scoresMax,$scoresStudent,$scoresTeacher){
        $this->Transcript_idItem = $Transcript_idItem;
        $this->Account_idAccount = $Account_idAccount;
        $this->itemName=$itemName;
        $this->scores = $scores;
        $this->describe = $describe;
        $this->idParent = $idParent;
        $this->scoresDefault = $scoresDefault;
        $this->scoresMax=$scoresMax;
        $this->scoresStudent = $scoresStudent;
        $this->scoresTeacher = $scoresTeacher;
    }

    /**
     * @return mixed
     */
    public function getTranscript_idItem(){
        $this->Transcript_idItem;
    }
    public function getAccount_idAccount(){
        $this->Account_idAccount;
    }
    public function getItemName(){
        $this->itemName;
    }
    public function getScores(){
        $this->scores;
    }
    public function getDescribe(){
        $this->describe;
    }
    public function getIdParent(){
        $this->idParent;
    }
    public function getScoresDefault(){
        $this->scoresDefault;
    }
    public function getScoresMax(){
        $this->scoresMax;
    }
    public function getScoresStudent(){
        $this->scoresStudent;
    }
    public function getScoresTeacher(){
        $this->getScoresTeacher;
    }
    public function setTranscript_idItem($Transcript_idItem){
        $this->Transcript_idItem=$Transcript_idItem;
    }
    public function setAccount_idAccount($Account_idAccount){
        $this->Account_idAccount=$Account_idAccount;
    }
    public function setItemName($it){
        $this->itemName=$it;
    }
    public function setScores($scores){
        $this->scores=$scores;
    }
    public function setDescribe($Describe){
        $this->describe=$Describe;
    }
    public function setIdParent($id){
        $this->idParent = $id;
    }
    public function setScoresDefault($sc){
        $this->scoresDefault=$sc;
    }
    public function setScoresMax($max){
        $this->scoresMax = $max;
    }
    public function setScoresStudent($student){
        $this->scoresStudent = $student;
    }
    public function setScoresTeacher($teacher){
        $this->scoresTeacher = $teacher;
    }

}
?>