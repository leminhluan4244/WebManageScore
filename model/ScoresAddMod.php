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
        $sql = "INSERT INTO ScoresAdd (idScores, scoreName, scores, decribe, Structure_idItem)
						VALUES('".$cores->getIdScores()."',
						'".$cores->getScoreName()."',
						'".$cores->getScores()."',
						'".$cores->getDecribe()."',
						'".$cores->getStructure_idItem()."')";

        $this->connSql->Connect();
        if ($this->connSql->conn->query($sql) === true) {
            echo "Updation is successful!";
        } else {
            echo "Updation is not successful!" . $this->connSql->error;
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
                  Structure_idItem='".$cores->getStructure_idItem(). "'
                  WHERE idScores='".$cores->getIdScores()."'";

        $this->connSql->Connect();
        if ($this->connSql->conn->query($sql) === TRUE) {
            echo "Updation is successful!";
        } else {
            echo "Updation is not successful!" . $this->connSql->error;
        }
        $this->connSql->Stop();
    }

    //3. Hàm xóa
    public function deleteScoresAdd($cores)
    {

        $sql = "DELETE FROM ScoresAdd
						WHERE idScores='".$cores->getIdScores()."';";

        $this->connSql->Connect();
        if ($this->connSql->conn->query($sql) === TRUE) {
            echo "Deletion is successful! ";
        } else {
            echo "Deletion is not successful! " . $this->connSql->error;
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
            $obj = new ScoresAddObj();
            $list = array();
            while ($row = $result->fetch_assoc()) {
                $obj->setScoreName($row["scoreName"]);
                $obj->setIdScore($row["idScores"]);
                $obj->setScores($row["scores"]);
                $obj->setDecribe($row["decribe"]);
                $obj->setStructure_idItem($row["Structure_idItem"]);
                $list[$k] = $obj;
                $k++;
            }

        } else {
            echo "The result of information processing is data false";
        }

        $this->connSql->Stop();
        return $list;
    }

}
    /* Kiểm tra hàm có viết đúng hay không ?
    #1. Hàm thêm
    $sore_mod = new ScoresAddMod();
    $core_obj = new ScoresAddObj();
    $core_obj->setScoresAddObj("tho","demo", "9", "Good","B1400704","AAA");
    $sore_mod->addScoresAdd($core_obj);
    #2. Hàm cập nhật
    $sore_mod = new ScoresAddMod();
    $core_obj = new ScoresAddObj();
    $core_obj->setScoresAddObj("tho", "demo", "9", "Good","B1400704","AAA");
    $sore_mod->updateScoresAdd($core_obj);
    #3. Hàm xóa
    $sore_mod = new ScoresAddMod();
    $core_obj = new ScoresAddObj();
    $core_obj->setScoresAddObj("SC01", "demo", "10", "Good","B1400704", "SR01");
    $sore_mod->deleteClass($core_obj);
    #4. Hàm trả về danh sách các điểm cộng trừ
    $sore_mod = new ScoresAddMod();
    $core_obj = new ScoresAddObj();
    $getlist = array();
    $getlist = $sore_mod->getScoresAdd();
    foreach ($getlist as $key => $value) {
        echo $key . "->" . $value->getIdScores() . " - " . $value->getDecribe(); }
    */
?>
