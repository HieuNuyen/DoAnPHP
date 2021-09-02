<!DOCTYPE html>
<html>
<head>
  <title>Đăng nhập tài khoản </title>
</head>
<style type="text/css">
  body {
    margin: 0 auto;
    background-image: url();
    background-repeat: no-repeat;
    background-size: 100% 720px;
    background: url(http://dichothue.com.vn/upload/hinhanh/8377913725463590.jpg);
  }
  .container {
    width: 400px;
    height: 450px;
    text-align: center;
    margin: 0 auto;
    background-color: rgba(44,55,80,0.7);
    border-radius: 4px;
    margin-top: 100px;
    padding:40px;
  } 
  .container img {
    width: 150px;
    height: 150px;
    margin-top: -60px;
    margin-right: 30px;
    text-align: center;
  }
  .container input {
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
  .bbb {
  margin-top: 40px;
  margin-bottom: 20px;
  background: #0066FF;
  color: #fff;
  border-radius: 40px;
  cursor: pointer;
  transition: 0.8s;
  }
  .bbb:hover {
  transform: scale(0.96);
  }
  h2 {
    font-size: 60px;
    margin-bottom: 20px;
    color: blue;

  }
</style>
<body>

  <center><h2>Quản trị viên</h2></center>
  <div class="container">

    <img src="http://simpleicon.com/wp-content/uploads/user1.png"/>
    <form method="post" action="../admin/xulidangnhapadmin.php">
        <input type="text" name="dangnhap1" placeholder="Đăng nhập" class="txt">
        <input type="password" name="password1" placeholder="Nhập mật khẩu...." class="txt">
        <input type="submit" name="admin" value="Đăng nhập admin"  class="bbb">
        
        <p>Dành cho khách hàng:</p>
            <input type='submit' value='Khách hàng' class='bbb' onclick='location.href="dangnhaptaikhoan.php"'/>
    </form>
  </div>
</body>
</html>