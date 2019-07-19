<?php
	include "../../../System/library/database.php";
	include "../../Model/NhaCungCap.php";
	$dbConfig = new DBConfig;
	$output = '';
	if(isset($_POST['query']))
	{
		$search = $_POST['query'];
		$query = "SELECT * FROM NhaCungCap WHERE MaNCC = $search";
	}
	else
		$query = "SELECT * FROM NhaCungCap";

	$bangDuLieu = $dbConfig->ExecuteQuery($query);

	$result = array();
	while ($row = mysqli_fetch_row($bangDuLieu)) 
	{
		$nhaCungCap = new NhaCungCap($row['0'], $row['1'], $row['2'], $row['3'], $row['4']);
		$result[] = $nhaCungCap;
	}

	if(mysqli_num_rows($bangDuLieu) > 0)
	{
		$output .= '
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
		';
			$i = 1;
			foreach ($result as $key => $value) 
			{
				$output .= '
				<tr>
					<td>'.$i.'</td>
					<td>'.$value->GetMaNhaCungCap().'</td>
					<td>'.$value->GetTenNhaCungCap().'</td>
					<td>'.$value->GetDiaChi().'</td>
					<td>'.$value->GetSoDT().'</td>
					<td>'.$value->GetEmail().'</td>
					<td>
						<a href="admin.php?controller=supplier&action=edit&id='.$value->GetMaNhaCungCap().'" class="btn btn-success"><i class="fa fa-edit"></i>Sửa</a>
						<a href="admin.php?controller=supplier&action=delete&id='.$value->GetMaNhaCungCap().'" class="btn btn-danger" onClick="return confirmAction()"><i class="fa fa-times"></i>Xóa</a>
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
			</div>';
		echo $output;
	}
	
	else
		echo 'Data Not Found';
?>