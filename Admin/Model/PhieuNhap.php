<?php  
	class PhieuNhap
	{
		private $maPN;
		private $ngayLap;
		private $tongTienNhap;

		public function __construct($maPN, $ngayLap, $tongTienNhap)
		{
			$this->maPN = $maPN;
			$this->ngayLap = $ngayLap;
			$this->tongTienNhap = $tongTienNhap;
		}

		public function GetMaPN()
		{
			return $this->maPN;
		}

		public function GetNgayLap()
		{
			return $this->ngayLap;
		}

		public function GetTongTienNhap()
		{
			return $this->tongTienNhap;
		}
	}
?>