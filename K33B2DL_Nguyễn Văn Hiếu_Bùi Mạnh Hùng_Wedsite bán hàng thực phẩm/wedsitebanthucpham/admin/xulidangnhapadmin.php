<?php
	session_start();	
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$con = mysqli_connect('localhost','root','','thucpham');
		$dan=$_POST['dangnhap1'];
		$paw=$_POST['password1'];
		$sql = "SELECT * from admin where tendnadmin = '".$dan."' and matkhau = '".$paw."'";
		$res = mysqli_query($con,$sql);
		$numberrow = mysqli_num_rows($res);
 		if($numberrow > 0) {
	 		$_SESSION['tendnadmin'] = $dan;
	 		header('Location:../quantri/adminpage2.php');
 }
 		else {
 			header('Location:../admin/dangnhapadmin.php');
 		}
?>
</body>
</html>