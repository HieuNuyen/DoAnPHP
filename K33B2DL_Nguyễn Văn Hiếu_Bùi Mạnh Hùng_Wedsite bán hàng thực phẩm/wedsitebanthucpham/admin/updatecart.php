<?php session_start();  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php
  foreach($_POST['txtsoluong'] as $k=>$v) {
	  if($v == 0 && is_numeric($v)) {
		  //xoa san pham trong gio hang
		 unset($_SESSION['cart'][$k]);  
	  } else {
		  //cap nhat lai so luong
		  $_SESSION['cart'][$k] = $v;
	  }
	   //quay ve trang gio hang
	   header('Location: giohang.php'); 
  }
?>
</body>
</html>