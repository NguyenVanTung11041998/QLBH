<?php
	include "../../../System/library/database.php";
	include "../../Model/KhachHang.php";
	$dbConfig = new DBConfig;
	$output = '';
	if(isset($_POST['query']))
	{
		$search = $_POST['query'];
		$query = "SELECT * FROM KhachHang WHERE HoTen LIKE '%$search%'";
	}
	else
		$query = "SELECT * FROM KhachHang";

	$bangDuLieu = $dbConfig->ExecuteQuery($query);

	$result = array();
	while ($row = mysqli_fetch_row($bangDuLieu)) 
	{
		$khachHang = new KhachHang($row['0'], $row['1'], $row['2'], $row['3'], $row['4'], $row['5'], $row['6']);
		$result[] = $khachHang;
	}

	if(mysqli_num_rows($bangDuLieu) > 0)
	{
		$output .= '
		<div class="table-responsive">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>STT</th>
					<td>Mã khách hàng</td>
					<td>Họ tên</td>
					<td>Địa chỉ</td>
					<td>Số điện thoại</td>
					<td>Email</td>
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
					<td>'.$value->GetID().'</td>
					<td>'.$value->GetHoTen().'</td>
					<td>'.$value->GetDiaChi().'</td>
					<td>'.$value->GetSoDT().'</td>
					<td>'.$value->GetEmail().'</td>
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
							<a href="admin.php?controller=customer" aria-label="Previous">
								<span aria-hidden="true">&laquo;</span>
							</a>
						</li>
						<li><a href="admin.php?controller=customer">1</a></li>
						<li><a href="admin.php?controller=customer">2</a></li>
						<li>
							<a href="admin.php?controller=customer" aria-label="Next">
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