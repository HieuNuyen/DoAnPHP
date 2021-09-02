<?php
include("../connection/connection.php");
class model{
	public $con;
	
	public function __construct(){
		$this->con = new connection();
		$this->con = $this->con->con;
	}
	
	public function getFeedback(){
		$query = "SELECT * FROM lien_he ORDER BY ngay_lh LIMIT 0,5";
		$statement = $this->con->prepare($query);
		$statement->execute();
		$resultset = $statement->fetchAll(PDO::FETCH_OBJ);
		return $resultset;
	}
	
	public function get_no_member(){
		$statement = $this->con->prepare("SELECT ma_kh FROM khach_hang");
		$statement->execute();
		$resultset = $statement->rowCount();
		return $resultset;
	}
	
	public function get_no_sold(){
		$query = "SELECT * FROM `ct_don_dat_hang` INNER JOIN don_dat_hang  ON donhang.ma_dh = chitietdonhang.ma_dh WHERE donhang.trang_thai = 1";
		$statement = $this->con->prepare($query);
		$statement->execute();
		$resultset = $statement->fetchAll(PDO::FETCH_OBJ);
		return $resultset;
	}
	
	public function get_no_order(){
		$statement = $this->con->prepare("SELECT ma_dh FROM don_dat_hang WhERE trang_thai = 1");
		$statement->execute();
		$resultset = $statement->rowCount();
		return $resultset;
	}
	
	public function most_favorite(){
		$query = "SELECT sum(ct_don_dat_hang.so_luong) AS sl_dat, tp.ten_tp FROM ct_don_dat_hang INNER JOIN tp on ct_don_dat_hang.ma = tp.ma GROUP BY tp.ten_tp ORDER BY sl_dat DESC LIMIT 0,1";
		$statement = $this->con->prepare($query);
		$statement->execute();
		$resultset = $statement->fetch(PDO::FETCH_OBJ);
		return $resultset;
	}
	
	public function getMember(){
		$query = "SELECT * FROM khach_hang LIMIT 0,8";
		$statement = $this->con->prepare($query);
		$statement->execute();
		$resultset = $statement->fetchAll(PDO::FETCH_OBJ);
		return $resultset;
	}
	
	public function getOrder(){
		$query = "SELECT don_dat_hang.ma_dh, don_dat_hang.trang_thai,tp.ten_tp,ct_don_dat_hang.sl_dat FROM `don_dat_hang` JOIN ct_don_dat_hang on don_dat_hang.ma_dh = ct_don_dat_hang.ma_dh JOIN tp on ct_don_dat_hang.ma_ts = tp.ma LIMIT 0,7";
		$statement = $this->con->prepare($query);
		$statement->execute();
		$resultset = $statement->fetchAll(PDO::FETCH_OBJ);
		return $resultset;
	}
}
?>