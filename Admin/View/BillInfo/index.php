<?php include("Admin/View/Layout/adheader.php"); ?>

<!-- Page Heading -->
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">
			Thông tin hóa đơn chi tiết
		</h1>
		<ol class="breadcrumb">
			<li>
				<i class="fa fa-dashboard"></i>  <a href="admin.php?controller=bill">Dashboard</a>
			</li>
			<li class="active">
				<i class="fa fa-file"></i> Hóa đơn
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
						<th>Mã sản phẩm</th>
						<th>Số lượng mua</th>
						<th>Đơn giá</th>
	                </tr>
	            </thead>
	            <tbody>
	            	<?php  
	            		$i = 1;
	            		foreach ($listHoaDonChiTiet as $key => $value) 
	            		{
	            		?>
							<tr>
								<td><?php echo $i; ?></td>
								<td><?php echo $value->GetMaHD(); ?></td>
								<td><?php echo $value->GetMaSP(); ?></td>
								<td><?php echo $value->GetSoLuongMua(); ?></td>
								<td><?php echo $value->GetDonGia(); ?> VNĐ</td>
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
				            <a href="admin.php?controller=bill-info&id=<?php echo $id;?>&page=<?php echo ($page - 1);?>" aria-label="Previous">
				            <span aria-hidden="true">&laquo;</span>
				            </a>
				        </li>
				        <li><a href="admin.php?controller=bill-info&id=<?php echo $id;?>&page=<?php echo $page;?>"><?php echo $page;?></a></li>
				        <li><a href="admin.php?controller=bill-info&id=<?php echo $id;?>&page=<?php echo ($page + 1);?>"><?php echo ($page + 1);?></a></li>
				        <li>
				            <a href="admin.php?controller=bill-info&id=<?php echo $id;?>&page=<?php echo ($page + 1);?>" aria-label="Next">
				            <span aria-hidden="true">&raquo;</span>
				            </a>
				        </li>
				    </ul>
				</nav>
			</div>	
		</div>
	</div>
</div>

<?php include("Admin/View/layout/adfooter.php"); ?>