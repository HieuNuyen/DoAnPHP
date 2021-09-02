<?php
	session_start();
	if(!isset($_SESSION['tendnadmin'])){
		header("Location: index.php?err=2");
	}
?>
<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Phản hồi </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">


  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>



<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="../adminpage2.php" class="logo">
      
      <span class="logo-lg"><b>Food</b> Admin</span>
    </a>

    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="https://avi.edu.vn/wp-content/uploads/2019/11/london-2393098.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $_SESSION['tendnadmin'];?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="https://avi.edu.vn/wp-content/uploads/2019/11/london-2393098.jpg" class="img-circle" alt="User Image">

                <p>
                  <?php echo $_SESSION['tendnadmin'];?>
                  
                </p>
              </li>
              <li class="user-footer">
                <div class="pull-left">
                  <a data-toggle="modal" data-target="#inmd" class="btn btn-default btn-flat">Profile</a>
                </div>
                
                <div class="pull-right">
                  <a href="../../admin/" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            
          </li>
        </ul>
      </div>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    
    <section class="sidebar">
      
      <div class="user-panel">
        <div class="pull-left image">
          <img src="https://avi.edu.vn/wp-content/uploads/2019/11/london-2393098.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['tendnadmin'];?></p>
         <div> <i class="fa fa-circle text-success"></i> Online</div>
        </div>
      </div>
      <br>
      
      
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">ADMIN MENU</li>
        <li class="active">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li>
          <a href="../quan_ly_mat_hang/">
            <i class="fa fa-cubes"></i> <span>Quản lý mặt hàng</span>
          </a>
        </li>
        <li>
          <a href="../quan_ly_thanh_vien/">
            <i class="fa fa-male"></i> <span>Quản lý Thành viên</span>
          </a>
        </li>
        <li>
          <a href="../don_hang/">
            <i class="fa fa-shopping-cart"></i> <span>Đơn Hàng</span>
          </a>
        </li>
        
        <li>
          <a href="../quan_ly_feedback/">
            <i class="fa fa-comments"></i> <span>Quản lý feedback</span>
          </a>
        </li>
        <li>
          <a href="../quan_ly_admin/">
            <i class="fa fa-group"></i> <span>Quản lý admin</span>
          </a>
        </li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  												<!-- Content Wrapper. Contains page content -->
<?php
	include("get_feedback_controller.php");
	$ctrl = new get_feedback_controller();
	$ctrl->process();
?>
											<!-- /.content-wrapper -->

  <footer class="main-footer">
    <strong>Copyright &copy; 2020-2021<a href="#">FOOD MASH FRESH</a>.</strong> 
  </footer>

  <!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
    </ul>
    <!-- Tab panes -->
  <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
      </div>
    </div>
  <!-- /.tab-pane -->
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/main.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable();
  })
</script>
</body>
</html>
