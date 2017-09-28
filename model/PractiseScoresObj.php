<?php

/**
 * Created by PhpStorm.
 * User: tanphat
 * Date: 06/08/2017
 * Time: 12:08
 */
class PractiseScoresObj {
	private $scores;
	private $semester;
	private $year;
	private $Account_IdAccount;
	private $beginDate;
	private $endDate;

	public function getPractiseScoresObj(){
		return $this;
	}

	public function setPractiseScoresObj($scores, $semester, $year, $accountIdAccount,$begin,$end){
		$this->scores = $scores;
		$this->semester = $semester;
		$this->year = $year;
		$this->Account_IdAccount = $accountIdAccount;
		$this->beginDate = $begin;
		$this->endDate = $end;
	}

	/**
	 * @return mixed
	 */
	public function getScores() {
		return $this->scores;
	}

	/**
	 * @param mixed $scores
	 */
	public function setScores($scores) {
		$this->scores = $scores;
	}

	/**
	 * @return mixed
	 */
	public function getSemester() {
		return $this->semester;
	}

	/**
	 * @param mixed $semester
	 */
	public function setSemester($semester) {
		$this->semester = $semester;
	}

	/**
	 * @return mixed
	 */
	public function getYear() {
		return $this->year;
	}

	/**
	 * @param mixed $year
	 */
	public function setYear($year) {
		$this->year = $year;
	}

	/**
	 * @return mixed
	 */
	public function getAccount_IdAccount() {
		return $this->accountIdAccount;
	}

	/**
	 * @param mixed $accountIdAccount
	 */
	public function setAccount_IdAccount($accountIdAccount) {
		$this->accountIdAccount = $accountIdAccount;
	}


    public function getBeginDate() {
        return $this->beginDate;
    }


    public function setBeginDate($date) {
        $this->beginDate = $date;
    }
    public function getEndDate() {
        return $this->endDate;
    }


    public function setEndDate($date) {
        $this->endDate = $date;
    }

}