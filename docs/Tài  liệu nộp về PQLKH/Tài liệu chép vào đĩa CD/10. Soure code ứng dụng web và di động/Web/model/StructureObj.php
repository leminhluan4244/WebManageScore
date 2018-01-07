<?php
/**
 * Created by PhpStorm.
 * User: TanPhat
 * Date: 5/8/2017
 * Time: 5:42 PM
 */

class StructureObj implements \JsonSerializable{
	private $idItem;
	private $itemName;
	private $scores;
	private $describe;
	private $idParent;
	private $scoreDefault;

	public function __construct(){
		$this->idItem = "";
		$this->itemName = "";
		$this->scores = 0;
		$this->describe = "";
		$this->idParent = "0";
		$this->scoreDefault = 0;
	}

	public function getStructureObj(){
		return $this;
	}

	public function setStructureObj($idItem, $itemName, $scores, $describe, $idParent, $scoreDefault){
		$this->idItem = $idItem;
		$this->itemName = $itemName;
		$this->scores = $scores;
		$this->describe = $describe;
		$this->idParent = $idParent;
		$this->scoreDefault = $scoreDefault;
	}

	/**
	 * @return mixed
	 */
	public function getScores() {
		return $this->scores;
	}

	/**
	 * @return mixed
	 */
	public function getItemName() {
		return $this->itemName;
	}

	/**
	 * @return mixed
	 */
	public function getIdParent() {
		return $this->idParent;
	}

	/**
	 * @return mixed
	 */
	public function getIdItem() {
		return $this->idItem;
	}

	/**
	 * @return mixed
	 */
	public function getDescribe() {
		return $this->describe;
	}

	/**
	 * @param mixed $scores
	 */
	public function setScores($scores) {
		$this->scores = $scores;
	}

	/**
	 * @param mixed $itemName
	 */
	public function setItemName($itemName) {
		$this->itemName = $itemName;
	}

	/**
	 * @param mixed $idParent
	 */
	public function setIdParent($idParent) {
		$this->idParent = $idParent;
	}

	/**
	 * @param mixed $idItem
	 */
	public function setIdItem($idItem) {
		$this->idItem = $idItem;
	}

	/**
	 * @param mixed $describe
	 */
	public function setDescribe($describe) {
		$this->describe = $describe;
	}

	/**
	 * @param int $scoreDefault
	 */
	public function setScoreDefault($scoreDefault) {
		$this->scoreDefault = $scoreDefault;
	}

	/**
	 * @return int
	 */
	public function getScoreDefault() {
		return $this->scoreDefault;
	}

	public function jsonSerialize() {
        return get_object_vars($this);
    }
}