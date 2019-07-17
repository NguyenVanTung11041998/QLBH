<?php 
	class NhaSanXuat
	{
		private $maNhaSanXuat;
		private $tenNhaSanXuat;
		private $thongTin;
		private $logo;
		
		public function __construct($maNhaSanXuat, $tenNhaSanXuat, $thongTin, $logo)
		{
			$this->maNhaSanXuat = $maNhaSanXuat;
			$this->tenNhaSanXuat = $tenNhaSanXuat;
			$this->thongTin = $thongTin;
			$this->logo = $logo;
		}

		public function GetMaNhaSanXuat()
		{
			return $this->maNhaSanXuat;
		}

		public function GetTenNhaSanXuat()
		{
			return $this->tenNhaSanXuat;
		}

		public function GetThongTin()
		{
			return $this->thongTin;
		}

		public function GetLogo()
		{
			return $this->logo;
		}
	}
?>