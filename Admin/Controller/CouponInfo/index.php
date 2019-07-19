<?php 
	include "Admin/Model/PhieuNhapChiTietModel.php";
	$phieuNhapChiTietModel = new PhieuNhapChiTietModel;

	$maPN = $_GET['id'];

	$listPhieuNhapChiTiet = $phieuNhapChiTietModel->LayDanhSachHoaDonChiTietTheoMaPN($maPN);
	
	require_once('Admin/View/CouponInfo/index.php');
?>