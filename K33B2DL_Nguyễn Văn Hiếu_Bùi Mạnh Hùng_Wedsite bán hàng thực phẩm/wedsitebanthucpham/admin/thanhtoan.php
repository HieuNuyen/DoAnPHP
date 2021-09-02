<?php
	session_start();
?>
<html>
<head>
	<meta charset="utf-8">
	<title> Thanh toán đơn hàng</title>
</head>
<body>
	<?php
		$con=mysqli_connect('localhost','root','','thucpham');
		 $dangnhap = $_SESSION['ten_dn'];
 		$sql2 = "SELECT ma_kh from khach_hang where ten_dn ='{$dangnhap}'";
 		$recordset = mysqli_query($con,$sql2);
		while($row = mysqli_fetch_array($recordset)) {
		 $makh = $row['ma_kh'];

 		}

 		$ma=$_POST['ma'];
		$username= $_POST['txt'];
		$address= $_POST['diachi'];
		$phone=$_POST['phone'];
		$totalorder= $_SESSION['totalorder'];
		$trangthai='Chưa giao hàng';

		//mặc định là đơn chưa được thanh toán 

		
		$sql= "insert into don_dat_hang(ma_dh,ma_kh,ngay_dh,diachi_giao,tenkh,tongtien,Tinh_trang,sdt) values('$ma',$makh,now(),'$address','$username','$totalorder','$trangthai',$phone)";
		mysqli_query($con,$sql);
		//duyệt qua giỏ hàng, theo từng cấp: masp/số lượng
		foreach ($_SESSION['cart'] as $k=>$v) {
			$bookid=$k;
			$quantity= $v;
		// lấy ra giá trị của thực phẩm trong giỏ hàng trong CSDL để lưu và bảng 
			$rs= mysqli_query("SELECT gia from tp where ma ={$bookid}");
			$row= mysqli_fetch_array($rs);
			$price=$row['price'];

			$sqldetail="insert into ct_don_dat_hang (ma_dh, ma_thucpham,gia_ban, sl_dat) values ({$newid}, {$k}, {$price}, {$v})";
			
			mysqli_query($con,$sqldetail);

		}
		echo $makh;
		//chuyển đến trang tính toán
		header('Location:kiemtradonhang.php');
	?>
	</body>
	</html>	