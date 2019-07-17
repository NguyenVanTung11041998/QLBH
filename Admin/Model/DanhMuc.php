<?php 
	class DanhMuc
	{
		private $maDanhMuc;
		private $tenDanhMuc;

		public function __construct($maDanhMuc, $tenDanhMuc)
		{
			$this->maDanhMuc = $maDanhMuc;
			$this->tenDanhMuc = $tenDanhMuc;
		}

		public function GetMaDanhMuc()
		{
			return $this->maDanhMuc;
		}

		public function GetTenDanhMuc()
		{
			return $this->tenDanhMuc;
		}
	}

?>