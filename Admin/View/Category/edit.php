<!-- Page Heading -->
<?php include("Admin/View/Layout/adheader.php"); ?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Sửa danh mục
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="admin.php?controller=category">Dashboard</a>
            </li>
            <li>
                <i class=""></i>  <a href="admin.php?controller=category">Danh mục</a>
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
                <label for="inputEmail3" class="col-sm-2 control-label">Mã danh mục</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="" name="txtMaDanhMuc" value="<?php echo $danhMuc->GetMaDanhMuc();?>" readonly="true"> 
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Tên danh mục</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="" placeholder="Tên loại" name="txtTenDanhMuc" value="<?php echo $danhMuc->GetTenDanhMuc();?>">
                    
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success" name="btnSua">Sửa thông tin</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- /.row -->
<?php include("Admin/View/Layout/adfooter.php"); ?>