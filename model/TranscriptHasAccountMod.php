<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 13/8/2017
 * Time: 11:07 PM
 */

class TranscriptHasAccountMod {
	private $connSQL;

	public function __construct() {
		$this->connSQL = new ConnectToSQL();
	}

	public function getTranscriptHasAccount($idAccount) {
		$sql = "select * from Transcrpit_has_Account where Account_idAccount = '{$idAccount}'";
		$this->connSQL->Connect();
		$result = $this->connSQL->conn->query($sql);
		if (empty($result))
			return false;
        if ($result->num_rows > 0) {
            // Sử dụng vòng lặp while để lặp kết quả
            $k = 0;
            //Tạo một đối tượng chứa
            $transObj = new ClassObj;
            $list = array();
            while ($row = $result->fetch_assoc()) {

                //Cho vào list đối tượng
                $transObj->setTranscript_idItem($row["Transcript_idItem"]);
                $transObj->setAccount_idAccount($row["Account_idAccount"]);
                $transObj->setScoresStudent($row["scoresStudent"]);
                $transObj->setScoresTeacher($row["scoresTeacher"]);
                $transObj->setScoresEnd($row["scoresEnd"]);
                $list[$k] = $transObj;
                $k++;
            }
        }
		$this->connSQL->Stop();
		return $transObj;
	}


	public function addTranscriptHasAccount($transObj) {
		$sql = "insert into Transcript_has_Account(Transcript_idItem, Account_idAccount, scoresStudent, scoresStudent, scoresTeacher, scoresEnd) 
				values(
				'{$transObj->getTranscipt_idItem()}',
				'{$transObj->getAccount_idAccount()}',
				'{$transObj->getScoresStudent()}',
				'{$transObj->getScoresTeacher()}',
				'{$transObj->getScoresEnd()}'
				
				);";
		$this->connSQL->Connect();
		$result = $this->connSQL->conn->query($sql);
		$this->connSQL->Stop();
		return $result;
	}

	public function updateTranscript($transObj) {
		$sql = "update Transcript_has_Account set 
				`Transcipt_idItem` = '{$transObj->getTranscipt_idItem()}', 
				`Account_idAccount` = '{$transObj->getAccount_idAccount()}', 
				`scoresStudent` = '{$transObj->getScoresStudent()}', 
				`scoresTeacher`  = '{$transObj->getScoresTeacher()}', 
				`scoresEnd` = '{$transObj->getScoresEnd()}' 
				where `Account_idAccount` = '{$transObj->getAccount_idAccount()}'";
		$this->connSQL->Connect();
		$result = $this->connSQL->conn->query($sql);
		$this->connSQL->Stop();
		return $result;
	}

	public function deleteTranscriptHasAccount($Account) {
		$sql = "delete from Transcript_has_Account `Account_idAccount` = '{$Account->getIdAccount()}'";
		$this->connSQL->Connect();
		$result = $this->connSQL->conn->query($sql);
		$this->connSQL->Stop();
		return $result;
	}
}