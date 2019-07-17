<?php
	/**
	 * 
	 */
	class NhaCungCap
	{
		private $maNhaCungCap;
		private $tenNhaCungCap;
		private $diaChi;
		private $soDT;
		private $email;
		
		public function __construct($maNhaCungCap, $tenNhaCungCap, $diaChi, $soDT, $email)
		{
			$this->maNhaCungCap = $maNhaCungCap;
			$this->tenNhaCungCap = $tenNhaCungCap;
			$this->diaChi = $diaChi;
			$this->soDT = $soDT;
			$this->email = $email;
		}

		public function GetMaNhaCungCap()
		{
			return $this->maNhaCungCap;
		}

		public function GetTenNhaCungCap()
		{
			return $this->tenNhaCungCap;
		}

		public function GetDiaChi()
		{
			return $this->diaChi;
		}

		public function GetSoDT()
		{
			return $this->soDT;
		}

		public function GetEmail()
		{
			return $this->email;
		}
	}
?>