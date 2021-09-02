<?php
include("model.php");
class controller{
	public $model;
	
	public function __construct(){
		$this->model = new model();	
	}
	
	public function getFeedback(){
		return $this->model->getFeedback();
	}
	
	public function get_no_member(){
		return $this->model->get_no_member();
	}
	
	public function get_no_sold(){
		return $this->model->get_no_sold();
	}
	public function get_no_order(){
		return $this->model->get_no_order();
	}
	
	public function getMember(){
		return $this->model->getMember();
	}
	
	public function getOrders(){
		return $this->model->getOrder();
	}
	
	public function most_favorite(){
		return $this->model->most_favorite();
	}
	
	public function invoke(){
		$feedback = $this->getFeedback();
		$nomembers = $this->get_no_member();
		$member = $this->getMember();
		$order = $this->getOrders();
		$noorder = $this->get_no_order();
		$sold = $this->get_no_sold();
		$mostfav = $this->most_favorite();
		include("dashboard.php");
	}
}
?>