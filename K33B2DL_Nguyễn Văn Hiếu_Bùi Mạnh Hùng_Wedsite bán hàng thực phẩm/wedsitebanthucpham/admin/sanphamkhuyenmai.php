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

<style>
p {
	font-size:18px;
}


.product-top img 
{
	width: 100%;

}
.overlay-right {
	display: block;
	opacity: 0;
	
	top: 15%;
	margin-left: 0;
	width: 70px;
	
}
.overlay-right .fa {
	cursor: pointer;
	background-color: #fff;
	color: #000;
	height: 35px;
	width: 35px;
	font-size: 20px;
	padding: 7px;
	margin-top: 5%;
	margin-bottom: 5%;
}
.overlay-right .btn-secondary {
	background:none !important;
	border:none !important;
	box-shadow: none !important;
}
.product-top:hover .overlay-right {
	opacity: 1;
	margin-left: 10px;
	transition: 0.5s;
}


/*............product bottom............*/

.product-bottom .fa {
	color: orange;
	font-size: 10px;

}

.khuyen {
	width: 100%;
}


</style>


</head>
<body>
<!------------>
<center>
<section style="height: 100px;margin-top: 20px;">
	<div><?php include('../includes/top.php') ?></div>
</section>
<section style="width: 100%; height: 50px;background-color: #F7F9FA; margin-top: 10px;">
	<div>
<?php
include('../includes/Menu.php');
?>
</div>
</section>
<img src="https://foodmartthriftway.com/Content/images/banner_13.jpg" height="500px" width="100%"/>
<!-------Sản phẩm khuyến mãi--------------->
<?php
	$con= mysqli_connect('localhost','root','','thucpham');
	
	$sql= 'SELECT* from tp where ma_loai='.$_GET['id'];
	$rs=mysqli_query($con,$sql);
?>
<center >
<section >
		<center>
		<div >
		
		<?php 
		$con=mysqli_connect('localhost','root','','thucpham');
		if(isset($_GET['id'])){
			$id=$_GET['id'];
			$sql="select *from loai_tp where ma_loai= $id";
		}else{
				$sql="select *from loai_tp";
		}
		
		$re=mysqli_query($con,$sql);
	
		?>
		<?php
		while ($danhmuc=mysqli_fetch_assoc($re)) {
			
		?>
		<h1  style="color: #4CAF50; margin-top:40px;margin-left: -100px;"><?php echo $danhmuc['ten_loai']; ?></h1>
		</div>
			<?php } ?>
		</center>
		<center style="margin-left:80px;"	>
		<div  class="col-md-8"  >
			
		<?php
		while ($row = mysqli_fetch_assoc($rs))
		{

		$id = $row['ma'];
		$ten= $row ['ten_tp'];
		$hinhanh=$row['anh'];
		$gia = $row ['gia'];
		?>
		<div class="product-top" style="width:255px; height:360px; border:1px solid #999; margin:30px; float:left; background:#fbfbfb;">
			
			<div class="col-md-12">
			<div class="row" id="anh">
			<img src="../imagespkhuyenmai/<?php echo $hinhanh; ?>"  width="100%"/>
			</div>
			<div class="overlay-right">
			<button type="button" class="btn btn-secondry" title="Xem thêm">
				<<a href="chitietsanpham.php?id=<?php echo $row['ma'] ?>"><i class="fa fa-eye" ></i></a>
			</button>	
			<button type="button" class="btn btn-secondry" title="Thích">
				<i class="fa fa-heart-o" ></i>
			</button>
			<button type="button" class="btn btn-secondry" title="Thêm vào giỏ hàng">
				<a href='themgiohang.php?id=<?php echo($row['ma'])?>'><i class="fa fa-shopping-cart" ></i></a>
			</button>
			</div>
			<div class="product-bottom text-center">
			
			<p><?php echo $ten; ?></p>
			<h5 >Giá:<?php echo $gia;?></h5>
			</div>
			
		</div>
		</div>

		<?php } ?>
		</div>
		
		
	</center>
	</div>
	
</section>
</center>
<center><div id='trang' style="clear:both">
<?php
  $con= mysqli_connect('localhost','root','','thucpham');
  $sqltrang = mysqli_query($con,"select * from tp where ma_loai = 5");
  $count = mysqli_num_rows($sqltrang);
  $a = ceil($count/12);
  for($b = 1;$b <= $a; $b++) {
	  echo '<a style="color:#FFF; text-decoration:none;" href="?trang='.$b.'"><button style="margin:2px; width:18px; height:24px">'.' '.$b.' '.'</button></a>';
  }
 ?>
</div></center>




<!----------------footer------------>
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