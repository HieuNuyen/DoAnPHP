<?php
include("mem_model.php");
class mem_controller{
	public $model;
	
	public function __construct(){
		$this->model = new mem_model();
	}
	
	public function listALl(){
		$member = $this->model->listALL();
		include("main.php");
	}
	
	public function listSome(){
		$member = $this->model->listSome();
		include("main.php");
	}
	
	public function ban($id){
		$this->model->ban($id);
	}
	
	public function unban($id){
		$this->model->unban($id);
	}
	
	public function process(){
		if(isset($_GET["action"])){
			$action = $_GET["action"];
		}
		else{
			$action = "none";
		}
		if($action == "ban"){
			$id = $_GET["id"];
			$this->ban($id);
		}
		if($action == "unban"){
			$id = $_GET["id"];
			$this->unban($id);
		}
		if(isset($_GET["view"])){
			$v = $_GET["view"];
		}
		else{
			$v = "Some";
		}
		
		
		if($v == "all"){
			$this->listALl();
		}
		else
		$this->listSome();
	}
}
?>