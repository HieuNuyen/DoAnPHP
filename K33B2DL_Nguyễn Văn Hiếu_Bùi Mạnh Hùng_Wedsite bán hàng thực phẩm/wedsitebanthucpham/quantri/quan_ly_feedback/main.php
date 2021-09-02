<div class="content-wrapper">
 <section class="content">

<div class="box">
<div class="box-header">
              <h3 class="box-title">Liên hệ</h3>
            </div>
<div class="box-body">
	<table id="example1" class="table table-bordered table-striped">
		<thead>
                <tr>
                  <th>Mã liên hệ</th>
                  <th>Tên người gửi</th>
                  <th>Email</th>
                  <th>Nội Dung</th>
                  <th>Thời gian</th>
                </tr>
 		</thead>
        <tbody>
        	<?php foreach($resultset as $fb){ ?>
	<tr>
		<td><?php echo $fb->ma_lh; ?></td>
		<td><?php echo $fb->ten_nguoi_lh; ?></td>
		<td><?php echo $fb->emai_nguoi_lh; ?></td>
		<td><?php echo $fb->noidung; ?></td>
		<td><?php echo date_format(date_create($fb->ngay_lh),"H:i:s - d/m/Y"); ?></td>
	</tr>
	<?php } ?>
        </tbody>
        
	</table>
</div>
</div>
</section>
</div>