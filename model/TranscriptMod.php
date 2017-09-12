<?php
/**
 * Created by PhpStorm.
 * User: TanPhat
 * Date: 5/8/2017
 * Time: 5:43 PM
 */


class TranscriptMod {
	private $connSQL;

	public function __construct() {
		$this->connSQL = new ConnectToSQL();
	}

	public function addTranscript($TranscriptObj){
		$sql = "insert into Transcript(`idItem`, `itemName`, `scores`, `describe`, `IDParent`) 
				values('{$TranscriptObj->getIdItem()}','{$TranscriptObj->getItemName()}','{$TranscriptObj->getScores()}','{$TranscriptObj->getDescribe()}','{$TranscriptObj->getIdParent()}');";
		$this->connSQL->Connect();
		$result = $this->connSQL->conn->query($sql);
		$this->connSQL->Stop();
		return $result;
	}

	public function getTranscript($TranscriptId){
		$sql = "select * from Transcript where idItem = '{$TranscriptId}'";
		$TranscriptObj = new TranscriptObj();
		$this->connSQL->Connect();
		$result = $this->connSQL->conn->query($sql);
		if ($result->num_rows > 0){
			$TranscriptRow = $result->fetch_assoc();
			$TranscriptObj->setTranscriptObj($TranscriptRow['idItem'], $TranscriptRow['itemName'], $TranscriptRow['scores'], $TranscriptRow['describe'], $TranscriptRow['IDParent']);
		}
		$this->connSQL->Stop();
		return $TranscriptObj;
	}

	public function deleteTranscript($TranscriptId){
		$sql = "delete from Transcript where idItem = '{$TranscriptId}'";
		$this->connSQL->Connect();
		$result = $this->connSQL->conn->query($sql);
		$this->connSQL->Stop();
		return $result;
	}

	public function updateTranscript($TranscriptObj){
		$sql = "update Transcript set
 				`itemName` = '{$TranscriptObj->getItemName()}',
 				`scores` = '{$TranscriptObj->getScores()}',
 				`describe` = '{$TranscriptObj->getDescribe()}',
 				`IDParent` = '{$TranscriptObj->getIdParent()}'
				where `idItem` = '{$TranscriptObj->getIdItem()}'";
		$this->connSQL->Connect();
		$result = $this->connSQL->conn->query($sql);
		$this->connSQL->Stop();
		return $result;
	}

	/**
	 * Trả về danh sách id các mục trong bảng điểm
	 * @return array
	 */
	public function getTranscriptAll(){
		$sql = "select idItem from Transcript";
		$this->connSQL->Connect();
		$result = $this->connSQL->conn->query($sql);
		$listRow = array();
		if ($result->num_rows > 0){
			while ($row = $result->fetch_assoc())
				$listRow[] = $row;
		}
		$this->connSQL->Stop();
		return $listRow;
	}
}