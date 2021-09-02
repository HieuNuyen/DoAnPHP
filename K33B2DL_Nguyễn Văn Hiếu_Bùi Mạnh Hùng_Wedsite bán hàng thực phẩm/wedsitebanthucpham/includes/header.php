  <style>
  /* Note: Try to remove the following lines to see the effect of CSS positioning */
  .affix {
      top: 0;
      width: 100%;
  }

  .affix + #content {
      padding-top: 50px;
  }
	  .navbar{
		  z-index: 99;
	  }
  </style>
 <nav class="navbar navbar-default" data-spy="affix" data-offset-top="0">
  <div class="container-fluid"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="index.php">MiuTea</a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Trang chủ <span class="sr-only">(current)</span></a> </li>
        <li><a href="news/">Tin tức</a> </li>
        <li><a href="about/">Giới thiệu</a> </li>
        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">Sản phẩm <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="sp/trasua.php">Trà sữa</a> </li>
            <li><a href="sp/kemcheese.php">Kem cheese</a> </li>
            <li><a href="sp/dabao.php">Đá bào</a> </li>
            <li role="separator" class="divider"></li>
            <li><a href="sp/khuyenmai.php">Khuyến mãi</a> </li>
          </ul>
        </li>
        <li><a href="contact/">Liên hệ</a> </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
       <?php
		  if(isset($_SESSION["user_name"])){
			  include("includes/user_button.php");
		?>
	  <?php	  
		  }else{
			
		?>
		<li><a href="dangnhap.php">Đăng nhập</a></li>
	  <?php
		  }
		?>
        
        <li><a href="cart/"><span class="glyphicon glyphicon-shopping-cart"><span class="badge"><?php echo isset($_SESSION["items"])? sizeof($_SESSION["items"]):0?></span></span></a> </li>
      </ul>
      <form action="search/" method="post" class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <input type="text" name="search" class="form-control" placeholder="Tìm kiếm...">
        </div>
        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></button>
      </form>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>
<!-- HEADER -->