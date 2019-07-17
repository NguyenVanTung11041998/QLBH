<?php 
	class LoaiSanPham
	{
		private $maLoaiSP;
		private $tenLoai;
		private $maDanhMuc;
		public function __construct($maLoaiSP, $tenLoai, $maDanhMuc)
		{
			$this->maLoaiSP = $maLoaiSP;
			$this->tenLoai = $tenLoai;
			$this->maDanhMuc = $maDanhMuc;
		}

		public function GetMaLoaiSP()
		{
			return $this->maLoaiSP;
		}

		public function GetTenLoai()
		{
			return $this->tenLoai;
		}

		public function GetMaDanhMuc()
		{
			return $this->maDanhMuc;
		}
	}
?>