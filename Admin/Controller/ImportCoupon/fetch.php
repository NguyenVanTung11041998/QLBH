<?php
	include "../../../System/library/database.php";
	include "../../Model/PhieuNhap.php";
	$dbConfig = new DBConfig;
	$output = '';
	if(isset($_POST['query']))
	{
		$search = $_POST['query'];
		$query = "Select * From PhieuNhap Where NgayNhap = '$search'";
	}
	else
		$query = "Select * From PhieuNhap";
	$bangDuLieu = $dbConfig->ExecuteQuery($query);

	$listPhieuNhap = array();
	while ($row = mysqli_fetch_row($bangDuLieu)) 
	{
		$phieuNhap = new PhieuNhap($row['0'], $row['1'], $row['2']);
		$listPhieuNhap[] = $phieuNhap;
	}

	if(mysqli_num_rows($bangDuLieu) > 0)
	{
		$output .= '
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
		';
			$i = 1;
			foreach ($listPhieuNhap as $key => $value)
			{
				$output .= '
				<tr>
					<td>'.$i.'</td>
					<td>'.$value->GetMaPN().'</td>
					<td>'.$value->GetNgayLap().'</td>
					<td>'.$value->GetTongTienNhap().' VNĐ</td>
					<td>
						<a href="admin.php?controller=coupon-info&id='.$value->GetMaPN().'" class="btn btn-success"><i class="fa fa-edit"></i>Xem chi tiết hóa đơn</a>
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
							<a href="admin.php?controller=import-coupon" aria-label="Previous">
								<span aria-hidden="true">&laquo;</span>
							</a>
						</li>
						<li><a href="admin.php?controller=import-coupon">1</a></li>
						<li><a href="admin.php?controller=import-coupon">2</a></li>
						<li>
							<a href="admin.php?controller=import-coupon" aria-label="Next">
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