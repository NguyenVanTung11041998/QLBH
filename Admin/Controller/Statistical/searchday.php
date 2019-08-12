<?php 
	include "../../../System/library/database.php";
	$dbConfig = new DBConfig;
	if(isset($_POST['query']))
	{
		$search = $_POST['query'];
		$search = date('Y-m-d', strtotime($search));
		$query = "SELECT TenSP, HinhAnh, SUM(SoLuongMua) FROM hoadonchitiet INNER JOIN sanpham ON hoadonchitiet.MaSP = sanpham.MaSP INNER JOIN hoadon ON hoadon.MaHD = hoadonchitiet.MaHD WHERE NgayDat = '$search' GROUP BY TenSP HAVING SUM(SoLuongMua) = (SELECT MAX(SoLuong) FROM ((SELECT SUM(SoLuongMua) AS SoLuong FROM hoadonchitiet GROUP BY MaSP) AS Temp))";

		$queryGetListProduct = "SELECT TenSP, SUM(SoLuongMua), SUM(hoadonchitiet.DonGia) AS TongTien FROM hoadonchitiet INNER JOIN sanpham ON hoadonchitiet.MaSP = sanpham.MaSP INNER JOIN hoadon ON hoadon.MaHD = hoadonchitiet.MaHD WHERE NgayDat = '$search' GROUP BY TenSP";
	}
	$sanPhamBanChay = $dbConfig->ExecuteQuery($query);
	$listSanPham = $dbConfig->ExecuteQuery($queryGetListProduct);

	$output = ' <div class="table-responsive">
					<table class="table table-bordered table-hover">
						<thead>
					<tr>
								<th>STT</th>
								<td>Tên sản phẩm</td>
								<td>Số lượng bán</td>
								<td>Tổng tiền bán được</td>
							</tr>
						</thead>
						<tbody>';
	$i = 1;
	while ($row = mysqli_fetch_row($listSanPham))
	{
		$output .= '<tr>
			<td>'.$i.'</td>
			<td>'.$row['0'].'</td>
			<td>'.$row['1'].'</td>
			<td>'.$row['2'].' VNĐ</td>
		</tr>';
		$i++;
	} 
	if(mysqli_num_rows($sanPhamBanChay) > 0)
	{
		$output .= '</tbody>
					</table>
				</div><h3>Sản phẩm bán chạy nhất</h3><br />';
		while ($row = mysqli_fetch_row($sanPhamBanChay))
		{
			$output .= '<span> <h3>Tên sản phẩm: ';
			$output .= $row['0'];
			$output .= '<br />Số lượng bán được: '.$row['2'];
			$output .= '</h3></span>
					<img style="width: 200px; height: 200px;" src="Upload/product/';
			$output .= $row['1'];
			$output .= '" />';
		}  
	}
	echo $output;
?>