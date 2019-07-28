<?php 
	include("Admin/Model/khachHangModel.php");
	if(isset($_GET['page']) && $_GET['page'] > 0)
		$page = $_GET['page'];
	else
		$page = 1;
	$khachHangModel = new khachHangModel;
	$listKhachHang = $khachHangModel->LayDanhSach($page, 20);
	require_once('Admin/View/Customer/index.php');
?>