<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 13/8/2017
 * Time: 11:03 PM
 */

class TranscriptObj {
	private $idItem;
	private $itemName;
	private $scores;
	private $describe;
	private $idParent;
	private $Account_idAccount;

	public function __construct(){
		$this->idItem = "";
		$this->itemName = "";
		$this->scores = 0;
		$this->describe = "";
		$this->idParent = "";
		$this->Account_idAccount = "0";
	}

	public function getStructureObj(){
		return $this;
	}

	public function setTranscriptObj($idItem, $itemName, $scores, $describe, $idParent, $Account_idAccount){
		$this->idItem = $idItem;
		$this->itemName = $itemName;
		$this->scores = $scores;
		$this->describe = $describe;
		$this->idParent = $idParent;
		$this->Account_idAccount = $Account_idAccount;
	}

	/**
	 * @return string
	 */
	public function getIdItem() {
		return $this->idItem;
	}

	/**
	 * @param string $idItem
	 */
	public function setIdItem($idItem) {
		$this->idItem = $idItem;
	}

	/**
	 * @return string
	 */
	public function getItemName() {
		return $this->itemName;
	}

	/**
	 * @param string $itemName
	 */
	public function setItemName($itemName) {
		$this->itemName = $itemName;
	}

	/**
	 * @return int
	 */
	public function getScores() {
		return $this->scores;
	}

	/**
	 * @param int $scores
	 */
	public function setScores($scores) {
		$this->scores = $scores;
	}

	/**
	 * @return string
	 */
	public function getDescribe() {
		return $this->describe;
	}

	/**
	 * @param string $describe
	 */
	public function setDescribe($describe) {
		$this->describe = $describe;
	}

	/**
	 * @return string
	 */
	public function getIdParent() {
		return $this->idParent;
	}

	/**
	 * @param string $idParent
	 */
	public function setIdParent($idParent) {
		$this->idParent = $idParent;
	}

	/**
	 * @return string
	 */
	public function getAccountIdAccount() {
		return $this->Account_idAccount;
	}

	/**
	 * @param string $Account_idAccount
	 */
	public function setAccountIdAccount($Account_idAccount) {
		$this->Account_idAccount = $Account_idAccount;
	}





}