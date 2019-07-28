<?php
	include "NhaSanXuat.php";
	class NhaSanXuatModel
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
				$query = "Select * from NhaSanXuat Limit $pageStart, $pageSize";
			}
			else
				$query = "Select * From NhaSanXuat";
			$bangDuLieu = $this->dbConfig->ExecuteQuery($query);
			$listNhaSanXuat = array();
			while ($row = mysqli_fetch_row($bangDuLieu)) 
			{
				$nhaSanXuat = new NhaSanXuat($row['0'], $row['1'], $row['2'], $row['3']);
				$listNhaSanXuat[] = $nhaSanXuat;
			}
			return $listNhaSanXuat;
		}

		public function TimKiemTheoMa($maNSX)
		{
			$query = "Select * from NhaSanXuat where MaNSX = $maNSX";
			$bangDuLieu = $this->dbConfig->ExecuteQuery($query);
			while ($row = mysqli_fetch_row($bangDuLieu)) 
			{
				$nhaSanXuat = new NhaSanXuat($row['0'], $row['1'], $row['2'], $row['3']);
				return $nhaSanXuat;
			}
			return NULL;
		}

		public function Them($tenNSX, $thongTin, $logo)
		{
			$query = "Insert into NhaSanXuat (TenNSX, ThongTin, Logo) values ('$tenNSX', '$thongTin', '$logo')";
			$ketQua = $this->dbConfig->ExecuteQuery($query);
			return $ketQua;
		}

		public function Sua($maNSX, $tenNSX, $thongTin, $logo)
		{
			$query = "Update NhaSanXuat set TenNSX = '$tenNSX', ThongTin = '$thongTin', Logo = '$logo' where MaNSX = $maNSX";
			$ketQua = $this->dbConfig->ExecuteQuery($query);
			return $ketQua;
		}

		public function Xoa($maNSX)
		{
			$query = "Delete From NhaSanXuat Where MaNSX = $maNSX";
			$ketQua = $this->dbConfig->ExecuteQuery($query);
			return $ketQua;
		}
	}
?>