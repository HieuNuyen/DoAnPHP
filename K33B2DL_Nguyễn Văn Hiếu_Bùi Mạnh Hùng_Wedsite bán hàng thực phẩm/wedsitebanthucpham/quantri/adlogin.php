<?php
	$inid = $_POST['adid'];
	$inpass = $_POST['adpass'];
	include("../connection/connection.php");
	$con = new connection();
	$con = $con->con;
	
	$state = $con->prepare("SELECT * FROM admin WHERE ten_dn_ad='$inid'");
	$state->execute();
	$rert = $state->fetch(PDO::FETCH_OBJ);
	if(strlen($inpass) < 6){
		header("location: index.php?err=2");
	}
	else if($inpass == $rert->mat_khau){
		session_start();
		$_SESSION["admin_name"] = $inid;
		$_SESSION["admin_id_no"] = $rert->ma_ad;
		$_SESSION["legal"] = 1;
		if(!empty($_POST["remember"])){
			$year = time() + 31536000;
			setcookie('id', $inid, $year);
		}
		header("location: adminpage2.php");
	}
	else{
		header("location: index.php?err=1");
	}
?>