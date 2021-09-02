<?php
 session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tìm kiếm</title>


<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="../css/style1.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>


</style>
</head>
<body>
<section >
	<div><?php include('../includes/top.php') ?></div>
</section>
<section style="width: 100%; height: 50px;background-color: #F7F9FA; margin-top: -13px;">
	<div>
<?php
include('../includes/Menu.php');
?>

</div>

</section>
<img src="https://foodmartthriftway.com/Content/images/banner_13.jpg" height="500px" width="100%" />
<center  ><p style="font-size: 35px;margin-top: 20px;">Tìm kiếm</p>
<p>Hiển thị kết quả tìm kiếm</p>
</center>
<center>
<div >
 <?php
  $con=mysqli_connect('localhost','root','','thucpham');
  if(isset($_REQUEST['ten'])){
          $search = addslashes($_GET['search']);
          if (empty($search)) {
        echo "Yeu cau nhap du lieu vao o trong";
    } else {
        // Phan dung vong lap while show du lieu
        $selectpro = "SELECT * FROM tp where ten_tp like '%$search%'";
        $result = mysqli_query($con,$selectpro);
        while($row = mysqli_fetch_array($result)){
 ?>	

    <div class="product-top" style="width:255px; height:360px; border:1px solid #999; margin:30px; float:center; background:#fbfbfb;">
			
			<div class="col-md-12">
			<div class="row" id="anh">
			<img src="../imagespkhuyenmai/<?php echo $row['anh']; ?>"  width="100%"/>
			</div>
			<div class="overlay-right">
			<button type="button" class="btn btn-secondry" title="Xem thêm">
				<a href="chitietsanpham.php?id=<?php echo $row['ma'] ?>"><i class="fa fa-eye" ></i></a>
			</button>	
			<button type="button" class="btn btn-secondry" title="Thích">
				<i class="fa fa-heart-o" ></i>
			</button>
			<button type="button" class="btn btn-secondry" title="Thêm vào giỏ hàng">
				<a href='themgiohang.php?id=<?php echo($row['ma'])?>'><i class="fa fa-shopping-cart" ></i></a>
			</button>
			</div>
			<div class="product-bottom text-center">
			
			<p><?php echo $row['ten_tp']; ?></p>
			<h5 >Giá:<?php echo $row['gia'];?></h5>
			</div>
			
		</div>
		  <?php
	  }
  }
}
 ?>
 </div>
</div>
</center>
 <div id='footer' style="clear:both"><?php include('../includes/footer.php'); ?></div>
</div>
</body>
</html>