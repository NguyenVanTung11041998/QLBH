<?php  
	include "Admin/Model/KhachHang.php";

	class KhachHangModel
	{
		private $dbConfig;
		public function __construct()
		{
			$this->dbConfig = new DBConfig;
		}

		public function LayDanhSach()
		{
			$query = "Select * from KhachHang";
			$bangDuLieu = $this->dbConfig->ExecuteQuery($query);
			$listKhachHang = array();
			while ($row = mysqli_fetch_row($bangDuLieu)) 
			{
				$khachHang = new KhachHang($row['0'], $row['1'], $row['2'], $row['3'], $row['4'], $row['5'], $row['6']);
				$listKhachHang[] = $khachHang;
			}
			return $listKhachHang;
		}

		public function TimKiemTheoMa($maLoaiSP)
		{
			$query = "Select * from LoaiSanPham where MaLoaiSP = $maLoaiSP";
			$bangDuLieu = $this->dbConfig->ExecuteQuery($query);
			while ($row = mysqli_fetch_row($bangDuLieu)) 
			{
				$khachHang = new KhachHang($row['0'], $row['1'], $row['2'], $row['3'], $row['4'], $row['5'], $row['6']);
				return $khachHang;
			}
			return NULL;
		}
	}
?>