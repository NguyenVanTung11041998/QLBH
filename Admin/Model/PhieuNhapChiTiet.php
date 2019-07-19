<?php  
	class PhieuNhapChiTiet
	{
		private $maPN;
		private $maSP;
		private $soLuongNhap;
		private $donGiaNhap;

		public function __construct($maPN, $maSP, $soLuongNhap, $donGiaNhap)
		{
			$this->maPN = $maPN;
			$this->maSP = $maSP;
			$this->soLuongNhap = $soLuongNhap;
			$this->donGiaNhap = $donGiaNhap;
		}

		public function GetMaPN()
		{
			return $this->maPN;
		}

		public function GetMaSP()
		{
			return $this->maSP;
		}

		public function GetSoLuongNhap()
		{
			return $this->soLuongNhap;
		}

		public function GetDonGiaNhap()
		{
			return $this->donGiaNhap;
		}
	}
?>