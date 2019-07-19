<?php 
	include("Admin/Model/khachHangModel.php");

	$khachHangModel = new khachHangModel;
	$listKhachHang = $khachHangModel->LayDanhSach();
	require_once('Admin/View/Customer/index.php');
?>