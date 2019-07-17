<?php include("Admin/View/Layout/adheader.php"); ?>

<!-- Page Heading -->
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">
			Danh sách sản phẩm
			<!-- <small>Subheading</small> -->
			<a href="admin.php?controller=product&action=add" class="btn btn-success">Thêm mới</a>
		</h1>
		<ol class="breadcrumb">
			<li>
				<i class="fa fa-dashboard"></i>  <a href="admin.php?controller=product">Dashboard</a>
			</li>
			<li class="active">
				<i class="fa fa-file"></i> Sản phẩm<!--  -->
			</li>
		</ol>
		<div class="clearfix"></div>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="table-responsive">
			<table class="table table-bordered table-hover">
				<thead>
					<tr>
						<th>STT</th>
						<th>Mã sản phẩm</th>
						<th>Tên sản phẩm</th>
						<th>Đơn giá</th>
						<th>Ngày cập nhật</th>
						<th>Mô tả</th>
						<th>Hình ảnh</th>
						<th>Số lượng tồn</th>
						<th>Cũ/Mới</th>
						<th>Mã nhà cung cấp</th>
						<th>Mã nhà sản xuất</th>
						<th>Mã loại sản phẩm</th>
						<th>Tình trạng</th>
						<th>#</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$i = 1;
						foreach ($listSanPham as $key => $value) 
						{
						?>
							<tr>
								<td><?php echo $i; ?></td>
								<td><?php echo $value->GetMaSP(); ?></td>
								<td><?php echo $value->GetTenSP(); ?></td>
								<td><?php echo $value->GetDonGia()." VND"; ?></td>
								<td><?php echo $value->GetNgayCapNhat(); ?></td>
								<td><?php echo $value->GetMoTa(); ?></td>
								<td><?php echo $value->GetHinhAnh(); ?></td>
								<td><?php echo $value->GetSoLuongTon(); ?></td>
								<td><?php if($value->IsMoi()) echo "Mới"; else echo "Cũ"; ?></td>
								<td><?php echo $value->GetMaNCC(); ?></td>
								<td><?php echo $value->GetMaNSX(); ?></td>
								<td><?php echo $value->GetMaLoaiSP(); ?></td>
								<td><?php if ($value->IsDaXoa()) echo "Block"; else echo "Active"; ?>
								</td>
								<td>
									<a href="admin.php?controller=product&action=edit&id=<?php echo $value->GetMaSP();?>" class="btn btn-success"><i class="fa fa-edit"></i>Sửa</a>
									<a href="admin.php?controller=product&action=delete&id=<?php echo $value->GetMaSP();?>" class="btn btn-danger" onClick="return confirmAction()"><i class="fa fa-times"></i>Xóa</a>
								</td>
							</tr>
						<?php
							$i++;
						}
					?>
				</tbody>
			</table>

			<div class="pull-right">
				<nav aria-label="Page navigation">
					<ul class="pagination">
						<li>
							<a href="#" aria-label="Previous">
								<span aria-hidden="true">&laquo;</span>
							</a>
						</li>
						<li><a href="index_pro.php?page=1">1</a></li>
						<li><a href="index_pro.php?page=2">2</a></li>
						<li><a href="index_pro.php?page=3">3</a></li>
						<li>
							<a href="#" aria-label="Next">
								<span aria-hidden="true">&raquo;</span>
							</a>
						</li>
					</ul>
				</nav>
			</div>	
		</div>
	</div>
</div>

<!-- /.row -->
<?php include("Admin/View/Layout/adfooter.php"); ?>