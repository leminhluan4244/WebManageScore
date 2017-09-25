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
		$sql = "insert into Transcript(`Transcript_idItem`,`Account_idAccount`, `itemName`, `scores`, `describe`, `IDParent`,`scoresDefault`,`scoresMax`,`scoresStudent`,`scoresTeacher`) 
				values('{$TranscriptObj->Transcript_idItem}','{$TranscriptObj->getAccount_idAccount()}','{$TranscriptObj->getItemName()}','{$TranscriptObj->getScores()}','{$TranscriptObj->getDescribe()}','{$TranscriptObj->getIdParent()}','{$TranscriptObj->getScoresDefault()}','{$TranscriptObj->getScoresMax()}','{$TranscriptObj->getScoresStudent()}','{$TranscriptObj->getScoresTeacher()}');";
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
			$TranscriptObj->setTranscriptObj($TranscriptRow['Transcript_idItem'], $TranscriptRow['Account_idAccount'],$TranscriptRow['itemName'], $TranscriptRow['scores'], $TranscriptRow['describe'], $TranscriptRow['IDParent'], $TranscriptRow['scoresDefault'], $TranscriptRow['scoresMax'], $TranscriptRow['scoresStudent'], $TranscriptRow['scoresTeacher']);
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
 				`Account_idAccount`= {$TranscriptObj->getAccount_idAccount()},
 				 `itemName`= {$TranscriptObj->getItemName()},
 				  `scores`= {$TranscriptObj->getScores()},
 				   `describe`= {$TranscriptObj->getDescribe()},
 				    `IDParent`= {$TranscriptObj->getIdParent()},
 				    `scoresDefault`= {$TranscriptObj->getScoresDefault()},
 				    `scoresMax`= {$TranscriptObj->getScoresMax()},
 				    `scoresStudent`= {$TranscriptObj->getScoresStudent()},
 				    `scoresTeacher`= {$TranscriptObj->getScoresTeacher()} 
				where `Transcript_idItem` = '{$TranscriptObj->getTranscript_idItem()}'";
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
		$sql = "select Transcript_idItem from Transcript";
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