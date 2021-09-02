<style>
.user-menu > .dropdown-menu {
  border-top-right-radius: 0;
  border-top-left-radius: 0;
  padding: 1px 0 0 0;
  border-top-width: 0;
  width: 280px;
	border-bottom-right-radius: 4px;
  border-bottom-left-radius: 4px;
  margin-right: 160px;
}
.user-menu > .dropdown-menu > li.user-header {
  height: 175px;
  padding: 10px;
  text-align: center;
	background-color: #3c8dbc;
}
.user-menu > .dropdown-menu > li.user-header > img {
  z-index: 5;
  height: 90px;
  width: 90px;
  border: 3px solid;
  border-color: transparent;
  border-color: rgba(255, 255, 255, 0.2);
}
	.user-menu > .dropdown-menu > li.user-header > p {
  z-index: 5;
  color: #fff;
  color: rgba(255, 255, 255, 0.8);
  font-size: 17px;
  margin-top: 10px;
}
	.user-menu > .dropdown-menu > li.user-header > p > small {
  display: block;
  font-size: 12px;
}
	.user-menu > .dropdown-menu > .user-footer {
  background-color: #f9f9f9;
  padding: 10px;
}
	.user-menu > .dropdown-menu > .user-footer:before,
.user-menu > .dropdown-menu > .user-footer:after {
  content: " ";
  display: table;
}
.user-menu > .dropdown-menu > .user-footer:after {
  clear: both;
}
.user-menu > .dropdown-menu > .user-footer .btn-default {
  color: #666666;
}
@media (max-width: 991px) {
 .user-menu > .dropdown-menu > .user-footer .btn-default:hover {
    background-color: #f9f9f9;
  }
}
.user-menu .user-image {
  float: left;
  width: 25px;
  height: 25px;
  border-radius: 50%;
  margin-right: 10px;
  margin-top: -2px;
}
@media (max-width: 767px) {
 .user-menu .user-image {
    float: none;
    margin-right: 0;
    margin-top: -8px;
    line-height: 10px;
  }
}
</style>		
           
           <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="text-decoration: none;">
              <span class="hidden-xs"><?php echo $_SESSION['ten_dn'];?></span>
            </a>
            <ul  class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="https://znews-photo.zadn.vn/w1024/Uploaded/qhj_yvobvhfwbv/2018_07_18/Nguyen_Huy_Binh1.jpg" class="rounded-circle"  alt="User Image">

                <p>
                  <?php echo $_SESSION['ten_dn'];?>
                 
                </p>
              </li>
              <li class="user-footer">
                <div class="pull-left">
                  <a href="user/" class="btn btn-default btn-flat">Thông tin cá nhân</a>
                </div>
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-secondary">Đăng xuất</a>
                </div>
              </li>
            </ul>
          </li>