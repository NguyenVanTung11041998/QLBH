<?php include("Admin/View/Layout/adheader.php"); ?>
<!-- Page Heading -->
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">
			Danh sách danh mục
			<!-- <small>Subheading</small> -->
			<a href="admin.php?controller=category&action=add" class="btn btn-success">Thêm mới</a>
		</h1>
		<ol class="breadcrumb">
			<li>
				<i class="fa fa-dashboard"></i>  <a href="admin.php?controller=category">Dashboard</a>
			</li>
			<li class="active">
				<i class="fa fa-file"></i> Danh mục
			</li>
		</ol>
		<div class="form-group row">
			<form action="" method="GET">
				<div class="col-sm-4">
					<input type="text" id="search_text" class="form-control" placeholder="Search" name="search" /> 
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
						<th>Mã danh mục</th>
						<th>Tên danh mục</th>
						<th>#</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$i = 1;
						foreach ($listDanhMuc as $key => $value) 
						{ 
						?>
							<tr id="row_<?php echo $value->GetMaDanhMuc();?>">
								<td><?php echo $i; ?></td>
								<td><?php echo $value->GetMaDanhMuc(); ?></td>
								<td><?php echo $value->GetTenDanhMuc(); ?></td>
								<td>
									<a href="admin.php?controller=category&action=edit&id=<?php echo $value->GetMaDanhMuc();?>" class="btn btn-success"><i class="fa fa-edit"></i>Sửa</a>
									<!-- <a href="admin.php?controller=category&action=delete&id=<?php echo $value->GetMaDanhMuc();?>" class="btn btn-danger" onClick="return confirmAction()"><i class="fa fa-times"></i>Xóa</a> -->
									<a href="#" class="delete btn btn-danger" data-id="<?php echo $value->GetMaDanhMuc();?>"><i class="fa fa-times"></i>Xóa</a>
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
							<a href="admin.php?controller=category&page=<?php echo ($page - 1);?>" aria-label="Previous">
								<span aria-hidden="true">&laquo;</span>
							</a>
						</li>
						<li><a href="admin.php?controller=category&page=<?php echo $page;?>"><?php echo $page; ?></a></li>
						<li><a href="admin.php?controller=category&page=<?php echo ($page + 1);?>"><?php echo ($page + 1); ?></a></li>
						<li><a href="admin.php?controller=category&page=<?php echo ($page + 2);?>"><?php echo ($page + 2) ?></a></li>
						<li>
							<a href="admin.php?controller=category&page=<?php echo ($page + 1);?>" aria-label="Next">
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
	$('.delete').click(function(e) {
		e.preventDefault();
		if(confirm("Bạn có muốn xóa bản ghi này không?"))
		{
			var x = $(this);
			var id = x.data('id');
			$.ajax({
				url:'Admin/Controller/Category/delete.php',
				method:'Post',
				data:{id:id},
				success:function(id) {
					if(id != "")
					{
						var rowDelete = x.parent().parent();
						rowDelete.remove();
						alert("Xóa bản ghi thành công!");
					}
					else
						alert("Không thể xóa bản ghi! Vì đã tồn tại trong loại sản phẩm!");
				}
			});
		}
	});

	function LoadData(query){
		$.ajax({
		    url:"Admin/Controller/Category/fetch.php",
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

<!-- /.row -->
<?php include("Admin/View/Layout/adfooter.php"); ?>