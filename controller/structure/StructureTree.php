<?php

/**
 * Created by PhpStorm.
 * User: tanphat
 * Date: 18/09/2017
 * Time: 09:58
 */
class StructureTree {
	private $structureModel;
	private $htmlText;
	public function __construct() {
		$this->structureModel = new StructureMod();
		$this->htmlText = "";
	}

	/**
	 * @return string
	 */
	public function getHtmlText() {
		return $this->htmlText;
	}

	public function getRoot(){
		return $this->structureModel->getRootStructure();
	}

	public function isRoot($structureNode){
		return $this->structureModel->isRootStructure($structureNode);
	}

	public function getLeftMostChildOf($structureTree){
		$children = $this->structureModel->getAllDirectChildOfStructure($structureTree);
		if (empty($children))
			return null;
		return $children[0];
	}

	public function getNextSiblingOf($structureNode){
		$parent = new StructureObj();
		$parent->setIdItem($structureNode->getIdParent());
		$children = $this->structureModel->getAllDirectChildOfStructure($parent);
		$len = count($children);
		for ($i = 0; $i < $len; $i++){
			$child = $children[$i];
			if ($child->getIdItem() === $structureNode->getIdItem()){
				if (!empty($children[$i+1]))
					return $children[$i+1];
			}
		}
		return null;
	}



	public function PreOderTreeToHtml($structureNode, $level){
		if (!$this->isRoot($structureNode))
			$this->htmlText .= $this->generateNodeToHtml($structureNode, $level);
		$node = $this->getLeftMostChildOf($structureNode);
		while (!empty($node)){
			$this->PreOderTreeToHtml($node, $level + 1);
			$node = $this->getNextSiblingOf($node);
		}
	}

	function generateNodeToHtml($structureNode, $level){
		$htmlText = "<tr class='section-$level'>";
		if ($this->structureModel->isLeaf($structureNode)){
			$htmlText .= $this->getLeafHTML($structureNode);
			$htmlText .= "</tr>";
		} else {
			$htmlText .= $this->getNonLeafHTML($structureNode);
			$htmlText .= "</tr>";
		}
		return $htmlText;
	}

	function getLeafHTML($structureObj){
		$htmlText = "";
		$htmlText .= "<td><span class='spacing'></span>" . str_replace("-", "", $structureObj->getItemName()) . "</td>";
		$htmlText .= "<td>{$structureObj->getScores()}</td>";
		$htmlText .= "<td><input type='number' class='input-number' min='0' max='{$structureObj->getScores()}' value='0'></td>";
		$htmlText .= "<td></td><td></td>";
		return $htmlText;
	}

	function getNonLeafHTML($structureObj){
		return "<td colspan='5'>" . str_replace("-", "", $structureObj->getItemName()) . "</td>";
	}
}