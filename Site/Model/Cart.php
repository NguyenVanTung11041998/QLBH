<?php
    class cart
    {
        private $db;
        public function __construct()
        {
            $this->db = new DBconfig;
        }
        public function fetchID($id)
        {
            $sql = "SELECT *FROM sanpham WHERE MaSP=$id";
            $kq = $this->db->ExecuteQuery($sql);
            return mysqli_fetch_assoc($kq);
        }
        public function fetch_user($id)
        {
            $sql = "SELECT *FROM khachhang WHERE ID=$id";
            $kq = $this->db->ExecuteQuery($sql);
            return mysqli_fetch_assoc($kq);
        }
        public function insert_hoadon($maKH, $tong, $note)
        {
            $sql = "INSERT INTO hoadon(MaKH, TongTien, GhiChu) VALUES($maKH, $tong, '$note')";
            $kq = $this->db->ExecuteQuery($sql);
            return mysqli_insert_id($this->db->connection());
        }
        public function insert_hoadonchitiet($maHD, $maSP, $soLuong, $donGia)
        {
            $sql = "INSERT INTO hoadonchitiet(MaHD, MaSP, SoLuongMua, DonGia) VALUES($maHD, $maSP, $soLuong, $donGia)";
            $kq = $this->db->ExecuteQuery($sql);
            return $kq;
        }
    }
?>