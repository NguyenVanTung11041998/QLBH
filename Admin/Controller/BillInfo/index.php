<?php 
	include "Admin/Model/HoaDonChiTietModel.php";
	$hoaDonChiTietModel = new HoaDonChiTietModel;

	if(isset($_GET['page']) && $_GET['page'] > 0)
		$page = $_GET['page'];
	else
		$page = 1;

	if(isset($_GET['id']))
	{
		$id = $_GET['id'];
		$listHoaDonChiTiet = $hoaDonChiTietModel->LayDanhSachTheoMaHD($id, $page, 20);
	}
	else
		$listHoaDonChiTiet = array();
	require_once("Admin/View/BillInfo/index.php");
?>