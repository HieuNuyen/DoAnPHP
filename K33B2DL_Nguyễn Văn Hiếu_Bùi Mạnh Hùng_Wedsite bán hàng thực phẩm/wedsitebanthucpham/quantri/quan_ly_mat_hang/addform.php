<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Thêm sản phẩm mới</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="index.php?action=insert" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label>Tên thực phẩm</label>
                  <input type="text" name="in" class="form-control" placeholder="Nhập tên sản phẩm" required>
                </div>
                <div class="form-group">
                  <label>Loại</label>
                  <select name="ik" class="form-control">
                  	<?php foreach($ml as $m){ ?>
						        <option value="<?php echo $m->ma_loai; ?>"><?php echo $m->ten_loai; ?></option>
        			      <?php }?>
			              </select>
                </div>
                <div class="form-group">
                  <label>Giá</label>
                  <input type="number" name="ip" class="form-control" placeholder="Nhập Giá Sản phẩm" required>
                </div>
                <div class="form-group">
                  <label>Hình ảnh</label>
                  <input class="form-control" type="file" name="imgx" required>
                </div>
                <div class="form-group">
                  <label>Mô tả</label>
                  <input type="text" name="id" class="form-control" placeholder="Nhập mô tả sản phẩm">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="is" class="btn btn-primary">Thêm</button>
              </div>
            </form>
          </div>