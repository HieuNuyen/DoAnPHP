<?php
include("dh_model.php");
class dh_controller{
	public $model;
	
	public function __construct(){
		$this->model = new dh_model();
	}
	
	public function SelectById($id){
		$ctdh =  $this->model->SelectbyId($id);
		return $ctdh;
	}
	
	public function editStatus($id,$s){
		$this->model->editStatus($id,$s);
	}
	
	public function main(){
		$resultset = $this->model->number_of_queries();
		include("main.php");
	}
	
	public function process(){
		if(isset($_GET["status"])){
			$s = $_GET["status"];
			$id = $_GET["id"];
			$this->editStatus($id,$s);
		}
		$this->main();
	}
}
?>