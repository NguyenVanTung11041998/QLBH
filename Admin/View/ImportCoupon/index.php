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
		<div class="form-group row">
			<form action="" method="GET">
				<div class="col-sm-4">
					<input id="datePicker" type="date" style="height: 2.5em; width:100%" /> 
				</div>
				<button type="button" id="search" class="btn btn-primary">Search</button>
			</form>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<div class="row">
	<div class="col-lg-12" id="table_data">
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
							<a href="admin.php?controller=import-coupon&page=<?php echo ($page - 1);?>" aria-label="Previous">
								<span aria-hidden="true">&laquo;</span>
							</a>
						</li>
						<li><a href="admin.php?controller=import-coupon&page=<?php echo $page;?>"><?php echo $page;?></a></li>
						<li><a href="admin.php?controller=import-coupon&page=<?php echo ($page + 1);?>"><?php echo ($page + 1);?></a></li>
						<li><a href="admin.php?controller=import-coupon&page=<?php echo ($page + 2);?>"><?php echo ($page + 2);?></a></li>
						<li>
							<a href="admin.php?controller=import-coupon&page=<?php echo ($page + 1);?>" aria-label="Next">
								<span aria-hidden="true">&raquo;</span>
							</a>
						</li>
					</ul>
				</nav>
			</div>	
		</div>
	</div>
</div>

<script type="text/javascript">
	function LoadData(query){
		$.ajax({
		    url:"Admin/Controller/ImportCoupon/fetch.php",
		    method:"POST",
		    data:{query:query},
		    success:function(data) {
		    	$('#table_data').html(data);
		   }
		});
	}

	$('#search').click(function() {
	    var search = $('#datePicker').val();
	    if(search != '')
	    	LoadData(search);
	    else
	    	LoadData();
	});
</script>

<!-- /.row -->
<?php require_once("Admin/View/Layout/adfooter.php");?>