<?php include("Admin/View/Layout/adheader.php"); ?>

<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">
			Danh sách phiếu nhập chi tiết
			<!-- <small>Subheading</small> -->
		</h1>
		<ol class="breadcrumb">
			<li>
				<i class="fa fa-dashboard"></i>  <a href="admin.php?controller=import-coupon">Dashboard</a>
			</li>
			<li class="active">
				<i class="fa fa-file"></i> Phiếu nhập<!--  -->
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
						<th>Mã phiếu nhập</th>
						<th>Mã sản phẩm</th>
						<th>Số lượng nhập</th>
						<th>Đơn giá nhập</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$i = 1;
						foreach ($listPhieuNhapChiTiet as $key => $value) 
						{ 
						?>
							<tr>
								<td><?php echo $i; ?></td>
								<td><?php echo $value->GetMaPN(); ?></td>
								<td><?php echo $value->GetMaSP(); ?></td>
								<td><?php echo $value->GetSoLuongNhap(); ?></td>
								<td><?php echo $value->GetDonGiaNhap(); ?> VND</td>
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

<?php include("Admin/View/Layout/adfooter.php"); ?>