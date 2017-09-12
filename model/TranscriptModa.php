<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 13/8/2017
 * Time: 11:07 PM
 */

class TranscriptMod {
	private $connSQL;

	public function __construct() {
		$this->connSQL = new ConnectToSQL();
	}

	/**
	 * Lấy thông tin bản chấm điểm của tài khoản chỉ định
	 * @param $idAccount
	 * @return bool|TranscriptObj
	 */
	public function getTranscript($idAccount) {
		$sql = "select * from transcript where Account_idAccount = '{$idAccount}'";
		$transObj = new TranscriptObj();
		$this->connSQL->Connect();
		$result = $this->connSQL->conn->query($sql);
		if (empty($result))
			return false;
		if ($result->num_rows > 0) {
			$transRow = $result->fetch_assoc();
			$transObj->setTranscriptObj(
				$transRow['idItem'],
				$transRow['itemName'],
				$transRow['scores'],
				$transRow['describe'],
				$transRow['IDParent'],
				$transRow['Account_idAccount']
			);
		}
		$this->connSQL->Stop();
		return $transObj;
	}

	/**
	 * Thêm mới bảng chấm điểm, chỉ có duy nhất 1 bảng điểm cho mỗi tài khoản
	 * dùng để chấm điểm cho các học kỳ, mọi thêm mới đề bị ghi đè cho cùng tài khoản
	 * @param $transObj
	 * @return mixed
	 */
	public function addTranscript($transObj) {
		$trans = $this->getTranscript($transObj->getAccountIdAccount());
		if (!empty($trans))
			return $this->updateTranscript($transObj);
		$sql = "insert into transcript(`idItem`, `itemName`, `scores`, `describe`, `IDParent`, `Account_idAccount`) 
				values(
				'{$transObj->getIdItem()}',
				'{$transObj->getItemName()}',
				'{$transObj->getScores()}',
				'{$transObj->getDescribe()}',
				'{$transObj->getIdParent()}', 
				'{$transObj->getAccountIdAccount()}'
				);";
		$this->connSQL->Connect();
		$result = $this->connSQL->conn->query($sql);
		$this->connSQL->Stop();
		return $result;
	}

	public function updateTranscript($transObj) {
		$sql = "update transcript set 
				`idItem` = '{$transObj->getIdItem()}', 
				`itemName` = '{$transObj->getItemName()}', 
				`scores` = '{$transObj->getScores()}', 
				`describe`  = '{$transObj->getDescribe()}', 
				`IDParent` = '{$transObj->getIdParent()}' 
				where `Account_idAccount` = '{$transObj->getAccountIdAccount()}'";
		$this->connSQL->Connect();
		$result = $this->connSQL->conn->query($sql);
		$this->connSQL->Stop();
		return $result;
	}

	public function deleteTranscript($transcriptId) {
		$sql = "delete from transcript where idItem = '{$transcriptId}'";
		$this->connSQL->Connect();
		$result = $this->connSQL->conn->query($sql);
		$this->connSQL->Stop();
		return $result;
	}
}