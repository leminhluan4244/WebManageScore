<?php

/**
 * Created by PhpStorm.
 * User: tanphat
 * Date: 18/09/2017
 * Time: 09:58
 */
define("ST_ROOT", "0");
define("NORM", 1);
define("EDIT", 2);


class StructureTree {
	private $data;
	private $htmlText;
	private $privilege;

	public function __construct($data) {
		$this->data = $data;
		$this->htmlText = "";
		$this->moveLastChildOfRootToTheEnd();
	}

	/**
	 * @return string
	 */
	public function getHtmlText() {
		return $this->htmlText;
	}

	/**
	 * @param mixed $privilege
	 */
	public function setPrivilege($privilege) {
		$this->privilege = $privilege;
	}

	public function getRoot() {
		return ST_ROOT;
	}

	/**
	 * @return mixed
	 */
	public function getData() {
		return $this->data;
	}

	public function getNormMode() {
		return NORM;
	}

	public function getEditMode() {
		return EDIT;
	}

	public function moveLastChildOfRootToTheEnd(){
		$children = $this->getAllDirectChildOf(ST_ROOT);
		$lastChild = '';
		foreach ($children as $child) {
			if ($this->isLastChildOfRoot($child['idItem'])){
				$lastChild = $child;
				break;
			}
		}
		unset($this->data[$lastChild['idItem']]);
		$this->data[$lastChild['idItem']] = $lastChild;
	}

	public function isLeaf($nodeId) {
		return count($this->getAllDirectChildOf($nodeId)) == 0;
	}

	public function isLastChildOfRoot($nodeId){
		$children = $this->getAllDirectChildOf(ST_ROOT);
		$max = 0;
		foreach ($children as $child) {
			$scores = empty($child['scores']) ? 0 : (int)$child['scores'];
			if ($scores > $max)
				$max = $scores;
		}
		return !empty($children[$nodeId]['scores']) && $children[$nodeId]['scores'] == $max;
	}

	public function isChildOfRoot($nodeId){
		return $this->data[$nodeId]["IDParent"] == ST_ROOT;
	}

	public function isAncestor($ancestor, $descendant){
		$listDescendant = [];
		$this->PreOrderTreeToGetAllChildIdOf($ancestor, $listDescendant);
		foreach ($listDescendant as $des) {
			if ($des == $descendant)
				return true;
		}
		return false;
	}

	public function getAllDirectChildOf($nodeId) {
		$children = [];
		foreach ($this->data as $child) {
			if ($child['IDParent'] === $nodeId)
				$children[$child['idItem']] = $child;
		}
		return $children;
	}

	public function getLeftMostChildOf($nodeId) {
		$children = $this->getAllDirectChildOf($nodeId);
		if (empty($children))
			return null;
		foreach ($children as $child) {
			return $child;
		}
	}

	public function getNextSiblingOf($nodeId) {
		$parentId = $this->data[$nodeId]["IDParent"];
		$children = $this->getAllDirectChildOf($parentId);
		$found = false;
		foreach ($children as $child) {
			if ($found)
				return $child;
			if ($child["idItem"] === $nodeId)
				$found = true;
		}
		return null;
	}

	public function getHighestAncestor($node){
		if ($node['IDParent'] == ST_ROOT)
			return $node['idItem'];
		while ($node['IDParent'] != ST_ROOT)
			return $this->getHighestAncestor($this->data[$node['IDParent']]);
	}

	/**
	 * Lấy tất cả các mục có điểm số dưới dạng Id
	 * @param string $separateChar
	 * @return array
	 */
	public function getAllNodeIdStoreScore($separateChar = "."){
		$scoreNodeList = [];
		foreach ($this->data as $node) {
			if ($this->isLeaf($node['idItem']) && !$this->isLastChildOfRoot($node['idItem']))
				$scoreNodeList[] = str_replace(".", $separateChar, $node['idItem']);
		}
		return $scoreNodeList;
	}

	/**
	 * Lấy tất cả các mục có điểm số
	 * @return array
	 */
	public function getAllNodeStoreScore(){
		$scoreNodeList = [];
		foreach ($this->data as $node) {
			if ($this->isLeaf($node['idItem']) && !$this->isLastChildOfRoot($node['idItem']))
				$scoreNodeList[$node['idItem']] = $node;
		}
		return $scoreNodeList;
	}

	/**
	 * Lấy tất cả các mục có điểm số
	 * @return array
	 */
	public function getAllNodeNonLeaf(){
		$output = [];
		foreach ($this->data as $node) {
			if (!$this->isLeaf($node['idItem']) || $this->isLastChildOfRoot($node['idItem']))
				$output[$node['idItem']] = $node;
		}
		return $output;
	}
	
	public function PreOrderTreeToGetAllChildIdOf($nodeId, &$listId){
		$listId[] = $nodeId;
		$node = $this->getLeftMostChildOf($nodeId)["idItem"];
		while (!empty($node)){
			$this->PreOrderTreeToGetAllChildIdOf($node, $listId);
			$node = $this->getNextSiblingOf($node)["idItem"];
		}
	}

	public function PreOderTreeToHtml($nodeId, $level, $mode) {
		if ($nodeId != ST_ROOT)
			$this->htmlText .= $this->generateNodeToHtml($nodeId, $level, $mode);
		$node = $this->getLeftMostChildOf($nodeId)["idItem"];
		while (!empty($node)) {
			$this->PreOderTreeToHtml($node, $level + 1, $mode);
			$node = $this->getNextSiblingOf($node)["idItem"];
		}
	}

	function generateNodeToHtml($nodeId, $level, $mode) {
		$htmlText = "<tr class='section-$level'>";
		if ($this->isLeaf($nodeId)) {
			$htmlText .= $this->getLeafHTML($nodeId, $mode);
			$htmlText .= "</tr>";
		} else {
			$htmlText .= $this->getNonLeafHTML($nodeId, $mode);
			$htmlText .= "</tr>";
		}
		return $htmlText;
	}

	function getLeafHTML($nodeId, $mode) {
		switch ($mode) {
			case NORM:
				return $this->getLeafHTMLNormMode($nodeId);
				break;
			case EDIT:
				return $this->getLeafHTMLEditMode($nodeId);
				break;
			default:
				break;
		}
	}

	function getNonLeafHTML($nodeId, $mode) {
		switch ($mode) {
			case NORM:
				return $this->getNonLeafHTMLNormMode($nodeId);
				break;
			case EDIT:
				return $this->getNonLeafHTMLEditMode($nodeId);
				break;
			default:
				break;
		}
	}

	function getLeafHTMLEditMode($nodeId) {
		$htmlText = "";
		$content = $this->data[$nodeId]["itemName"];
		if (strpos($content, '-') === false)
			if (!$this->isLastChildOfRoot($nodeId) && !$this->isChildOfRoot($nodeId))
				$content = "- $content";
		$htmlText .=
			"<td><span class='spacing'></span>" .
				str_replace("-", "&nbsp;&nbsp;&boxh;", $content) .
			"</td>";
		$htmlText .= "<td>{$this->data[$nodeId]["scores"]}</td>";
		$htmlText .=
			"<td>
				<form action='?a=delete' method='post'>
					<input type='hidden' name='id' value='{$this->data[$nodeId]["idItem"]}'>
					<input type='hidden' name='requestName' value='delete'>
					<a href='?a=edit&id={$this->data[$nodeId]["idItem"]}' class='btn btn-primary btn-sm'>Sửa</a>
					<button class='btn btn-danger btn-sm btn-del-struct' value='delete' type='button'>
						Xóa
					</button>
				</form>
			</td>";
		return $htmlText;
	}

	function getNonLeafHTMLEditMode($nodeId) {
		$html = "<td>" . str_replace("-", "", $this->data[$nodeId]["itemName"]) . "</td>";
		if ($this->isChildOfRoot($nodeId)){
			$html = "<td>" . str_replace("-", "", $this->data[$nodeId]["itemName"]) . "</td>";
			$html .= "<td>{$this->data[$nodeId]["scores"]}</td>";
		} else
			$html = "<td colspan='2'>" . str_replace("-", "", $this->data[$nodeId]["itemName"]) . "</td>";
		$html .=
			"<td>
				<form action='?a=delete' method='post'>
					<input type='hidden' name='id' value='{$this->data[$nodeId]["idItem"]}'>
					<input type='hidden' name='requestName' value='delete'>
					<a href=\"?a=edit&id={$this->data[$nodeId]["idItem"]}\" class='btn btn-primary btn-sm'>Sửa</a>
					<button class='btn btn-danger btn-sm btn-del-struct' type='button' value='delete'>
						Xóa
					</button>
				</form>
			</td>";
		return $html;
	}

	#-------- Norm mode -------

//	function getLeafHTMLNormMode($nodeId) {
//		$htmlText = "";
//		$htmlText .= "<td>" . str_replace("-", "", $this->data[$nodeId]["itemName"]) . "</td>";
//		$htmlText .= "<td>{$this->data[$nodeId]["scores"]}</td>";
//		if ($this->isLastChildOfRoot($nodeId))
//			$htmlText .= "<td>0</td><td>0</td>";
//		else if ($this->privilege == STUDENT){
//			$htmlText .= "<td><input type='number' class='input-number' min='0'
//				max='{$this->data[$nodeId]["scores"]}' value='0'></td>";
//			$htmlText .= "<td>CVHT</td>";
//		} else {
//			$htmlText .= "<td>SV</td>";
//			$htmlText .= "<td><input type='number' class='input-number' min='0'
//				max='{$this->data[$nodeId]["scores"]}' value='0'></td>";
//		}
//		$htmlText .= "<td></td>";
//		return $htmlText;
//	}
//
//	function getNonLeafHTMLNormMode($nodeId) {
//		return "<td colspan='5'>" . str_replace("-", "", $this->data[$nodeId]["itemName"]) . "</td>";
//	}
}