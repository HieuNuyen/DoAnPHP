<?php 
$con = mysqli_connect('localhost','root','','thucpham');
 if (isset($_POST['btn'])){

 	
 	
 	$ten=mysqli_real_escape_string ($con,$_POST['hovaten']);
 	$mail=mysqli_real_escape_string($con,$_POST['email']);
 	$dn=mysqli_real_escape_string($con,$_POST['dangnhap']);
 	$pw=mysqli_real_escape_string($con,$_POST['password']);
 	$repw=mysqli_real_escape_string($con,$_POST['repassword']);
 	$gt=mysqli_real_escape_string($con,$_POST['gioitinh']);
 	$diachi=mysqli_real_escape_string($con,$_POST['address']);

 	


 	if (!$ten || !$mail || !$dn || !$pw || !$repw || !$diachi ) {
 		echo "Vui lòng điền đủ thông tin không được để trống.<a href='javascript:history.go(-1)'>Quay lại</a>";
 		exit;
 	}
 	if ($pw!=$repw) {
 		die ('password not matched');
 		exit();
 	}
 	else {
 		$pass=md5($pw);
 		$sql="insert into khach_hang (hovaten_kh,dia_chi,email,gioi_tinh,ten_dn,matkhau) values('$ten','$diachi','$mail','$gt','$dn','$pw')";
 		$rs=mysqli_query($con,$sql);
 		if ($rs) {
 			echo "You has been saved";
 		}
 		else {
 			echo "Check you query";
 		}
 	}

    
 }
 header('Location:dangnhaptaikhoan.php');
?>