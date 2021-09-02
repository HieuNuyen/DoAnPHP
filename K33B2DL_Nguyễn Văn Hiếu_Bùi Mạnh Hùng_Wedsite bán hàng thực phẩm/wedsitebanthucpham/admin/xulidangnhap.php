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
		$dn=$_POST['dangnhap'];
		$pw=$_POST['password'];
		$sql = "SELECT * from khach_hang where ten_dn = '".$dn."' and matkhau = '".$pw."'";
		$res = mysqli_query($con,$sql);
		$numberrow = mysqli_num_rows($res);
 		if($numberrow > 0) {
	 		$_SESSION['ten_dn'] = $dn;
	 		header('Location:index.php');
 }
 		else {
 			header('Location:dangnhaptaikhoan.php');
 		}
?>
</body>
</html>