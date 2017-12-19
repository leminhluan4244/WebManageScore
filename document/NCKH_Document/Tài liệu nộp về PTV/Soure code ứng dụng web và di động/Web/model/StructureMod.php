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

	public function addStructure($StructureObj){
		$sql = "insert into Structure(`idItem`, `itemName`, `scores`, `describe`, `IDParent`, `scoresDefault`) 
				values(
					'{$StructureObj->getIdItem()}',
					'{$StructureObj->getItemName()}',
					'{$StructureObj->getScores()}',
					'{$StructureObj->getDescribe()}',
					'{$StructureObj->getIdParent()}', 
					'{$StructureObj->getScoreDefault()}');";
		$this->connSQL->Connect();
		$result = $this->connSQL->conn->query($sql);
		$this->connSQL->Stop();
		return $result;
	}

	public function getStructure($StructureId){
		$sql = "select * from Structure where idItem = '{$StructureId}'";
		$StructureObj = new StructureObj();
		$this->connSQL->Connect();
		$result = $this->connSQL->conn->query($sql);
		if ($result->num_rows > 0){
			$StructureRow = $result->fetch_assoc();
			$StructureObj->setStructureObj(
				$StructureRow['idItem'],
				$StructureRow['itemName'],
				$StructureRow['scores'],
				$StructureRow['describe'],
				$StructureRow['IDParent'],
				$StructureRow['scoresDefault']);
		}
		$this->connSQL->Stop();
		return $StructureObj;
	}

	public function deleteStructure($StructureId){
		$sql = "delete from Structure where idItem = '{$StructureId}'";
		$this->connSQL->Connect();
		$result = $this->connSQL->conn->query($sql);
		$this->connSQL->Stop();
		return $result;
	}

	public function updateStructure($StructureObj){
		$sql = "update Structure set
 				`itemName` = '{$StructureObj->getItemName()}',
 				`scores` = '{$StructureObj->getScores()}',
 				`describe` = '{$StructureObj->getDescribe()}',
 				`IDParent` = '{$StructureObj->getIdParent()}',
 				`scoresDefault` = '{$StructureObj->getScoreDefault()}' 
				where `idItem` = '{$StructureObj->getIdItem()}'";
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
		$sql = "select idItem from Structure";
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
		$sql = "select * from Structure";
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
		$sql = "delete from Structure where IDParent = '{$idParent}'";
		$this->connSQL->Connect();
		$result = $this->connSQL->conn->query($sql);
		$this->connSQL->Stop();
		return $result;
	}

	/**
	 * Lấy tất cả các con trực tiếp của item đó
	 * @param $StructureObj
	 * @return array
	 */
	public function getAllDirectChildOfStructure($StructureObj){
		$children = array();
		$id = $StructureObj->getIdItem();
		$sql = "select * from Structure where IDParent = '$id'";
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
	/**
	 * Lấy tất cả các idItem có IDParent = '0'
	 * Android
	 * @return array
	 */
	public function getEntireStructureTable2(){
		$entire = array();
		$sql = "select * from structure";
		$this->connSQL->Connect();
		$result = $this->connSQL->conn->query($sql);
		if (!empty($result)){
			while ($row = $result->fetch_assoc()){
				$respone = new StructureObj();
				$respone->setStructureObj(
					$row['idItem'],
					$row['itemName'],
					$row['scores'],
					$row['describe'],
					$row['IDParent'],
					$row['scoresDefault']
				);
				$entire[] = $respone;
			}
		}
		return $entire;
	}

	/**
	 * Lấy tất cả các con trực tiếp của item đó
	 * và có scoresDefaul khác null
	 * @param $StructureObj
	 * @return array
	 */
	public function getAllDirectChildOfStructure2($itemParent, $itemChild){
		$children = array();
		$sql = "SELECT * from structure WHERE idItem like '$itemChild%' and scores > 0";
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

	public function getMaxScore(){
		$sql = "select max(scores) as max from structure where IDParent = 0;";
		$this->connSQL->Connect();
		$result = $this->connSQL->conn->query($sql);
		$this->connSQL->Stop();
		$output = 100;
		if (!empty($result) && $result->num_rows > 0)
			$output = $result->fetch_assoc()['max'];
		return $output;
	}

//	public function isChildOfRoot($StructureObj){
//		return $StructureObj->getIdParent() === ROOT_Structure;
//	}
//
//	public function isLeaf($StructureObj){
////		return $StructureObj->getScores() > 0;
//		return empty($this->getAllDirectChildOfStructure($StructureObj));
//	}
}