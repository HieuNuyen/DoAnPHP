<?php
include("../../connection/connection.php");
class dh_model{
	public $con;
	
	public function __construct(){
		$this->con = new connection();
		$this->con = $this->con->con;
	}
	
	public function editStatus($id,$s){
		$query = "UPDATE `donhang` SET `trang_thai`= $s WHERE ma_dh = $id";
		$statement = $this->con->prepare($query);
		$statement->execute();
	}
	
	public function number_of_queries(){
		$statement = $this->con->prepare("SELECT donhang.ma_dh,donhang.ten_kh,donhang.ngay_dh,donhang.noi_giao,donhang.sdt,donhang.trang_thai,nhanvien.ten_nv FROM `donhang` JOIN nhanvien ON donhang.ma_nv = nhanvien.ma_nv");
		$statement->execute();
		$resultset = $statement->fetchAll(PDO::FETCH_OBJ);
		return $resultset;
	}
	
	public function SelectbyId($id){
		$query = "SELECT donhang.ma_dh,donhang.ten_kh,donhang.ngay_dh,donhang.noi_giao,donhang.sdt,donhang.trang_thai,chitietdonhang.so_luong,chitietdonhang.don_gia,chitietdonhang.tong_gia,chitietdonhang.ghi_chu,trasua.ten_ts,nhanvien.ten_nv FROM `donhang` INNER JOIN chitietdonhang ON donhang.ma_dh = chitietdonhang.ma_dh INNER JOIN trasua ON chitietdonhang.ma_ts = trasua.ma_ts INNER JOIN nhanvien ON donhang.ma_nv = nhanvien.ma_nv WHERE donhang.ma_dh = $id";
		$statement = $this->con->prepare($query);
		$statement->execute();
		$resultset = $statement->fetchAll(PDO::FETCH_OBJ);
		return $resultset;
	}
	
	public function ALL(){
		$query = "SELECT donhang.ma_dh,donhang.ten_kh,donhang.ngay_dh,donhang.noi_giao,donhang.sdt,donhang.trang_thai,chitietdonhang.so_luong,chitietdonhang.don_gia,chitietdonhang.tong_gia,trasua.ten_ts,nhanvien.ten_nv FROM `donhang` INNER JOIN chitietdonhang ON donhang.ma_dh = chitietdonhang.ma_dh INNER JOIN trasua ON chitietdonhang.ma_ts = trasua.ma_ts INNER JOIN nhanvien ON donhang.ma_nv = nhanvien.ma_nv";
		$statement = $this->con->prepare($query);
		$statement->execute();
		$resultset = $statement->fetchAll(PDO::FETCH_OBJ);
		return $resultset;
	}
}
?>