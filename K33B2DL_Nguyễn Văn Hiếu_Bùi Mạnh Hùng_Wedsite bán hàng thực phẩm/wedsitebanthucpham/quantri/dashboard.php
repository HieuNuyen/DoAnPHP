<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo isset($mostfav->sl_dat)?$mostfav->sl_dat:0; ?></h3>

              <h4>Sản phẩm </h4>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="quan_ly_mat_hang/" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo $nomembers; ?></h3>

              <h4>Thành viên</h4>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="quan_ly_thanh_vien/" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $noorder;?></h3>

              <h4>Đơn hàng</h4>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="don_hang/" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php
				$sols = 0;
				$income = 0;
				foreach($sold as $o){
					$sols += $o->sl_dat;
					$income += $o->tonggia;
				}
				echo $sols;
			 ?></h3>

              <p>Tổng giá <?php echo number_format($income);?> VNĐ</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="don_hang/" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <div class="col-md-8">
          <div class="row">
            <div class="col-md-12">
              <!-- USERS LIST -->
              <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Tài khoản khách hàng</h3>

                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                  <ul class="users-list clearfix">
                    <?php foreach($member as $mb){ ?>
                    <li>
                      <img height="128" width="128" src="https://image.sggp.org.vn/w560/Uploaded/2020/rohjaop/2019_07_17/stg02291_shsj.jpg" alt="User Image">
                      <a class="users-list-name" href="#"><?php echo $mb->hovaten_kh; ?></a>
                      <span class="users-list-date"><?php echo $mb->email; ?></span>
                    </li>
                    <?php } ?>
                  </ul>
                  <!-- /.users-list -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-center">
                  <a href="quan_ly_thanh_vien/" class="uppercase">Xem tất cả thành viên</a>
                </div>
                <!-- /.box-footer -->
              </div>
              <!--/.box -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.col -->

        <div class="col-md-4">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Phản hồi</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <ul class="products-list product-list-in-box">
       
                <!-- /.item -->
                <?php foreach($feedback as $fb){ ?>
                <li class="item">
                  <div>
                    <a href="javascript:void(0)" class="product-title"><?php echo $fb->ten_nguoi_lh; ?>
                      <span class="label label-info pull-right"><?php echo $fb->ngay_lh; ?></span></a>
                    <span class="product-description">
                          <?php echo $fb->noidung; ?>
                        </span>
                  </div>
                </li>
                
                <?php } ?>
                <!-- /.item -->

              </ul>
            </div>
            <!-- /.box-body -->
            <div class="box-footer text-center">
              <a href="quan_ly_feedback/" class="uppercase">Tất cả phản hồi</a>
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <div class="row">
      	<div class="col-md-12">
      		
          <!-- TABLE: LATEST ORDERS -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Đơn hàng mới nhất</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>Mã đơn hàng</th>
                    <th>Tên thực phẩm</th>
                    <th>Số lượng</th>
                    <th>Trạng thái</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach($order as $o){ ?>
                  <tr>
                    <td><?php echo $o->ma_dh ?></td>
                    <td><?php echo $o->ten_tp ?></td>
                    <td><?php echo $o->sl_dat ?></td>
                    <td>
                    	<?php
						if($o->Tinh_trang == 1){
							echo "<span class='label label-success'>Shipped</span>";
						}
						else{
							echo "<span class='label label-warning'>Pending</span>";
						}
						?>              	
                    </td>
                  </tr>
                  <?php } ?>
                  
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Đặt hàng mới</a>
              <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">Tất cả đơn hàng</a>
            </div>
            <!-- /.box-footer -->
          </div>
      	</div>
      </div>
    </section>
    <!-- /.content -->
  </div>