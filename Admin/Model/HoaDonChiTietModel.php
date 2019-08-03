<?php
	include "HoaDonChiTiet.php";
	class HoaDonChiTietModel
	{
		private $dbConfig;
		public function __construct()
		{
			$this->dbConfig = new DBConfig;
		}

		public function LayDanhSachTheoMaHD($maHD, $page, $pageSize)
		{
			$pageStart = ($page - 1) * $pageSize;

			$query = "Select * From HoaDonChiTiet Where MaHD = $maHD Limit $pageStart, $pageSize";
			$bangDuLieu = $this->dbConfig->ExecuteQuery($query);
			$listHoaDonChiTiet  = array();
			while ($row = mysqli_fetch_row($bangDuLieu)) 
			{
				$hoaDonChiTiet = new HoaDonChiTiet($row['0'], $row['1'], $row['2'], $row['3'], $row['4']);
				$listHoaDonChiTiet[] = $hoaDonChiTiet;
			}
			return $listHoaDonChiTiet;
		}
	}
?>