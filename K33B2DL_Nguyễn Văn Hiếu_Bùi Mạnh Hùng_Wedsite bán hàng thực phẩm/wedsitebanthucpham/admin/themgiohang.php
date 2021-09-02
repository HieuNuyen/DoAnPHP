<?php session_start() ?>
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
		$id = $_GET['id'];
		$soluong = 0;
		//moi khi them san pham vao gio hang, ta can check
		//neu sp da co trong gio hang: tang so luong sp do len 1
		//neu sp chua co trong gio hang: tao bien session voi so luong = 1
		//moi sp se duoc luu trong gio hang duoi dang 1 cap key-value
		if(isset($_SESSION['cart'][$id])) {
		$soluong = $_SESSION['cart'][$id];
		$soluong++;
		} else {
		$soluong = 1;
		}
		//cap nhat so luong cua san pham trong gio hang
		$_SESSION['cart'][$id] = $soluong;
		header('Location: giohang.php');
		?>
</body>
</html>