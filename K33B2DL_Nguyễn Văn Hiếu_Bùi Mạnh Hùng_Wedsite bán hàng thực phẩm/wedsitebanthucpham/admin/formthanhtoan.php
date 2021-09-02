<?php
	session_start();
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title> Thanh toán</title>
	<link rel="stylesheet" type="text/css" href="../css/style1.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
<style type="text/css">
	input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
 

</style>
</head>

<body>
<section >
	<div><?php include('../includes/top.php') ?></div>
</section>
<section style="width: 100%; height: 50px;background-color: #F7F9FA;margin-top: -13px;">
	<div>
<?php
include('../includes/Menu.php');
?>
</div>
</section>
<div class="container">
  <h2 style="text-align: center;margin-top: 20px;">Thanh toán hóa đơn</h2>
  <form name="forml" method="post" action="thanhtoan.php" class="was-validated">
    <div >
      <label for="fname" >Họ tên người nhận:</label>
      <input type="text" id="fname" name="txt">
    </div>
    <div >
      <label >Địa chỉ giao hàng:</label>
      <input type="text" name="diachi">
    </div>
    <div >
      <label >Số điện thoại:</label>
      <input type="text" name="phone">
    </div>
    <div >
      <label >Mã đơn hàng:</label>
      <input type="text" name="ma">
    </div>
    <div >
      <label >Tổng số tiền hóa đơn:&nbsp; &nbsp;</label>
      <?php echo $_SESSION['totalorder']; ?>
    </div>
    <input type="submit" name="button" class="btn btn-primary" value="Đặt hàng" style="float: right;">
    
  </form>
</div>

<center>
<?php include('../includes/footer.php'); ?>
</center>
</body>
</html>


























