<?php
    class register
    {
        private $db;
		public function __construct()
		{
			$this->db = new DBConfig;
		}
        public function insert($hoTen, $email, $soDT, $diaChi, $tenDN, $matKhau)
        {
            $sql = "INSERT INTO khachhang(HoTen, Email, SoDT, DiaChi, TenDangNhap, MatKhau) VALUES('$hoTen', '$email', '$soDT', '$diaChi', '$tenDN', '$matKhau')";
            $kq = $this->db->ExecuteQuery($sql);
            return $kq;
        }

        public function check($tencot, $giatri)
        {
            $sql = "SELECT *FROM khachhang WHERE $tencot = '$giatri'";
            $kq = $this->db->ExecuteQuery($sql);
            return mysqli_fetch_assoc($kq);
        }

        public function fetch_taikhoan($id)
        {
            $sql = "SELECT *FROM khachhang WHERE ID = $id";
            $kq = $this->db->ExecuteQuery($sql);
            return mysqli_fetch_assoc($kq);
        }

        public function update($hoTen, $email, $soDT, $diaChi, $tenDN, $matKhau, $id)
        {
            $sql = "UPDATE khachhang SET HoTen= '$hoTen', Email='$email', SoDT='$soDT', DiaChi='$diaChi', TenDangNhap='$tenDN', MatKhau='$matKhau' WHERE ID = $id";
            $kq = $this->db->ExecuteQuery($sql);
            return $kq;
        }
    }
?>