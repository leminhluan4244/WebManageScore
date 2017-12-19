<?php

/**
 * Lớp Khoa: Mô tả cấu trúc một khoa hoặc đơn vị tương đương, không bao gồm chi hội sinh viên
 * Coder; Lê Minh Luân
 * Date; 21/08/2017
 */
class ImageObj implements \JsonSerializable
{
    private $Image;
    private $Account_idAccount;
    private $Transcript_idItem;

	/**
	 * @return mixed
	 */
	public function getImage() {
		return $this->Image;
	}

	/**
	 * @param mixed $Image
	 */
	public function setImage($Image) {
		$this->Image = $Image;
	}

	/**
	 * @return mixed
	 */
	public function getAccountIdAccount() {
		return $this->Account_idAccount;
	}

	/**
	 * @param mixed $Account_idAccount
	 */
	public function setAccountIdAccount($Account_idAccount) {
		$this->Account_idAccount = $Account_idAccount;
	}

	/**
	 * @return mixed
	 */
	public function getTranscriptIdItem() {
		return $this->Transcript_idItem;
	}

	/**
	 * @param mixed $Transcript_idItem
	 */
	public function setTranscriptIdItem($Transcript_idItem) {
		$this->Transcript_idItem = $Transcript_idItem;
	}



    //Nhận dữ liệu cho tất cả các trường của ảnh
    public function setImageObj($Image, $Account_idAccount, $tran)
    {
        $this->setImage($Image);
        $this->setAccountIdAccount($Account_idAccount);
        $this->setTranscriptIdItem($tran);
    }

    //Trả về dữ liệu kiểu đối tượng ảnh
    public function getImageObj()
    {
        return $this;
    }
    public function jsonSerialize() {
        return get_object_vars($this);
    }

}

?>