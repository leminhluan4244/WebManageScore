<?php

/**
 *Lớp đói tượng liên kết , cho biết xem sinh viên nào thuộc chi hội nào
 *Coder: Lê Minh Luân
 *Date: 04/08/2017
 */
class ScoresAddHasAccountObj {

	private $ScoresAdd_idScores;
	private $Account_idAccount;


	//Nhận dữ liệu cho tất cả các trường của bảng liên kết sinh viên và chi hội
	public function setScoresAddHassAccount($ScoresAdd_idScores, $Account_idAccount) {
		$this->ScoresAdd_idScores = $ScoresAdd_idScores;
		$this->Account_idAccount = $Account_idAccount;
	}

	//Trả về dữ liệu kiểu đối tượng
	public function getInstance() {
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getScoresAddIdScores() {
		return $this->ScoresAdd_idScores;
	}

	/**
	 * @param mixed $ScoresAdd_idScores
	 */
	public function setScoresAddIdScores($ScoresAdd_idScores) {
		$this->ScoresAdd_idScores = $ScoresAdd_idScores;
	}

	/**
	 * @return mixed
	 */
	public function getAccountIdAccount() {
		return $this->Account_idAccount;
	}

	/**
	 * @param mixed $Account_idAccount
	 */
	public function setAccountIdAccount($Account_idAccount) {
		$this->Account_idAccount = $Account_idAccount;
	}


}

?>