<?php include("Admin/View/Layout/adheader.php"); ?>

<!-- Page Heading -->
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">
			Danh sách khách hàng
			<!-- <small>Subheading</small> -->
		</h1>
		<ol class="breadcrumb">
			<li>
				<i class="fa fa-dashboard"></i>  <a href="admin.php?controller=customer">Dashboard</a>
			</li>
			<li class="active">
				<i class="fa fa-file"></i> Khách hàng
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
						<td>Mã khách hàng</td>
						<td>Họ tên</td>
						<td>Địa chỉ</td>
						<td>Số điện thoại</td>
						<td>Email</td>
					</tr>
				</thead>
				<tbody>
					<?php
					$i = 1;
					foreach ($listKhachHang as $key => $value) 
					{
						?>
						<tr>
							<td><?php echo $i; ?></td>
							<td><?php echo $value->GetID(); ?></td>
							<td><?php echo $value->GetHoTen(); ?></td>
							<td><?php echo $value->GetDiaChi(); ?></td>
							<td><?php echo $value->GetSoDT(); ?></td>
							<td><?php echo $value->GetEmail(); ?></td>
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