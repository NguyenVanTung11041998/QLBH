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
		<div class="form-group row">
			<form action="" method="POST">
				<div class="col-sm-4">
                    <input type="text" id="search_text" class="form-control" placeholder="Search" /> 
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
						<td>Mã khách hàng</td>
						<td>Họ tên</td>
						<td>Email</td>
						<td>Địa chỉ</td>
						<td>Số điện thoại</td>
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
							<a href="admin.php?controller=customer&page=<?php echo ($page - 1);?>" aria-label="Previous">
								<span aria-hidden="true">&laquo;</span>
							</a>
						</li>
						<li><a href="admin.php?controller=customer&page=<?php echo $page;?>"><?php echo $page; ?></a></li>
						<li><a href="admin.php?controller=customer&page=<?php echo ($page + 1);?>"><?php echo ($page + 1); ?></a></li>
						<li>
							<a href="admin.php?controller=customer&page=<?php echo ($page + 1);?>" aria-label="Next">
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
		    url:"Admin/Controller/Customer/fetch.php",
		    method:"POST",
		    data:{query:query},
		    success:function(data) {
		    	$('#table_data').html(data);
		   }
		});
	}

	$('#search').click(function() {
	    var search = $('#search_text').val();
	    if(search != '')
	    	LoadData(search);
	    else
	    	LoadData();
	});
</script>

<?php include("Admin/View/Layout/adfooter.php"); ?>