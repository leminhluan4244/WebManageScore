<?php
/**
 * Created by PhpStorm.
 * User: Huynh Hoang Tho
 * Date: 06/08/2017
 * Time: 9:55 SA
 */

class ScoresAddMod {
	private $connSql;

	function __construct() {
		$this->connSql = new ConnectToSQL();
	}


	//1. Hàm thêm
	public function addScoresAdd($cores) {
		$sql = "INSERT INTO `ScoresAdd` (`idScore`, `scoreName`, `scores`, `describe`, `Transcript_idItem`, `idAccountManage`)
        VALUES (
          '" . $cores->getIdScore() . "',
         '" . $cores->getScoreName() . "',
         " . $cores->getScores() . ",
         '" . $cores->getDescribe() . "',
         '" . $cores->getTranscript_idItem() . "',
         '" . $cores->getIdAccountManage() . "');";
		$this->connSql->Connect();
		if ($this->connSql->conn->query($sql) === true) {
			// echo "Updation is successful!";
		} else {
			$this->connSql->Stop();
			return 0;
			//  echo "Updation is not successful!" . $this->connSql->error;
		}
		$this->connSql->Stop();
	}

	//2. Hàm cập nhật
	public function updateScoresAdd($cores) {
		$sql = "UPDATE ScoresAdd SET
                  `scoreName`='" . $cores->getScoreName() . "',
                  `scores`='" . $cores->getScores() . "',
                  `describe`='" . $cores->getDescribe() . "',
                  `Transcript_idItem` ='" . $cores->getTranscript_idItem() . "',
				  `idAccountManage`='" . $cores->getIdAccountManage() . "'
                  WHERE `idScore`='" . $cores->getIdScore() . "'";
		$this->connSql->Connect();
			if ($this->connSql->conn->query($sql) === TRUE) {
			//  echo "Updation is successful!";
		} else {
			$this->connSql->Stop();
			return 0;
			//  echo "Updation is not successful!" . $this->connSql->error;
		}
		$this->connSql->Stop();
	}

	//3. Hàm xóa
	public function deleteScoresAdd($cores) {

		$sql = "DELETE FROM ScoresAdd
						WHERE idScore='" . $cores->getIdScore() . "';";
		$this->connSql->Connect();
		if ($this->connSql->conn->query($sql) === TRUE) {
			// echo "Deletion is successful! ";
		} else {
			//  echo "Deletion is not successful! " . $this->connSql->error;
		}
		$this->connSql->Stop();
	}
    public function deleteScoresAddAll() {

        $sql = "DELETE FROM ScoresAdd WHERE 1";
        $this->connSql->Connect();
        if ($this->connSql->conn->query($sql) === TRUE) {
            // echo "Deletion is successful! ";
        } else {
            //  echo "Deletion is not successful! " . $this->connSql->error;
        }
        $this->connSql->Stop();
    }

	//4. Hàm trả về danh sách các điểm cộng trừ
	public function getScoresAdd() {
		$sql = "SELECT * FROM ScoresAdd";
		$this->connSql->Connect();
		$result = $this->connSql->conn->query($sql);

		if ($result->num_rows > 0) {
			$k = 0;

			$list = array();
			while ($row = $result->fetch_assoc()) {
				$obj = new ScoresAddObj();
				$obj->setScoreName($row["scoreName"]);
				$obj->setIdScore($row["idScore"]);
				$obj->setScores($row["scores"]);
				$obj->setDescribe($row["describe"]);
				$obj->setTranscript_idItem($row["Transcript_idItem"]);
				$obj->setIdAccountManage($row["idAccountManage"]);
				$list[$k] = $obj;
				$k++;
			}

		} else {
			$this->connSql->Stop();
			return 0;
			// echo "The result of information processing is data false";
		}

		$this->connSql->Stop();
		return $list;
	}

	//Trả về các bảng điểm theo một người quản lý đã tạo
	public function getScoresAddByAccount($idManage) {
		$sql = "SELECT * FROM ScoresAdd WHERE idAccountManage='" . $idManage . "'";
		$this->connSql->Connect();
		$result = $this->connSql->conn->query($sql);
		$k=0;
       		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
                $obj = new ScoresAddObj();
				$obj->setScoreName($row["scoreName"]);
				$obj->setIdScore($row["idScore"]);
				$obj->setScores($row["scores"]);
				$obj->setDescribe($row["describe"]);
				$obj->setTranscript_idItem($row["Transcript_idItem"]);
				$obj->setIdAccountManage($row["idAccountManage"]);
				$list[$k++]=$obj;

			}
            $this->connSql->Stop();
            return $list;

		} else {
			$this->connSql->Stop();
			$list=0;
			return 0;
			// echo "The result of information processing is data false";
		}


	}

	public function getScoresAddById($id) {
		$sql = "SELECT * FROM ScoresAdd WHERE idScore='" . $id . "'";
		$this->connSql->Connect();
		$result = $this->connSql->conn->query($sql);
		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
				$obj = new ScoresAddObj();
				$obj->setScoreName($row["scoreName"]);
				$obj->setIdScore($row["idScore"]);
				$obj->setScores($row["scores"]);
				$obj->setDescribe($row["describe"]);
				$obj->setTranscript_idItem($row["Transcript_idItem"]);
				$obj->setIdAccountManage($row["idAccountManage"]);
			}
            $this->connSql->Stop();
            return $obj;

		} else {
			$this->connSql->Stop();
			// echo "The result of information processing is data false";
			return 0;
		}


	}

	public function getScoresForStudent($id) {
		$sql = "SELECT * FROM ScoresAdd,ScoresAdd_has_Account WHERE ScoresAdd.idScore=ScoresAdd_has_Account.ScoresAdd_idScore AND ScoresAdd_has_Account.Account_idAccount='" . $id . "'";
		$this->connSql->Connect();
		$result = $this->connSql->conn->query($sql);
		$scores = [];
		if (!empty($result)) {
			while ($row = $result->fetch_assoc()) {
				$obj = new ScoresAddObj();
				$obj->setScoreName($row["scoreName"]);
				$obj->setIdScore($row["idScore"]);
				$obj->setScores($row["scores"]);
				$obj->setDescribe($row["describe"]);
				$obj->setTranscript_idItem($row["Transcript_idItem"]);
				$obj->setIdAccountManage($row["idAccountManage"]);
				$scores[] = $obj;
			}
		}
		$this->connSql->Stop();
		return $scores;
	}

	public function getListScoreOfStudent($studentId) {
		$sql = "SELECT
					Transcript_idItem as idItem, sum(scores) as total
				FROM
					ScoresAdd sa,
					ScoresAdd_has_Account sha
				WHERE
					sa.idScore = sha.ScoresAdd_idScore
				AND sha.Account_idAccount = '$studentId' 
				GROUP BY (Transcript_idItem);";
		$this->connSql->Connect();
		$result = $this->connSql->conn->query($sql);
		$this->connSql->Stop();
		$listScore = [];
		if (!empty($result) && $result->num_rows){
			while ($row = $result->fetch_assoc())
				$listScore[$row['idItem']] = $row['total'];
		}
		return $listScore;
	}

	/**
    * Phạm Hoài An
    */
    public function getScoresAddNoti($id) {
		$sql = "SELECT `scoreName`, `scores`,sa.describe,`Transcript_idItem`, a.accountName, a.Permission_position FROM ScoresAdd sa, ScoresAdd_has_Account SHA, Account a WHERE SHA.Account_idAccount = '$id' AND SHA.ScoresAdd_idScore = sa.idScore and sa.idAccountManage = a.idAccount;";
		$this->connSql->Connect();
		$result = $this->connSql->conn->query($sql);
		$scores = array();
		if (!empty($result)) {
			while ($row = $result->fetch_assoc()) {
				$obj = new ScoresAddObj();
				$obj->setScoresAddObj(
					$row["accountName"]
					,$row["scoreName"]
					,$row["scores"]
					,$row["describe"]
					,$row["Transcript_idItem"]
					,$row["Permission_position"]);
				$scores[] = $obj;
			}
		}
		return $scores;
	}
}

?>
