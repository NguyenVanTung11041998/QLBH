<?php
	include "../../../System/library/database.php";
	include "../../Model/LoaiSanPham.php";
	$dbConfig = new DBConfig;
	$output = '';
	if(isset($_POST['query']))
	{
		$search = $_POST['query'];
		$query = "SELECT * FROM LoaiSanPham WHERE TenLoai LIKE '%$search%'";
	}
	else
		$query = "SELECT * FROM LoaiSanPham";

	$bangDuLieu = $dbConfig->ExecuteQuery($query);

	$result = array();
	while ($row = mysqli_fetch_row($bangDuLieu)) 
	{
		$loaiSanPham = new LoaiSanPham($row['0'], $row['1'], $row['2']);
		$result[] = $loaiSanPham;
	}

	if(mysqli_num_rows($bangDuLieu) > 0)
	{
		$output .= '
		<div class="table-responsive">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>STT</th>
					<th>Mã loại sản phẩm</th>
					<th>Tên loại</th>
					<th>Mã danh mục</th>
					<th>#</th>
				</tr>
			</thead>
			<tbody>
		';
			$i = 1;
			foreach ($result as $key => $value) 
			{
				$output .= '
				<tr>
					<td>'.$i.'</td>
					<td>'.$value->GetMaLoaiSP().'</td>
					<td>'.$value->GetTenLoai().'</td>
					<td>'.$value->GetMaDanhMuc().'</td>
					<td>
						<a href="admin.php?controller=supplier&action=edit&id='.$value->GetMaLoaiSP().'" class="btn btn-success"><i class="fa fa-edit"></i>Sửa</a>
						<a href="admin.php?controller=supplier&action=delete&id='.$value->GetMaLoaiSP().'" class="btn btn-danger" onClick="return confirmAction()"><i class="fa fa-times"></i>Xóa</a>
					</td>
				</tr>';
				$i++;
			} 
			$output .= '
			</tbody>
		</table>

			<div class="pull-right">
				<nav aria-label="Page navigation">
					<ul class="pagination">
						<li>
							<a href="admin.php?controller=category-product" aria-label="Previous">
								<span aria-hidden="true">&laquo;</span>
							</a>
						</li>
						<li><a href="admin.php?controller=category-product">1</a></li>
						<li><a href="admin.php?controller=category-product">2</a></li>
						<li>
							<a href="admin.php?controller=category-product" aria-label="Next">
								<span aria-hidden="true">&raquo;</span>
							</a>
						</li>
					</ul>
				</nav>
			</div>';
		echo $output;
	}
	
	else
		echo 'Data Not Found';
?>