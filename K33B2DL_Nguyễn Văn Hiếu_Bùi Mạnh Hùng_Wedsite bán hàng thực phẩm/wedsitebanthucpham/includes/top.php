
<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" type="text/css" href="css/style1.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
</head>
<style type="text/css">
	.dn {
		float: right;
		font-size: 30px;

	}
	.dn li {
		list-style-type: none;
	}
	
	form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

form.example button {
  float: left;
  width: 15%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}
* {
  box-sizing: border-box;
}

</style>
<body>
<center>
<div class="top-nav-bar" style="height: 100px;margin-top: 20px;">
	<div>

		<div class="search-box">
		<i class="fa fa-bars" id="menu-btn" onclick="openmenu()" ></i>
		<i class="fa fa-times" id="close-btn" onclick="closemenu()"></i>
			 	 

		<a href="index.php"><img src="https://vignette.wikia.nocookie.net/logopedia/images/8/88/Foodmart_fresh_logo.png/revision/latest/scale-to-width-down/340?cb=20190712133245" class="logo" style="margin-left: 40px;height: 60px"></a>
		<div style="margin-left: 150px;margin-top: 5px;width: 55%">
		<form class="example" action="timkiem.php" method="GET" >
		<input type="text" placeholder="Nhập........" name="search">
 		 <button type="submit" name="ten"><i class="fa fa-search"></i></button>
		</form>
		</div>
	</div>
	<div class="dn">
		<ul>
			<?php
		  if(isset($_SESSION["ten_dn"])){
			  include("user_button.php");
		?>
	  <?php	  
		  }else{
			
		?>
		
			
		<li>	<a href="dangnhaptaikhoan.php" style="text-decoration: none;">Đăng nhập</a>
			<?php } ?>
		</li>
		</ul>
	</div>
</div>
</center
</body>
</html>