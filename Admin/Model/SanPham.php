<?php 
	class SanPham
	{
		private $maSP;
		private $tenSP;
		private $donGia;
		private $ngayCapNhat;
		private $moTa;
		private $hinhAnh;
		private $soLuongTon;
		private $moi;
		private $maNCC;
		private $maNSX;
		private $maLoaiSP;
		private $daXoa;

		public function __construct($maSP, $tenSP, $donGia, $ngayCapNhat, $moTa, $hinhAnh, $soLuongTon, $moi, $maNCC, $maNSX, $maLoaiSP, $daXoa)
		{
			$this->maSP = $maSP;
			$this->tenSP = $tenSP;
			$this->donGia = $donGia;
			$this->ngayCapNhat = $ngayCapNhat;
			$this->moTa = $moTa;
			$this->hinhAnh = $hinhAnh;
			$this->soLuongTon = $soLuongTon;
			$this->moi = $moi;
			$this->maNCC = $maNCC;
			$this->maNSX = $maNSX;
			$this->maLoaiSP = $maLoaiSP;
			$this->daXoa = $daXoa;
		}

		public function GetMaSP()
		{
			return $this->maSP;
		}

		public function GetTenSP()
		{
			return $this->tenSP;
		}

		public function GetDonGia()
		{
			return $this->donGia;
		}

		public function GetNgayCapNhat()
		{
			return $this->ngayCapNhat;
		}

		public function GetMoTa()
		{
			return $this->moTa;
		}

		public function GetHinhAnh()
		{
			return $this->hinhAnh;
		}

		public function GetSoLuongTon()
		{
			return $this->soLuongTon;
		}

		public function IsMoi()
		{
			return $this->moi;
		}

		public function GetMaNCC()
		{
			return $this->maNCC;
		}

		public function GetMaNSX()
		{
			return $this->maNSX;
		}

		public function GetMaLoaiSP()
		{
			return $this->maLoaiSP;
		}

		public function IsDaXoa()
		{
			return $this->daXoa;
		}
	}
?>