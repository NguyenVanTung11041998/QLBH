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
    }
?>