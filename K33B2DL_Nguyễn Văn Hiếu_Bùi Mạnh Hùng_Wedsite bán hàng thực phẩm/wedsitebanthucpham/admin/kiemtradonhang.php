<?php
 session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>xác nhận thanh toán</title>
<title>Trang chủ</title>
<link rel="stylesheet" type="text/css" href="../css/style1.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>



<style>
 #contentxndh {
	 padding:50px;
 }
</style>
</head>

<body>
<div>
  <?php include('../includes/top.php'); ?>
  <?php include('../includes/Menu.php'); ?>
</div>
<center><div id='contentxndh'><h3>
 <?php
 if (isset($_SESSION['ten_dn'])) {
 
 
  unset($_SESSION['cart']);
  unset($_SESSION['totalorder']);
  echo "Cảm ơn bạn ".$_SESSION['ten_dn'] . " đã đặt hàng tại FOOD MART FRESH. Đơn hàng của bạn đang được xử lý chúng tôi sẽ giao hàng cho bạn trong thời gian sớm nhất !";
  echo "<br><br>Mời bạn ".$_SESSION['ten_dn'] . " tiếp tục ";
} else{
	echo 'Bạn cần đăng nhập để thanh toán';
}
 ?>
 <a href="sanphamkhuyenmai.php">Mua sắm</a>
</h3></div></center>
<center style="float: bottom;">
<?php include('../includes/Footer.php'); ?>
</center>
</body>
</html>