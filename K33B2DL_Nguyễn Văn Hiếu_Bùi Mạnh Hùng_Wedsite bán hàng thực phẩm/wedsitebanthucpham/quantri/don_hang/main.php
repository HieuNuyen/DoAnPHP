<div class="content-wrapper">
	<section class="content">
		<div class="box">
			<div class="box-header">
              <h3 class="box-title">Danh sách đơn hàng</h3>
            </div>
			<div class="box-body">
				<table id="example1" class="table table-bordered table-striped">
					<thead>
                		<tr>
                  			<th>Mã đơn hàng</th>
                  			<th>Khách hàng</th>
                  			<th>điện thoại</th>
                  			<th>Địa chỉ nhận hàng</th>
                  			<th>Chi tiết đơn hàng</th>
                  			<th>Tổng tiền</th>
                  			
                  			<th>Trạng thái</th> 
                  			<th>Thời gian</th>
                		</tr>
 					</thead>
        			<tbody>
        			<?php foreach($resultset as $fb){ 
						$dh = $this->model->SelectById($fb->ma_dh);
					?>
        				
						<tr>
							<td><a  href="#"><?php echo $fb->ma_dh; ?></a></td>
							<td><?php echo $fb->ten_kh; ?></td>
							<td><?php echo $fb->sdt; ?></td>
							<td><?php echo $fb->diachi_giao; ?></td>
							<td>
								<?php
									foreach($dh as $d){
										echo "$d->ten_tp x $d->sl_dat  <br>";
									}
								?>
							</td>
							<td>
								<?php
									$p = 0;
									foreach($dh as $d){
										$p += $d->tonggia;
									}
									echo number_format($p) . " VNĐ";
								?>
							</td>
							
							<td ><span class="dropdown"><?php if($fb->Tinh_trang==1){echo "<span class='label label-success'>Shipped</span>";}else if($fb->Tinh_trang==0){echo "<span class='label label-warning'>Pending</span>";}else if($fb->Tinh_trang==-1){echo "<span class='label label-danger'>Canceled</span>";} ?><i class="fa fa-angle-down pull-right dropdown-toggle" data-toggle="dropdown"></i><ul class="dropdown-menu">
   								<li><a>Thay đổi trạng thái</a></li>
   								<li class="divider"></li>
    							<li><a href="?status=1&id=<?php echo $fb->ma_dh; ?>">Shipped</a></li>
    							<li><a href="?status=0&id=<?php echo $fb->ma_dh; ?>">Pending</a></li>
    							<li><a href="?status=-1&id=<?php echo $fb->ma_dh; ?>">Canceled</a></li>
  							</ul></span></td>
							<td><?php echo date_format(date_create($fb->ngay_dh),"H:i:s - d/m/Y"); ?></td>
						</tr>
					<?php } ?>
       				 </tbody>
        			
				</table>
			</div>
		</div>
	</section>
</div>