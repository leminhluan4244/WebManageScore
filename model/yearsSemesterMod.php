<?php

/**
 * Created by PhpStorm.
 * User: tanphat
 * Date: 06/08/2017
 * Time: 12:23
 */

class yearsSemesterMod {
	private $connSQL;

	public function __construct() {
		$this->connSQL = new ConnectToSQL();
	}


    public function getData(){
        $sql = "SELECT *  FROM Years_semester";
        $this->connSQL->Connect();
        $result = $this->connSQL->conn->query($sql);
        $practices = new PractiseScoresObj();
        if ($result->num_rows > 0){
            while ($row = $result->fetch_assoc()){
                $practices->setSemester($row['semester']);
                $practices->setYears($row['years']);
            }

        }
        $this->connSQL->Stop();
        return $practices;
    }


	/**
	 * Thêm điểm cho account trong năm học, học kỳ đó
	 * @param $pcObj - PractiseScoresObj
	 * @return bool
	 */
	public function addData($pcObj){
		$sql = "insert into Years_semester
				values(
					'{$pcObj->getSemester()}',
					'{$pcObj->getYears()}'
				)";
		$this->connSQL->Connect();
		$result = $this->connSQL->conn->query($sql);
		$this->connSQL->Stop();
		return $result;
	}

	/**
	 * Xóa điểm của tài khoản vào năm học, học kỳ được chỉ định
	 * @param $pcObj - PractiseScoresObj
	 * @return bool
	 */
	public function deleteData($pcObj){
		$sql = "delete from Years_semester
				where 
				semester = '{$pcObj->getSemester()}'
				and years = '{$pcObj->getYears()}'";
		$this->connSQL->Connect();
		$result = $this->connSQL->conn->query($sql);
		$this->connSQL->Stop();
		return $result;
	}
    public function deleteDataAll(){
        $sql = "delete from Years_semester where 1";
        $this->connSQL->Connect();
        $result = $this->connSQL->conn->query($sql);
        $this->connSQL->Stop();
        return $result;
    }

	/**
	 * Cập nhật lại điểm cho tài khoản vào năm học học kỳ chỉ định
	 * @param $pcObj - PractiseScoresObj
	 * @return bool
	 */
	public function updatePractiseScores($pcObj){
		$sql = "update Years_semesterset semester = '{$pcObj->getSemester()}',years = '{$pcObj->getYears()}'
				where
				1";
		$this->connSQL->Connect();
		$result = $this->connSQL->conn->query($sql);
		$this->connSQL->Stop();
		return $result;
	}
}