<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
<?php 
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