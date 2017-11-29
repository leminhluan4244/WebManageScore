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
				$this->isLeaf($child['idItem']) && $child['scores'] == 100)
				return true;
		}
		return false;
	}

	public function isChildOfRoot($nodeId) {
		return $this->data[$nodeId]["IDParent"] == TR_ROOT;
	}

	public function getLastChildOfRoot() {
		$children = $this->getAllDirectChildOf(TR_ROOT);
		foreach ($children as $child) {
			if ($this->isLeaf($child['idItem']) && $child['scores'] == 100)
				return $child;
		}
		return false;
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
		$this->scoreList["sum"] = ["finalScore" => 0, "adviserScore" => 0, "studentScore" => 0];
		$children = $this->getAllDirectChildOf(TR_ROOT);
		foreach ($children as $child) {
			if ($this->isLeaf($child['idItem']))
				continue;
			$this->scoreList["sum"]["finalScore"] += $this->scoreList[$child['idItem']]["finalScore"];
			$this->scoreList["sum"]["studentScore"] += $this->scoreList[$child['idItem']]["studentScore"];
			$this->scoreList["sum"]["adviserScore"] += $this->scoreList[$child['idItem']]["adviserScore"];
		}
	}

	private function preOderTreeToCalcScoreOfNode($nodeId, $ancestor, $max) {
		if ($this->isLeaf($nodeId)) {
			$this->scoreList[$ancestor]["studentScore"] += $this->data[$nodeId]['scoresStudent'];
			$this->scoreList[$ancestor]["adviserScore"] += $this->data[$nodeId]['scoresTeacher'];
			$this->scoreList[$ancestor]["finalScore"] += $this->data[$nodeId]['scores'];
			if ($this->scoreList[$ancestor]["studentScore"] > $max)
				$this->scoreList[$ancestor]["studentScore"] = $max;
			if ($this->scoreList[$ancestor]["adviserScore"] > $max)
				$this->scoreList[$ancestor]["adviserScore"] = $max;
			if ($this->scoreList[$ancestor]["finalScore"] > $max)
				$this->scoreList[$ancestor]["finalScore"] = $max;
		}
		$node = $this->getLeftMostChildOf($nodeId)["idItem"];
		while (!empty($node)) {
			$this->preOderTreeToCalcScoreOfNode($node, $ancestor, $max);
			$node = $this->getNextSiblingOf($node)["idItem"];
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
		#nút lá cuối cùng là phần tổng kết
		if ($this->isLastChildOfRoot($nodeId)) {
			return "";
		}

		$inputName = str_replace(".", "_", $nodeId);
		$itemName = $this->data[$nodeId]["itemName"];
		$min = 0;
		$max = empty($this->data[$nodeId]['scoresMax']) ? 0: $this->data[$nodeId]['scoresMax'];
		$studentScore = empty($this->data[$nodeId]["scoresStudent"]) ? 0: $this->data[$nodeId]["scoresStudent"];
		$adviserScore = empty($this->data[$nodeId]["scoresTeacher"]) ? 0: $this->data[$nodeId]["scoresTeacher"];
		$finalScore = empty($this->data[$nodeId]["scores"]) ? 0: $this->data[$nodeId]["scores"];

		$hintScore = 0;
		if ($this->data[$nodeId]['scoresDefault']) {
			$hintScore = $this->data[$nodeId]['scoresDefault'];
			if (isset($this->addScoreList[$nodeId])){
				$hintScore += $this->addScoreList[$nodeId];
				if ($hintScore < $min)
					$hintScore = $min;
				if ($hintScore > $max)
					$hintScore = $max;
			}
		}

		$htmlText = "";
		if ($this->isChildOfRoot($nodeId))
			$htmlText .= "<td>" . str_replace("-", " ", $itemName) . "</td>";
		else
			$htmlText .= "<td>&nbsp;&nbsp;&nbsp;&nbsp;&blacksquare; " . str_replace("-", " ", $itemName) . "</td>";
		$htmlText .= "<td>$max</td>";
		$htmlText .= "<td>$hintScore</td>";

		if ($this->privilege == STUDENT)
			$htmlText .= $this->getStudentLeafHTML($studentScore, $adviserScore, $finalScore, $inputName, $min, $max);

		if ($this->privilege == ADVISER)
			$htmlText .= $this->getAdviserLeafHTML($studentScore, $adviserScore, $finalScore, $inputName, $min, $max);

		if ($this->privilege == ACA_ADMIN)
			$htmlText .= $this->getFinalLeafHTML($studentScore, $adviserScore, $finalScore, $inputName, $min, $max);
		return $htmlText;
	}

	private function getStudentLeafHTML($studentScore, $adviserScore, $finalScore, $inputName, $min, $max) {
		$htmlText = "";
//		$htmlText .= "<td>" . self::generateSelect($inputName, $min, $max, $studentScore, "select-score") . "</td>";
		$htmlText .= "<td>" . self::generateSpinnerAndHiddenValue($inputName, $min, $max, $studentScore, "input-number") . "</td>";
		$htmlText .= "<td>$adviserScore</td>";
		$htmlText .= "<td>$finalScore</td>";
		return $htmlText;
	}

	private function getAdviserLeafHTML($studentScore, $adviserScore, $finalScore, $inputName, $min, $max) {
		$htmlText = "";
		$htmlText .= "<td><span class='std-score' data-name='{$inputName}'>{$studentScore}</span></td>";
//		$htmlText .= "<td>" . self::generateSelect($inputName, $min, $max, $adviserScore, "select-score") . "</td>";
		$htmlText .= "<td>" . self::generateSpinnerAndHiddenValue($inputName, $min, $max, $adviserScore, "input-number") . "</td>";
		$htmlText .= "<td>$finalScore</td>";
		return $htmlText;
	}

	private function getFinalLeafHTML($studentScore, $adviserScore, $finalScore, $inputName, $min, $max) {
		$htmlText = "";
		$htmlText .= "<td><span class='std-score' data-name='{$inputName}'>{$studentScore}</span></td>";
		$htmlText .= "<td>$adviserScore</td>";
//		$htmlText .= "<td>" . self::generateSelect($inputName, $min, $max, $finalScore, "select-score") . "</td>";
		$htmlText .= "<td>" . self::generateSpinnerAndHiddenValue($inputName, $min, $max, $finalScore, "input-number") . "</td>";
		return $htmlText;
	}

	/**
	 * Mục tổng kết điểm
	 */
	public function generateLastChildHTML() {
		$lastChild = $this->getLastChildOfRoot();
		if (empty($lastChild))
			return;
		$this->calculateSummaryScore();
		$htmlText = "<tr class='section-1'>";
		$htmlText .= "<td><strong>" . str_replace("-", "", $lastChild['itemName']) . "</strong></td>";
		$htmlText .= "<td>{$lastChild['scores']}</td>";
		$htmlText .= "<td></td>";
		$htmlText .= "<td>{$this->scoreList["sum"]["studentScore"]}</td>";
		$htmlText .= "<td>{$this->scoreList["sum"]["adviserScore"]}</td>";
		$htmlText .= "<td>{$this->scoreList["sum"]["finalScore"]}</td>";
		$htmlText .= "</tr>";
		$this->htmlText .= $htmlText;
	}

	/**
	 * Các mục không có điểm
	 * @param $nodeId
	 * @return string
	 */
	function getNonLeafHTML($nodeId) {
		$htmlText = "";
		if ($this->isChildOfRoot($nodeId)) {
			$this->calculateScoreInNode($nodeId);
			$htmlText .= "<td><strong>" . str_replace("-", "", $this->data[$nodeId]["itemName"]) . "</strong></td>";
			$htmlText .= "<td>{$this->data[$nodeId]["scores"]}</td>";
			$htmlText .= "<td></td>";
			$htmlText .= "<td>{$this->scoreList[$nodeId]['studentScore']}</td>";
			$htmlText .= "<td>{$this->scoreList[$nodeId]['adviserScore']}</td>";
			$htmlText .= "<td>{$this->scoreList[$nodeId]['finalScore']}</td>";
			return $htmlText;
		}
		if (preg_match('/(a|b|c|d|e)\./i', $this->data[$nodeId]["itemName"]))
			$htmlText = "<td colspan='6'><strong>"
				. str_replace("-", "", $this->data[$nodeId]["itemName"])
				. "</strong></td>";
		else
			$htmlText = "<td colspan='6'><strong> &boxh; "
				. str_replace("-", "", $this->data[$nodeId]["itemName"])
				. "</strong></td>";
//		$htmlText = "<th colspan='6'>" . str_replace("-", "", $this->data[$nodeId]["itemName"]) . "</th>
//					<th style='display: none'></th>
//					<th style='display: none'></th>
//					<th style='display: none'></th>
//					<th style='display: none'></th>
//					<th style='display: none'></th>";
		return $htmlText;
	}

	private function calculateScoreInNode($nodeId) {
		if (!isset($this->scoreList[$nodeId]['studentScore']))
			$this->scoreList[$nodeId]['studentScore'] = 0;
		if (!isset($this->scoreList[$nodeId]['adviserScore']))
			$this->scoreList[$nodeId]['adviserScore'] = 0;
		if (!isset($this->scoreList[$nodeId]['finalScore']))
			$this->scoreList[$nodeId]['finalScore'] = 0;
		$this->preOderTreeToCalcScoreOfNode($nodeId, $nodeId, $this->data[$nodeId]['scores']);
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

	static function generateSpinnerAndHiddenValue($name, $min, $max, $val, $class) {
		$htmlText = "";
		$htmlText .= "<input type='number' name='{$name}' class='$class' min='$min' max='{$max}' value='{$val}'>";
		$htmlText .= "<span style='display: none'>{$val}</span>";
		return $htmlText;
	}
}