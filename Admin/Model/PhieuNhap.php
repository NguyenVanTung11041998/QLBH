<?php  
	class PhieuNhap
	{
		private $maPN;
		private $ngayLap;

		public function __construct($maPN, $ngayLap)
		{
			$this->maPN = $maPN;
			$this->ngayLap = $ngayLap;
		}

		public function GetMaPN()
		{
			return $this->maPN;
		}

		public function GetNgayLap()
		{
			return $this->ngayLap;
		}
	}
?>