<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Đồ án</title>
<link rel="stylesheet" type="text/css" href="../css/style1.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
<style type="text/css">
	#mua {
		border: 1px solid #fff;
		width: 150px;
		height: 50px;
		font-size: 25px;
		background: #09C;
		text-align: center;
		display: block;
		margin-left: 20%;
	}
	#mua:hover {
		opacity: 8;
		background: #ff0000;
	}
	.header {
		margin-top:-46px;
	}
	.price {
		font-size: 20px;
	}
	.mota{
		font-size: 20px;
		margin-left: 20px;
	}
</style>
</head>
<body>
<div style="margin-top: -20px;">
	<?php include('../includes/top.php') ?>
</div>
<section style="width: 100%; height: 50px;background-color: #F7F9FA;">
	<div>
<?php
include('../includes/Menu.php');
?>
</div>
<!-------------Single Product---------------->
<section class="header">
<div class="side-menu">
	<?php 
		$con=mysqli_connect('localhost','root','','thucpham');
		$sql="Select *from loai_tp";
		$re=mysqli_query($con,$sql);
		while ($danhmuc=mysqli_fetch_assoc($re)) {
			
		
	?>
		<ul>
			<a href="sanphamkhuyenmai.php?id=<?php echo $danhmuc['ma_loai'];?> "style="text-decoration: none;font-size: 18px;color: #4CAF50"><li><?php echo $danhmuc['ten_loai'] ?> <i class="fa fa-angle-right" aria-hidden="true"></i>	
     		</li></a>
		</ul>
	<?php } ?>
</div>
<section class="Single-product">
	<?php
		if (isset($_GET["id"])) {
			
		}
		$sqli= 'Select * from tp where ma='.$_GET["id"];
		$rs=mysqli_query($con,$sqli);
			
	?>
	<div class="container">
		<?php 
			while ($row_chitiet= mysqli_fetch_assoc($rs)) {
				
		?>
		<div class="row">
			<div class="col-md-5">
				<div id="product-slider" class="carousel slide carousel-fade" data-ride="carousel">
  					<div class="carousel-inner">
    					<div class="carousel-item active">
     						 <img src="../imagespkhuyenmai/<?php echo $row_chitiet['anh']; ?>" class="d-block w-100" >
   						 </div>
    					
  					</div>
  				<ol class="carousel-indicators">
    				<li data-target="#slider" data-slide-to="0" class="active"></li>
    				<li data-target="#slider" data-slide-to="1"></li>
    				<li data-target="#slider" data-slide-to="2"></li>
  				</ol>
			</div>
			</div>
			<div class="col-md-7">
				<p class="new-arrival text-center">New</p>
				<h2><?php echo $row_chitiet['ten_tp']; ?></h2>
				<br>

				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-half-o"></i>
				<p class="price"><b>Giá sản phẩm: &nbsp;</b><?php  echo $row_chitiet['gia'] ?>&nbsp;Đ</p>
				<ul class="mota">
					<li>Quá trình sơ chế đảm bảo vệ sinh an toàn thực phẩm</li>
					<li>Thực phẩm cung cấp nhiều chất dinh dưỡng cho cơ thể</li>
					<li>Có thể chế biến thành nhiều món ngon</li>
					<li>Liên hệ trực tiếp để được giải đáp thắc mắc</li>
				</ul>
				<br><br>
				<div id="mua"><a href='themgiohang.php?id=<?php echo($row_chitiet['ma'])?>' style="color: #fff;text-decoration: none;">Mua hàng</a></div>
			</div>
		</div>
	</div>
</section>
<br><br><br>
<section class="product-description">
	<div class="container">
		<h3><u>Chi tiết sản phẩm</u></h3>
		
		<hr>
	</div>
	
	
</section>
<?php } ?>

<!-------------footer---------------->
<center>
<?php include('../includes/footer.php'); ?>
</center>
<script>
	function openmenu(){
		document.getElementById("side-menu").style.display="block";
		document.getElementById("menu-btn").style.display="none";
		document.getElementById("close-btn").style.display="block";
	}
	function closemenu(){
		document.getElementById("side-menu").style.display="none";
		document.getElementById("menu-btn").style.display="block";
		document.getElementById("close-btn").style.display="none";
	}


	function them() {
		var t= document.getElementById("them");
		var sl=document.getElementById("soluong");
		if (t== true) {
			sl++;
		}

	}


</script>

</body>
</html>