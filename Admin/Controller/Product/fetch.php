<?php
	include "../../../System/library/database.php";
	include "../../Model/SanPham.php";
	$dbConfig = new DBConfig;
	$output = '';
	if(isset($_POST['query']))
	{
		$search = $_POST['query'];
		$query = "SELECT * FROM SanPham WHERE MaSP = $search";
	}
	else
		$query = "SELECT * FROM SanPham";

	$bangDuLieu = $dbConfig->ExecuteQuery($query);

	$result = array();
	while ($row = mysqli_fetch_row($bangDuLieu)) 
	{
		$sanPham = new SanPham($row['0'], $row['1'], $row['2'], $row['3'], $row['4'], $row['5'], $row['6'], $row['7'], $row['8'], $row['9'], $row['10'], $row['11']);
		$result[] = $sanPham;
	}

	if(mysqli_num_rows($bangDuLieu) > 0)
	{
		$output .= '
		<div class="table-responsive">
			<table class="table table-bordered table-hover">
				<thead>
					<tr>
						<th>STT</th>
						<th>Mã sản phẩm</th>
						<th>Tên sản phẩm</th>
						<th>Đơn giá</th>
						<th>Ngày cập nhật</th>
						<th>Mô tả</th>
						<th>Hình ảnh</th>
						<th>Số lượng tồn</th>
						<th>Cũ/Mới</th>
						<th>Mã nhà cung cấp</th>
						<th>Mã nhà sản xuất</th>
						<th>Mã loại sản phẩm</th>
						<th>Tình trạng</th>
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
						<td>'.$value->GetMaSP().'</td>
						<td>'.$value->GetTenSP().'</td>
						<td>'.$value->GetDonGia().'</td>
						<td>'.$value->GetNgayCapNhat().'</td>
						<td>'.$value->GetMoTa().'</td>
						<td>'.$value->GetHinhAnh().'</td>
						<td>'.$value->GetSoLuongTon().'</td>
						<td>'; if($value->IsMoi()) $output .= 'Mới'; else $output .= 'Cũ'; $output .= '</td>
						<td>'.$value->GetMaNCC().'</td>
						<td>'.$value->GetMaNSX().'</td>
						<td>'.$value->GetMaLoaiSP().'</td>
						<td>'; 
					if($value->IsDaXoa()) $output .= 'Block'; else $output .= 'Active'; 
					$output .= '</td>
						<td>
							<a href="admin.php?controller=product&action=edit&id='.$value->GetMaSP().'" class="btn btn-success"><i class="fa fa-edit"></i>Sửa</a>
							<a href="admin.php?controller=product&action=delete&id='.$value->GetMaSP().'" class="btn btn-danger" onClick="return confirmAction()"><i class="fa fa-times"></i>Xóa</a>
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