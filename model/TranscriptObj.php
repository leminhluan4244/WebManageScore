<?php
/**
 * Created by PhpStorm.
 * User: TanPhat
 * Date: 5/8/2017
 * Time: 5:42 PM
 */

class TranscriptObj implements \JsonSerializable{

    private $idItem;
    private $Account_idAccount;
    private $itemName;
    private $finalScores;
    private $describe;
    private $idParent;
    private $scoresDefault;
    private $scoresMax;
    private $scoresStudent;
    private $scoresTeacher;


    public function __construct(){
        $this->idItem = '';
        $this->Account_idAccount = '';
        $this->itemName='';
        $this->finalScores = 0;
        $this->describe = '';
        $this->idParent = '';
        $this->scoresDefault = 0;
        $this->scoresMax=0;
        $this->scoresStudent = 0;
        $this->scoresTeacher = 0;
    }

    public function getTranscriptObj() {
        return $this;
    }

    public function setTranscriptObj($idItem, $Account_idAccount, $itemName, $finalScores, $describe, $idParent, $scoresDefault, $scoresMax, $scoresStudent, $scoresTeacher){
        $this->idItem = $idItem;
        $this->Account_idAccount = $Account_idAccount;
        $this->itemName=$itemName;
        $this->finalScores = $finalScores;
        $this->describe = $describe;
        $this->idParent = $idParent;
        $this->scoresDefault = $scoresDefault;
        $this->scoresMax=$scoresMax;
        $this->scoresStudent = $scoresStudent;
        $this->scoresTeacher = $scoresTeacher;
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
	public function getAccountIdAccount() {
		return $this->Account_idAccount;
	}

	/**
	 * @param string $Account_idAccount
	 */
	public function setAccountIdAccount($Account_idAccount) {
		$this->Account_idAccount = $Account_idAccount;
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
	public function getFinalScores() {
		return $this->finalScores;
	}

	/**
	 * @param int $finalScores
	 */
	public function setFinalScores($finalScores) {
		$this->finalScores = $finalScores;
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
	 * @return int
	 */
	public function getScoresDefault() {
		return $this->scoresDefault;
	}

	/**
	 * @param int $scoresDefault
	 */
	public function setScoresDefault($scoresDefault) {
		$this->scoresDefault = $scoresDefault;
	}

	/**
	 * @return int
	 */
	public function getScoresMax() {
		return $this->scoresMax;
	}

	/**
	 * @param int $scoresMax
	 */
	public function setScoresMax($scoresMax) {
		$this->scoresMax = $scoresMax;
	}

	/**
	 * @return int
	 */
	public function getScoresStudent() {
		return $this->scoresStudent;
	}

	/**
	 * @param int $scoresStudent
	 */
	public function setScoresStudent($scoresStudent) {
		$this->scoresStudent = $scoresStudent;
	}

	/**
	 * @return int
	 */
	public function getScoresTeacher() {
		return $this->scoresTeacher;
	}

	/**
	 * @param int $scoresTeacher
	 */
	public function setScoresTeacher($scoresTeacher) {
		$this->scoresTeacher = $scoresTeacher;
	}

	public function jsonSerialize() {
        return get_object_vars($this);
    }

}
?>