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
            var_dump($kq);
            return $kq;
        }

        public function check($tencot, $giatri)
        {
            $sql = "SELECT *FROM khachhang WHERE $tencot = '$giatri'";
            $kq = $this->db->ExecuteQuery($sql);
            return mysqli_fetch_assoc($kq);
        }
    }
?>