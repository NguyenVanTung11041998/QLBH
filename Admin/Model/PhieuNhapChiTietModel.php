<?php  
	include "Admin/Model/PhieuNhapChiTiet.php";
	class PhieuNhapChiTietModel
	{
		private $dbConfig;
		public function __construct()
		{
			$this->dbConfig = new DBConfig;
		}

		public function LayDanhSachHoaDonChiTietTheoMaPN($maPN)
		{
			$query = "Select * From PhieuNhapChiTiet where MaPN = $maPN";
			$bangDuLieu = $this->dbConfig->ExecuteQuery($query);
			$listPhieuNhapChiTiet = array();
			while ($row = mysqli_fetch_row($bangDuLieu)) 
			{
				$phieuNhapChiTiet = new PhieuNhapChiTiet($row['0'], $row['1'], $row['2'], $row['3']);
				$listPhieuNhapChiTiet[] = $phieuNhapChiTiet;
			}
			return $listPhieuNhapChiTiet;
		}

		public function TimKiemTheoMaSP($maSP)
		{
			$query = "Select * from PhieuNhapChiTiet where MaSP = $maSP";
			$bangDuLieu = $this->dbConfig->ExecuteQuery($query);
			$listPhieuNhapChiTiet = array();
			while ($row = mysqli_fetch_row($bangDuLieu)) 
			{
				$phieuNhapChiTiet = new PhieuNhapChiTiet($row['0'], $row['1'], $row['2'], $row['3']);
				$listPhieuNhapChiTiet[] = $phieuNhapChiTiet;
			}
			return $listPhieuNhapChiTiet;
		}

		public function Them($maPN, $maSP, $soLuongNhap, $donGiaNhap)
		{
			$query = "INSERT INTO phieunhapchitiet (MaPN, MaSP, SoLuongNhap, DonGiaNhap) VALUES ($maPN, $maSP, $soLuongNhap, $donGiaNhap)";
			$ketQua = $this->dbConfig->ExecuteQuery($query);
			return $ketQua;
		}
	}
?>