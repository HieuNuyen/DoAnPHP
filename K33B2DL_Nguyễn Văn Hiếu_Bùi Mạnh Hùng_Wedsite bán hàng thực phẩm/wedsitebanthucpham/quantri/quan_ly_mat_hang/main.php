<style>
	.trr{
		height: 42px;
	}
</style>
<div class="content-wrapper">
	<section class="content">
           <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#all" data-toggle="tab">All</a></li>
              
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="all">
                <table class="table table-bordered table-striped tablex">
		<thead>
                <tr>
                  <th>Mã</th>
                  <th>Tên</th>
                  <th>Loại</th>
                  <th>Giá</th>
                  <th>Hình ảnh</th>
                  <th>Mô tả</th>
                  <th>Chỉnh sửa</th>
                  <th style="color:red;">Xóa sản phẩm</th>
                </tr>
 		</thead>
        <tbody>
        	<?php foreach($result as $ob){?>
	<tr>
		<td><?php echo $ob->ma ?></td>
		<td><?php echo $ob->ten_tp; ?></td>
		<td><?php echo $ob->ten_loai; ?></td>
		<td><?php echo $ob->gia; ?></td>
		<td><img height="128" width="128" src="../../imagespkhuyenmai/<?php echo $ob->anh; ?>"></td>
		<td><?php echo $ob->mo_ta; ?></td>
		<td>
			<button type="button" class="btn btn-default" data-toggle="modal" data-target="#mda<?php echo $ob->ma?>">Chỉnh sửa</button>
			<div id="mda<?php echo $ob->ma?>" class="modal fade" role="dialog">
  				<div class="modal-dialog">
    			<!-- Modal content-->
    				<div class="modal-content">
      					<div class="modal-header">
        					<button type="button" class="close" data-dismiss="modal">&times;</button>
        					<h4 class="modal-title">Thay đổi thông tin</h4>
      					</div>
      					<form action="index.php?action=edit&id=<?php echo $ob->ma?>"  method="post" enctype="multipart/form-data">
      					<div class="modal-body">
        					<table style="width: 100%">
        						<tr class="trr">
        							<td>Mã </td>
        							<td><input class="form-control" type="text" name="eid" value="<?php echo $ob->ma;?>" readonly></td>
        						</tr>
        						<tr class="trr">
        							<td>Tên</td>
        							<td><input class="form-control" type="text" name="ename" value="<?php echo $ob->ten_tp;?>" required></td>
        						</tr>
        						<tr class="trr">
        							<td>Loại</td>
        							<td>
        								<select class="form-control" name="ek">
        									<?php foreach($ml as $m){ ?>
												<option value="<?php echo $m->ma_loai; ?>"><?php echo $m->ten_loai; ?></option>
        									<?php }?>
        								</select>
        							</td>
        						</tr>
        						<tr class="trr">
        							<td>Giá</td>
        							<td><input class="form-control" type="number" name="eprice" value="<?php echo $ob->gia;?>" required></td>
        						</tr>
        						<tr class="trr">
        							<td>Hình ảnh</td>
        							<td><input class="form-control" type="file" name="imgx"></td>
        						</tr>
        						<tr class="trr">
        							<td>Mô tả</td>
        							<td><input class="form-control" type="text" name="edes" value="<?php echo $ob->mo_ta;?>"></td>
        						</tr>
        					</table>
      					</div>
      					<div class="modal-footer">
        					<input type="submit" class="btn btn-default" name="esub">
      					</div>
      					</form>
    				</div>
  				</div>
			</div>
		</td>
		<td>
			
			<a style="color:red" href="index.php?action=delete&id=<?php echo $ob->ma;?>" onClick="return confirm('Bạn thật sự muốn xóa sản phẩm này?');"><button class="btn btn-danger">Xóa Sản phẩm</button></a>
		</td>
	</tr>
	<?php } ?>
        </tbody>
        
	</table>
              
        
	
              </div>
              
            </div>
            <!-- /.tab-content -->
          </div>
          <?php include("addform.php"); ?>
	</section>
</div>