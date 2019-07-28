<?php
	include "../../../System/library/database.php";
	$dbConfig = new DBConfig;
	$output = '';
	if(isset($_POST['query']))
	{
		$search = $_POST['query'];
		$query = "Select HoaDon.MaHD, HoaDon.NgayDat, KhachHang.HoTen, HoaDon.TongTien, HoaDon.DaThanhToan From HoaDon Inner Join KhachHang On HoaDon.MaKH = KhachHang.ID Where NgayDat = '$search'";
	}
	else
		$query = "Select HoaDon.MaHD, HoaDon.NgayDat, KhachHang.HoTen, HoaDon.TongTien, HoaDon.DaThanhToan From HoaDon Inner Join KhachHang On HoaDon.MaKH = KhachHang.ID";
	$bangDuLieu = $dbConfig->ExecuteQuery($query);

	if(mysqli_num_rows($bangDuLieu) > 0)
	{
		$output .= '
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
		';
			$i = 1;
			while ($row = mysqli_fetch_row($bangDuLieu))
			{
				$output .= '
				<tr>
					<td>'.$i.'</td>
					<td>'.$row['0'].'</td>
					<td>'.$row['1'].'</td>
					<td>'.$row['2'].'</td>
					<td>'.$row['3'].' VNĐ</td>
					<td>'.($row['4'] == 1 ? 'Đã thanh toán' : 'Chưa thanh toán').'</td>
					<td>
						<a href="admin.php?controller=bill-info&id='.$row['0'].'" class="btn btn-success">Xem chi tiết</a>
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
							<a href="admin.php?controller=bill" aria-label="Previous">
								<span aria-hidden="true">&laquo;</span>
							</a>
						</li>
						<li><a href="admin.php?controller=bill">1</a></li>
						<li><a href="admin.php?controller=bill">2</a></li>
						<li>
							<a href="admin.php?controller=bill" aria-label="Next">
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