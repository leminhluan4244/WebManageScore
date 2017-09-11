<?php
/**
 * Created by PhpStorm.
 * User: TanPhat
 * Date: 5/8/2017
 * Time: 5:43 PM
 */


class StructureMod {
	private $connSQL;

	public function __construct() {
		$this->connSQL = new ConnectToSQL();
	}

	public function addStructure($structureObj){
		$sql = "insert into structure(`idItem`, `itemName`, `scores`, `describe`, `IDParent`) 
				values('{$structureObj->getIdItem()}','{$structureObj->getItemName()}','{$structureObj->getScores()}','{$structureObj->getDescribe()}','{$structureObj->getIdParent()}');";
		$this->connSQL->Connect();
		$result = $this->connSQL->conn->query($sql);
		$this->connSQL->Stop();
		return $result;
	}

	public function getStructure($structureId){
		$sql = "select * from structure where idItem = '{$structureId}'";
		$structureObj = new StructureObj();
		$this->connSQL->Connect();
		$result = $this->connSQL->conn->query($sql);
		if ($result->num_rows > 0){
			$structureRow = $result->fetch_assoc();
			$structureObj->setStructureObj($structureRow['idItem'], $structureRow['itemName'], $structureRow['scores'], $structureRow['describe'], $structureRow['IDParent']);
		}
		$this->connSQL->Stop();
		return $structureObj;
	}

	public function deleteStructure($structureId){
		$sql = "delete from structure where idItem = '{$structureId}'";
		$this->connSQL->Connect();
		$result = $this->connSQL->conn->query($sql);
		$this->connSQL->Stop();
		return $result;
	}

	public function updateStructure($structureObj){
		$sql = "update structure set
 				`itemName` = '{$structureObj->getItemName()}',
 				`scores` = '{$structureObj->getScores()}',
 				`describe` = '{$structureObj->getDescribe()}',
 				`IDParent` = '{$structureObj->getIdParent()}'
				where `idItem` = '{$structureObj->getIdItem()}'";
		$this->connSQL->Connect();
		$result = $this->connSQL->conn->query($sql);
		$this->connSQL->Stop();
		return $result;
	}

	/**
	 * Trả về danh sách id các mục trong bảng điểm
	 * @return array
	 */
	public function getStructureAll(){
		$sql = "select idItem from structure";
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