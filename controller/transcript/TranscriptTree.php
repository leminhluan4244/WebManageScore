<?php
/**
 * Created by PhpStorm.
 * User: TanPhat
 * Date: 30/9/2017
 * Time: 4:49 PM
 */

if (!defined("IN_TRS"))
	die("Bad request!");

define("TR_ROOT", "0");
define("STUDENT", "cd73502828457d15655bbd7a63fb0bc8");
define("ADVISER", "c0f7bbe14aaee1b771e9ea23dd7883ea");
define("ACA_ADMIN", "d266b36972b0ecd42ff6ae2966069766");


class TranscriptTree {
	private $data;
	private $htmlText;
	private $owner;
	private $privilege;
	private $scoreList;
	private $addScoreList = [];

	public function __construct($data) {
		$this->data = $data;
		$this->htmlText = "";
		$this->calculateSummaryScore();
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
		return TR_ROOT;
	}

	/**
	 * @return mixed
	 */
	public function getData() {
		return $this->data;
	}

	/**
	 * Bảng điểm này của ai
	 * @param mixed $owner
	 */
	public function setOwner($owner) {
		$this->owner = $owner;
	}

	/**
	 * @param array $addScoreList
	 */
	public function setAddScoreList(array $addScoreList) {
		$this->addScoreList = $addScoreList;
	}

	/**
	 * @return mixed
	 */
	public function getOwner() {
		return $this->owner;
	}

	/**
	 * @param $nodeId
	 * @return bool
	 */
	public function isLeaf($nodeId) {
		return count($this->getAllDirectChildOf($nodeId)) == 0;
	}

	public function isLastChildOfRoot($nodeId) {
		$children = $this->getAllDirectChildOf(TR_ROOT);
		foreach ($children as $child) {
			if (strtolower($child['idItem']) == strtolower($nodeId) &&
				$this->isLeaf($child['idItem']) && $child['scoresMax'] == 100)
				return true;
		}
		return false;
	}

	public function isChildOfRoot($nodeId) {
		return $this->data[$nodeId]["IDParent"] == TR_ROOT;
	}

	/**
	 * @param $nodeId - string
	 * @return array
	 */
	public function getAllDirectChildOf($nodeId) {
		$children = [];
		foreach ($this->data as $child) {
			if ($child['IDParent'] === $nodeId)
				$children[] = $child;
		}
		return $children;
	}

	/**
	 * @param $nodeId - string
	 * @return mixed|null
	 */
	public function getLeftMostChildOf($nodeId) {
		$children = $this->getAllDirectChildOf($nodeId);
		if (empty($children))
			return null;
		return $children[0];
	}

	public function calculateSummaryScore() {
		$this->scoreList["finalScore"] = 0;
		$this->scoreList["studentScore"] = 0;
		$this->scoreList["adviserScore"] = 0;
		$children = $this->getAllDirectChildOf(TR_ROOT);
		foreach ($children as $child) {
			$this->scoreList["finalScore"] += $child["scores"];
			$this->scoreList["studentScore"] += $child["scoresStudent"];
			$this->scoreList["adviserScore"] += $child["scoresTeacher"];
		}
	}

	/**
	 * @param $nodeId - string
	 * @return mixed|null - array
	 */
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

	public function PreOrderTreeToGetAllChildIdOf($nodeId, &$listId) {
		$listId[] = $nodeId;
		$node = $this->getLeftMostChildOf($nodeId)["idItem"];
		while (!empty($node)) {
			$this->PreOrderTreeToGetAllChildIdOf($node, $listId);
			$node = $this->getNextSiblingOf($node)["idItem"];
		}
	}

	public function PreOderTreeToHtml($nodeId, $level) {
		if ($nodeId != TR_ROOT)
			$this->htmlText .= $this->generateNodeToHtml($nodeId, $level);
		$node = $this->getLeftMostChildOf($nodeId)["idItem"];
		while (!empty($node)) {
			$this->PreOderTreeToHtml($node, $level + 1);
			$node = $this->getNextSiblingOf($node)["idItem"];
		}
	}

	function generateNodeToHtml($nodeId, $level) {
		$htmlText = "<tr class='section-$level'";
		if ($this->isLeaf($nodeId)) {
			$htmlText .= ">";
			$htmlText .= $this->getLeafHTML($nodeId);
			$htmlText .= "</tr>";
		} else {
			if ($this->isChildOfRoot($nodeId))
				$htmlText .= " id='$nodeId'>";
			else $htmlText .= ">";
			$htmlText .= $this->getNonLeafHTML($nodeId);
			$htmlText .= "</tr>";
		}
		return $htmlText;
	}

	function getLeafHTML($nodeId) {
		$inputName = str_replace(".", "_", $nodeId);
		$itemName = $this->data[$nodeId]["itemName"];
		$min = 0;
		$max = $this->data[$nodeId]["scoresMax"];
		$hintScore = 0;
		if (isset($this->addScoreList[$nodeId])){
			$hintScore = $this->data[$nodeId]['scoresDefault'] + $this->addScoreList[$nodeId];
			if ($hintScore < $min)
				$hintScore = $min;
			if ($hintScore > $max)
				$hintScore = $max;
		}
		$studentScore = $this->data[$nodeId]["scoresStudent"];
		$adviserScore = $this->data[$nodeId]["scoresTeacher"];
		$finalScore = $this->data[$nodeId]["scores"];

		$htmlText = "";
		$htmlText .= "<td>" . str_replace("-", "", $itemName) . "</td>";
		$htmlText .= "<td>$max</td>";
		$htmlText .= "<td>$hintScore</td>";
		if ($this->isLastChildOfRoot($nodeId)) {
			$htmlText .= "<td>{$this->scoreList["studentScore"]}</td>";
			$htmlText .= "<td>{$this->scoreList["adviserScore"]}</td>";
			$htmlText .= "<td>{$this->scoreList["finalScore"]}</td>";
			return $htmlText;
		}
		if ($this->privilege == STUDENT) {
			$htmlText .= "<td>" . self::generateSelect($inputName, $min, $max, $studentScore, "select-score") . "</td>";
			$htmlText .= "<td>$adviserScore</td>";
			$htmlText .= "<td>$finalScore</td>";
		}
		if ($this->privilege == ADVISER) {
			$htmlText .= "<td>$studentScore</td>";
			$htmlText .= "<td>" . self::generateSelect($inputName, $min, $max, $adviserScore, "select-score") . "</td>";
			$htmlText .= "<td>$finalScore</td>";
		}
		if ($this->privilege == ACA_ADMIN) {
			$htmlText .= "<td>$studentScore</td>";
			$htmlText .= "<td>$adviserScore</td>";
			$htmlText .= "<td>" . self::generateSelect($inputName, $min, $max, $finalScore, "select-score") . "</td>";
		}
		return $htmlText;
	}

	function getNonLeafHTML($nodeId) {
		if ($this->isChildOfRoot($nodeId)) {
			$htmlText = "";
			$htmlText .= "<td>" . str_replace("-", "", $this->data[$nodeId]["itemName"]) . "</td>";
			$htmlText .= "<td>{$this->data[$nodeId]["scoresMax"]}</td>";
			$htmlText .= "<td></td>";
			$htmlText .= "<td>{$this->data[$nodeId]["scoresStudent"]}</td>";
			$htmlText .= "<td>{$this->data[$nodeId]["scoresTeacher"]}</td>";
			$htmlText .= "<td>{$this->data[$nodeId]["scores"]}</td>";
			return $htmlText;
		}
		return "<td colspan='6'>" . str_replace("-", "", $this->data[$nodeId]["itemName"]) . "</td>";
	}

	static function generateSelect($name, $min, $max, $val, $class) {
		$htmlText = "";
		$htmlText .= "<select name='$name' class='$class'>";
		for ($i = $min; $i <= $max; $i++) {
			$htmlText .= "<option value='$i' " . (($i == $val) ? "selected" : "") . " >$i</option>";
		}
		$htmlText .= "</select>";
		return $htmlText;
	}

	static function generateSpinner($name, $min, $max, $val, $class) {
		return "<input type='number' name='{$name}' class='$class' min='$min' max='{$max}' value='{$val}'>";
	}
}