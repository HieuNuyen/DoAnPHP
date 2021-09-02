<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>xoa</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php

//xoa toan bo gio hang

if(isset($_GET['id'])) {
		$id = $_GET['id'];
	   //xoa tung san pham trong gio hang
	   	unset($_SESSION['cart'][$id]);
	} else {
		//xoa toan bo gio hang
   		unset($_SESSION['cart']);
	}

header('Location: giohang.php');

?>

</body>
</html>