<?php
include("../../connection/connection.php");
class prod_model{
	public $con;
	
	public function  __construct(){
		$this->con  = new connection();
		$this->con = $this->con->con;
	}
	
	public function listAll(){
		$query = "SELECT * FROM `tp` INNER JOIN loai_tp ON tp.ma_loai = loai_tp.ma_loai";
		$statement = $this->con->prepare($query);
		$statement->execute();
		$resultset = $statement->fetchAll(PDO::FETCH_OBJ);
		return $resultset;
	}
	
	public function listts(){
		$query = "SELECT * FROM `tp` INNER JOIN loai_tp ON tp.ma_loai = loai_tp.ma_loai WHERE loai_tp.ma_loai = 2";
		$statement = $this->con->prepare($query);
		$statement->execute();
		$resultset = $statement->fetchAll(PDO::FETCH_OBJ);
		return $resultset;
	}
	
	public function listkc(){
		$query = "SELECT * FROM `tp` INNER JOIN loai_tp ON tp.ma_loai = loai_tp.ma_loai WHERE loai_tp.ma_loai = 4";
		$statement = $this->con->prepare($query);
		$statement->execute();
		$resultset = $statement->fetchAll(PDO::FETCH_OBJ);
		return $resultset;
	}
	
	public function listdb(){
		$query = "SELECT * FROM `tp` INNER JOIN loai_tp ON tp.ma_loai = loai_tp.ma_loai WHERE loai_tp.ma_loai = 3";
		$statement = $this->con->prepare($query);
		$statement->execute();
		$resultset = $statement->fetchAll(PDO::FETCH_OBJ);
		return $resultset;
	}
	
	public function getmal(){
		$query = "SELECT * FROM loai_tp";
		$statement = $this->con->prepare($query);
		$statement->execute();
		$resultset = $statement->fetchAll(PDO::FETCH_OBJ);
		return $resultset;
	}
	
	public function edit($id,$ml,$t,$g,$i,$mt){
		$query = "UPDATE `tp` SET `ma_loai`='$ml',`ten_tp`='$t',`gia`=$g,`mo_ta`='$mt', `anh`='$i' WHERE `ma`='$id'";
		$statement = $this->con->prepare($query);
		$statement->execute();
	}
	public function insert($t,$ml,$i,$g,$mt){
		$query = "INSERT INTO `tp`(`ma_loai`, `ten_tp`, `gia`, `anh`, `mo_ta`) VALUES ('$ml','$t',$g,'$i','$mt')";
		$statement = $this->con->prepare($query);
		$statement->execute();
	}
	
	public function getImage($id){
		$statement = $this->con->prepare("SELECT anh FROM `tp` WHERE ma = $id");
		$statement->execute();
		$img = $statement->fetch(PDO::FETCH_OBJ);
		return $img;
	}
	
	public function delete($id){
		$img = $this->getImage($id);
		$query = "DELETE FROM `tp` WHERE `ma`=$id";
		$statement = $this->con->prepare($query);
		$statement->execute();
		return $img;
	}
}
?>