<?php
	include "../../../System/library/database.php";
	include "../../Model/DanhMuc.php";
	$dbConfig = new DBConfig;
	$output = '';
	if(isset($_POST['query']))
	{
		$search = $_POST['query'];
		$query = "SELECT * FROM DanhMuc WHERE TenDanhMuc LIKE '%".$search."%'";
	}
	else
		$query = "SELECT * FROM DanhMuc";

	$bangDuLieu = $dbConfig->ExecuteQuery($query);

	$result = array();
	while ($row = mysqli_fetch_row($bangDuLieu)) 
	{
		$danhMuc = new DanhMuc($row['0'], $row['1']);
		$result[] = $danhMuc;
	}

	if(mysqli_num_rows($bangDuLieu) > 0)
	{
		$output .= '
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
		';
			$i = 1;
			foreach ($result as $key => $value) 
			{
				$output .= '
				<tr>
					<td>'.$i.'</td>
					<td>'.$value->GetMaDanhMuc().'</td>
					<td>'.$value->GetTenDanhMuc().'</td>
					<td>
						<a href="admin.php?controller=supplier&action=edit&id='.$value->GetMaDanhMuc().'" class="btn btn-success"><i class="fa fa-edit"></i>Sửa</a>
						<a href="admin.php?controller=supplier&action=delete&id='.$value->GetMaDanhMuc().'" class="btn btn-danger" onClick="return confirmAction()"><i class="fa fa-times"></i>Xóa</a>
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
							<a href="admin.php?controller=category" aria-label="Previous">
								<span aria-hidden="true">&laquo;</span>
							</a>
						</li>
						<li><a href="admin.php?controller=category">1</a></li>
						<li><a href="admin.php?controller=category">2</a></li>
						<li>
							<a href="admin.php?controller=category" aria-label="Next">
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