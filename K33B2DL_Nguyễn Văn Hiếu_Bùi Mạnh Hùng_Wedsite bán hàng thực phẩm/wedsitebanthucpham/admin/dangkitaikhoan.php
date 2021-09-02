
<!DOCTYPE html>
<html>
<head>
	<title>Đăng kí tài khoản</title>
</head>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="style1.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>

<style type="text/css">
body {
	margin:0px;
	padding:0px;
	background: url(https://cdn.pixabay.com/photo/2017/08/06/10/05/bird-2590901_1280.jpg) no-repeat;
	background-size: cover;
	
}
.signup-form {
	
	width: 400px;
	padding: 30px;
	text-align: center;
	background: rgba(101,102,114,0.7);
	position: absolute;
	top: 20%;
	left: 40%;
	transition: translate(-50%;-50%);
	overflow: hidden;
	border-radius: 05px; 
}
.signup-form img {
	width: 50%;
	height: 50%;
}
.signup-form  input {
	display: block;
	width: 100%;
	padding-left: 10px;
	height: 44px;
	box-sizing: border-box;
	outline: none;
	border: none;
	font-family: 'Ubuntu', sans-serif;
	font-size: 14px;
	
} 
.txt {
	margin:20px 0px;
	border-radius: 5px;
}
.btn {
	margin-top: 60px;
	margin-bottom: 20px;
	background: #487eb0;
	color: #fff;
	border-radius: 40px;
	cursor: pointer;
	transition: 0.8s;
}
.btn:hover {
	transform: scale(0.96);
}
.signup-form a {
	text-decoration: none;
	color: #000;
	font-family: 'Ubuntu', sans-serif;
	padding: 10px;
	transition: 0.8s;
	display: block;
}
.signup-form a:hover{
	background: rgba(0,0,0,0.3);
	color: #fff;
}
</style>
<body>

<div class="signup-form">
	<img src="http://simpleicon.com/wp-content/uploads/user1.png">
	<form action="xulidangki.php" method="POST">
		<input type="text" name="hovaten" placeholder="Họ và Tên" class="txt">
		<input type="email" name="email" placeholder="Email" class="txt">
		<input type="text" name="dangnhap" placeholder="Tên đăng nhập" class="txt">
		<input type="password" name="password" placeholder="Mật khẩu" class="txt">
		<input type="password" name="repassword" placeholder="Nhập lại mật khẩu" class="txt">
		<input type="radio" name="gioitinh"  value="Nam">Nam
		<input type="radio" name="gioitinh"  value="Nữ">Nữ
		<input type="text" name="address" placeholder="Địa chỉ" class="txt">
		<input type="submit" value="Đăng kí tài khoản" class="btn" name="btn">
		<a href="#">Bạn đã có tài khoản</a>
	</form>
</div>
</body>
</html>