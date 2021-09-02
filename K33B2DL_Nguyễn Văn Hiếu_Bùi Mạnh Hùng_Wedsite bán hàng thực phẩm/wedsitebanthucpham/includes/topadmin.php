<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" type="text/css" href="style1.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
</head>
<body>
<div class="top-nav-bar">
	<div>

		<div class="search-box">
		<i class="fa fa-bars" id="menu-btn" onclick="openmenu()" ></i>
		<i class="fa fa-times" id="close-btn" onclick="closemenu()"></i>
			 	 

		<a href="index.php"><img src="https://vignette.wikia.nocookie.net/logopedia/images/8/88/Foodmart_fresh_logo.png/revision/latest/scale-to-width-down/340?cb=20190712133245" class="logo"></a>
		<input type="text" class="form-control" placeholder="  Nhập..... " >
		<span class="input-group-text"><i class="fa fa-search"></i></span>
	</div>
	<div class="menu-bar">
		<ul>
			<?php 
				if (isset($_SESSION['tendnadmin'])) {
					$tendn=$_SESSION['tendnadmin'];
					echo '$tendn / <a href="dangxuatadmin.php">Đăng xuất</a>';
				} else {
			?>
			<li><a href="dangkitaikhoan.php">Đăng kí</a></li>
			<li><a href="dangnhaptaikhoan.php">Đăng nhập</a></li>
			<?php } ?>
		</ul>
	</div>
</div>
</body>
</html>