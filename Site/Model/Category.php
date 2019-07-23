<?php
    class category
    {
        private $db;
        public function __construct()
        {
            $this->db = new DBconfig;
        }
        

        public function get_category($table)
        {
            $sql = "SELECT *FROM $table";
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

        public function get_loaisp($id)
        {
            $sql = "SELECT *FROM loaisanpham WHERE MaDanhMuc = $id";
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

        public function get_products($id)
        {
            $sql = "SELECT *FROM sanpham INNER JOIN loaisanpham on sanpham.MaLoaiSP = loaisanpham.MaLoaiSP INNER JOIN danhmuc on loaisanpham.MaDanhMuc = danhmuc.MaDanhMuc WHERE danhmuc.MaDanhMuc = $id";
            $kq = $this->db->ExecuteQuery($sql);
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

        public function get_products_DM($id)
        {
            $sql = "SELECT *FROM sanpham INNER JOIN loaisanpham on sanpham.MaLoaiSP = loaisanpham.MaLoaiSP  WHERE loaisanpham.MaLoaiSP = $id";
            $kq = $this->db->ExecuteQuery($sql);
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
    }
?>