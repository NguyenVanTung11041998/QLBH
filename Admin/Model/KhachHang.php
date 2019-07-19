<?php  
	class KhachHang
	{
		private $id;
		private $tenDangNhap;
		private $matKhau;
		private $hoTen;
		private $diaChi;
		private $soDT;
		private $email;

		public function __construct($id, $tenDangNhap, $matKhau, $hoTen, $diaChi, $soDT, $email)
		{
			$this->id = $id;
			$this->tenDangNhap = $tenDangNhap;
			$this->matKhau = $matKhau;
			$this->hoTen = $hoTen;
			$this->diaChi = $diaChi;
			$this->soDT = $soDT;
			$this->email = $email;
		}

		public function GetID()
		{
			return $this->id;
		}

		public function GetTenDangNhap()
		{
			return $this->tenDangNhap;
		}

		public function GetMatKhau()
		{
			return $this->matKhau;
		}

		public function GetHoTen()
		{
			return $this->hoTen;
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