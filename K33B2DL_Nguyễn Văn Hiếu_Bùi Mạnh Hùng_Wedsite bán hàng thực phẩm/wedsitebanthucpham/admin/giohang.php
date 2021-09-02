<?php  session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>gio hang</title>
	<link rel="stylesheet" type="text/css" href="../css/style1.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
<style type="text/css">
	.gio {
		margin-top: 20px;
	}
	.th1 {
		width: 160px;
		text-align: center;
		font-size: 23px;
		height: 70px;
	}
	.th {
		text-align: left;
		width: 250px;
		font-size: 23px;
		height: 70px;
	}
	#button3 {
	 width:120px;
	 height:40px;
	 text-align:center;
	 
	 text-decoration:none;
	 font-size:19px;
	 display:block; 
	 background:#999;
	 border-radius:7px;
	 float: right;
 }
 .btn btn-danger {
 	float: left;
 }
 .btn btn-success{
 	text-align:center;
 	border-radius:7px;
 	float: right;
 	display:block; 
 	text-decoration:none;

 }
</style>
</head>
<body>
<div style="margin-top: -20px;">
	<?php include('../includes/top.php') ?>
</div>
<section style="width: 100%; height: 50px;background-color: #F7F9FA;margin-top: -20px;">
	<div>
<?php
include('../includes/Menu.php');
?>
</div>


<center>
	<img src="https://foodmartthriftway.com/Content/images/banner_13.jpg" style="margin-top: 20px;" height="500px" width="100%" />
<div class="gio">
	<div>
	<p style="font-size: 40px;color:#FF9999">Giỏ hàng của tôi</p>
	</div>
<?php
	$con=mysqli_connect('localhost','root','','thucpham');?>
	<?php  
		$isempty=0;
		//bien trang thai dung de kiem tra xem gio hang co trong hay ko
		if(isset($_SESSION['cart'])){
			//lay ra cac san pham trong gio
			$list=$_SESSION['cart'];
			//lay ra so san pham trong gio hang
			$somathang=count($list);
			if($somathang==0){
				echo '<h3>Giỏ hàng trống</h3>';
			}else{
				echo "<h3>Có tổng số $somathang sản phẩm trong giỏ hàng</h3>";
			}
			foreach ($_SESSION['cart'] as $k => $v) {
				if(isset($k)){
					$isempty=1; //gio hang co san pham
				}
				$item[] = $k;
			}
			//chuyen mang thanh chuoi
			$str=implode(',', $item);
			$sql3="SELECT * from tp where ma in ($str)";
			$result = mysqli_query($con, $sql3);
			?>
			<form action="updatecart.php" method="post">
			<table border="0">
				<tr>
				<th class="th">Tên sản phẩm</th>
				<th class="th1">Giá</th>
				<th class="th1">Số lượng</th>
				<th class="th1">Hình ảnh</th>
				<th class="th1">Tổng giá trị</th>
				<th class="th1">Xóa</th>
				</tr>
			<?php 
				$tonggiatri=0;
				while($rw= mysqli_fetch_assoc($result)){
					$ten=$rw['ten_tp'];
					$gia=$rw['gia'];
					$soluong = $_SESSION['cart'][$rw['ma']];
					$hinhanh=$rw['anh'];
					$giatri = $soluong * $gia;
					$tonggiatri += $giatri;
					$_SESSION['totalorder']=$tonggiatri;
					?>
					<tr>
					<td class="th"><?php echo $ten; ?></td>
					<td class="th1"><?php echo $gia; ?></td>
					<td class="th1"><input type="text" name="txtsoluong[<?php echo $rw['ma']; ?>]" value="<?php echo $soluong; ?>" size="3" /></td>
					<td class="th1"><img src="../imagespkhuyenmai/<?php echo $rw['anh']; ?>" width="150px" height="150px" /></td>
					<td class="th1"><?php echo $giatri; ?></td>
					<td class="th1"><a href="deletecart.php?id=<?php echo $rw['ma']; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
					</tr>
				<?php	
				} 
				?>
				<tr>
				<td colspan="6" align="right"><b>Tổng giá trị: <?php echo $tonggiatri;?></b></td>
				</tr>
				<tr>
					<td colspan="6"><input type="submit" value="Cập nhật" class="btn btn-light"/>
					<div ><a href='formthanhtoan.php' style="color:#FFF; text-decoration:none;float: right;" class="btn btn-success">Thanh toán</a></div></td>
				</tr>
				</table>
				</form>
			<?php
				} else {
				echo '<h3>Giỏ hàng trống</h3>';
				}
				?>
				<br>
				<a href="deletecart.php" class="btn btn-danger">Xóa giỏ hàng</a>
				
				<div>
				<h3><a href="index.php" style="text-decoration: none;">Mua tiếp</a></h3>
			</div>
				

</div>
</center>
<center>
<?php include('../includes/footer.php'); ?>
</center>	
</body>
</html>