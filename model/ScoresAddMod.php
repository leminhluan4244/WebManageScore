<?php
/**
 * Created by PhpStorm.
 * User: Huynh Hoang Tho
 * Date: 06/08/2017
 * Time: 9:55 SA
 */

class ScoresAddMod
{
    private $connSql;

    function __construct()
    {
        $this->connSql = new ConnectToSQL();
    }


    //1. Hàm thêm
    public function addScoresAdd($cores){
        $sql = "INSERT INTO ScoresAdd (idScore, scoreName, scores, decribe, Transcipt_idItem,idAccountManage)
						VALUES('".$cores->getIdScore()."',
						'".$cores->getScoreName()."',
						'".$cores->getScores()."',
						'".$cores->getDecribe()."',
						'".$cores->getTranscript_idItem()."',
						'".$cores->getIdAccountManage()."')";

        $this->connSql->Connect();
        if ($this->connSql->conn->query($sql) === true) {
           // echo "Updation is successful!";
        } else {
          //  echo "Updation is not successful!" . $this->connSql->error;
        }
        $this->connSql->Stop();
    }

    //2. Hàm cập nhật
    public function updateScoresAdd($cores)
    {
        $sql = "UPDATE ScoresAdd SET
                  scoreName='".$cores->getScoreName(). "',
                  scores='".$cores->getScores(). "',
                  decribe='".$cores->getDecribe(). "',
                  Transcript_idItem ='".$cores->getTranscript_idItem()."',
				  idAccountManage='".$cores->getIdAccountManage()."'
                  WHERE idScore='".$cores->getIdScore()."'";

        $this->connSql->Connect();
        if ($this->connSql->conn->query($sql) === TRUE) {
          //  echo "Updation is successful!";
        } else {
          //  echo "Updation is not successful!" . $this->connSql->error;
        }
        $this->connSql->Stop();
    }

    //3. Hàm xóa
    public function deleteScoresAdd($cores)
    {

        $sql = "DELETE FROM ScoresAdd
						WHERE idScore='".$cores->getIdScore()."';";

        $this->connSql->Connect();
        if ($this->connSql->conn->query($sql) === TRUE) {
           // echo "Deletion is successful! ";
        } else {
          //  echo "Deletion is not successful! " . $this->connSql->error;
        }
        $this->connSql->Stop();
    }
    //4. Hàm trả về danh sách các điểm cộng trừ
    public function getScoresAdd()
    {
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
                $obj->setDecribe($row["decribe"]);
                $obj->setTranscript_idItem($row["Transcript_idItem"]);
                $obj->setIdAccountManage($row["idAccountManage"]);
                $list[$k] = $obj;
                $k++;
            }

        } else {
           // echo "The result of information processing is data false";
        }

        $this->connSql->Stop();
        return $list;
    }
    //Trả về các bảng điểm theo một người quản lý đã tạo
    public function getScoresAddByAccount($idManage)
    {
        $sql = "SELECT * FROM ScoresAdd WHERE idAccountManage='".$idManage."'";
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
                $obj->setDecribe($row["decribe"]);
                $obj->setTranscript_idItem($row["Transcript_idItem"]);
                $obj->setIdAccountManage($row["idAccountManage"]);
                $list[$k] = $obj;
                $k++;
            }

        } else {
            // echo "The result of information processing is data false";
        }

        $this->connSql->Stop();
        return $list;
    }

}
?>
