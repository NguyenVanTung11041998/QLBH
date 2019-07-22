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
    }
?>