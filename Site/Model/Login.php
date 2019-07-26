<?php
    class login
    {
        private $db;
        public function __construct()
        {
            $this->db = new DBConfig;
        }
        public function fetchuser($username, $password)
        {
            $sql = "SELECT *FROM khachhang WHERE TenDangNhap = '$username' AND MatKhau = '$password'";
            $kq = $this->db->ExecuteQuery($sql);
            return mysqli_fetch_assoc($kq);
        }
    }
?>