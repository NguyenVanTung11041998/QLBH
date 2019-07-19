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
						<th>Trạng thái</th>
						<th>Chi tiết hóa đơn</th>
					</tr>
				</thead>
				<tbody>
					<!-- <?php $stt = 1; foreach ($product as $item): ?>
					<tr>
						<td><?php echo $stt ?></td>
						<td><?php echo $item['name']; ?></td>
						<td><?php echo $item['category_id']; ?></td>
						<td><?php echo $item['sulg']; ?></td>	
						<td>
							<ul>
								<li>Giá: <?php echo $item['price']; ?></li>
								<li>Số lượng: <?php echo $item['number']; ?></li>
							</ul>

						</td>
						<td>
							<img src="<?php echo uploads() ?>product/<?php echo $item['thumbar']?>" style="width: 80px; height: 80px">
						</td>
						<td><?php echo $item['content']; ?></td>
						<td>
							<a href="edit.php?id=<?php echo $item['id']?>" class="btn btn-success btn-xs"><i class="fa fa-edit"></i>Sửa</a>
							<a href="delete.php?id=<?php echo $item['id']?>" class="btn btn-danger btn-xs"><i class="fa fa-times"></i>Xóa</a>
						</td>
					</tr>

					<?php $stt++; endforeach ?> -->
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