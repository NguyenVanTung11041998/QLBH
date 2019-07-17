<?php 
	include "Admin/Model/LoaiSanPham.php";

	class LoaiSanPhamModel
	{
		private $dbConfig;
		public function __construct()
		{
			$this->dbConfig = new DBConfig;
		}

		public function LayDanhSach()
		{
			$query = "Select * from LoaiSanPham";
			$bangDuLieu = $this->dbConfig->ExecuteQuery($query);
			$listLoaiSP = array();
			while ($row = mysqli_fetch_row($bangDuLieu)) 
			{
				$loaiSP = new LoaiSanPham($row['0'], $row['1'], $row['2']);
				$listLoaiSP[] = $loaiSP;
			}
			return $listLoaiSP;
		}

		public function TimKiemTheoMa($maLoaiSP)
		{
			$query = "Select * from LoaiSanPham where MaLoaiSP = $maLoaiSP";
			$bangDuLieu = $this->dbConfig->ExecuteQuery($query);
			while ($row = mysqli_fetch_row($bangDuLieu)) 
			{
				$loaiSP = new LoaiSanPham($row['0'], $row['1'], $row['2']);
				return $loaiSP;
			}
			return NULL;
		}

		public function Them($tenLoai, $maDanhMuc)
		{
			$query = "Insert into LoaiSanPham (TenLoai, MaDanhMuc) values ('$tenLoai', $maDanhMuc)";
			$ketQua = $this->dbConfig->ExecuteQuery($query);
			return $ketQua;
		}

		public function Sua($maLoaiSP, $tenLoai, $maDanhMuc)
		{
			$query = "Update LoaiSanPham set TenLoai = '$tenLoai', MaDanhMuc = $maDanhMuc where MaLoaiSP = $maLoaiSP";
			$ketQua = $this->dbConfig->ExecuteQuery($query);
			return $ketQua;
		}

		public function Xoa($maLoaiSP)
		{
			$query = "Delete From LoaiSanPham Where MaLoaiSP = $maLoaiSP";
			$ketQua = $this->dbConfig->ExecuteQuery($query);
			return $ketQua;
		}
	}
?>