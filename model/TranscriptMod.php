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

	public function transcriptTableEmpty(){
		$sql = "select count(*) as total from Transcript";
		$this->connSQL->Connect();
		$result = $this->connSQL->conn->query($sql);
		$this->connSQL->Stop();
		$total = 0;
		if (!empty($result) && $result->num_rows > 0)
			$total = $result->fetch_assoc()["total"];
		return $total == 0;
	}

	public function getTranscript($accountId, $TranscriptId){
		$sql = "select * from Transcript where Account_idAccount = '$accountId' AND idItem = '{$TranscriptId}'";
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
    public function getTranscriptAllObj(){ # trả ra tất cả các mục
        $sql = "select DISTINCT idItem,itemName from Transcript;";
        $this->connSQL->Connect();
        $result = $this->connSQL->conn->query($sql);
        if ($result->num_rows > 0) {
            $k=0;
            // Nếu có thì trả về đối tượng đo
            while ($TranscriptRow = $result->fetch_assoc()) {
                $TranscriptObj = new TranscriptObj();
                $TranscriptObj->setIdItem($TranscriptRow['idItem']);
                $TranscriptObj->setItemName($TranscriptRow['itemName']);
                $list[$k] =  $TranscriptObj;
                $k++;
            }

	    }else{
            $this->connSQL->Stop();
            return 0;
        }
        return $list;
    }

	public function deleteTranscript($TranscriptId){
		$sql = "delete from Transcript where idItem = '{$TranscriptId}'";
		$this->connSQL->Connect();
		$result = $this->connSQL->conn->query($sql);
		$this->connSQL->Stop();
		return $result;
	}
    public function deleteTranscriptAll(){
        $sql = "delete from Transcript where 1";
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
		$sql = "select scoresMax from Transcript WHERE Account_idAccount = '$accountId' AND idItem = '$itemId'";
		$result = $this->connSQL->conn->query($sql);
		if (!empty($result)){
			$row = $result->fetch_assoc();
			$maxScore = $row["scoresMax"];
		} else $maxScore = 0;
		if ($score > $maxScore)
			$score = $maxScore;
		$sql = "update Transcript set $col = '$score' 
					WHERE Account_idAccount = '$accountId' AND idItem = '$itemId'";
		$result = $this->connSQL->conn->query($sql);
		$this->connSQL->Stop();
		return $result;
	}

	public function resetSummaryScore($accountId, $col = COL_STUDENT_SCORE){
		$sql = "update Transcript set $col = '0' WHERE Account_idAccount = '$accountId' AND IDParent = '0'";
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
//		$sql = "select $col, scoresMax from Transcript
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
//		$sql = "update Transcript set $col = '$currentScore'
//					WHERE Account_idAccount = '$accountId' AND idItem = '$itemId'";
//		$result = $this->connSQL->conn->query($sql);
//		$this->connSQL->Stop();
//		return $result;
//	}

	public function getTranscriptName($accountId, $itemId){
		$sql = "select itemName from Transcript where Account_idAccount = '$accountId' AND idItem = '$itemId'";
		$this->connSQL->Connect();
		$result = $this->connSQL->conn->query($sql);
		$this->connSQL->Stop();
		if (!empty($result) && $result->num_rows){
			return str_replace("-", "", $result->fetch_assoc()['itemName']);
		}
		return "";
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
	public function isTranscriptExist($accoundId, $structLeafs = []){
		$sql = "select count(*) as total from Transcript where Account_idAccount = '$accoundId'";
		$this->connSQL->Connect();
		$result = $this->connSQL->conn->query($sql);
		$currentRow = 0;
		if (!empty($result) && $result->num_rows){
			$currentRow = $result->fetch_assoc()["total"];
		}
		return $currentRow == count($structLeafs);
	}

	/**
	 * Lưu bảng điểm của sinh viên đó
	 * @param $accountId
	 * @param array $structure
	 * @return bool
	 */
	public function generateTranscript($accountId, $structure = array(), $addScore = array()){
		$this->connSQL->Connect();
		foreach ($structure as $id => $item){
			$sql = "insert ignore into Transcript values(
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
		$sql = "select * from Transcript where Account_idAccount = '$accountId'";
		$this->connSQL->Connect();
		$result = $this->connSQL->conn->query($sql);
		$this->connSQL->Stop();

		$Transcript = array();
		if (!empty($result))
			while ($row = $result->fetch_assoc())
				$Transcript[$row['idItem']] = $row;
		return $Transcript;
	}

	public function getEntireTranscript2($accountId) {
		$sql = "select * from transcript where Account_idAccount = '$accountId'";
		$this->connSQL->Connect();
		$result = $this->connSQL->conn->query($sql);
		$this->connSQL->Stop();

		$entire = array();
		if (!empty($result))
			while ($row = $result->fetch_assoc()){
				$respone = new TranscriptObj();
				$respone->setTranscriptObj(
					$row['idItem'],
					$row['Account_idAccount'],
					$row['itemName'],
					$row['scores'],
					$row['describe'],
					$row['IDParent'],
					$row['scoresDefault'],
					$row['scoresMax'],
					$row['scoresStudent'],
					$row['scoresTeacher'] 
				);
				$entire[] = $respone;
			}
		return $entire;
	}

	/**
	 * Lấy tất cả các con trực tiếp của item đó
	 * @param $StructureObj
	 * @return array
	 */
	public function getAllDirectChildOfTranscripte($itemChild){
		$children = array();
		$sql = "SELECT * from transcript WHERE IDParent like '$itemChild%'";
		$this->connSQL->Connect();
		$result = $this->connSQL->conn->query($sql);
		if (!empty($result)){
			while ($row = $result->fetch_assoc()){
				$respone = new TranscriptObj();
				$respone->setTranscriptObj(
					$row['idItem'],
					$row['Account_idAccount'],
					$row['itemName'],
					$row['scores'],
					$row['describe'],
					$row['IDParent'],
					$row['scoresDefault'],
					$row['scoresMax'],
					$row['scoresStudent'],
					$row['scoresTeacher'] 
				);
				$children[] = $respone;
			}
		}
		return $children;
	}

	/**
	 * Thêm điểm or thay thế điểm tại một mục
	 */

	public function addTranscript2($TranscriptObj){						
		$sql = "INSERT INTO Transcript(`idItem`,`Account_idAccount`,`itemName`,`scores`,`describe`
		,`IDParent`,`scoresDefault`,`scoresMax`,`scoresStudent`,`scoresTeacher`) VALUES('{$TranscriptObj->getIdItem()}',
    																					'{$TranscriptObj->getAccountIdAccount()}'
    																					,'{$TranscriptObj->getItemName()}'
    																					,'{$TranscriptObj->getFinalScores()}'
    																					,'{$TranscriptObj->getDescribe()}'
    																					,'{$TranscriptObj->getIdParent()}'
    																					,'{$TranscriptObj->getScoresDefault()}'
    																					,'{$TranscriptObj->getScoresMax()}'
    																					,'{$TranscriptObj->getScoresStudent()}'
    																					,'{$TranscriptObj->getScoresTeacher()}')
				ON DUPLICATE KEY
				UPDATE
					    `idItem` = '{$TranscriptObj->getIdItem()}'
					    ,`Account_idAccount` = '{$TranscriptObj->getAccountIdAccount()}'
					    ,`itemName` = '{$TranscriptObj->getItemName()}'
					    ,`scores` = '{$TranscriptObj->getFinalScores()}'
					    ,`describe` = '{$TranscriptObj->getDescribe()}'
					    ,`IDParent` = '{$TranscriptObj->getIdParent()}'
					    ,`scoresDefault` = '{$TranscriptObj->getScoresDefault()}'
					    ,`scoresMax` = '{$TranscriptObj->getScoresMax()}'
					    ,`scoresStudent` = '{$TranscriptObj->getScoresStudent()}'
					    ,`scoresTeacher` = '{$TranscriptObj->getScoresTeacher()}';";
		$this->connSQL->Connect();
		$result = $this->connSQL->conn->query($sql);
		$this->connSQL->Stop();
		return $result;
	}

	/**
	 * Xóa tất cả điểm sinh viên đã chấm, nhưng giữ lại điểm giáo viên
	 * @param idAccount
	 */
	public function updateTranscript2($idAccount){
		$sql = "UPDATE `transcript` SET `scoresStudent`= 0 where Account_idAccount = '$idAccount';";
		$this->connSQL->Connect();
		$result = $this->connSQL->conn->query($sql);
		$this->connSQL->Stop();
		return $result;
	}

	// /**
	//  * Lấy tất cả các con trực tiếp của item đó để tính điểm giáo viên chấm
	//  * @param $StructureObj
	//  * @return array
	//  */
	// public function getAllScoresTeacherFromItem($IDParent,$idAccount){
	// 	$sql = "SELECT sum(scoresTeacher) from transcript WHERE IDParent like '$IDParent.%' and Account_idAccount = '$idAccount';";
	// 	$this->connSQL->Connect();
	// 	$result = $this->connSQL->conn->query($sql);
	// 	$row = $result->fetch_assoc();
	// 	$array = array("message" => (int) $row['sum(scoresTeacher)']);
	// 	return $array;
	// }

	// public function getTotalScoreOfItem($accountId,$item) {
	// 	echo $item.'hshshsdf sdf sdfsd';
	// 	// $sql = "SELECT sum(scoresStudent)as total from transcript WHERE idItem LIKE '$item.%' and Account_idAccount = '$accountId'";
	// 	// $this->connSQL->Connect();
	// 	// $result = $this->connSQL->conn->query($sql);
	// 	// $this->connSQL->Stop();
	// 	// if (!empty($result)){
	// 	// 	while ($row = $result->fetch_assoc()){
	// 	// 		$respone = $row['total'];
	// 	// 	}
	// 	// }
	// 	return 0;
	// }
}