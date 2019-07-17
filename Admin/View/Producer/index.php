<?php include("Admin/View/Layout/adheader.php"); ?>

<!-- Page Heading -->
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">
			Danh sách nhà sản xuất
			<!-- <small>Subheading</small> -->
			<a href="admin.php?controller=producer&action=add" class="btn btn-success">Thêm mới</a>
		</h1>
		<ol class="breadcrumb">
			<li>
				<i class="fa fa-dashboard"></i>  <a href="admin.php?controller=produce">Dashboard</a>
			</li>
			<li class="active">
				<i class="fa fa-file"></i> Nhà sản xuất<!--  -->
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
						<td>Mã nhà sản xuất</td>
						<td>Tên nhà sản xuất</td>
						<td>Thông tin</td>
						<td>Logo</td>
						<td>#</td>
					</tr>
				</thead>
				<tbody>
					<?php
					$i = 1;
					foreach ($listNhaSanXuat as $key => $value) 
					{
						?>
						<tr>
							<td><?php echo $i; ?></td>
							<td><?php echo $value->GetMaNhaSanXuat(); ?></td>
							<td><?php echo $value->GetTenNhaSanXuat(); ?></td>
							<td><?php echo $value->GetThongTin(); ?></td>
							<td><?php echo $value->GetLogo(); ?></td>
							<td>
								<a href="admin.php?controller=producer&action=edit&id=<?php echo $value->GetMaNhaSanXuat();?>" class="btn btn-success"><i class="fa fa-edit"></i>Sửa</a>
								<a href="admin.php?controller=producer&action=delete&id=<?php echo $value->GetMaNhaSanXuat();?>" class="btn btn-danger" onClick="return confirmAction()"><i class="fa fa-times"></i>Xóa</a>
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
						<li><a href="index.php?page=1">1</a></li>
						<li><a href="index.php?page=2">2</a></li>
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

<?php include("Admin/View/Layout/adfooter.php"); ?>