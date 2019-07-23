<!-- Page Heading -->
<?php include("Admin/View/Layout/adheader.php"); ?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Sửa sản phẩm
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="admin.php?controller=product">Dashboard</a>
            </li>
            <li>
                <i class=""></i>  <a href="admin.php?controller=product">Sản phẩm</a>
            </li>
            <li class="active">
                <i class="fa fa-file"></i> Sửa thông tin
            </li>
        </ol>
        <div class="clearfix"></div>
        
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Mã sản phẩm</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="" placeholder="Mã sản phẩm" name="txtMaSP" readonly="true" value="<?php echo $sanPham->GetMaSP();?>">   
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Tên sản phẩm</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="" placeholder="Tên sản phẩm" name="txtTenSP" required="required" value="<?php echo $sanPham->GetTenSP();?>">   
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Đơn giá</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="" placeholder="Đơn giá" name="txtDonGia" required="required" value="<?php echo $sanPham->GetDonGia();?>">
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Mô tả</label>
                <div class="col-sm-8">
                    <textarea class="form-control" name="txtMoTa" required="required"><?php echo $sanPham->GetMoTa();?></textarea>
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Hình ảnh</label>
                <div class="col-sm-3">
                    <input type="file" class="form-control" id="anh" name="txtHinhAnh">
                    <div class="show_file"><img src="Upload/product/<?php echo $sanPham->GetHinhAnh();?>"></div>
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Số lượng tồn</label>
                <div class="col-sm-8">
                    <input type="number" class="form-control" placeholder="Số lượng tồn" name="txtSoLuongTon" required="required" value="<?php echo $sanPham->GetSoLuongTon();?>" />
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Mới</label>
                <div class="col-sm-8">
                    <input type="checkbox" name="ckbMoi" style="margin: 12px 0 0 0;" <?php if($sanPham->IsMoi()) echo 'checked="checked"';?> />
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Tên nhà cung cấp</label>
                <div class="col-sm-8">
                    <select class="form-control col-md-8" name="cmbMaNCC">
                        <?php 
                            foreach ($listNhaCungCap as $key => $value) 
                            {
                            ?>
                                <option value="<?php echo $value->GetMaNhaCungCap()?>" <?php if($value->GetMaNhaCungCap() == $sanPham->GetMaNCC()) echo 'selected="selected"';?>><?php echo $value->GetTenNhaCungCap()?></option>
                            <?php
                            }
                        ?>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Tên nhà sản xuất</label>
                <div class="col-sm-8">
                    <select class="form-control col-md-8" name="cmbMaNSX">
                        <?php 
                            foreach ($listNhaSanXuat as $key => $value) 
                            {
                            ?>
                                <option value="<?php echo $value->GetMaNhaSanXuat()?>" <?php if($value->GetMaNhaSanXuat() == $sanPham->GetMaNSX()) echo 'selected="selected"';?>><?php echo $value->GetTenNhaSanXuat()?></option>
                            <?php
                            }
                        ?>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Tên loại sản phẩm</label>
                <div class="col-sm-8">
                    <select class="form-control col-md-8" name="cmbMaLoaiSP">
                        <?php 
                            foreach ($listLoaiSanPham as $key => $value) 
                            {
                            ?>
                                <option value="<?php echo $value->GetMaLoaiSP()?>" <?php if($value->GetMaLoaiSP() == $sanPham->GetMaLoaiSP()) echo 'selected="selected"';?>><?php echo $value->GetTenLoai()?></option>
                            <?php
                            }
                        ?>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Đã xóa</label>
                <div class="col-sm-8">
                    <input type="checkbox" name="ckbXoa" style="margin: 12px 0 0 0;" <?php if($sanPham->IsDaXoa()) echo 'checked="checked"';?> />;
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success" name="btnSua">Sửa</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function(e) {
                $(".show_file").html('<img src="' + e.target.result + '">');
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#anh").change(function() {
      readURL(this);
  });
</script>
<!-- /.row -->
<?php include("Admin/View/Layout/adfooter.php"); ?>