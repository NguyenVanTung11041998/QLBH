<?php
	include "HoaDonChiTiet.php";
	class HoaDonChiTietModel
	{
		private $dbConfig;
		public function __construct()
		{
			$this->dbConfig = new DBConfig;
		}

		public function LayDanhSachTheoMaHD($maHD)
		{
			$query = "Select * From HoaDonChiTiet Where MaHD = $maHD";
			$bangDuLieu = $this->dbConfig->ExecuteQuery($query);
			$listHoaDonChiTiet  = array();
			while ($row = mysqli_fetch_row($bangDuLieu)) 
			{
				$hoaDonChiTiet = new HoaDonChiTiet($row['0'], $row['1'], $row['2'], $row['3']);
				$listHoaDonChiTiet[] = $hoaDonChiTiet;
			}
			return $listHoaDonChiTiet;
		}
	}
?>