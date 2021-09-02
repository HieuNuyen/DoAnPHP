<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<style type="text/css">
* {
	margin:0;
	padding:0;
}
.menu
{
	width:1300px; 
	height:30px; 
	line-height:45px;
	z-index:9999;
	position:relative;
	margin-top: -1px;
  margin-left: -190px;
	float: center;
	font-size: 20px;
	
}
.menu li
{
	position:relative;
	display:inline-block;
	width:100%;
	border-right: 1px solid #CFCFCF;
}
.menu li ul
{
	position:absolute; 
	display:none;

}
.menu li:hover > ul
{
	display:block;
}
.menu a
{
	transition:0.6s;
	text-decoration:none;
	display:block; 
	color:#333;
	background:#F7F9FA;
}
.menu ul ul,
.menu li:hover > a,
.menu a:hover
{
	
	
    color: #ff7f00;
    text-decoration: none;
}
.menu > ul > li
{
	text-align:center;
	width:16%;
}



.menu li a {
	display: block;
    text-transform: inherit;
    text-shadow: 0px 0px 12px  #FFF;
    color: #333;
    background: rgba(204,204,204,1);
    letter-spacing: 1px;
    -webkit-transition: all 0.2s linear;
    -moz-transition: all 0.2s linear;
    -o-transition: all 0.2s linear;
    -ms-transition: all 0.2s linear;
    transition: all 0.2s linear;
    background-color: #F7F9FA;
    border: 0px solid black;
}
#d {
	float: left;

	margin-left: 3px;
}
#dx  {
	float: left;
	padding: 0;
border-bottom: 1px dashed #ccc;
	
}


</style>
</head>

<body>
<center>
  <div class="menu">
  	<ul>
  		
    	<li><a href="index.php">TRANG CHỦ </a></li>
       <li><a href="gioithieu.php">GIỚI THIỆU</a></li>
       <li ><a> SẢN PHẨM <i  class="fa fa-sort-desc" aria-hidden="true" style="margin-left: 10px;font-size:25px;color: #848484;"></i></a>
  			<ul style="font-size: 20px;text-align: left;margin-left:-7px;margin-top: 5px;padding: 0;width:300px;border-bottom: 1px solid #b2b2b2; "> 
       			<li id="dx"><a href="sanphamkhuyenmai.php?id=1">&nbsp;&nbsp;Sản phẩm khuyến mãi</a></li>
       			<li id="dx"><a href="sanphamkhuyenmai.php?id=2" >&nbsp;&nbsp;Rau củ quả</a></li>
       			<li id="dx"><a href="sanphamkhuyenmai.php?id=3">&nbsp;&nbsp;Thực phẩm tươi sống</a></li>
       			<li id="dx"><a href="sanphamkhuyenmai.php?id=4">&nbsp;&nbsp;Thực phẩm khô</a></li>
       			<li id="dx"><a href="sanphamkhuyenmai.php?id=5">&nbsp;&nbsp;Thực phẩm bổ dưỡng</a></li>
       			<li id="dx"><a href="sanphamkhuyenmai.php?id=6">&nbsp;&nbsp;Gia vị</a></li>
       			<li id="dx"><a href="sanphamkhuyenmai.php?id=7">&nbsp;&nbsp;Đồ uống</a></li>
       			<li id="dx"><a href="sanphamkhuyenmai.php?id=8">&nbsp;&nbsp;Sữa- Kem & sản phẩm từ sữa</a></li>
       			
       		</ul>
  		</li>
       <li><a href="lienhe.php">LIÊN HỆ</a></li>
       
       <li><a href="giohang.php">GIỎ HÀNG</a></li>
    </ul>
  </div>
  
</center>
</body>
</html>
