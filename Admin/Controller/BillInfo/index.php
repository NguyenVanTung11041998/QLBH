<?php 
	include "Admin/Model/HoaDonChiTietModel.php";
	$hoaDonChiTietModel = new HoaDonChiTietModel;

	if(isset($_GET['id']))
	{
		$id = $_GET['id'];
		$listHoaDonChiTiet = $hoaDonChiTietModel->LayDanhSachTheoMaHD($id);
	}
	else
		$listHoaDonChiTiet = array();
	require_once("Admin/View/BillInfo/index.php");
?>