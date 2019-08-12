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
		<div class="form-group row">
			<form action="" method="GET">
				<div class="col-sm-4">
                    <input id="datePicker" type="date" value="<?php echo date('Y-m-d'); ?>" style="height: 2.5em; width: 100%" /> 
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
								<td><a href="admin.php?controller=bill&action=status&id=<?php echo $row['0']?>" class="btn <?php echo ($row['4'] == 1 ? 'btn-success' : 'btn-danger');?>"><?php echo ($row['4'] == 1 ? "Đã xử lý" : "Chưa xử lý");?></a></td>
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
							<a href="admin.php?controller=bill&page=<?php echo ($page - 1);?>" aria-label="Previous">
								<span aria-hidden="true">&laquo;</span>
							</a>
						</li>
						<li><a href="admin.php?controller=bill&page=<?php echo $page;?>"><?php echo $page;?></a></li>
						<li><a href="admin.php?controller=bill&page=<?php echo ($page + 1);?>"><?php echo ($page + 1);?></a></li>
						<li><a href="admin.php?controller=bill&page=<?php echo ($page + 2);?>"><?php echo ($page + 2);?></a></li>
						<li>
							<a href="admin.php?controller=bill&page=<?php echo ($page + 1);?>" aria-label="Next">
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
		    url:"Admin/Controller/Bill/fetch.php",
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