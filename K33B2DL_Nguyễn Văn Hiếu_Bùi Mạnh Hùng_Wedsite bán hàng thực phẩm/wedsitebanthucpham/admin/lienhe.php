<?php
 session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Trang chủ</title>
<link rel="stylesheet" type="text/css" href="../css/style1.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>

<style>
#left {
	margin-left:70px;
}

#right {
	float:right;
}

th {
	padding:30px;
	text-align:center;
	
}

td {
	font-size:20px;
	padding:10px;
	vertical-align:middle;
}

form .req { color: #ca5354; }


 

form .txt:focus {
  width: 730px;
  color: #55454;
  background-color: #fff;
  background-position: 110% center;
  background-repeat: no-repeat;
  border-color: #059;
  
}
form .txt:valid {
  background-color: #deecda;
  background-position: 98% center;
  background-repeat: no-repeat;
  color: #7d996e;
  border: 1px solid #95bc7d;
}
.txt {
  width: 700px;
  height: 50px;
  padding: 0;
  margin: 0;
  border: 1px solid #999;
}

</style>
</head>
<body>
<div style="height: 100px;margin-top: 20px;">
  <?php include('../includes/top.php') ?>
</div>
<section style="width: 100%; height: 50px;background-color: #F7F9FA;margin-top: 7px;">
  <div>
<?php
include('../includes/Menu.php');
?>
</div>
<div style="background: url(https://dean2020.edu.vn/wp-content/uploads/2019/07/hinh-nen-slide-thuyet-trinh-dep-16.jpg)  ;height: 1000px;width: 100%;  ">
 
  <center>
    <?php
   $con = mysqli_connect('localhost','root','','thucpham');
   if(isset($_POST['submit'])) {
    
   $ten = $_POST['txtt'];
   $email = $_POST['txtem'];
   $diachi= $_POST['txtdc'];
   $noidung = $_POST['txtnd'];
   $sql = "INSERT INTO `lien_he`( `ten_nguoi_lh`, `emai_nguoi_lh`, `diachi__nguoi_lh`, `ngay_lh`, `noidung`) values('$ten', '$email','$diachi', now() ,'$noidung')";
   
   mysqli_query($con,$sql);
   
   echo '<script type="text/javascript">';
   echo 'alert("Gửi thành công, cảm ơn bạn đã liên hệ với chúng tôi !")';
   echo '</script>';
   }
  ?>
  <b><h1 style="margin-top: 40px;">Liên hệ</h1></b>
     
  
  <form id="contactform" name="form1" method="post" action="lienhe.php">
    <table>

     <tr>
      <div class="row">
       <td>Họ và tên: <span class="req">*</span></td>
       <td><input type="text" name="txtt" class="txt" tabindex="1" placeholder="    Nhập họ và tên ..." required></td>
      </div>
     </tr>
     <br>
     <tr>
      <div class="row">
       <td>Email <span class="req">*</span></td>
       <td><input type="email" name="txtem" class="txt" tabindex="3" placeholder="    Nhập email..." required></td>
      </div>
     </tr>

     <tr>
      <div class="row">
       <td style="vertical-align:right"> Địa chỉ: <span class="req">*</span></td>
       <td><textarea name= "txtdc" class="txt"  tabindex="3" placeholder="    Nhập địa chỉ..." required></textarea></td>
      </div>
     </tr>

     
     <tr>
      <div class="row">
       <td style="vertical-align:top">Nội dung <span class="req">*</span></td>
       <td><textarea name="txtnd" class="txt" tabindex="3" placeholder="    Nội dung lời nhắn" required ></textarea></td>
      </div>
     </tr>
     <tr>
      <div class="center">
       <th colspan="2" ><input type="submit" id="submit" class="btn btn-light" name="submit" tabindex="5" value="Gửi đi" style="margin-left: 400px;width: 90px;"></th>
      </div>
     </tr>
    </table>
    </form>
    </center>
 
</div>
<center>
<?php include('../includes/footer.php'); ?>
</center>
</body>
</html>