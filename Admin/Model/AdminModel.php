<?php
	include "Admin.php";
	class AdminModel
	{
		private $dbConfig;
		public function __construct()
		{
			$this->dbConfig = new DBConfig;
		}

		public function KiemTraDangNhap($taiKhoan, $matKhau)
		{
			$query = "Select * from Admin Where TaiKhoan = '$taiKhoan' and MatKhau = '$matKhau'";
			$bangDuLieu = $this->dbConfig->ExecuteQuery($query);
			while ($row = mysqli_fetch_row($bangDuLieu)) 
			{
				$admin = new Admin($row['0'], $row['1'], $row['2']);
				return $admin;
			}
			return NULL;
		}
	}
?>