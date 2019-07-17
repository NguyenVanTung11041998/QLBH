<?php
	include "NhaCungCap.php";
	class NhaCungCapModel
	{
		private $dbConfig;
		public function __construct()
		{
			$this->dbConfig = new DBConfig;
		}

		public function LayDanhSach()
		{
			$query = "Select * from NhaCungCap";
			$bangDuLieu = $this->dbConfig->ExecuteQuery($query);
			$listNhaCungCap = array();
			while ($row = mysqli_fetch_row($bangDuLieu)) 
			{
				$nhaCungCap = new NhaCungCap($row['0'], $row['1'], $row['2'], $row['3'], $row['4']);
				$listNhaCungCap[] = $nhaCungCap;
			}
			return $listNhaCungCap;
		}

		public function TimKiemTheoMa($maNCC)
		{
			$query = "Select * from NhaCungCap where MaNCC = '$maNCC'";
			$bangDuLieu = $this->dbConfig->ExecuteQuery($query);
			while ($row = mysqli_fetch_row($bangDuLieu)) 
			{
				$nhaCungCap = new NhaCungCap($row['0'], $row['1'], $row['2'], $row['3'], $row['4']);
				return $nhaCungCap;
			}
			return NULL;
		}

		public function Them($tenNCC, $diaChi, $soDT, $email)
		{
			$query = "Insert into NhaCungCap (TenNCC, DiaChi, SoDT, Email) values ('$tenNCC', '$diaChi', '$soDT', '$email')";
			$ketQua = $this->dbConfig->ExecuteQuery($query);
			return $ketQua;
		}

		public function Sua($maNCC, $tenNCC, $diaChi, $soDT, $email)
		{
			$query = "Update NhaCungCap set TenNCC = '$tenNCC', DiaChi = '$diaChi', SoDT = '$soDT', Email = '$email' where MaNCC = $maNCC";
			$ketQua = $this->dbConfig->ExecuteQuery($query);
			return $ketQua;
		}

		public function Xoa($maNCC)
		{
			$query = "Delete From NhaCungCap Where MaNCC = $maNCC";
			$ketQua = $this->dbConfig->ExecuteQuery($query);
			return $ketQua;
		}
	}
?>