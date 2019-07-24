<?php 
	include "Admin/Model/HoaDonModel.php";
	$hoaDonModel = new HoaDonModel;

	$danhSachHoaDon = $hoaDonModel->LayDanhSach();

	require_once('Admin/View/Bill/index.php');
?>
