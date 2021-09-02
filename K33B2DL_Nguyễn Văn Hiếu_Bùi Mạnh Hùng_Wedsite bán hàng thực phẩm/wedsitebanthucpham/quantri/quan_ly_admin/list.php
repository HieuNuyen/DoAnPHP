<div id="inmd" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Thêm tài khoản admin</h4>
      </div>
      <form action="index.php?action=insert" method="post">
      <div class="modal-body">
        <table>
        	<tr>
        		<td>Tên đăng nhập: </td>
        		<td><input type="text" name="newadlid" required></td>
        	</tr>
        	<tr>
        		<td>Tên Admin: </td>
        		<td><input type="text" name="newadname" required></td>
        	</tr>
        	<tr>
        		<td>Password: </td>
        		<td><input type="text" name="newadpass" required></td>
        	</tr>
        </table>
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-default" name="insubmit">
      </div>
      </form>
    </div>

  </div>
</div>
<div class="content-wrapper">
<section class="content">

<div class="box">
<div class="box-header">
              <h3 class="box-title">Tài khoản Admin</h3>
            </div>
<div class="box-body">
	<table id="example1" class="table table-bordered table-striped">
		<thead>
                <tr>
                  <th>Mã admin</th>
                  <th>Tên đăng nhập</th>
                  <th>Tên admin</th>
                  <th>Mật khẩu</th>
                  <th>Chỉnh sửa</th>
                  <th style="color:red;">Xóa</th>
                </tr>
 		</thead>
        <tbody>
        	<?php foreach($result as $ob){?>
	<tr>
		<td><?php echo $ob->ma; ?></td>
		<td><?php echo $ob->tendnadmin; ?></td>
		<td><?php echo $ob->ten; ?></td>
    <td><?php echo $ob->matkhau; ?></td>
		<td>
			
			<button type="button" data-toggle="modal" data-target="#md<?php echo $ob->ma?>">Chỉnh sửa</button>
			<div id="md<?php echo $ob->ma?>" class="modal fade" role="dialog">
  				<div class="modal-dialog">
    			<!-- Modal content-->
    				<div class="modal-content">
      					<div class="modal-header">
        					<button type="button" class="close" data-dismiss="modal">&times;</button>
        					<h4 class="modal-title">Thay đổi thông tin</h4>
      					</div>
      					<form action="index.php?action=edit&id=<?php echo $ob->ma?>"  method="post">
      					<div class="modal-body">
        					<table style="width:100%;">
        						<tr>
        							<td>Mã admin</td>
        							<td><input type="text" name="editadid" value="<?php echo $ob->ma;?>" readonly></td>
        						</tr>
        						<tr>
        							<td>Tên đăng nhập</td>
        							<td><input type="text" name="editadlid" value="<?php echo $ob->tendnadmin;?>" required></td>
        						</tr>
        						<tr>
        							<td>Mật khẩu</td>
        							<td><input id="pass" type="password" name="editadpass" value="<?php echo $ob->matkhau;?>" required>
        							
        							<script>
									
									</script>
        							</td>
        						</tr>
        						<tr>
        							<td>Tên admin</td>
        							<td><input type="text" name="editadname" value="<?php echo $ob->ten;?>" required></td>
        						</tr>
        					</table>
      					</div>
      					<div class="modal-footer">
        					<input type="submit" class="btn btn-default" name="editadsubmit">
      					</div>
      					</form>
    				</div>
  				</div>
			</div>
			
		</td>
		<td>
		
			<a style="color:red" href="index.php?action=delete&id=<?php echo $ob->ma;?>" onClick="return confirm('Bạn thật sự muốn xóa tài khoản này? Bạn không thể khôi phục lại tài khoản sau khi xóa!');">Xóa Tài Khoản này</a>
		
			
			
		</td>
	</tr>
	<?php } ?>
        </tbody>
        
	</table>
</div>
</div>
</section>
</div>
