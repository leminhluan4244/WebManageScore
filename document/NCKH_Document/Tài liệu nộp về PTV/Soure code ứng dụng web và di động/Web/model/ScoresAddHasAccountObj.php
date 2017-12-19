<?php

/**
 *Lớp đói tượng liên kết , cho biết xem sinh viên nào thuộc chi hội nào
 *Coder: Lê Minh Luân
 *Date: 11/09/2017
 */
class ScoresAddHasAccountObj
{

    private $ScoresAdd_idScore;
    private $Account_idAccount;


    public function setScoresAdd_idScore($ScoresAdd_idScore)
    {
        $this->ScoresAdd_idScore = $ScoresAdd_idScore;
    }


    public function getScoresAdd_idScore()
    {
        return $this->ScoresAdd_idScore;
    }


    public function setAccount_idAccount($Account_idAccount)
    {
        $this->Account_idAccount = $Account_idAccount;
    }

    public function getAccount_idAccount()
    {
        return $this->Account_idAccount;
    }

    public function setAcademyObj($ScoresAdd_idScore, $Account_idAccount)
    {
        $this->setScoresAdd_idScore($ScoresAdd_idScore);
        $this->setAccount_idAccount($Account_idAccount);
    }

    public function getAcademyObj()
    {
        return $this;
    }
}

?>