<?php
include("qla_model.php");
class qla_controller{
	public $model;
	
	public function __construct(){
		$this->model = new qla_model();
	}
	
	public function listAll(){
		$result = $this->model->listAll();
		include("list.php");
	}
	
	public function edit($id,$lid,$p,$n){
		$this->model->edit($id,$lid,$p,$n);
	}
	public function insert($lid,$p,$n){
		$this->model->insert($lid,$p,$n);
	}
	public function delete($id){
		$this->model->delete($id);
	}
	
	public function process(){
		if(isset($_GET["action"])){
			$action = $_GET["action"];
		}
		else{
			$action = "listall";
		}
		switch($action){
			case "listall":{
				$this->listAll();
				break;
			}
			case "edit":{
				$id = $_POST["editadid"];
				$lid = $_POST["editadlid"];
				$p = $_POST["editadpass"];
				$n = $_POST["editadname"];
				$this->edit($id,$lid,$p,$n);
				$this->listAll();
				break;
			}
			case "insert":{
				$lid = $_POST["newadlid"];
				$p = $_POST["newadpass"];
				$n = $_POST["newadname"];
				$this->insert($lid, $p, $n);
				$this->listAll();
				break;
			}
			case "delete":{
				$id = $_GET["id"];
				$this->delete($id);
				header("Location: ../");
				break;
			}
			default:{
				$this->listAll();
			}
		}
	}
}

?>