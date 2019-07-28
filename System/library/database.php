<?php
	class DBConfig
	{
		private $connection = NULL;
		public function __construct()
		{
			$this->connection = new mysqli('localhost', 'root', '', 'ShopBanHang');
			if(!$this->connection)
			{
				echo "Kết nối thất bại!";
				exit();
			}
			else
				mysqli_set_charset($this->connection, 'utf8');
		}

		public function ExecuteQuery($query)
		{
			return mysqli_query($this->connection, $query);
		}
		public function connection()
		{
			return $this->connection;
		}
	}
?>