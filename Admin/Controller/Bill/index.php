<?php 
	include "Admin/Model/HoaDonModel.php";
	$hoaDonModel = new HoaDonModel;

	if(isset($_GET['page']) && $_GET['page'] > 0)
		$page = $_GET['page'];
	else
		$page = 1;
	$danhSachHoaDon = $hoaDonModel->LayDanhSach($page, 20);

	require_once('Admin/View/Bill/index.php');
?>
