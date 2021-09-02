<?php
 session_start();
?>
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
</head>
<style type="text/css">
#main {
	margin-top:-13px;
}

</style>
<body>
<center>
<section >
	<div><?php include('../includes/top.php') ?></div>
</section>
<section style="width: 100%; height: 50px;background-color: #F7F9FA;" id="main">
	<div>
		<?php
		include('../includes/Menu.php');
		?>
</div>
</section>
<section >

<div  style="width: 100%;">
<div id="slider" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://babuki.vn/wp-content/uploads/2019/02/vi-sao-nen-mua-thuc-pham-tuoi-song-tai-bach-hoa-xanh-hinh-1_760x507.jpg" class="d-block w-100" >
    </div>
    <div class="carousel-item">
      <img src="https://media.alobacsi.com/upload/hoangoctu/2019/11/20/111441-ngoc21.jpg" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="https://jarvis.vn/uploaded/cac-loai-tra-sua.jpg" class="d-block w-100" >
    </div>
  </div>
  <ol class="carousel-indicators">
    <li data-target="#slider" data-slide-to="0" class="active"></li>
    <li data-target="#slider" data-slide-to="1"></li>
    <li data-target="#slider" data-slide-to="2"></li>
  </ol>
</div>	

</div>
</section>



<section class="featured-categories"> 
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<img src="http://csfood.vn/wp-content/uploads/2019/06/Xo%C3%A0i-c%C3%A1t-h%C3%B2a-l%E1%BB%99c-block-chain-t%C3%BAi-1kg-260x260.jpg" >
			</div>	
			<div class="col-md-4">
				<img src="http://csfood.vn/wp-content/uploads/2020/04/B%E1%BB%99t-C%C3%A0-Ri-H%C6%A1i-Cay-Ottogi-G%C3%B3i-1kg-260x260.png">
			</div>
			<div class="col-md-4">
				<img src="http://csfood.vn/wp-content/uploads/2020/04/M%C3%AC-Ly-%C4%82n-Li%E1%BB%81n-M%C3%AC-B%C3%B2-H%E1%BA%A7m-V%E1%BB%8B-Cay-Ly-62g-x-Th%C3%B9ng-15-Ly-260x260.png">
			</div>		
		</div>
	</div>
</section>







<!-----------wedsite----->
<section class="wedsite-feature">
	<div class="container">
		<div class="row"  border="1">
			<div class="col-md-3 feature-box">
				<img src="http://dichothue.com.vn/upload/news/47803043.gif" style="width: 70px;height: 70px;margin-left: -20px;">
				<div class="feature-text">
					<b>Chọn món dễ dàng</b>
				</div>
			</div>
				<div class="col-md-3 feature-box">
				<img src="http://dichothue.com.vn/upload/news/74512087.gif" style="width: 70px;height: 70px;margin-left: -20px;">
				<div class="feature-text">
					<b>Đặt hàng nhanh chóng</b>
				</div>
			</div>
			<div class="col-md-3 feature-box">
				<img src="http://dichothue.com.vn/upload/news/41904470.jpg" style="width: 70px;height: 70px;margin-left: -20px;">
				<div class="feature-text">
					<b>Giao hàng tận nơi</b>
				</div>
			</div>
			<div class="col-md-3 feature-box">
				<img src="http://dichothue.com.vn/upload/news/69779174.png" style="width: 70px;height: 70px;margin-left: -20px;">
				<div class="feature-text">
					<b>Thanh toán</b>
				</div>
			</div>

		</div>
		
	</div>
</section>


<!----footer----->
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
</script>




</center>
</body>
</html>