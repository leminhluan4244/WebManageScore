<?php
/**
 * Created by PhpStorm.
 * User: TanPhat
 * Date: 5/8/2017
 * Time: 5:43 PM
 */

define("COL_FINAL_SCORE", "scores");
define("COL_STUDENT_SCORE", "scoresStudent");
define("COL_ADVISER_SCORE", "scoresTeacher");

class TranscriptMod {
	private $connSQL;

	public function __construct() {
		$this->connSQL = new ConnectToSQL();
	}

	public function addTranscript($TranscriptObj){
		$sql = "insert into Transcript(`idItem`,`Account_idAccount`, `itemName`, `scores`, `describe`, `IDParent`,`scoresDefault`,`scoresMax`,`scoresStudent`,`scoresTeacher`) 
				values('{$TranscriptObj->getIdItem()}','{$TranscriptObj->getAccount_idAccount()}','{$TranscriptObj->getItemName()}','{$TranscriptObj->getScores()}','{$TranscriptObj->getDescribe()}','{$TranscriptObj->getIdParent()}','{$TranscriptObj->getScoresDefault()}','{$TranscriptObj->getScoresMax()}','{$TranscriptObj->getScoresStudent()}','{$TranscriptObj->getScoresTeacher()}');";
		$this->connSQL->Connect();
		$result = $this->connSQL->conn->query($sql);
		$this->connSQL->Stop();
		return $result;
	}

	public function getTranscript($accountId, $transcriptId){
		$sql = "select * from transcript where Account_idAccount = '$accountId' AND idItem = '{$transcriptId}'";
		$TranscriptObj = new TranscriptObj();
		$this->connSQL->Connect();
		$result = $this->connSQL->conn->query($sql);
		if (!empty($result)){
			$TranscriptRow = $result->fetch_assoc();
			$TranscriptObj->setTranscriptObj($TranscriptRow['idItem'], $TranscriptRow['Account_idAccount'],$TranscriptRow['itemName'], $TranscriptRow['scores'], $TranscriptRow['describe'], $TranscriptRow['IDParent'], $TranscriptRow['scoresDefault'], $TranscriptRow['scoresMax'], $TranscriptRow['scoresStudent'], $TranscriptRow['scoresTeacher']);
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
				where `idItem` = '{$TranscriptObj->getIdItem()}'";
		$this->connSQL->Connect();
		$result = $this->connSQL->conn->query($sql);
		$this->connSQL->Stop();
		return $result;
	}

	/**
	 * Cập nhật điểm cho sinh viên tại mục nào đó
	 * @param $accountId
	 * @param $itemId
	 * @param $col - có 3 cột: sinh viên, giáo viên, điểm cuối cùng
	 * @param $score
	 * @return mixed
	 */
	public function updateTranscriptScore($accountId, $itemId, $score, $col = COL_STUDENT_SCORE){
		$this->connSQL->Connect();
		$sql = "select scoresMax from transcript WHERE Account_idAccount = '$accountId' AND idItem = '$itemId'";
		$result = $this->connSQL->conn->query($sql);
		if (!empty($result)){
			$row = $result->fetch_assoc();
			$maxScore = $row["scoresMax"];
		} else $maxScore = 0;
		if ($score > $maxScore)
			$score = $maxScore;
		$sql = "update transcript set $col = '$score' 
					WHERE Account_idAccount = '$accountId' AND idItem = '$itemId'";
		$result = $this->connSQL->conn->query($sql);
		$this->connSQL->Stop();
		return $result;
	}

	public function resetSummaryScore($accountId, $col = COL_STUDENT_SCORE){
		$sql = "update transcript set $col = '0' WHERE Account_idAccount = '$accountId' AND IDParent = '0'";
		$this->connSQL->Connect();
		$result = $this->connSQL->conn->query($sql);
		$this->connSQL->Stop();
		return $result;
	}

	/**
	 * Cập nhật điểm trong từng mục lớn
	 * @param $accountId
	 * @param $itemId
	 * @param $score
	 * @param string $col
	 * @return mixed
	 */
//	public function summarizeTranscriptScore($accountId, $itemId, $score, $col = COL_STUDENT_SCORE){
//		$sql = "select $col, scoresMax from transcript
//					WHERE Account_idAccount = '$accountId' and idItem = '$itemId'";
//		$this->connSQL->Connect();
//		$result = $this->connSQL->conn->query($sql);
//		$currentScore = 0;
//		$maxScore = 0;
//		if (!empty($result)){
//			$row = $result->fetch_assoc();
//			$currentScore = $row[$col];
//			$maxScore = $row["scoresMax"];
//		}
//		$currentScore += $score;
//		if ($currentScore > $maxScore)
//			$currentScore = $maxScore;
//		$sql = "update transcript set $col = '$currentScore'
//					WHERE Account_idAccount = '$accountId' AND idItem = '$itemId'";
//		$result = $this->connSQL->conn->query($sql);
//		$this->connSQL->Stop();
//		return $result;
//	}

	/**
	 * Cập nhật mục điểm cuối cùng
	 * @param $accountId
	 * @param string $col
	 */
	public function updateEntireScore($accountId, $col = COL_STUDENT_SCORE){

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

	/**
	 * Kiểm tra xem bảng điểm của tài khoản đã tồn tại chưa
	 * @param $accoundId
	 * @return bool
	 */
	public function isTranscriptExist($accoundId){
		$sql = "select count(*) as total from transcript where Account_idAccount = '$accoundId'";
		$this->connSQL->Connect();
		$result = $this->connSQL->conn->query($sql);
		$this->connSQL->Stop();
		return $result->fetch_assoc()["total"] > 0;
	}

	/**
	 * Lưu bảng điểm của sinh viên đó
	 * @param $accountId
	 * @param array $structure
	 * @return bool
	 */
	public function generateTranscript($accountId, $structure = array()){
		$this->connSQL->Connect();
		foreach ($structure as $id => $item){
			$sql = "insert into transcript values(
				'$id', '$accountId', '{$item['itemName']}', '0', 
				'{$item['describe']}', '{$item['IDParent']}', '{$item['scoresDefault']}', 
				'{$item['scores']}', '0', '0'
			)";
			$this->connSQL->conn->query($sql);
		}
		$this->connSQL->Stop();
		return true;
	}

	public function getEntireTranscript($accountId) {
		$sql = "select * from transcript where Account_idAccount = '$accountId'";
		$this->connSQL->Connect();
		$result = $this->connSQL->conn->query($sql);
		$this->connSQL->Stop();

		$transcript = array();
		if (!empty($result))
			while ($row = $result->fetch_assoc())
				$transcript[$row['idItem']] = $row;
		return $transcript;
	}
}