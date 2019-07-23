<?php include("Admin/View/Layout/adheader.php"); ?>

<!-- Page Heading -->
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">
			Danh sách phiếu nhập
			<!-- <small>Subheading</small> -->
			<a href="admin.php?controller=import-coupon&action=add" class="btn btn-success">Thêm mới</a>
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
						<th>Ngày lập</th>
						<th>Tổng tiền nhập</th>
						<th>Chi tiết phiếu nhập</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$i = 1;
						foreach ($listPhieuNhap as $key => $value) 
						{ 
						?>
							<tr>
								<td><?php echo $i; ?></td>
								<td><?php echo $value->GetMaPN(); ?></td>
								<td><?php echo $value->GetNgayLap(); ?></td>
								<td><?php echo $value->GetTongTienNhap();?> VND</td>
								<td>
									<a href="admin.php?controller=coupon-info&id=<?php echo $value->GetMaPN();?>" class="btn btn-success"><i class="fa fa-edit"></i>Xem chi tiết hóa đơn</a>
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
<?php require_once("Admin/View/Layout/adfooter.php");?>