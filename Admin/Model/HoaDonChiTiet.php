<?php  
	class HoaDonChiTiet
	{
		private $id;
		private $maHD;
		private $maSP;
		private $soLuongMua;
		private $donGia;

		public function __construct($id, $maHD, $maSP, $soLuongMua, $donGia)
		{
			$this->id = $id;
			$this->maHD = $maHD;
			$this->maSP = $maSP;
			$this->soLuongMua = $soLuongMua;
			$this->donGia = $donGia;
		}

		public function GetID()
		{
			return $this->id;
		}

		public function GetMaHD()
		{
			return $this->maHD;
		}

		public function GetMaSP()
		{
			return $this->maSP;
		}

		public function GetSoLuongMua()
		{
			return $this->soLuongMua;
		}

		public function GetDonGia()
		{
			return $this->donGia;
		}
	}
?>