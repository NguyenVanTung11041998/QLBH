<?php 
	include "HoaDon.php";

	class HoaDonModel
	{
		private $dbConfig;

		public function __construct()
		{
			$this->dbConfig = new DBConfig;
		}

		public function LayDanhSach($page, $pageSize)
		{
			$pageStart = ($page - 1) * $pageSize;
			$query = "Select HoaDon.MaHD, HoaDon.NgayDat, KhachHang.HoTen, HoaDon.TongTien, HoaDon.DaThanhToan From HoaDon Inner Join KhachHang On HoaDon.MaKH = KhachHang.ID Limit $pageStart, $pageSize";
			return $this->dbConfig->ExecuteQuery($query);
		}

		public function update_hoadon($status, $id)
		{
			$query = "UPDATE hoadon SET DaThanhToan=$status WHERE MaHD = $id";
			$kq = $this->dbConfig->ExecuteQuery($query);
			return $kq;
		}

		public function fetch_hdct($id)
		{
			$query = "SELECT *FROM hoadonchitiet WHERE MaHD = $id";
			$kq = $this->dbConfig->ExecuteQuery($query);
            $data = []; 
            if($kq)
            {
                while($num = mysqli_fetch_assoc($kq))
                {
                    $data[] = $num;
                }
            }
            return $data;
		}

		public function fetch_hd($id)
		{
			$query = "SELECT *FROM hoadon WHERE MaHD = $id";
			$kq = $this->dbConfig->ExecuteQuery($query);
            return mysqli_fetch_assoc($kq);
		}

		public function fetch_product($id)
		{
			$query = "SELECT *FROM sanpham WHERE MaSP = $id";
			$kq = $this->dbConfig->ExecuteQuery($query);
            return mysqli_fetch_assoc($kq);
		}

		public function update_sanpham($slton, $slmua, $id)
		{
			$query = "UPDATE sanpham SET SoLuongTon=$slton, SoLanMua = $slmua WHERE MaSP = $id";
			$kq = $this->dbConfig->ExecuteQuery($query);
			return $kq;
		}
	}
?>