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
		$sql = "insert into structure(`idItem`, `itemName`, `scores`, `describe`, `IDParent`, `scoresDefault`) 
				values(
					'{$structureObj->getIdItem()}',
					'{$structureObj->getItemName()}',
					'{$structureObj->getScores()}',
					'{$structureObj->getDescribe()}',
					'{$structureObj->getIdParent()}', 
					'{$structureObj->getScoreDefault()}');";
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
			$structureObj->setStructureObj(
				$structureRow['idItem'],
				$structureRow['itemName'],
				$structureRow['scores'],
				$structureRow['describe'],
				$structureRow['IDParent'],
				$structureRow['scoresDefault']);
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
 				`IDParent` = '{$structureObj->getIdParent()}',
 				`scoresDefault` = '{$structureObj->getScoreDefault()}' 
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

	public function getEntireStructureTable(){
		$sql = "select * from structure";
		$this->connSQL->Connect();
		$result = $this->connSQL->conn->query($sql);
		$this->connSQL->Stop();
		$board = [];
		if (!empty($result)){
			while ($row = $result->fetch_assoc())
				$board[$row["idItem"]] = $row;
		}
		return $board;
	}

	public function deleteStructureHasParent($idParent){
		$sql = "delete from structure where IDParent = '{$idParent}'";
		$this->connSQL->Connect();
		$result = $this->connSQL->conn->query($sql);
		$this->connSQL->Stop();
		return $result;
	}

	/**
	 * Lấy tất cả các con trực tiếp của item đó
	 * @param $structureObj
	 * @return array
	 */
	public function getAllDirectChildOfStructure($structureObj){
		$children = array();
		$id = $structureObj->getIdItem();
		$sql = "select * from structure where IDParent = '$id'";
		$this->connSQL->Connect();
		$result = $this->connSQL->conn->query($sql);
		if (!empty($result)){
			while ($row = $result->fetch_assoc()){
				$child = new StructureObj();
				$child->setStructureObj(
					$row['idItem'],
					$row['itemName'],
					$row['scores'],
					$row['describe'],
					$row['IDParent'],
					$row['scoresDefault']
				);
				$children[] = $child;
			}
		}
		return $children;
	}

//	public function isChildOfRoot($structureObj){
//		return $structureObj->getIdParent() === ROOT_STRUCTURE;
//	}
//
//	public function isLeaf($structureObj){
////		return $structureObj->getScores() > 0;
//		return empty($this->getAllDirectChildOfStructure($structureObj));
//	}
}