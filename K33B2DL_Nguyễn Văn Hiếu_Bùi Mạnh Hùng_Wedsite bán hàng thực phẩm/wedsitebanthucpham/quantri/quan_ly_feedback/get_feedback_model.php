<?php
include("../../connection/connection.php");
class get_feedback_model{
	public $con;
	
	public function __construct(){
		$this->con  = new connection();
		$this->con = $this->con->con;
	}
	
	public function get_requested(){
		$query = "SELECT * FROM lien_he";
		$statement = $this->con->prepare($query);
		$statement->execute();
		$resultset = $statement->fetchAll(PDO::FETCH_OBJ);
		return $resultset;
	}
}
?>