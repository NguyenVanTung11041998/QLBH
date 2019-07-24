<?php include("Admin/View/Layout/adheader.php"); ?>

<!-- Page Heading -->
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">
			Danh sách hóa đơn
			<!-- <small>Subheading</small> -->
		</h1>
		<ol class="breadcrumb">
			<li>
				<i class="fa fa-dashboard"></i>  <a href="admin.php?controller=bill">Dashboard</a>
			</li>
			<li class="active">
				<i class="fa fa-file"></i> Hóa đơn<!--  -->
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
						<th>Mã hóa đơn</th>
						<th>Ngày lập</th>
						<th>Tên khách hàng</th>
						<td>Tổng tiền</td>
						<th>Trạng thái</th>
						<th>Chi tiết hóa đơn</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$i = 1;
						while($row = mysqli_fetch_row($danhSachHoaDon))
						{
						?>
							<tr>
								<td><?php echo $i; ?></td>
								<td><?php echo $row['0']; ?></td>
								<td><?php echo $row['1']; ?></td>
								<td><?php echo $row['2']; ?></td>
								<td><?php echo $row['3']; ?> VND</td>
								<td><?php echo $row['4']; ?></td>
								<td>
									<a href="admin.php?controller=bill-info&id=<?php echo $row['0']?>" class="btn btn-success">Xem chi tiết</a>
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