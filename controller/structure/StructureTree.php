<?php

/**
 * Created by PhpStorm.
 * User: tanphat
 * Date: 18/09/2017
 * Time: 09:58
 */
define("ROOT", "0");
class StructureTree {
	private $data;
	private $htmlText;
	public function __construct($data) {
		$this->data = $data;
		$this->htmlText = "";
	}

	/**
	 * @return string
	 */
	public function getHtmlText() {
		return $this->htmlText;
	}

	public function getRoot(){
		return ROOT;
	}

	public function isLeaf($nodeId){
		return count($this->getAllDirectChildOfStructure($nodeId)) == 0;
	}

	public function getAllDirectChildOfStructure($nodeId){
		$children = [];
		foreach ($this->data as $child) {
			if ($child['IDParent'] === $nodeId)
				$children[] = $child;
		}
		return $children;
	}

	public function getLeftMostChildOf($nodeId){
		$children = $this->getAllDirectChildOfStructure($nodeId);
		if (empty($children))
			return null;
		return $children[0];
	}

	public function getNextSiblingOf($nodeId){
		$parentId = $this->data[$nodeId]["IDParent"];
		$children = $this->getAllDirectChildOfStructure($parentId);
		$found = false;
		foreach ($children as $child) {
			if ($found)
				return $child;
			if ($child["idItem"] === $nodeId)
				$found = true;
		}
		return null;
	}



	public function PreOderTreeToHtml($nodeId, $level){
		if ($nodeId != ROOT)
			$this->htmlText .= $this->generateNodeToHtml($nodeId, $level);
		$node = $this->getLeftMostChildOf($nodeId)["idItem"];
		while (!empty($node)){
			$this->PreOderTreeToHtml($node, $level + 1);
			$node = $this->getNextSiblingOf($node)["idItem"];
		}
	}

	function generateNodeToHtml($nodeId, $level){
		$htmlText = "<tr class='section-$level'>";
		if ($this->isLeaf($nodeId)){
			$htmlText .= $this->getLeafHTML($nodeId);
			$htmlText .= "</tr>";
		} else {
			$htmlText .= $this->getNonLeafHTML($nodeId);
			$htmlText .= "</tr>";
		}
		return $htmlText;
	}

	function getLeafHTML($nodeId){
		$htmlText = "";
		$htmlText .= "<td><span class='spacing'></span>" . str_replace("-", "", $this->data[$nodeId]["itemName"]) . "</td>";
		$htmlText .= "<td>{$this->data[$nodeId]["scores"]}</td>";
		$htmlText .= "<td><input type='number' class='input-number' min='0' max='{$this->data[$nodeId]["scores"]}' value='0'></td>";
		$htmlText .= "<td></td><td></td>";
		return $htmlText;
	}

	function getNonLeafHTML($nodeId){
		return "<td colspan='5'>" . str_replace("-", "", $this->data[$nodeId]["itemName"]) . "</td>";
	}
}