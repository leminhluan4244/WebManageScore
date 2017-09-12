<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 13/8/2017
 * Time: 11:03 PM
 */

class TranscriptHasAccountObj {
	private $Transcript_idItem;
	private $Account_idAccount;
	private $scoresStudent;
	private $scoresTeacher;
	private $scoresEnd;


	public function __construct(){
		$this->Transcript_idItem='';
		$this->Account_idAccount='';
		$this->scoresStudent=0;
		$this->scoresTeacher=0;
		$this->scoresEnd=0;

	}

	public function getTranscriptHasAccountObj(){
		return $this;
	}

	public function setTranscriptHasAccountObj($Transcript_idItem, $Account_idAccount, $scoresStudent, $scoresStudent, $scoresTeacher, $scoresEnd){
		$this->Transcript_idItem=$Transcript_idItem;
	    $this->Account_idAccount = $Account_idAccount;
	    $this->scoresStudent=$scoresStudent;
	    $this->scoresTeacher=$scoresTeacher;
	    $this->scoresEnd=$scoresEnd;

	}
     public function getTranscipt_idItem(){
	    return $this->Transcript_idItem;
     }
     public function getAccount_idAccount(){
         return $this->Account_idAccount;
     }
     public function getScoresStudent(){
         return $this->scoresStudent;
     }
     public function getScoresTeacher(){
         return $this->scoresTeacher;
     }
     public function getScoresEnd(){
         return $this->scoresEnd;
     }
    public function setTranscipt_idItem($Transcript_idItem){
         $this->Transcript_idItem=$Transcript_idItem;
    }
    public function setAccount_idAccount($Account_idAccount){
         $this->Account_idAccount=$Account_idAccount;
    }
    public function setScoresStudent($scoresStudent){
         $this->scoresStudent=$scoresStudent;
    }
    public function setScoresTeacher($scoresTeacher){
         $this->scoresTeacher=$scoresTeacher;
    }
    public function setScoresEnd($scoresEnd){
         $this->$scoresEnd;
    }





}