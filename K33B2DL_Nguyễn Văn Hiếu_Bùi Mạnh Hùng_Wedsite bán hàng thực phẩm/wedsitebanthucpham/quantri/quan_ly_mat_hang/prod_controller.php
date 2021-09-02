<?php
include("prod_model.php");
class prod_controller{
	public $model;
	
	public function __construct(){
		$this->model = new prod_model();
	}
	
	public function listAll(){
		$result = $this->model->listAll();
		$ts = $this->model->listts();
		$kc = $this->model->listkc();
		$db = $this->model->listdb();
		$ml = $this->model->getmal();
		include("main.php");
	}
	
	public function edit($id,$ml,$t,$g,$i,$mt){
		$this->model->edit($id,$ml,$t,$g,$i,$mt);
	}
	public function insert($t,$ml,$i,$g,$mt){
		$this->model->insert($t,$ml,$i,$g,$mt);
	}
	
	public function deleteImg($img){
		unlink("../../imagespkhuyenmai/$img");
	}
	
	public function delete($id){
		$i = $this->model->delete($id);
		$img = $i->anh;
		$this->deleteImg($img);
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
				$id = $_POST["eid"];
				$ml = $_POST["ek"];
				$t = $_POST["ename"];
				$g = $_POST["eprice"];
				$mt = $_POST["edes"];
			
				$target_dir = "../../imagespkhuyenmai/";
				$target_file = $target_dir . basename($_FILES["imgx"]["name"]);
				$i = basename($_FILES["imgx"]["name"]);
				$imgobject = $this->model->getImage($id);
				$ix = $imgobject->anh;
				if($ix != $i){
					$uploadOk = 1;
					$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
					// Check if image file is a actual image or fake image
    				$check = getimagesize($_FILES["imgx"]["tmp_name"]);
    				if($check !== false) {
        				//echo "File is an image - " . $check["mime"] . ".";
        				$uploadOk = 1;
    				}
					else {
        				echo "File is not an image.";
        				$uploadOk = 0;
    				}
					// Check file size
					if (file_exists($target_file)) {
    					$uploadOk = 2;
					}
					// Allow certain file formats
					if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
    					echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    					$uploadOk = 0;
					}
					if($uploadOk !=0){
						move_uploaded_file($_FILES["imgx"]["tmp_name"], $target_file);
						$imgobject = $this->model->getImage($id);
						$img = $imgobject->anh;
						$this->deleteImg($img);
						$this->edit($id,$ml,$t,$g,$i,$mt);
					}
				}
				else{
					$this->edit($id,$ml,$t,$g,$ix,$mt);
				}
				$this->listAll();
				break;
			}
			case "insert":{
			$t = $_POST["in"];
			$ml = $_POST["ik"];
			$g = $_POST["ip"];
			$mt = $_POST["id"];
			$target_dir = "../../imagespkhuyenmai/";
			$target_file = $target_dir . basename($_FILES["imgx"]["name"]);
			$i = basename($_FILES["imgx"]["name"]);
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			// Check if image file is a actual image or fake image
    		$check = getimagesize($_FILES["imgx"]["tmp_name"]);
    		if($check !== false) {
        		//echo "File is an image - " . $check["mime"] . ".";
        		$uploadOk = 1;
    		}
			else {
        		echo "File is not an image.";
        		$uploadOk = 0;
    		}
			// Check file size
			if (file_exists($target_file)) {
    			$uploadOk = 2;
			}
			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
    			echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    			$uploadOk = 0;
			}
			// Check if $uploadOk is set to 0 by an error
			if($uploadOk == 2){
				$this->insert($t,$ml,$i,$g,$mt);
			}
			else if ($uploadOk == 0) {
    			echo "Sorry, your file was not uploaded.";
				// if everything is ok, try to upload file
			}
			else {
    			if (move_uploaded_file($_FILES["imgx"]["tmp_name"], $target_file)) {
        			$this->insert($t,$ml,$i,$g,$mt);
    			}
				else {
        			echo "Sorry, there was an error uploading your file.";
    			}
			}
			
				$this->listAll();
				break;
			}
			case "delete":{
				$id = $_GET["id"];
				$this->delete($id);
				$this->listAll();
				break;
			}
			default:{
				$this->listAll();
			}
		}
	}
}

?>