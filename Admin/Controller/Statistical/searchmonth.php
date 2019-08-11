<?php 
	include "../../../System/library/database.php";
	$dbConfig = new DBConfig;
	if(isset($_POST['query']))
	{
		$search = $_POST['query'];
		$query = "SELECT TenSP, HinhAnh, COUNT(*) FROM hoadonchitiet INNER JOIN sanpham ON hoadonchitiet.MaSP = sanpham.MaSP INNER JOIN hoadon ON hoadon.MaHD = hoadonchitiet.MaHD WHERE MONTH(NgayDat) = MONTH('$search') AND YEAR(NgayDat) = YEAR('$search')  GROUP BY TenSP HAVING COUNT(*) = (SELECT MAX(SoLuong) FROM ((SELECT COUNT(*) AS SoLuong FROM hoadonchitiet GROUP BY MaSP) AS Temp))";

		$queryGetListProduct = "SELECT TenSP, COUNT(*), SUM(hoadonchitiet.DonGia) AS TongTien FROM hoadonchitiet INNER JOIN sanpham ON hoadonchitiet.MaSP = sanpham.MaSP INNER JOIN hoadon ON hoadon.MaHD = hoadonchitiet.MaHD WHERE MONTH(NgayDat) = MONTH('$search') AND YEAR(NgayDat) = YEAR('$search') GROUP BY TenSP";
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
	$output .= '</tbody>
					</table>
				</div>';
	while ($row = mysqli_fetch_row($sanPhamBanChay))
	{
		$output .= '<div class="form-group row">
				<span> <h3>Sản phẩm bán chạy nhất: ';
		$output .= $row['0'];
		$output .= '<br />Số lượng bán được: '.$row['2'];
		$output .= '</h3></span>
				<img style="width: 200px; height: 200px;" src="Upload/product/';
		$output .= $row['1'];
		$output .= '" />
					</div>';
	} 
	echo $output;
?>