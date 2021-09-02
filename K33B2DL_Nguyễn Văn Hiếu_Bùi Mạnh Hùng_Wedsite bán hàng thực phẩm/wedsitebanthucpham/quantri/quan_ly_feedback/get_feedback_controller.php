<?php
include("get_feedback_model.php");
class get_feedback_controller{
	public $model;
	
	public function __construct(){
		$this->model = new get_feedback_model();
	}
	
	public function get_requested(){
		$resultset = $this->model->get_requested();
		include("main.php");
	}

	public function process(){
		$this->get_requested();
	}
}
?>