<?php
    class product
    {
        private $db;
        public function __construct()
        {
            $this->db = new DBconfig;
        }

        public function fetchOne_Pro($id)
        {
            $sql = "SELECT *FROM sanpham WHERE MaSP = $id";
            $kq = $this->db->ExecuteQuery($sql);
            return mysqli_fetch_assoc($kq);
        }

        public function fetchSql($id)
        {
            $sql = "SELECT *FROM sanpham INNER JOIN loaisanpham on sanpham.MaLoaiSP = loaisanpham.MaLoaiSP WHERE loaisanpham.MaLoaiSP = $id";
            $kq = $this->db->ExecuteQuery($sql);
            $data = [];
            if( $kq)
            {
                while ($num = mysqli_fetch_assoc($kq))
                {
                    $data[] = $num;
                }
            }
            return $data;
        }
    }
?>