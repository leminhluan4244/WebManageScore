<?php
/**
 *Lớp liên kết giữa tài khoản và chi hội
 *Coder: Lê Minh Luân
 *Date:04/08/2017
 * Chỉnh sửa:2108/2017
 */

class ScoresAddHasAccountMod {


	private $connectToSQL;

	function __construct() {
		$this->connectToSQL = new ConnectToSQL();
	}

	public function addScoresAddHasAccount($account, $scoreAdd) {
		// Đẩy câu lệnh vào string
		$sql = "INSERT INTO `ScoresAdd_has_Account` (`Account_idAccount`, `ScoresAdd_idScores`) 
						VALUES('{$account->getIdAccount()}','{$scoreAdd->getIdScores()}');";
		// Thực thi câu lệnh
		$this->connectToSQL->Connect();
		$result = $this->connectToSQL->conn->query($sql);
		$this->connectToSQL->Stop();
		return $result;
	}


	public function deleteScoresAddHasAccount($account, $scoreAdd) {
		// Đẩy câu lệnh vào string
		$sql = "DELETE FROM ScoresAdd_has_Account 
						WHERE Account_idAccount='{$account->getIdAccount()}' 
						and ScoresAdd_idScores='{$scoreAdd->getIdScores()}';";
		$this->connectToSQL->Connect();
		$result = $this->connectToSQL->conn->query($sql);
		$this->connectToSQL->Stop();
		return $result;
	}
}
?>
<!---->
<?php
//
//require_once 'ScoresAddObj.php';
//require_once 'ScoresAddMod.php';
//require_once 'ScoresAddHasAccountObj.php';
//require_once 'AccountObj.php';
//require_once 'AccountMod.php';
//
//echo "<pre>";
//$acc = new AccountMod();
//$account = $acc->getAccount('B1400123');
//
//$score = new ScoresAddObj();
//$score->setScoresAddObj('AS001', "", 10, "", "I.b.1.3");
//$sahamd = new ScoresAddHasAccountMod();
//$rs = $sahamd->deleteScoresAddHasAccount($account, $score);
//var_dump($rs);
//?>
