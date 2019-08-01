<?php
    class home
    {
        private $db;
        public function __construct()
        {
            $this->db = new DBconfig;
        }
        public function fetchSql()
        {
            $sql = "SELECT *FROM sanpham WHERE Moi=1 ORDER BY MaSP DESC LIMIT 8";
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

        public function fetch_sphot()
        {
            $sql = "SELECT *FROM sanpham ORDER BY SoLanMua DESC LIMIT 8";
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