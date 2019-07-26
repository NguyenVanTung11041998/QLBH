<?php 
	include "Admin/Model/DanhMuc.php";

	class DanhMucModel
	{
		private $dbConfig;
		public function __construct()
		{
			$this->dbConfig = new DBConfig;
		}

		public function LayDanhSach($page = NULL, $pageSize = NULL)
		{
			if($page)
			{
				$pageStart = ($page - 1) * $pageSize;
				$query = "Select * from DanhMuc Limit $pageStart, $pageSize";
			}
			else
				$query = "Select * from DanhMuc";
			$bangDuLieu = $this->dbConfig->ExecuteQuery($query);
			$listDanhMuc = array();
			while ($row = mysqli_fetch_row($bangDuLieu)) 
			{
				$danhMuc = new DanhMuc($row['0'], $row['1']);
				$listDanhMuc[] = $danhMuc;
			}
			return $listDanhMuc;
		}

		public function TimKiemTheoMa($maDanhMuc)
		{
			$query = "Select * from DanhMuc where MaDanhMuc = $maDanhMuc";
			$bangDuLieu = $this->dbConfig->ExecuteQuery($query);
			while ($row = mysqli_fetch_row($bangDuLieu)) 
			{
				$danhMuc = new DanhMuc($row['0'], $row['1']);
				return $danhMuc;
			}
			return NULL;
		}

		public function Them($tenDanhMuc)
		{
			$query = "Insert into DanhMuc (TenDanhMuc) values ('$tenDanhMuc')";
			$ketQua = $this->dbConfig->ExecuteQuery($query);
			return $ketQua;
		}

		public function Sua($maDanhMuc, $tenDanhMuc)
		{
			$query = "Update DanhMuc set TenDanhMuc = '$tenDanhMuc' where MaDanhMuc = $maDanhMuc";
			$ketQua = $this->dbConfig->ExecuteQuery($query);
			return $ketQua;
		}

		public function Xoa($maDanhMuc)
		{
			$query = "Delete From DanhMuc Where MaDanhMuc = $maDanhMuc";
			$ketQua = $this->dbConfig->ExecuteQuery($query);
			return $ketQua;
		}
	}
?>