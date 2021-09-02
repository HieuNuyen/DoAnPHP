<?php
include("../../connection/connection.php");
class qla_model{
	public $con;
	
	public function  __construct(){
		$this->con  = new connection();
		$this->con = $this->con->con;
	}
	
	public function listAll(){
		$query = "SELECT * FROM admin";
		$statement = $this->con->prepare($query);
		$statement->execute();
		$resultset = $statement->fetchAll(PDO::FETCH_OBJ);
		return $resultset;
	}
	
	public function edit($id,$lid,$p,$n){
		$query = "UPDATE `admin` SET `tendnadmin`='$lid',`matkhau`='$p',`ten`='$n' WHERE `ma`='$id'";
		$statement = $this->con->prepare($query);
		$statement->execute();
	}
	public function insert($lid,$p,$n){
		$query = "INSERT INTO `admin`(`tendnadmin`, `matkhau`, `ten`) VALUES ('$lid','$p','$n')";
		$statement = $this->con->prepare($query);
		$statement->execute();
	}
	public function delete($id){
		$query = "DELETE FROM `admin` WHERE ma=$id";
		$statement = $this->con->prepare($query);
		$statement->execute();
	}
}
?>