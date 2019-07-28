<?php  
	class HoaDon
	{
		private $maHD;
		private $ngayDat;
		private $maKH;
		private $tongTien;
		private $daThanhToan;

		public function __construct()
		{
			$this->maHD = $maHD;
			$this->ngayDat = $ngayDat;
			$this->maKH = $maKH;
			$this->tongTien = $tongTien;
			$this->daThanhToan = $daThanhToan;
		}

		public function GetMaHD()
		{
			return $this->maHD;
		}

		public function GetNgayDat()
		{
			return $this->ngayDat;
		}

		public function GetTongTien()
		{
			return $this->tongTien;
		}

		public function IsDaThanhToan()
		{
			return $this->daThanhToan;
		}
	}
?>