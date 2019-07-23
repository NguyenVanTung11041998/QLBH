<?php  
	include "Admin/Model/PhieuNhap.php";
	class PhieuNhapModel
	{
		private $dbConfig;
		public function __construct()
		{
			$this->dbConfig = new DBConfig;
		}

		public function LayDanhSach()
		{
			$query = "Select * From PhieuNhap";
			$bangDuLieu = $this->dbConfig->ExecuteQuery($query);
			$listPhieuNhap = array();
			while ($row = mysqli_fetch_row($bangDuLieu)) 
			{
				$phieuNhap = new PhieuNhap($row['0'], $row['1'], $row['2']);
				$listPhieuNhap[] = $phieuNhap;
			}
			return $listPhieuNhap;
		}

		public function TimKiemTheoMa($maPN)
		{
			$query = "Select * From PhieuNhap where MaPN = $maPN";
			$bangDuLieu = $this->dbConfig->ExecuteQuery($query);
			while ($row = mysqli_fetch_row($bangDuLieu)) 
			{
				$phieuNhap = new PhieuNhap($row['0'], $row['1'], $row['2']);
				return $phieuNhap;
			}
			return NULL;
		}

		public function LayPhieuNhapCuoiCung()
		{
			$query = "SELECT * FROM PhieuNhap ORDER BY MaPN DESC LIMIT 1";
			$bangDuLieu = $this->dbConfig->ExecuteQuery($query);
			while ($row = mysqli_fetch_row($bangDuLieu)) 
			{
				$phieuNhap = new PhieuNhap($row['0'], $row['1'], $row['2']);
				return $phieuNhap;
			}
			return NULL;
		}

		public function Them($ngayNhap)
		{
			$query = "Insert into PhieuNhap (NgayNhap, TongTienNhap) values ('$ngayNhap', 0)";
			$ketQua = $this->dbConfig->ExecuteQuery($query);
			return $ketQua;
		}
	}
?>