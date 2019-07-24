<?php 
	include "HoaDon.php";

	class HoaDonModel
	{
		private $dbConfig;

		public function __construct()
		{
			$this->dbConfig = new DBConfig;
		}

		public function LayDanhSach()
		{
			$query = "Select HoaDon.MaHD, HoaDon.NgayDat, KhachHang.HoTen, HoaDon.TongTien, HoaDon.DaThanhToan From HoaDon Inner Join KhachHang On HoaDon.MaKH = KhachHang.ID";
			return $this->dbConfig->ExecuteQuery($query);
		}
	}
?>