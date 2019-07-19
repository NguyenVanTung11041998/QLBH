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
				$phieuNhap = new PhieuNhap($row['0'], $row['1']);
				$listPhieuNhap[] = $phieuNhap;
			}
			return $listPhieuNhap;
		}

		public function TimKiemTheoMa($maPN)
		{
			$query = "Select * from PhieuNhap where MaPN = $maPN";
			$bangDuLieu = $this->dbConfig->ExecuteQuery($query);
			while ($row = mysqli_fetch_row($bangDuLieu)) 
			{
				$phieuNhap = new PhieuNhap($row['0'], $row['1']);
				return $phieuNhap;
			}
			return NULL;
		}
	}
?>