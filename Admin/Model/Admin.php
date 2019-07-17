<?php
	class Admin
	{
		private $id;
		private $taiKhoan;
		private $matKhau;

		public function __construct($id, $taiKhoan, $matKhau)
		{
			$this->id = $id;
			$this->taiKhoan = $taiKhoan;
			$this->matKhau = $matKhau;
		}

		public function GetID()
		{
			return $this->id;
		}

		public function GetTaiKhoan()
		{
			return $this->taiKhoan;
		}

		public function GetMatKhau()
		{
			return $this->matKhau;
		}
	}
?>