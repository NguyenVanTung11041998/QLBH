<?php include("Admin/View/Layout/adheader.php"); ?>

<!-- Page Heading -->
<div class="row">
	<div class="col-lg-12">
		<div class="title_header clearfix">
			<h1 class="page-header">
				Danh sách nhà cung cấp
				<!-- <small>Subheading</small> -->
				<a href="admin.php?controller=supplier&action=add" class="btn btn-success">Thêm mới</a>
			</h1>
		</div>
		<div class="form-group row">
			<form action="" method="GET">
				<div class="col-sm-4">
                    <input type="text" id="search_text" class="form-control" placeholder="Search" name="search" /> 
                </div>
                <button type="button" id="search" class="btn btn-primary">Search</button>
			</form>
		</div>
		<div class="clearfix"></div>
		<ol class="breadcrumb">
			<li>
				<i class="fa fa-dashboard"></i>  <a href="admin.php?controller=supplier">Dashboard</a>
			</li>
			<li class="active">
				<i class="fa fa-file"></i> Nhà cung cấp
			</li>
		</ol>
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
						<td>Mã nhà cung cấp</td>
						<td>Tên nhà cung cấp</td>
						<td>Địa chỉ</td>
						<td>Số điện thoại</td>
						<td>Email</td>
						<td>#</td>
					</tr>
				</thead>
				<tbody>
					<?php
					$i = 1;
					foreach ($listNhaCungCap as $key => $value) 
					{
						?>
						<tr>
							<td><?php echo $i; ?></td>
							<td><?php echo $value->GetMaNhaCungCap(); ?></td>
							<td><?php echo $value->GetTenNhaCungCap(); ?></td>
							<td><?php echo $value->GetDiaChi(); ?></td>
							<td><?php echo $value->GetSoDT(); ?></td>
							<td><?php echo $value->GetEmail(); ?></td>
							<td>
								<a href="admin.php?controller=supplier&action=edit&id=<?php echo $value->GetMaNhaCungCap();?>" class="btn btn-success"><i class="fa fa-edit"></i>Sửa</a>
								<a href="admin.php?controller=supplier&action=delete&id=<?php echo $value->GetMaNhaCungCap();?>" class="btn btn-danger" onClick="return confirmAction()"><i class="fa fa-times"></i>Xóa</a>
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

<script type="text/javascript">
	function LoadData(query){
		$.ajax({
		    url:"Admin/Controller/Supplier/fetch.php",
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