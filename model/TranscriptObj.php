<?php
/**
 * Created by PhpStorm.
 * User: TanPhat
 * Date: 5/8/2017
 * Time: 5:42 PM
 */

class TranscriptObj {

    private $Traanscript_idItem;
    private $Account_idAccount;
    private $itemName;
    private $scores;
    private $describe;
    private $idParent;
    private $scoresDefault;
    private $scoresStudent;
    private $scoresTeacher;


    public function __construct(){
        $this->Traanscript_idItem = '';
        $this->Account_idAccount = '';
        $this->itemName='';
        $this->scores = 0;
        $this->describe = '';
        $this->idParent = '';
        $this->scoresDefault = 0;
        $this->scoresStudent = 0;
        $this->scoresTeacher = 0;
    }

    public function getStructureObj(){
        return $this;
    }

    public function setStructureObj($idItem, $itemName, $scores, $describe, $idParent){
        $this->idItem = $idItem;
        $this->itemName = $itemName;
        $this->scores = $scores;
        $this->describe = $describe;
        $this->idParent = $idParent;
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
}
?>