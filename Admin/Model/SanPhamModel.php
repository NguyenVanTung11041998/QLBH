<?php
	include "SanPham.php";
	class SanPhamModel
	{
		private $dbConfig;
		public function __construct()
		{
			$this->dbConfig = new DBConfig;
		}

		public function LayDanhSach($page = NULL, $pageSize = NULL)
		{
			if($page)
			{
				$pageStart = ($page - 1) * $pageSize;
				$query = "Select * From SanPham Limit $pageStart, $pageSize";
			}
			else
				$query = "Select * from SanPham";
			$bangDuLieu = $this->dbConfig->ExecuteQuery($query);
			$listSanPham = array();
			while ($row = mysqli_fetch_row($bangDuLieu)) 
			{
				$sanPham = new SanPham($row['0'], $row['1'], $row['2'], $row['3'], $row['4'], $row['5'], $row['6'], $row['7'], $row['8'], $row['9'], $row['10'], $row['11']);
				$listSanPham[] = $sanPham;
			}
			return $listSanPham;
		}

		public function TimKiemTheoMa($maSP)
		{
			$query = "Select * from SanPham where MaSP = $maSP";
			$bangDuLieu = $this->dbConfig->ExecuteQuery($query);
			while ($row = mysqli_fetch_row($bangDuLieu)) 
			{
				$sanPham = new SanPham($row['0'], $row['1'], $row['2'], $row['3'], $row['4'], $row['5'], $row['6'], $row['7'], $row['8'], $row['9'], $row['10'], $row['11']);
				return $sanPham;
			}
			return NULL;
		}

		public function Them($tenSP, $donGia, $moTa, $hinhAnh, $soLuongTon, $moi, $maNCC, $maNSX, $maLoaiSP)
		{
			$query = "Insert into SanPham (TenSP, DonGia, NgayCapNhat, MoTa, HinhAnh, SoLuongTon, Moi, MaNCC, MaNSX, MaLoaiSP, DaXoa) values ('$tenSP', $donGia, CURDATE(), '$moTa', '$hinhAnh', $soLuongTon, $moi, $maNCC, $maNSX, $maLoaiSP, false)";

			$ketQua = $this->dbConfig->ExecuteQuery($query);
			return $ketQua;
		}

		public function Sua($maSP, $tenSP, $donGia, $moTa, $hinhAnh, $soLuongTon, $moi, $maNCC, $maNSX, $maLoaiSP, $daXoa)
		{
			$query = "Update SanPham Set TenSP = '$tenSP', DonGia = '$donGia', NgayCapNhat = CURDATE(), MoTa = '$moTa', HinhAnh = '$hinhAnh', SoLuongTon = $soLuongTon, Moi = $moi, MaNCC = '$maNCC', MaNSX = '$maNSX', MaLoaiSP = '$maLoaiSP', DaXoa = $daXoa Where MaSP = $maSP";
			echo '<script>console.log("'.$query.'")</script>';
			$ketQua = $this->dbConfig->ExecuteQuery($query);
			return $ketQua;
		}

		public function Xoa($maSP)
		{
			$query = "Delete From SanPham Where MaSP = $maSP";
			$ketQua = $this->dbConfig->ExecuteQuery($query);
			return $ketQua;
		}
	}
?>