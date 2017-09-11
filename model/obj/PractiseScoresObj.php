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
	private $accountIdAccount;

	public function getInstance(){
		return $this;
	}

	public function setData($scores, $semester, $year, $accountIdAccount){
		$this->scores = $scores;
		$this->semester = $semester;
		$this->year = $year;
		$this->accountIdAccount = $accountIdAccount;
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
	public function getAccountIdAccount() {
		return $this->accountIdAccount;
	}

	/**
	 * @param mixed $accountIdAccount
	 */
	public function setAccountIdAccount($accountIdAccount) {
		$this->accountIdAccount = $accountIdAccount;
	}
}