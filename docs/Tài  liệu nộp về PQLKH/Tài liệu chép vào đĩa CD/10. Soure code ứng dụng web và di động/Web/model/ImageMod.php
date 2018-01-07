<?php
/**
 * Lớp Khoa: mô tả việc trao đổi dữ liệu với mysql
 * Coder: Lê Minh Luân
 * Date: 05/08/2017
 * Cập nhật: 21/08/2017
 */
class ImageMod {
	private $connSQL;

	public function __construct() {
		$this->connSQL = new ConnectToSQL();
	}

	public function getImages($accountId){
		$sql = "select i.Image as img, idItem, itemName from Image i, Transcript t
				where i.Transcript_idItem = t.idItem 
				and i.Account_idAccount = t.Account_idAccount
				and i.Account_idAccount = '$accountId'";
		$this->connSQL->Connect();
		$result = $this->connSQL->conn->query($sql);
		$this->connSQL->Stop();
		$images = [];
		if (!empty($result) && $result->num_rows > 0)
			while ($row = $result->fetch_assoc()){
				$img = [
					"img" => $row['img'],
					"transcriptId" => $row['idItem'],
					"transcriptName" => $row['itemName']
				];
				$images[] = $img;
			}
		return $images;
	}

	public function addImage($accountId, $transcriptId, $imgName){
		$this->connSQL->Connect();
		$sql = "insert into Image values('$imgName', '$accountId', '$transcriptId')";
		$result = $this->connSQL->conn->query($sql);
		$this->connSQL->Stop();
		return $result;
	}

	public function removeImage($accountId, $imgName){
		$sql = "delete from Image where Account_idAccount = '$accountId' 
					and Image.Image = '$imgName'";
		$this->connSQL->Connect();
		$result = $this->connSQL->conn->query($sql);
		$this->connSQL->Stop();
		return $result;
	}
    public function deleteImageAll(){
        $sql = "delete from Image where 1";
        $this->connSQL->Connect();
        $result = $this->connSQL->conn->query($sql);
        $this->connSQL->Stop();
        return $result;
    }
}
